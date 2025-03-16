__ [Documentation](index.md)

  * API Documentation ****
    * [Composer](namespaces/composer.md)
    * [MainWP](namespaces/mainwp.md)
    * [ParagonIE](namespaces/paragonie.md)
    * [phpseclib3](namespaces/phpseclib3.md)
  * Reports ****
    * [ __ Errors 77 ](reports/errors.md)
    * [ __ Markers 1 ](reports/markers.md)
    * [ __ Deprecated 5 ](reports/deprecated.md)

Back To Top  __

  * Navigation
  * __class/class-mainwp-hooks.php
  * __class/class-mainwp-ui.php
  * __libs/phpseclib/vendor/composer/InstalledVersions.php
  * __libs/phpseclib/vendor/phpseclib/phpseclib/phpseclib/Net/SSH2.php

  * [ __](/) \
  * Deprecated elements

###  __class/class-mainwp-hooks.php 1

Element | Line | Description  
---|---|---  
\MainWP\Dashboard\MainWP_Hooks::__construct() | 30 | Hook deprecation - Please use filter `mainwp_get_error_message` instead of `mainwp_getErrorMessage`.  
  
###  __class/class-mainwp-ui.php 1

Element | Line | Description  
---|---|---  
\MainWP\Dashboard\MainWP_UI::select_sites_box() | 47 | Use MainWP_UI_Select_Sites::select_sites_box().  
\MainWP\Dashboard\MainWP_UI::select_sites_box_body() | 114 | Use MainWP_UI_Select_Sites::select_sites_box_body().  
  
###  __libs/phpseclib/vendor/composer/InstalledVersions.php 1

Element | Line | Description  
---|---|---  
\Composer\InstalledVersions::getRawData() | 262 | Use getAllRawData() instead which returns all datasets for all autoloaders present in the process. getRawData only returns the first dataset loaded, which may not be what you expect.  
  
###  __libs/phpseclib/vendor/phpseclib/phpseclib/phpseclib/Net/SSH2.php 1

Element | Line | Description  
---|---|---  
\phpseclib3\Net\SSH2::get_interactive_channel() | 3054 | for lack of transparency in intended channel target, to be potentially replaced with method which guarantees open-ness of all yielded channels and throws error for multiple open channels  
  
#  __

  * [Composer](namespaces/composer.md)
  * [MainWP](namespaces/mainwp.md)
  * [ParagonIE](namespaces/paragonie.md)
  * [phpseclib3](namespaces/phpseclib3.md)

#  __

  * [Class Hierarchy Diagram](graphs/class.md)

#  __

  * [Errors](reports/errors.md)
  * [Markers](reports/markers.md)

* * *

Documentation is powered by [phpDocumentor ](https://www.phpdoc.org/) and authored on March 16th, 2025 at 00:33. 
  *[Composer]: \Composer
  *[MainWP]: \MainWP
  *[ParagonIE]: \ParagonIE
  *[phpseclib3]: \phpseclib3
