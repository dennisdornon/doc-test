<?php
/**
 * MainWP monitor site.
 *
 * @package MainWP/Dashboard
 */

namespace MainWP\Dashboard;

/**
 * Class MainWP_Uptime_Monitoring_Connect
 *
 * @package MainWP\Dashboard
 */
class MainWP_Uptime_Monitoring_Connect { // phpcs:ignore Generic.Classes.OpeningBraceSameLine.ContentAfterBrace -- NOSONAR.

    const DOWN    = 0;
    const UP      = 1;
    const PENDING = 2;
    const FIRST   = 3;

    const RETRY      = 10;
    const NOTALLOWED = 11;


    const TIMEOUTED_ERROR   = 20;
    const CERT_ERROR        = 21;
    const RESOLVEHOST_ERROR = 22;
    const UNDEFINED_ERROR   = 23;

    /**
     * The single instance of the class
     *
     * @var mixed Default null
     */
    protected static $instance = null;

    /**
     * Get instance.
     *
     *  @return mixed
     */
    public static function instance() {
        if ( null === static::$instance ) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    /**
     * Check multi uptime monitors.
     *
     * @param  array $monitors object array monitors.
     * @param  array $glo_settings
     * @return mixed
     */
    public function check_monitors( &$monitors, $glo_settings ) {

        $disabled_functions = ini_get( 'disable_functions' );

        /**
         * Apply disable check multi exec.
         *
         * @since 5.3
         */
        $disable_multi_exec = apply_filters( 'mainwp_fetch_uptime_disable_check_multi_exec', false );

        if ( ! $disable_multi_exec && ( empty( $disabled_functions ) || ( false === stristr( $disabled_functions, 'curl_multi_exec' ) ) ) ) {
            $this->check_multi_monitors( $monitors, $glo_settings );
        } else {
            $this->check_uptime_monitors( $monitors, $glo_settings );
        }
    }

    /**
     * Check multi uptime monitors.
     *
     * @param  array $monitors object array monitors.
     * @param  array $glo_settings
     * @return mixed
     */
    public function check_multi_monitors( &$monitors, $glo_settings ) {
        $output                  = new \stdClass();
        $output->global_settings = $glo_settings;
        static::fetch_uptime_urls( $monitors, array( &$this, 'handle_response_fetch_uptime' ), $output );
    }

    /**
     * Check uptime monitors.
     *
     * @param  array $monitors object array monitors.
     * @param  array $glo_settings
     * @return mixed
     */
    public function check_uptime_monitors( &$monitors, $glo_settings ) {
        MainWP_System_Utility::set_time_limit( 3600 );
        $chunkSize = apply_filters( 'mainwp_fetch_uptime_chunk_size_urls', 10 );
        $i         = 0;
        foreach ( $monitors as $monitor ) {
            ++$i;
            $this->fetch_uptime_monitor( $monitor, $glo_settings );
            if ( 0 === $i % $chunkSize ) {
                sleep( 3 );
            }
        }
    }

    /**
     * fetch_uptime_monitor
     *
     * @param  mixed $monitor
     * @param  mixed $global_settings
     * @param  bool  $second_try
     *
     * @return mixed
     */
    public function fetch_uptime_monitor( &$monitor, $global_settings = array(), $second_try = false ) {

        $mo_url = static::get_apply_monitor_url( $monitor );

        $start = microtime( true );

        $agent = static::get_user_agent();

        // Initialize curl session.
        $ch = curl_init();

        $proxy = new \WP_HTTP_Proxy();

        if ( $proxy->is_enabled() && $proxy->send_through_proxy( $mo_url ) ) {
            curl_setopt( $ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP );
            curl_setopt( $ch, CURLOPT_PROXY, $proxy->host() );
            curl_setopt( $ch, CURLOPT_PROXYPORT, $proxy->port() );

            if ( $proxy->use_authentication() ) {
                curl_setopt( $ch, CURLOPT_PROXYAUTH, CURLAUTH_ANY );
                curl_setopt( $ch, CURLOPT_PROXYUSERPWD, $proxy->authentication() );
            }
        }
        curl_setopt( $ch, CURLOPT_URL, $mo_url );

        $mo_apply_type   = static::get_apply_setting( 'type', $monitor->type, $global_settings, 'useglobal', 'http' );
        $mo_apply_method = static::get_apply_setting( 'method', $monitor->method, $global_settings, 'useglobal', 'get' );

        if ( 'ping' === $mo_apply_type ) {
            curl_setopt( $ch, CURLOPT_NOBODY, true ); // We only care about the response code, not the content.
        } else {
            // Set curl options
            curl_setopt( $ch, CURLOPT_POST, 'post' === strtolower( $mo_apply_method ) ? true : false );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( array( 'time' => time() ) ) );
        }
        curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, strtoupper( $mo_apply_method ) );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); // We want to get the output as a string.
        curl_setopt( $ch, CURLOPT_USERAGENT, $agent );

        $http_user = '';
        $http_pass = '';

        if ( property_exists( $monitor, 'http_user' ) ) {
            $http_user = $monitor->http_user;
        }
        if ( property_exists( $monitor, 'http_pass' ) ) {
            $http_pass = $monitor->http_pass;
        }

        if ( ! empty( $http_user ) && ! empty( $http_pass ) ) {
            $http_pass = stripslashes( $http_pass );
            curl_setopt( $ch, CURLOPT_USERPWD, "$http_user:$http_pass" );
        }

        $ssl_verifyhost    = false;
        $verifyCertificate = isset( $monitor->verify_certificate ) ? (int) $monitor->verify_certificate : null;
        if ( null !== $verifyCertificate ) {
            if ( 1 === $verifyCertificate ) {
                $ssl_verifyhost = true;
            } elseif ( 2 === $verifyCertificate ) {
                if ( ( false === get_option( 'mainwp_sslVerifyCertificate' ) ) || ( 1 === (int) get_option( 'mainwp_sslVerifyCertificate' ) ) ) {
                    $ssl_verifyhost = true;
                }
            }
        } elseif ( ( false === get_option( 'mainwp_sslVerifyCertificate' ) ) || ( 1 === (int) get_option( 'mainwp_sslVerifyCertificate' ) ) ) {
            $ssl_verifyhost = true;
        }

        if ( $ssl_verifyhost ) {
            curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, true );
        } else {
            curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false ); // NOSONAR.
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); // NOSONAR.
        }

        curl_setopt( $ch, CURLOPT_SSLVERSION, $monitor->ssl_version );

        $mo_apply_timeout = static::get_apply_setting( 'timeout', (int) $monitor->timeout, $global_settings, -1, 60 );

        curl_setopt( $ch, CURLOPT_TIMEOUT, $mo_apply_timeout ); // seconds.

        // Execute the curl request.
        $data = curl_exec( $ch );

        // Get the HTTP response code.
        $http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );

        $http_error = '';
        if ( curl_errno( $ch ) ) {
            $http_error = curl_error( $ch );
        }

        // Close the curl session.
        curl_close( $ch );

        $down_count = 0;
        $set_retry  = false;
        $is_pending = false;

        $retry_later   = static::is_http_code_type( 'retry', $http_code );
        $is_notallowed = static::is_http_code_type( 'notallowed', $http_code );

        if ( $retry_later ) {
            $max_retries = static::get_apply_setting( 'maxretries', $monitor, $global_settings, -1, 0 );
            if ( $max_retries > 0 && $monitor->retries < $max_retries ) {
                $is_pending = true;
                ++$down_count;
                $set_retry = true;
            }
        } elseif ( ! $is_notallowed && empty( $data ) && 'ping' !== $mo_apply_type && ! $second_try ) {
            usleep( 200000 );
            $this->fetch_uptime_monitor( $monitor, $global_settings, true );
        }

        $output                  = new \stdClass();
        $output->global_settings = $global_settings;

        $resp_info = array(
            'http_code'        => $http_code,
            'http_error'       => $http_error,
            'down_count'       => $down_count,
            'retry'            => $set_retry,
            'is_pendding'      => $is_pending ? 1 : 0,
            'start'            => $start,
            'end'              => microtime( true ),
            'use_monitor_type' => $mo_apply_type,
            'use_method'       => $mo_apply_method,
            'use_timeout'      => $mo_apply_timeout,
        );

        $output->requests_info                         = array();
        $output->requests_info[ $monitor->monitor_id ] = $resp_info;
        $this->handle_response_fetch_uptime( $data, $monitor, $output );
    }

    /**
     * Fetch uptime urls.
     *
     * @param  array  $monitors
     * @param  array  $handler callable.
     * @param  object $output
     * @param  array  $params
     * @return mixed
     */
    public static function fetch_uptime_urls( &$websites, $handler, &$output, $params = array() ) { // phpcs:ignore Generic.Metrics.CyclomaticComplexity -- NOSONAR - complex function. Current complexity is the only way to achieve desired results, pull request solutions appreciated.

        if ( ! is_array( $websites ) || empty( $websites ) ) {
            return false;
        }

        if ( ! is_array( $params ) ) {
            $params = array();
        }

        if ( ! is_object( $output ) ) {
            $output = new \stdClass();
        }

        $global_settings = $output->global_settings;

        $chunkSize = apply_filters( 'mainwp_fetch_uptime_chunk_size_urls', 10 );

        if ( count( $websites ) > $chunkSize ) {
            $total = count( $websites );
            $loops = ceil( $total / $chunkSize );
            for ( $i = 0; $i < $loops; $i++ ) {
                $newSites = array_slice( $websites, $i * $chunkSize, $chunkSize, true );
                static::fetch_uptime_urls( $newSites, $handler, $output, $params );
                sleep( 3 );
            }
            return false;
        }

        $agent = static::get_user_agent();
        $mh    = curl_multi_init();

        $disabled_functions    = ini_get( 'disable_functions' );
        $handleToWebsite       = array();
        $requestUrls           = array();
        $requestHandles        = array();
        $output->requests_info = array();

        foreach ( $websites as $website ) {

            $mo_url = static::get_apply_monitor_url( $website );

            if ( property_exists( $website, 'http_user' ) ) {
                $http_user = $website->http_user;
            }
            if ( property_exists( $website, 'http_pass' ) ) {
                $http_pass = $website->http_pass;
            }

            $ch = curl_init();

            $proxy = new \WP_HTTP_Proxy();
            if ( $proxy->is_enabled() && $proxy->send_through_proxy( $mo_url ) ) {
                curl_setopt( $ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP );
                curl_setopt( $ch, CURLOPT_PROXY, $proxy->host() );
                curl_setopt( $ch, CURLOPT_PROXYPORT, $proxy->port() );

                if ( $proxy->use_authentication() ) {
                    curl_setopt( $ch, CURLOPT_PROXYAUTH, CURLAUTH_ANY );
                    curl_setopt( $ch, CURLOPT_PROXYUSERPWD, $proxy->authentication() );
                }
            }

            curl_setopt( $ch, CURLOPT_URL, $mo_url );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );

            $mo_apply_type   = static::get_apply_setting( 'type', $website->type, $global_settings, 'useglobal', 'http' );
            $mo_apply_method = static::get_apply_setting( 'method', $website->method, $global_settings, 'useglobal', 'get' );
            curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, strtoupper( $mo_apply_method ) );

            if ( 'ping' === $mo_apply_type ) {
                curl_setopt( $ch, CURLOPT_NOBODY, true ); // We only care about the response code, not the content.
            } else {
                // Set curl options
                curl_setopt( $ch, CURLOPT_POST, ( 'POST' === $website->method ? true : false ) ); // GET
                curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( array( 'time' => time() ) ) );

            }

            curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
            curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
            curl_setopt( $ch, CURLOPT_ENCODING, 'none' );

            if ( ! empty( $http_user ) && ! empty( $http_pass ) ) {
                $http_pass = stripslashes( $http_pass );
                curl_setopt( $ch, CURLOPT_USERPWD, "$http_user:$http_pass" );
            }

            $ssl_verifyhost    = false;
            $verifyCertificate = isset( $website->verify_certificate ) ? (int) $website->verify_certificate : null;
            if ( null !== $verifyCertificate ) {
                if ( 1 === $verifyCertificate ) {
                    $ssl_verifyhost = true;
                } elseif ( 2 === $verifyCertificate ) {
                    if ( ( false === get_option( 'mainwp_sslVerifyCertificate' ) ) || ( 1 === (int) get_option( 'mainwp_sslVerifyCertificate' ) ) ) {
                        $ssl_verifyhost = true;
                    }
                }
            } elseif ( ( false === get_option( 'mainwp_sslVerifyCertificate' ) ) || ( 1 === (int) get_option( 'mainwp_sslVerifyCertificate' ) ) ) {
                $ssl_verifyhost = true;
            }

            if ( $ssl_verifyhost ) {
                curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
                curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, true );
            } else {
                curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false ); // NOSONAR.
                curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); // NOSONAR.
            }

            curl_setopt( $ch, CURLOPT_SSLVERSION, $website->ssl_version );

            if ( is_object( $website ) && property_exists( $website, 'id' ) ) {
                $http_version = apply_filters( 'mainwp_curl_http_version', false, $website->id );
                if ( false !== $http_version ) {
                    curl_setopt( $ch, CURLOPT_HTTP_VERSION, $http_version );
                }

                $curlopt_resolve = apply_filters( 'mainwp_curl_curlopt_resolve', false, $website->id, $mo_url );
                if ( is_array( $curlopt_resolve ) && ! empty( $curlopt_resolve ) ) {
                    curl_setopt( $ch, CURLOPT_RESOLVE, $curlopt_resolve );
                    curl_setopt( $ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
                }
            }

            $mo_apply_timeout = static::get_apply_setting( 'timeout', (int) $website->timeout, $global_settings, -1, 60 );

            curl_setopt( $ch, CURLOPT_TIMEOUT, $mo_apply_timeout ); // seconds.

            MainWP_System_Utility::set_time_limit( 3600 );

            if ( empty( $disabled_functions ) || ( false === stristr( $disabled_functions, 'curl_multi_exec' ) ) ) {
                @curl_multi_add_handle( $mh, $ch );
            }

            $resource_id = MainWP_Connect::get_resource_id( $ch );

            $start                             = microtime( true );
            $handleToWebsite[ $resource_id ]   = $website;
            $requestUrls[ $resource_id ]       = $mo_url;
            $requestHandles[ $resource_id ]    = $ch;
            $requestMonitorIds[ $resource_id ] = $website->monitor_id;
            $output->requests_info[ $website->monitor_id ] = array(
                'start'            => $start,
                'use_monitor_type' => $mo_apply_type,
                'use_method'       => $mo_apply_method,
                'use_timeout'      => $mo_apply_timeout,
            );
        }

        if ( empty( $disabled_functions ) || ( false === stristr( $disabled_functions, 'curl_multi_exec' ) ) ) {

            $lastRun = 0;
            do {
                if ( 20 < time() - $lastRun ) {
                    MainWP_System_Utility::set_time_limit( 3600 );
                    $lastRun = time();
                }

                curl_multi_exec( $mh, $running );
                curl_multi_select( $mh );
                while ( $info = curl_multi_info_read( $mh ) ) {
                    $data        = curl_multi_getcontent( $info['handle'] );
                    $resource_id = MainWP_Connect::get_resource_id( $info['handle'] );
                    curl_multi_remove_handle( $mh, $info['handle'] );
                    $http_code = curl_getinfo( $info['handle'], CURLINFO_HTTP_CODE );

                    $down_count = 0;
                    $set_retry  = false;
                    $is_pending = false;

                    $retry_later   = static::is_http_code_type( 'retry', $http_code );
                    $is_notallowed = static::is_http_code_type( 'notallowed', $http_code );

                    if ( ! empty( $requestUrls[ $resource_id ] ) ) {

                        $mo_apply_type = static::get_apply_setting( 'type', $website->type, $global_settings, 'useglobal', 'http' );

                        $_try_second = false;
                        if ( $retry_later ) {
                            $max_retries = static::get_apply_setting( 'maxretries', $website, $global_settings, -1, 0 );
                            if ( $max_retries > 0 && $website->retries < $max_retries ) {
                                $is_pending = true;
                                ++$down_count;
                                $set_retry = true;
                            }
                        } elseif ( ! $is_notallowed && empty( $data ) && 'ping' !== $mo_apply_type ) {
                            curl_setopt( $info['handle'], CURLOPT_URL, $requestUrls[ $resource_id ] );
                            $_try_second = true;
                        }

                        if ( $_try_second ) {
                            curl_multi_add_handle( $mh, $info['handle'] );
                            unset( $requestUrls[ $resource_id ] );
                            ++$running;
                            continue;
                        }
                    }

                    if ( isset( $requestMonitorIds[ $resource_id ] ) ) {
                        $mo_id      = $requestMonitorIds[ $resource_id ];
                        $http_error = '';
                        if ( curl_errno( $info['handle'] ) ) {
                            $http_error = curl_error( $info['handle'] );
                        }
                        $output->requests_info[ $mo_id ]['http_error'] = $http_error;
                        $output->requests_info[ $mo_id ]['http_code']  = $http_code;

                        $output->requests_info[ $mo_id ]['is_pending'] = $is_pending ? 1 : 0;
                        $output->requests_info[ $mo_id ]['retry']      = $set_retry ? 1 : 0;
                        $output->requests_info[ $mo_id ]['down_count'] = $down_count;
                        $output->requests_info[ $mo_id ]['end']        = microtime( true );
                        $output->requests_info[ $mo_id ]['use_me']     = microtime( true );
                    }

                    if ( null !== $handler ) {
                        $site = &$handleToWebsite[ $resource_id ];
                        call_user_func_array( $handler, array( $data, $site, &$output, $params ) );
                    }

                    unset( $handleToWebsite[ $resource_id ] );
                    if ( 'resource' === gettype( $info['handle'] ) ) {
                        curl_close( $info['handle'] );
                    }
                }
                usleep( 10000 );
            } while ( $running > 0 );

            if ( 'resource' === gettype( $mh ) ) {
                curl_multi_close( $mh );
            }
        } else {
            foreach ( $requestHandles as $ch ) {
                $resource_id = MainWP_Connect::get_resource_id( $ch );
                if ( isset( $handleToWebsite[ $resource_id ] ) ) {
                    $site = &$handleToWebsite[ $resource_id ];
                    static::fetch_single_uptime_url( $ch, $handler, $site, $output, $params );
                    unset( $handleToWebsite[ $resource_id ] );
                }
            }
        }

        return true;
    }

    /**
     * Fetch single curl exec.
     *
     * @param  mixed  $ch
     * @param  mixed  $handler
     * @param  object $website
     * @param  object $output
     * @param  array  $params
     * @param  bool   $try_second
     * @return mixed
     */
    public static function fetch_single_uptime_url( $ch, $handler, $website, $output, $params, $try_second = false ) {

        $global_settings = $output->global_settings;

        $data = curl_exec( $ch );

        $mo_id = $website->monitor_id;

        $down_count = 0;
        $set_retry  = false;
        $is_pending = false;

        $http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );

        $http_error = '';

        if ( curl_errno( $ch ) ) {
            $http_error = curl_error( $ch );
        }

        $retry_later      = static::is_http_code_type( 'retry', $http_code );
        $is_notallowed    = static::is_http_code_type( 'notallowed', $http_code );
        $mo_apply_type    = static::get_apply_setting( 'type', $website->type, $global_settings, 'useglobal', 'http' );
        $mo_apply_method  = static::get_apply_setting( 'method', $website->method, $global_settings, 'useglobal', 'get' );
        $mo_apply_timeout = static::get_apply_setting( 'timeout', (int) $website->timeout, $global_settings, -1, 60 );

        if ( $retry_later ) {
            $max_retries = static::get_apply_setting( 'maxretries', $website, $global_settings, -1, 0 );
            if ( $max_retries > 0 && $website->retries < $max_retries ) {
                $is_pending = true;
                ++$down_count;
                $set_retry = true;
            }
        }

        // if is not second try, check to retry now.
        if ( ! $try_second && ! $retry_later && ! $is_notallowed ) {

            $_try_second = false;

            $mo_url = static::get_apply_monitor_url( $website );

            if ( empty( $data ) && 'ping' !== $mo_apply_type ) {
                curl_setopt( $ch, CURLOPT_URL, $mo_url );
                $_try_second = true;
            }

            if ( $_try_second ) {
                static::fetch_single_uptime_url( $ch, $handler, $website, $output, $params, true );
            }
        }

        $output->requests_info[ $mo_id ]['http_code']  = $http_code;
        $output->requests_info[ $mo_id ]['http_error'] = $http_error;

        $output->requests_info[ $mo_id ]['is_pending'] = $is_pending ? 1 : 0;
        $output->requests_info[ $mo_id ]['retry']      = $set_retry ? 1 : 0;
        $output->requests_info[ $mo_id ]['down_count'] = $down_count;

        $output->requests_info[ $mo_id ]['end'] = microtime( true );

        $output->requests_info[ $mo_id ]['use_monitor_type'] = $mo_apply_type;
        $output->requests_info[ $mo_id ]['use_method']       = $mo_apply_method;
        $output->requests_info[ $mo_id ]['use_timeout']      = $mo_apply_timeout;

        if ( ! empty( $handler ) ) {
            call_user_func_array( $handler, array( $data, $website, &$output, $params ) );
        }

        if ( 'resource' === gettype( $ch ) ) {
            curl_close( $ch );
        }
    }

    /**
     * handle response fetch uptime.
     *
     * @param  mixed $data
     * @param  mixed $site
     * @param  mixed $output
     * @return mixed
     */
    public function handle_response_fetch_uptime( $data, $monitor, &$output ) {

        $request_info = ! empty( $output->requests_info ) && is_array( $output->requests_info ) ? $output->requests_info : array();
        $resp_info    = ! empty( $request_info[ $monitor->monitor_id ] ) && is_array( $request_info[ $monitor->monitor_id ] ) ? $request_info[ $monitor->monitor_id ] : array();

        $global_settings = $output->global_settings;

        $http_code  = isset( $resp_info['http_code'] ) ? $resp_info['http_code'] : 0;
        $http_error = isset( $resp_info['http_error'] ) ? $resp_info['http_error'] : '';
        $start      = isset( $resp_info['start'] ) ? $resp_info['start'] : 0;
        $end        = isset( $resp_info['end'] ) ? $resp_info['end'] : 0;

        $down_count     = isset( $resp_info['down_count'] ) ? $resp_info['down_count'] : 0;
        $set_retry      = isset( $resp_info['retry'] ) && $resp_info['retry'] ? true : false;
        $use_mo_method  = isset( $resp_info['use_method'] ) ? $resp_info['use_method'] : '';
        $use_mo_type    = isset( $resp_info['use_monitor_type'] ) ? $resp_info['use_monitor_type'] : '';
        $use_mo_timeout = isset( $resp_info['use_timeout'] ) ? $resp_info['use_timeout'] : '';

        $ping = $end - $start; // ms - millisecond.

        $parsed = $this->parse_response_status( $http_code, $http_error );

        $status  = $parsed['status'];
        $error   = $parsed['error'];
        $success = $parsed['success'];

        if ( $set_retry ) {
            $status = static::PENDING;
        }

        $up_codes = $this->get_up_codes( $monitor, $global_settings );
        $up_codes = ! empty( $up_codes ) ? explode( ',', $up_codes ) : array();

        // check up status codes.
        if ( ! empty( $http_code ) && is_array( $up_codes ) && in_array( $http_code, $up_codes ) ) {
            $status = static::UP;
        }

        $mo_url = static::get_apply_monitor_url( $monitor );

        $_status_str = '';
        if ( $status === static::UP ) {
            $_status_str = 'up!';
        } elseif ( $status === static::PENDING ) {
            $_status_str = 'pending.';
        } else {
            $_status_str = 'down.';
        }

        $heart_msg = "{$http_code} - " . $_status_str;

        $code_msg = MainWP_Utility::get_http_codes( $http_code );

        if ( ! empty( $code_msg ) ) {
            $heart_msg .= " {$code_msg}";
        }

        $mo_apply_type = static::get_apply_setting( 'type', $monitor->type, $global_settings, 'useglobal', 'http' );

        if ( 'keyword' === $mo_apply_type ) {
            if ( ! is_string( $data ) ) {
                $data = wp_json_encode( $data );
            }

            $keyword = '';
            if ( 'useglobal' === $monitor->type ) {
                $keyword = ! empty( $global_settings['keyword'] ) ? $global_settings['keyword'] : '';
            } else {
                $keyword = $monitor->keyword;
            }

            if ( ! empty( $keyword ) && ! empty( $data ) ) {
                $keywordFound = false !== stripos( $data, $keyword );
                $heart_msg   .= '. Keyword ' . ( $keywordFound ? 'is' : 'not' ) . ' found.';
            }
        }

        if ( ! empty( $error ) ) {
            $heart_msg .= " {$error}";
        }

        $previous_heartbeat = MainWP_DB_Uptime_Monitoring::instance()->get_previous_monitor_heartbeat( $monitor->monitor_id );

        $previous_status = static::FIRST;

        if ( $previous_heartbeat ) {
            $previous_status = $previous_heartbeat->status;
        }
        $sec_since_last = $previous_heartbeat && ! empty( $previous_heartbeat->time ) ? (int) $end - strtotime( $previous_heartbeat->time ) : 1;

        $is_importance = $this->is_importance_status( $previous_status, $status ) ? 1 : 0;
        $db_datetime   = mainwp_get_current_utc_datetime_db();

        $heartbeat = array(
            'monitor_id' => $monitor->monitor_id,
            'importance' => $is_importance,
            'status'     => $status,
            'time'       => $db_datetime,
            'ping_ms'    => (int) ( $ping * 1000 ), // convert seconds to milliseconds.
            'duration'   => $sec_since_last, // milliseconds - timestamp.
            'msg'        => $heart_msg,
            'down_count' => $down_count,
            'http_code'  => $http_code,
        );

        MainWP_DB_Uptime_Monitoring::instance()->update_heartbeat( $heartbeat );

        if ( ! empty( $monitor->wpid ) ) {
            MainWP_DB::instance()->update_website_values( $monitor->wpid, array( 'http_response_code' => $http_code ) );
        }

        MainWP_Uptime_Monitoring_Schedule::instance()->update_monitoring_time( $monitor, $set_retry ); // update monitor check info, and retry or not.

        $debug  = 'Check Uptime - ' . ( $success ? 'succeeded' : 'not succeed' );
        $debug .= ' :: [monitor_url=' . $mo_url . ']';
        $debug .= ' :: [status=' . ( $status === static::UP ? 'UP' : 'DOWN' ) . ']';
        $debug .= ' :: [msg=' . $heart_msg . ']';
        MainWP_Logger::instance()->log_uptime_check( $debug );

        $debug  = ' [siteid=' . $monitor->wpid . '] :: [monitor_id=' . $monitor->monitor_id . ']';
        $debug .= ' :: [monitor_type=' . $monitor->type . '] :: [apply_monitor_type=' . $use_mo_type . ']';
        $debug .= ' :: [monitor_method=' . $monitor->method . '] :: [apply_monitor_method=' . $use_mo_method . ']';
        $debug .= ' :: [monitor_timeout=' . $monitor->timeout . '] :: [apply_monitor_timeout=' . $use_mo_timeout . ']';
        $debug .= ' :: [ping_ms=' . $heartbeat['ping_ms'] . ']';
        $debug .= ' :: [duration_sec=' . $sec_since_last . ']';
        $debug .= ' :: [time=' . $db_datetime . ']';

        MainWP_Logger::instance()->log_uptime_check( $debug );

        if ( empty( $data ) ) {
            MainWP_Logger::instance()->log_uptime_check( '[data=EMPTY]' );
        }
    }


    /**
     * is_http_code_type
     *
     * @param  mixed $type
     * @param  mixed $code
     * @return bool
     */
    public static function is_http_code_type( $type, $code ) {
        $retry_codes       = array( 429, 502, 503, 504 );
        $not_allowed_codes = array( 405 );

        if ( ( 'retry' === $type && in_array( $code, $retry_codes ) ) || ( 'notallowed' === $type && in_array( $code, $not_allowed_codes ) ) ) {
            return true;
        }

        return false;
    }

    /**
     * Parse response status.
     *
     * @param  mixed $httpCode
     * @param  mixed $error
     * @return mixed
     */
    public function parse_response_status( $httpCode, $error = false ) {

        $httpCode     = (int) $httpCode;
        $status       = '';
        $status_error = '';

        if ( ! empty( $error ) ) {
            switch ( $error ) {
                case CURLE_OPERATION_TIMEOUTED:
                    $status_error = 'Error: Request timed out.';
                    $status       = static::TIMEOUTED_ERROR;
                    break;
                case CURLE_SSL_CACERT:
                case CURLE_SSL_CERTPROBLEM:
                    $status_error = 'Error: SSL certificate expired or invalid.';
                    $status       = static::CERT_ERROR;
                    break;
                case CURLE_COULDNT_RESOLVE_HOST:
                    $status_error = 'Error: DNS resolution failed, could not resolve host.';
                    $status       = static::RESOLVEHOST_ERROR;
                    break;
                default:
                    $status_error = 'Error: ' . $error;
                    $status       = static::UNDEFINED_ERROR;
                    break;
            }
        } elseif ( $httpCode >= 400 ) {
            $status = static::DOWN;
        } elseif ( static::is_http_code_type( 'notallowed', $httpCode ) ) {
            $status = static::NOTALLOWED;
        } elseif ( static::is_http_code_type( 'retry', $httpCode ) ) {
            $status = static::RETRY;
        } else {
            $status = static::UP;
        }

        $success = in_array( $status, array( static::DOWN, static::UP, static::RETRY ) );

        return array(
            'status'  => $status,
            'error'   => $status_error,
            'success' => $success,
        );
    }

    /**
     * get_mapping_status_code_names
     *
     * @return array
     */
    public static function get_mapping_status_code_names(){
        return array(
            static::TIMEOUTED_ERROR => 'TIMEOUTED_ERROR',
            static::CERT_ERROR => 'CERT_ERROR',
            static::RESOLVEHOST_ERROR => 'RESOLVEHOST_ERROR',
            static::UNDEFINED_ERROR => 'UNDEFINED_ERROR',
            static::DOWN => 'DOWN',
            static::NOTALLOWED => 'NOTALLOWED',
            static::RETRY => 'RETRY',
            static::UP => 'RETRY',
        );
    }


    /**
     * Get apply monitor url.
     *
     * @param  mixed $monitor
     *
     * @return string
     */
    public static function get_apply_monitor_url( $monitor ) {

        if ( ! empty( $monitor ) ) {

            if ( is_object( $monitor ) ) {
                $url    = $monitor->url;
                $suburl = $monitor->suburl;
                $issub  = $monitor->issub;
            } elseif ( is_array( $monitor ) ) {
                $url    = $monitor['url'];
                $suburl = $monitor['suburl'];
                $issub  = $monitor['issub'];
            }

            if ( '/' !== substr( $url, -1 ) ) {
                $url .= '/';
            }

            if ( $issub && ! empty( $suburl ) ) {
                $url .= $suburl;
            }
        }

        return apply_filters( 'mainwp_uptime_monitoring_check_url', $url, $monitor );
    }

    /**
     * is_importance_status
     *
     * @param  int $previous
     * @param  int $current
     * @return mixed
     */
    public function is_importance_status( $previous, $current ) {
        // * ? -> ANY STATUS | FIRST = important [isFirstBeat]
        // UP -> PENDING = not important
        // * UP -> DOWN = important
        // UP -> UP = not important
        // PENDING -> PENDING = not important
        // * PENDING -> DOWN = important
        // PENDING -> UP = not important
        // DOWN -> PENDING = this case not exists
        // DOWN -> DOWN = not important
        // * DOWN -> UP = important

        return $previous === static::FIRST || ( $previous === static::UP && $current === static::DOWN ) ||
        ( $previous === static::PENDING && $current === static::DOWN ) ||
        ( $previous === static::DOWN && $current === static::UP );
    }

    /**
     * Get apply setting.
     *
     * @param  mixed $name
     * @param  mixed $indiv_settings
     * @param  mixed $glo_settings
     * @param  mixed $apply_global_value
     * @param  mixed $default_value
     * @return mixed
     */
    public static function get_apply_setting( $name, $indiv_settings, $glo_settings, $apply_global_value, $default_value ) {
        if ( is_object( $indiv_settings ) && property_exists( $indiv_settings, $name ) ) {
            $indi_value = $indiv_settings->{$name};
        } elseif ( is_array( $indiv_settings ) && isset( $indiv_settings[ $name ] ) ) {
            $indi_value = $indiv_settings[ $name ];
        } elseif ( is_scalar( $indiv_settings ) ) {
            $indi_value = $indiv_settings;
        } else {
            $indi_value = $default_value;
        }
        $glo_value = is_array( $glo_settings ) && isset( $glo_settings[ $name ] ) ? $glo_settings[ $name ] : $default_value;
        return ( $indi_value === $apply_global_value ) ? $glo_value : $indi_value; //phpcs:ignore -- NOSONAR - compatible.
    }

    /**
     * get_up_codes
     *
     * @param  mixed $monitor
     * @param  mixed $global_settings
     * @return mixed
     */
    public function get_up_codes( $monitor, $global_settings ) {
        return static::get_apply_setting( 'up_statuscodes_json', $monitor, $global_settings, 'useglobal', '' );
    }


    /**
     * get_user_agent
     *
     * @return string
     */
    public static function get_user_agent() {
        return 'Mozilla/5.0 (compatible; MainWP/' . MainWP_System::$version . '; +http://mainwp.com)';
    }
}
