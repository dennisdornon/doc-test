# Hooks

- [Actions](#actions)
- [Filters](#filters)

## Actions

### `deactivate_{$plugin}`

*Emulate deactivating, then subsequently reactivating the plugin.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./tests/test-case.php](tests/test-case.php), [line 11](tests/test-case.php#L11-L17)

### `activate_{$plugin}`

*Emulate deactivating, then subsequently reactivating the plugin.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./tests/test-case.php](tests/test-case.php), [line 11](tests/test-case.php#L11-L18)

### `mainwp_site_suspended`

*Fires immediately after website suspended/unsuspend.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website data.
`$suspended` | `int` | The new suspended value.

**Changelog**

Version | Description
------- | -----------
`4.5.2` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php), [line 1444](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php#L1444-L1452)

### `mainwp_site_suspended`

*Fires immediately after website suspended/unsuspend.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website data.
`$suspended` | `int` | The new suspended value.

**Changelog**

Version | Description
------- | -----------
`4.5.2` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php), [line 1484](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php#L1484-L1492)

### `mainwp_before_plugin_ignore`

*Action: mainwp_before_plugin_ignore*

Fires before plugin ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php), [line 1273](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php#L1273-L1280)

### `mainwp_after_plugin_ignore`

*Action: mainwp_after_plugin_ignore*

Fires after plugin ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php), [line 1283](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php#L1283-L1290)

### `mainwp_before_theme_ignore`

*Action: mainwp_before_theme_ignore*

Fires before theme ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredThemes` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php), [line 1310](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php#L1310-L1317)

### `mainwp_after_theme_ignore`

*Action: mainwp_after_theme_ignore*

Fires after theme ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$decodedIgnoredThemes` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php), [line 1319](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php#L1319-L1326)

### `mainwp_system_init`

*MainWP_System constructor.*

Runs any time class is called.


Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 82](class/class-mainwp-system.php#L82-L135)

### `mainwp-activated`

*MainWP_System constructor.*

Runs any time class is called.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`'4.0.7.2'` |  | 
`'mainwp_activated'` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 82](class/class-mainwp-system.php#L82-L246)

### `mainwp_activated`

*Action: mainwp_activated*

Fires upon MainWP plugin activation.


Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 248](class/class-mainwp-system.php#L248-L255)

### `mainwp_before_plugin_theme_translation_update`

*Action: mainwp_before_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plugin'` |  | 
`implode(',', $pluginsToUpdateNow)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-batch.php](class/class-mainwp-cron-jobs-batch.php), [line 252](class/class-mainwp-cron-jobs-batch.php#L252-L259)

### `mainwp_after_plugin_theme_translation_update`

*Action: mainwp_after_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`'plugin'` |  | 
`implode(',', $pluginsToUpdateNow)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-batch.php](class/class-mainwp-cron-jobs-batch.php), [line 274](class/class-mainwp-cron-jobs-batch.php#L274-L281)

### `mainwp_before_plugin_theme_translation_update`

*Action: mainwp_before_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'theme'` |  | 
`implode(',', $themesToUpdateNow)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-batch.php](class/class-mainwp-cron-jobs-batch.php), [line 316](class/class-mainwp-cron-jobs-batch.php#L316-L323)

### `mainwp_after_plugin_theme_translation_update`

*Action: mainwp_after_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`'theme'` |  | 
`implode(',', $themesToUpdateNow)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-batch.php](class/class-mainwp-cron-jobs-batch.php), [line 343](class/class-mainwp-cron-jobs-batch.php#L343-L350)

### `mainwp_delete_site`

*This action is documented in pages\page-mainwp-manage-sites-handler.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$site` |  | 

Source: [./class/class-mainwp-hooks.php](class/class-mainwp-hooks.php), [line 405](class/class-mainwp-hooks.php#L405-L406)

### `mainwp_before_plugin_theme_translation_update`

*Action: mainwp_before_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$type` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-hooks.php](class/class-mainwp-hooks.php), [line 1427](class/class-mainwp-hooks.php#L1427-L1434)

### `mainwp_after_plugin_theme_translation_update`

*Action: mainwp_after_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$type` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-hooks.php](class/class-mainwp-hooks.php), [line 1445](class/class-mainwp-hooks.php#L1445-L1452)

### `mainwp_after_notice_sites_uptime_monitoring_admin`

*Basic site uptime monitoring.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `array` | Array containing the websites.

Source: [./class/class-mainwp-monitoring-handler.php](class/class-mainwp-monitoring-handler.php), [line 151](class/class-mainwp-monitoring-handler.php#L151-L182)

### `mainwp_after_notice_sites_uptime_monitoring_individual`

*Basic site uptime monitoring.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$site` |  | 

Source: [./class/class-mainwp-monitoring-handler.php](class/class-mainwp-monitoring-handler.php), [line 151](class/class-mainwp-monitoring-handler.php#L151-L220)

### `mainwp_clientstable_prepared_items`

*Prepair the items to be listed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$clients` |  | 
`$clients_ids` |  | 

Source: [./class/class-mainwp-client-list-table.php](class/class-mainwp-client-list-table.php), [line 290](class/class-mainwp-client-list-table.php#L290-L330)

### `mainwp_manage_sites_table_columns_defs`

*Display the table.*


Source: [./class/class-mainwp-client-list-table.php](class/class-mainwp-client-list-table.php), [line 336](class/class-mainwp-client-list-table.php#L336-L468)

### `mainwp_client_deleted`

*Delete client*

Fires after delete a client.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$current` | `object` | client deleted.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-db-client.php](class/class-mainwp-db-client.php), [line 1010](class/class-mainwp-db-client.php#L1010-L1019)

### `mainwp_bulkpost_categories_handle`

*Method add_categories_handle()*

Handle adding categories.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_id` | `int` | Post ID.
`wp_unslash($_POST['post_category'])` |  | 

Source: [./class/class-mainwp-meta-boxes.php](class/class-mainwp-meta-boxes.php), [line 109](class/class-mainwp-meta-boxes.php#L109-L148)

### `mainwp_bulkpost_tags_handle`

*Method add_tags_handle()*

Add Tags to post array handler.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_id` | `int` | Post ID.
`$post_type` | `string` | Post type.
`wp_strip_all_tags(wp_unslash($_POST['add_tags']))` |  | 

Source: [./class/class-mainwp-meta-boxes.php](class/class-mainwp-meta-boxes.php), [line 168](class/class-mainwp-meta-boxes.php#L168-L179)

### `mainwp_site_tag_action`

*Fires after a new sites tag has been created.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$group` | `object` | group created.
`'created'` |  | 

Source: [./class/class-mainwp-db-common.php](class/class-mainwp-db-common.php), [line 585](class/class-mainwp-db-common.php#L585-L591)

### `mainwp_added_new_group`

*New Group Added*

Fires after a new sites group has been created.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$groupId` | `int` | Group ID.

Source: [./class/class-mainwp-db-common.php](class/class-mainwp-db-common.php), [line 634](class/class-mainwp-db-common.php#L634-L641)

### `mainwp_site_tag_action`

*Fires after a tag has been deleted.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$group` | `object` | group created.
`'deleted'` |  | 

Source: [./class/class-mainwp-db-common.php](class/class-mainwp-db-common.php), [line 664](class/class-mainwp-db-common.php#L664-L670)

### `mainwp_ga_delete_site`

*Action: mainwp_ga_delete_site*

Fires upon site removal process in order to delete Google Analytics data.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websiteid` | `int` | Child site ID.

Source: [./class/class-mainwp-db.php](class/class-mainwp-db.php), [line 2608](class/class-mainwp-db.php#L2608-L2617)

### `mainwp_log_system_query`

*Method log_system_query*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$params` | `array` | params.
`$sql` | `string` | query.

Source: [./class/class-mainwp-db.php](class/class-mainwp-db.php), [line 3239](class/class-mainwp-db.php#L3239-L3249)

### `mainwp_before_save_email_settings`

*Action: mainwp_before_save_email_settings*

Fires before save email settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$type` |  | 
`$update_settings` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 76](class/class-mainwp-notification-settings.php#L76-L83)

### `mainwp_after_save_email_settings`

*Action: mainwp_after_save_email_settings*

Fires after save email settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$emails_settings` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 87](class/class-mainwp-notification-settings.php#L87-L94)

### `mainwp_settings_email_settings`

*Action: mainwp_settings_email_settings*

Fires after the default email settings.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 175](class/class-mainwp-notification-settings.php#L175-L182)

### `deprecated_hook_run`

*Display a deprecated notice for old hooks.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$old_hook` | `string` | Old hook.
`$new_hook` | `string` | New hook.
`$version` |  | 
`$message` | `string` | message.

Source: [./class/class-mainwp-deprecated-hooks.php](class/class-mainwp-deprecated-hooks.php), [line 152](class/class-mainwp-deprecated-hooks.php#L152-L166)

### `mainwp_post_action`

*Fires immediately after post action.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$pAction` |  | 
`$data` |  | 
`$postId` |  | 
`$type` |  | 

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-actions-handler.php](class/class-mainwp-actions-handler.php), [line 51](class/class-mainwp-actions-handler.php#L51-L56)

### `mainwp_install_update_actions`

*Fires immediately after install action.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$pAction` |  | 
`$data` |  | 
`$type` |  | 
`$post_data` |  | 
`$upload` |  | 

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-actions-handler.php](class/class-mainwp-actions-handler.php), [line 94](class/class-mainwp-actions-handler.php#L94-L99)

### `mainwp_install_plugin_action`

*Handle @action mainwp_fetch_url_authed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website.
`$plugin_act` |  | 
`$params` | `array` | params input array.
`$information['other_data']['plugin_action_data']` |  | 
`$others` | `array` | others input array.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-actions-handler.php](class/class-mainwp-actions-handler.php), [line 102](class/class-mainwp-actions-handler.php#L102-L118)

### `mainwp_install_theme_action`

*Handle @action mainwp_fetch_url_authed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website.
`'deactivate'` |  | 
`$params` | `array` | params input array.
`$information['other_data']['theme_deactivate_data']` |  | 
`$others` | `array` | others input array.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-actions-handler.php](class/class-mainwp-actions-handler.php), [line 102](class/class-mainwp-actions-handler.php#L102-L123)

### `mainwp_install_theme_action`

*Handle @action mainwp_fetch_url_authed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website.
`$theme_act` |  | 
`$params` | `array` | params input array.
`$information['other_data']['theme_action_data']` |  | 
`$others` | `array` | others input array.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-actions-handler.php](class/class-mainwp-actions-handler.php), [line 102](class/class-mainwp-actions-handler.php#L102-L126)

### `mainwp_prepareinstallplugintheme`

*Method mainwp_ext_prepareinstallplugintheme()*

Prepair Installation of plugins & themes,
Page: ManageSites.


Source: [./class/class-mainwp-post-plugin-theme-handler.php](class/class-mainwp-post-plugin-theme-handler.php), [line 451](class/class-mainwp-post-plugin-theme-handler.php#L451-L458)

### `mainwp_performinstallplugintheme`

*Method mainwp_ext_performinstallplugintheme()*

Installation of plugins & themes,
Page: ManageSites.


Source: [./class/class-mainwp-post-plugin-theme-handler.php](class/class-mainwp-post-plugin-theme-handler.php), [line 461](class/class-mainwp-post-plugin-theme-handler.php#L461-L469)

### `mainwp_before_log_data`

*Method log_to_db()*

Log to database.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$text` | `string` | Log record text.
`$priority` | `int` | Set priority.
`$log_color` | `int` | Set color.

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 422](class/class-mainwp-logger.php#L422-L461)

### `mainwp_uptime_monitoring_after_check_uptime`

*Method handle response fetch uptime.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$heartbeat` |  | 
`$monitor` | `mixed` | monitor.
`$previous_heartbeat` |  | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 713](class/class-mainwp-uptime-monitoring-connect.php#L713-L885)

### `mainwp_after_sync_site_success`

*Fires immediately after website synced successfully.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website data.

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./class/class-mainwp-post-site-handler.php](class/class-mainwp-post-site-handler.php), [line 407](class/class-mainwp-post-site-handler.php#L407-L414)

### `mainwp_site_suspended`

*Fires immediately after website suspended/unsuspend.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website data.
`$suspended` | `int` | The new suspended value.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-post-site-handler.php](class/class-mainwp-post-site-handler.php), [line 470](class/class-mainwp-post-site-handler.php#L470-L478)

### `mainwp_postprocess_backup_site`

*Method  backup_site()*

Backup Child Site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$localBackupFile` |  | 
`$what` |  | 
`$subfolder` | `mixed` | Sub folder to place backup.
`$regexBackupFile` |  | 
`$website` |  | 
`$taskId` |  | 
`$unique` |  | 

Source: [./class/class-mainwp-backup-handler.php](class/class-mainwp-backup-handler.php), [line 28](class/class-mainwp-backup-handler.php#L28-L512)

### `mainwp_managesite_backup`

*Method backup()*

Backup Child Site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`array('type' => $pType)` |  | 
`$information` |  | 

Source: [./class/class-mainwp-backup-handler.php](class/class-mainwp-backup-handler.php), [line 753](class/class-mainwp-backup-handler.php#L753-L937)

### `mainwp_before_seclect_sites`

*Action: mainwp_before_seclect_sites*

Fires before the Select Sites box.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 72](class/class-mainwp-ui.php#L72-L79)

### `mainwp_after_seclect_sites`

*Action: mainwp_after_seclect_sites*

Fires after the Select Sites box.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 85](class/class-mainwp-ui.php#L85-L92)

### `mainwp_before_select_sites_filters`

*Action: mainwp_before_select_sites_filters*

Fires before the Select Sites box filters.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 190](class/class-mainwp-ui.php#L190-L197)

### `mainwp_after_select_sites_filters`

*Action: mainwp_after_select_sites_filters*

Fires after the Select Sites box filters.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 206](class/class-mainwp-ui.php#L206-L213)

### `mainwp_before_select_sites_list`

*Action: mainwp_before_select_sites_list*

Fires before the Select Sites list.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 252](class/class-mainwp-ui.php#L252-L261)

### `mainwp_after_select_sites_list`

*Action: mainwp_after_select_sites_list*

Fires after the Select Sites list.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 330](class/class-mainwp-ui.php#L330-L339)

### `mainwp_before_select_groups_list`

*Action: mainwp_before_select_groups_list*

Fires before the Select Groups list.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$groups` | `object` | Object containing groups info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 419](class/class-mainwp-ui.php#L419-L428)

### `mainwp_after_select_groups_list`

*Action: mainwp_after_select_groups_list*

Fires after the Select Groups list.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$groups` | `object` | Object containing groups info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 458](class/class-mainwp-ui.php#L458-L467)

### `mainwp_quick_sites_shortcut`

*Action: mainwp_quick_sites_shortcut*

Adds a new shortcut item in the Quick Sites Shortcuts sidebar menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `array` | Array containing the child site data.<br><br>Suggested HTML markup:<br><br><a class="item" href="your custom URL"><br>  <i class="your custom icon"></i><br>  Your custom label  text<br></a>

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 738](class/class-mainwp-ui.php#L738-L754)

### `mainwp_help_sidebar_content`

*Action: mainwp_help_sidebar_content*

Fires Help sidebar content


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 782](class/class-mainwp-ui.php#L782-L789)

### `mainwp_before_mainwp_content_wrap`

*Action: mainwp_before_mainwp_content_wrap*

Fires before the #mainwp-content-wrap element.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `array` | Array containing the child site data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 799](class/class-mainwp-ui.php#L799-L808)

### `mainwp_overview_screen_options_top`

*Action: mainwp_overview_screen_options_top*

Fires at the top of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 823](class/class-mainwp-ui.php#L823-L830)

### `mainwp_overview_screen_options_bottom`

*Action: mainwp_overview_screen_options_bottom*

Fires at the bottom of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 837](class/class-mainwp-ui.php#L837-L844)

### `mainwp_before_header`

*Action: mainwp_before_header*

Fires before the MainWP header element.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `array` | Array containing the child site data.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 866](class/class-mainwp-ui.php#L866-L875)

### `mainwp_after_header`

*Action: mainwp_after_header*

Fires after the MainWP header element.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `array` | Array containing the child site data.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1072](class/class-mainwp-ui.php#L1072-L1081)

### `mainwp_before_subheader`

*Action: mainwp_before_subheader*

Fires before the MainWP sub-header element.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1152](class/class-mainwp-ui.php#L1152-L1159)

### `mainwp_managesites_tabletop`

*Action: mainwp_managesites_tabletop*

Fires at the table top on the Manage Sites and Monitoring page.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1176](class/class-mainwp-ui.php#L1176-L1183)

### `mainwp_subheader_actions`

*Action: mainwp_subheader_actions*

Fires at the subheader element to hook available actions.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1188](class/class-mainwp-ui.php#L1188-L1195)

### `mainwp_after_subheader`

*Action: mainwp_after_subheader*

Fires after the MainWP sub-header element.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1201](class/class-mainwp-ui.php#L1201-L1208)

### `mainwp_header_actions_after_select_themes`

*After select theme actions.*


**Changelog**

Version | Description
------- | -----------
`4.5.2` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1365](class/class-mainwp-ui.php#L1365-L1370)

### `mainwp_page_navigation_menu`

*Method render_page_navigation()*

Render page navigation.


Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1439](class/class-mainwp-ui.php#L1439-L1519)

### `mainwp_before_plugin_theme_install_progress`

*Action: mainwp_before_plugin_theme_install_progress*

Fires before the progress list in the install modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1873](class/class-mainwp-ui.php#L1873-L1880)

### `mainwp_after_plugin_theme_install_progress`

*Action: mainwp_after_plugin_theme_install_progress*

Fires after the progress list in the install modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1884](class/class-mainwp-ui.php#L1884-L1891)

### `mainwp_install_plugin_theme_modal_action`

*Action: mainwp_after_plugin_theme_install_progress*

Fires after the progress list in the install modal element.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$what` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1896](class/class-mainwp-ui.php#L1896-L1903)

### `mainwp_before_upload_custom_icon`

*Action: mainwp_after_upload_custom_icon*

Fires before the modal element.


**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1931](class/class-mainwp-ui.php#L1931-L1938)

### `mainwp_after_upload_custom_icon`

*Action: mainwp_after_upload_custom_icon*

Fires after the modal element.


**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1961](class/class-mainwp-ui.php#L1961-L1968)

### `mainwp_before_edit_site_note`

*Action: mainwp_before_edit_site_note*

Fires before the site note content in the Edit Note modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2032](class/class-mainwp-ui.php#L2032-L2039)

### `mainwp_after_edit_site_note`

*Action: mainwp_after_edit_site_note*

Fires after the site note content in the Edit Note modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2050](class/class-mainwp-ui.php#L2050-L2057)

### `mainwp_screen_options_modal_top`

*Action: mainwp_screen_options_modal_top*

Fires at the top of the Page Settings modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2386](class/class-mainwp-ui.php#L2386-L2393)

### `mainwp_screen_options_modal_bottom`

*Action: mainwp_screen_options_modal_bottom*

Fires at the bottom of the Page Settings modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2478](class/class-mainwp-ui.php#L2478-L2485)

### `mainwp_select_themes_modal_top`

*Action: mainwp_select_themes_modal_top*

Fires at the top of the modal.


**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2508](class/class-mainwp-ui.php#L2508-L2515)

### `mainwp_select_themes_modal_bottom`

*Action: mainwp_select_themes_modal_bottom*

Fires at the bottom of the modal.


**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2519](class/class-mainwp-ui.php#L2519-L2526)

### `mainwp_save_bulkpost`

*Action: mainwp_save_bulkpost*

Fires when saving the bulk post.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_id` | `int` | Post ID.

Source: [./class/class-mainwp-bulk-post.php](class/class-mainwp-bulk-post.php), [line 158](class/class-mainwp-bulk-post.php#L158-L167)

### `mainwp_before_redirect_posting_bulkpost`

*Action: mainwp_before_redirect_posting_bulkpost*

Fires before redirection to posting 'bulk post' page after post submission.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_post` | `object` | Object containing post data.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-bulk-post.php](class/class-mainwp-bulk-post.php), [line 172](class/class-mainwp-bulk-post.php#L172-L181)

### `mainwp_save_bulkpage`

*Action: mainwp_save_bulkpage*

Fires when saving the bulk page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_id` | `int` | Post ID.

Source: [./class/class-mainwp-bulk-post.php](class/class-mainwp-bulk-post.php), [line 227](class/class-mainwp-bulk-post.php#L227-L236)

### `mainwp_before_redirect_posting_bulkpage`

*Action: mainwp_before_redirect_posting_bulkpage*

Fires before redirection to posting 'bulk page' page after post submission.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_post` | `object` | Object containing post data.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-bulk-post.php](class/class-mainwp-bulk-post.php), [line 241](class/class-mainwp-bulk-post.php#L241-L250)

### `mainwp_register_post_type`

*Method create_post_type()*

Register "Bulkpost" and "Bulkpage" custom post types.


Source: [./class/class-mainwp-bulk-post.php](class/class-mainwp-bulk-post.php), [line 256](class/class-mainwp-bulk-post.php#L256-L368)

### `mainwp-site-synced`

*Method sync_information_array()*

Grab all Child Site Information.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($pWebsite, $information)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_site_synced'` |  | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 221](class/class-mainwp-sync.php#L221-L579)

### `mainwp_site_synced`

*Action: mainwp_site_synced*

Fires upon successful site synchronization.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$pWebsite` | `object` | Object containing child site info.
`$information` | `array` | Array containing information returned from child site.

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 581](class/class-mainwp-sync.php#L581-L591)

### `mainwp_site_sync`

*Action: mainwp_site_sync*

Fires upon successful site synchronization.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$pWebsite` | `object` | Object containing child site info.
`$information` | `array` | Array containing information returned from child site.
`$act_success` | `bool` | action success or failed.
`$_error` |  | 
`$post_data` | `array` | Addition post data.

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 596](class/class-mainwp-sync.php#L596-L609)

### `mainwp-sitestable-prepared-items`

*Action is being replaced with mainwp_sitestable_prepared_items*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($websites, $site_ids)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_sitestable_prepared_items'` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1018](class/class-mainwp-manage-sites-list-table.php#L1018-L1023)

### `mainwp_sitestable_prepared_items`

*Action: mainwp_sitestable_prepared_items*

Fires before the Sites table itemes are prepared.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites data.
`$site_ids` | `array` | Array containing IDs of all child sites.

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1025](class/class-mainwp-manage-sites-list-table.php#L1025-L1035)

### `mainwp_before_manage_sites_table`

*Action: mainwp_before_manage_sites_table*

Fires before the Manage Sites table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1073](class/class-mainwp-manage-sites-list-table.php#L1073-L1080)

### `mainwp_after_manage_sites_table`

*Action: mainwp_after_manage_sites_table*

Fires after the Manage Sites table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1106](class/class-mainwp-manage-sites-list-table.php#L1106-L1113)

### `mainwp_manage_sites_table_columns_defs`

*Display the table.*


Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1044](class/class-mainwp-manage-sites-list-table.php#L1044-L1204)

### `mainwp_manage_sites_action`

*Action: mainwp_manage_sites_action*

Adds custom manage sites action item.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `array` | Array containing website data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1876](class/class-mainwp-manage-sites-list-table.php#L1876-L1885)

### `mainwp_manage_sites_action`

*Action: mainwp_manage_sites_action*

Adds custom manage sites action item.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `array` | Array containing website data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 2288](class/class-mainwp-manage-sites-list-table.php#L2288-L2297)

### `mainwp_admin_footer`

*Action: mainwp_admin_footer*

Fires at the bottom of MainWP content.


Source: [./class/class-mainwp-system-view.php](class/class-mainwp-system-view.php), [line 1020](class/class-mainwp-system-view.php#L1020-L1027)

### `mainwp_sync_popup_content`

*Method render_footer_content()*

Render footer content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

Source: [./class/class-mainwp-system-view.php](class/class-mainwp-system-view.php), [line 996](class/class-mainwp-system-view.php#L996-L1054)

### `mainwp_sync_popup_content`

*Method render_footer_content()*

Render footer content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

Source: [./class/class-mainwp-system-view.php](class/class-mainwp-system-view.php), [line 996](class/class-mainwp-system-view.php#L996-L1071)

### `mainwp_monitoring_sitestable_prepared_items`

*Action: mainwp_monitoring_sitestable_prepared_items*

Fires before the Monitoring Sites table itemes are prepared.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites data.
`$site_ids` | `array` | Array containing IDs of all child sites.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-monitoring-sites-list-table.php](class/class-mainwp-monitoring-sites-list-table.php), [line 626](class/class-mainwp-monitoring-sites-list-table.php#L626-L636)

### `mainwp_manage_sites_table_columns_defs`

*Display the table.*


Source: [./class/class-mainwp-monitoring-sites-list-table.php](class/class-mainwp-monitoring-sites-list-table.php), [line 644](class/class-mainwp-monitoring-sites-list-table.php#L644-L917)

### `mainwp_cronload_action`

*Action: mainwp_cronload_action*

Hooks MainWP cron jobs actions.


Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 61](class/class-mainwp-system-cron-jobs.php#L61-L68)

### `mainwp_synced_all_sites`

*Method cron_updates_check()*

MainWP Cron Check Update

This Cron Checks to see if Automatic Daily Updates need to be performed.


Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 375](class/class-mainwp-system-cron-jobs.php#L375-L660)

### `mainwp_daily_digest_action`

*Action: mainwp_daily_digest_action*

Hooks the daily digest email notification send process.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object conaining child site info.
`$plain_text` | `bool` | Whether plain text email should be sent.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 1034](class/class-mainwp-system-cron-jobs.php#L1034-L1044)

### `mainwp_backups_remote_settings`

*Render Backup Options.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('website' => $website->id)` |  | 

Source: [./class/class-mainwp-manage-sites-backup-view.php](class/class-mainwp-manage-sites-backup-view.php), [line 135](class/class-mainwp-manage-sites-backup-view.php#L135-L176)

### `mainwp_website_before_updated`

*Action: mainwp_website_before_updated*

Fires before the child site update process.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing child site info.
`$type` | `string` | Type parameter.
`$list` | `string` | List parameter.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 1175](class/class-mainwp-connect.php#L1175-L1186)

### `mainwp_fetch_url_authed`

*Fires immediately after fetch url action.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website.
`$information` | `array` | information result data.
`$what` | `string` | action.
`$params` | `array` | params input array.
`$others` | `array` | others input array.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 1201](class/class-mainwp-connect.php#L1201-L1212)

### `mainwp_website_updated`

*Action: mainwp_website_updated*

Fires after the child site update process.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing child site info.
`$type` | `string` | Type parameter.
`$list` | `string` | List parameter.
`$information` | `array` | Array containing the information fetched from the child site.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 1224](class/class-mainwp-connect.php#L1224-L1236)

### `mainwp_admin_menu`

*Action: mainwp_admin_menu*

Hooks main navigation menu items.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 303](class/class-mainwp-menu.php#L303-L310)

### `mainwp_admin_menu_sub`

*Action: mainwp_admin_menu_sub*

Hooks main navigation sub-menu items.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 450](class/class-mainwp-menu.php#L450-L457)

### `before_mainwp_menu`

*Action: before_mainwp_menu*

Fires before the main navigation element.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 709](class/class-mainwp-menu.php#L709-L716)

### `after_mainwp_menu`

*Action: after_mainwp_menu*

Fires after the main navigation element.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 951](class/class-mainwp-menu.php#L951-L958)

### `before_mainwp_menu`

*Action: before_mainwp_menu*

Fires before the main navigation element.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 1073](class/class-mainwp-menu.php#L1073-L1080)

### `after_mainwp_menu`

*Action: after_mainwp_menu*

Fires after the main navigation element.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 1271](class/class-mainwp-menu.php#L1271-L1278)

### `mainwp-securityissues-sites`

*Method render_scan_site()*

Render Site Hardening sub page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($website)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_securityissues_sites'` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 724](class/class-mainwp-manage-sites-view.php#L724-L764)

### `mainwp_securityissues_sites`

*Action: mainwp_securityissues_sites*

Fires on a child site Hardening page at top.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing child site info.

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 766](class/class-mainwp-manage-sites-view.php#L766-L777)

### `mainwp-sucuriscan-sites`

*Method render_scan_site()*

Render Site Hardening sub page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($website)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_sucuriscan_sites'` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 724](class/class-mainwp-manage-sites-view.php#L724-L784)

### `mainwp_sucuriscan_sites`

*Action: mainwp_sucuriscan_sites*

Fires on a child site Hardening page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing child site info.

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 786](class/class-mainwp-manage-sites-view.php#L786-L797)

### `mainwp-wordfence-sites`

*Method render_scan_site()*

Render Site Hardening sub page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($website)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_wordfence_sites'` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 724](class/class-mainwp-manage-sites-view.php#L724-L804)

### `mainwp_wordfence_sites`

*Action: mainwp_wordfence_sites*

Fires on a child site Hardening page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing child site info.

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 806](class/class-mainwp-manage-sites-view.php#L806-L817)

### `mainwp-manage-sites-edit`

*Method render_edit_site()*

Render individual Child Site Edit sub page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($website)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_manage_sites_edit'` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 825](class/class-mainwp-manage-sites-view.php#L825-L1381)

### `mainwp-extension-sites-edit`

*Method render_edit_site()*

Render individual Child Site Edit sub page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($website)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_manage_sites_edit'` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 825](class/class-mainwp-manage-sites-view.php#L825-L1382)

### `mainwp_manage_sites_edit`

*This action is documented in ../pages/page-mainwp-manage-sites.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 1384](class/class-mainwp-manage-sites-view.php#L1384-L1385)

### `mainwp_extension_sites_edit_tablerow`

*Method render_edit_site()*

Render individual Child Site Edit sub page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 825](class/class-mainwp-manage-sites-view.php#L825-L1386)

### `mainwp_manage_sites_email_settings`

*Action: mainwp_manage_sites_email_settings*

Fires on the Email Settigns page at bottom.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the website info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 1817](class/class-mainwp-manage-sites-view.php#L1817-L1826)

### `mainwp_site_reconnected`

*Fires immediately after reconnect website.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website data.
`$success` |  | 
`$_error` |  | 

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 1988](class/class-mainwp-manage-sites-view.php#L1988-L1995)

### `mainwp_site_added`

*Fires immediately after a new website is added.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website data.
`$information` | `array` | The array of information data .

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 2250](class/class-mainwp-manage-sites-view.php#L2250-L2258)

### `mainwp_added_new_site`

*New site added*

Fires after adding a website to MainWP Dashboard.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$id` | `int` | Child site ID.
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 2260](class/class-mainwp-manage-sites-view.php#L2260-L2269)

### `mainwp_updated_site`

*Action: mainwp_updated_site*

Fires after updatig the child site options.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website->id` |  | 
`$data` | `array` | Child site data.

**Changelog**

Version | Description
------- | -----------
`3.5.1` | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 2352](class/class-mainwp-manage-sites-view.php#L2352-L2362)

### `mainwp_before_seclect_sites`

*Action: mainwp_before_seclect_sites*

Fires before the Select Sites box.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui-select-sites.php](class/class-mainwp-ui-select-sites.php), [line 96](class/class-mainwp-ui-select-sites.php#L96-L103)

### `mainwp_after_seclect_sites`

*Action: mainwp_after_seclect_sites*

Fires after the Select Sites box.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui-select-sites.php](class/class-mainwp-ui-select-sites.php), [line 124](class/class-mainwp-ui-select-sites.php#L124-L131)

### `mainwp_before_select_clients_list`

*Action: mainwp_before_select_clients_list*

Fires before the Select Clients list.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$clients` | `object` | Object containing Clients info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui-select-sites.php](class/class-mainwp-ui-select-sites.php), [line 355](class/class-mainwp-ui-select-sites.php#L355-L364)

### `mainwp_after_select_clients_list`

*Action: mainwp_after_select_clients_list*

Fires after the Select Clients list.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$clients` | `object` | Object containing Clients info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-ui-select-sites.php](class/class-mainwp-ui-select-sites.php), [line 405](class/class-mainwp-ui-select-sites.php#L405-L414)

### `mainwp_extensions_top_header_after_tab`

*Method render_header()*

Render page header.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$shownPage` | `string` | The page slug shown at this moment.

Source: [./class/class-mainwp-extensions-view.php](class/class-mainwp-extensions-view.php), [line 50](class/class-mainwp-extensions-view.php#L50-L99)

### `mainwp_extension_card_top`

*Action: mainwp_extension_card_top*

Fires at the Extension card top

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extension` | `array` | Array containing the Extension information.

**Changelog**

Version | Description
------- | -----------
`4.1.4.1` | 

Source: [./class/class-mainwp-extensions-view.php](class/class-mainwp-extensions-view.php), [line 442](class/class-mainwp-extensions-view.php#L442-L451)

### `mainwp_extension_card_bottom`

*Action: mainwp_extension_card_bottom*

Fires at the Extension card bottom

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extension` | `array` | Array containing the Extension information.

**Changelog**

Version | Description
------- | -----------
`4.1.4.1` | 

Source: [./class/class-mainwp-extensions-view.php](class/class-mainwp-extensions-view.php), [line 530](class/class-mainwp-extensions-view.php#L530-L539)

### `mainwp_before_template_part`

*Action: mainwp_before_template_part*

Fires before the email template is loaded.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template_name` | `string` | Template name.
`$located` | `resource` | Template file.
`$args` | `array` | Args.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 166](class/class-mainwp-notification-template.php#L166-L177)

### `mainwp_after_template_part`

*Action: mainwp_after_template_part*

Fires after the email template is loaded.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template_name` | `string` | Template name.
`$located` | `resource` | Template file.
`$args` | `array` | Args.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 181](class/class-mainwp-notification-template.php#L181-L192)

### `mainwp_synced_all_sites`

*Action: mainwp_synced_all_sites*

Fires upon successfull synchronization process.


**Changelog**

Version | Description
------- | -----------
`3.5.1` | 

Source: [./class/class-mainwp-post-handler.php](class/class-mainwp-post-handler.php), [line 605](class/class-mainwp-post-handler.php#L605-L612)

### `mainwp_client_suspend`

*Fires immediately after update client suspend/unsuspend.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client` | `object` | client data.
`$suspended` | `bool` | true\|false.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./class/class-mainwp-post-handler.php](class/class-mainwp-post-handler.php), [line 1110](class/class-mainwp-post-handler.php#L1110-L1118)

### `mainwp_install_plugin_card_top`

*Action: mainwp_install_plugin_card_top*

Fires at the plugin card at top on the Install Plugins page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-plugins-install-list-table.php](class/class-mainwp-plugins-install-list-table.php), [line 484](class/class-mainwp-plugins-install-list-table.php#L484-L491)

### `mainwp_install_plugin_card_bottom`

*Action: mainwp_install_plugin_card_bottom*

Fires at the plugin card at bottom on the Install Plugins page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$plugin` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-plugins-install-list-table.php](class/class-mainwp-plugins-install-list-table.php), [line 529](class/class-mainwp-plugins-install-list-table.php#L529-L536)

### `mainwp_db_after_update`

*Method install()*

Installs the new DB.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$currentVersion` |  | 
`$this->mainwp_db_version` |  | 

Source: [./class/class-mainwp-install.php](class/class-mainwp-install.php), [line 64](class/class-mainwp-install.php#L64-L442)

### `mainwp_before_plugin_theme_translation_update`

*Action: mainwp_before_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plugin'` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 648](class/class-mainwp-cron-jobs-auto-updates.php#L648-L655)

### `mainwp_after_plugin_theme_translation_update`

*Action: mainwp_after_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`'plugin'` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 672](class/class-mainwp-cron-jobs-auto-updates.php#L672-L679)

### `mainwp_before_plugin_theme_translation_update`

*Action: mainwp_before_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'theme'` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 735](class/class-mainwp-cron-jobs-auto-updates.php#L735-L742)

### `mainwp_after_plugin_theme_translation_update`

*Action: mainwp_after_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`'theme'` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 761](class/class-mainwp-cron-jobs-auto-updates.php#L761-L768)

### `mainwp_before_plugin_theme_translation_update`

*Action: mainwp_before_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'translation'` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 817](class/class-mainwp-cron-jobs-auto-updates.php#L817-L824)

### `mainwp_after_plugin_theme_translation_update`

*Action: mainwp_after_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`'translation'` |  | 
`implode(',', $slugs)` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 842](class/class-mainwp-cron-jobs-auto-updates.php#L842-L849)

### `mainwp_removed_extension_menu`

*Remove Extensions menu from MainWP Menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$key` |  | 

Source: [./class/class-mainwp-post-extension-handler.php](class/class-mainwp-post-extension-handler.php), [line 408](class/class-mainwp-post-extension-handler.php#L408-L427)

### `mainwp_licenses_deactivated_alert_email_header`

*Site Health Monitoring Email Header*

Fires at the top of the site health monitoring email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-licenses-deactivated-alert-email.php](templates/emails/mainwp-licenses-deactivated-alert-email.php), [line 31](templates/emails/mainwp-licenses-deactivated-alert-email.php#L31-L38)

### `mainwp_licenses_deactivated_alert_email_footer`

*Site Health Monitoring Email Footer*

Fires at the bottom of the site health monitoring email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-licenses-deactivated-alert-email.php](templates/emails/mainwp-licenses-deactivated-alert-email.php), [line 97](templates/emails/mainwp-licenses-deactivated-alert-email.php#L97-L104)

### `mainwp_daily_digest_email_header`

*Daily Digest Email Header*

Fires at the top of the daily digest email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-daily-digest-email.php](templates/emails/mainwp-daily-digest-email.php), [line 29](templates/emails/mainwp-daily-digest-email.php#L29-L36)

### `mainwp_daily_digest_email_footer`

*Daily Digest Email Footer*

Fires at the bottom of the daily digest email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-daily-digest-email.php](templates/emails/mainwp-daily-digest-email.php), [line 177](templates/emails/mainwp-daily-digest-email.php#L177-L184)

### `mainwp_http_check_email_header`

*HTTP Check Email Header*

Fires at the top of the HTTP check (after update checks) email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-after-update-http-check-email.php](templates/emails/mainwp-after-update-http-check-email.php), [line 29](templates/emails/mainwp-after-update-http-check-email.php#L29-L36)

### `mainwp_http_check_email_footer`

*HTTP Check Email Footer*

Fires at the bottom of the HTTP check (after update checks) email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-after-update-http-check-email.php](templates/emails/mainwp-after-update-http-check-email.php), [line 94](templates/emails/mainwp-after-update-http-check-email.php#L94-L101)

### `mainwp_uptime_monitoring_email_header`

*Uptime Monitoring Email Header*

Fires at the top of the uptime monitoring email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-uptime-monitoring-email.php](templates/emails/mainwp-uptime-monitoring-email.php), [line 32](templates/emails/mainwp-uptime-monitoring-email.php#L32-L39)

### `mainwp_uptime_monitoring_email_footer`

*Uptime Monitoring Email Footer*

Fires at the bottom of the uptime monitoring email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-uptime-monitoring-email.php](templates/emails/mainwp-uptime-monitoring-email.php), [line 144](templates/emails/mainwp-uptime-monitoring-email.php#L144-L151)

### `mainwp_site_health_monitoring_email_header`

*Site Health Monitoring Email Header*

Fires at the top of the site health monitoring email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-site-health-monitoring-email.php](templates/emails/mainwp-site-health-monitoring-email.php), [line 31](templates/emails/mainwp-site-health-monitoring-email.php#L31-L38)

### `mainwp_site_health_monitoring_email_footer`

*Site Health Monitoring Email Footer*

Fires at the bottom of the site health monitoring email template.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./templates/emails/mainwp-site-health-monitoring-email.php](templates/emails/mainwp-site-health-monitoring-email.php), [line 118](templates/emails/mainwp-site-health-monitoring-email.php#L118-L125)

### `mainwp_pageheader_settings`

*Render settings*

Renders the settings page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'ApiBackups'` |  | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 76](modules/api-backups/classes/class-api-backups-settings.php#L76-L88)

### `mainwp_pagefooter_settings`

*Render settings*

Renders the settings page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'ApiBackups'` |  | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 76](modules/api-backups/classes/class-api-backups-settings.php#L76-L108)

### `cloudways_api_form_top`

*Action: cloudways_api_form_top*

Fires at the top of CloudWays API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 274](modules/api-backups/classes/class-api-backups-settings.php#L274-L281)

### `cloudways_api_form_bottom`

*Action: cloudways_api_form_bottom*

Fires at the bottom of CloudWays API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 317](modules/api-backups/classes/class-api-backups-settings.php#L317-L324)

### `gridpane_api_form_top`

*Action: gridpane_api_form_top*

Fires at the top of GridPane API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 350](modules/api-backups/classes/class-api-backups-settings.php#L350-L357)

### `gridpane_api_form_bottom`

*Action: gridpane_api_form_bottom*

Fires at the bottom of GridPane API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 383](modules/api-backups/classes/class-api-backups-settings.php#L383-L390)

### `vultr_api_form_top`

*Action: vultr_api_form_top*

Fires at the top of Vultr API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 417](modules/api-backups/classes/class-api-backups-settings.php#L417-L424)

### `vultr_api_form_bottom`

*Action: vultr_api_form_bottom*

Fires at the bottom of Vultr API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 450](modules/api-backups/classes/class-api-backups-settings.php#L450-L457)

### `linode_api_form_top`

*Action: linode_api_form_top*

Fires at the top of Vultr API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 483](modules/api-backups/classes/class-api-backups-settings.php#L483-L490)

### `linode_api_form_bottom`

*Action: linode_api_form_bottom*

Fires at the bottom of Vultr API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 518](modules/api-backups/classes/class-api-backups-settings.php#L518-L525)

### `digitalocean_api_form_top`

*Action: digitalocean_api_form_top*

Fires at the top of DigitalOcean API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 551](modules/api-backups/classes/class-api-backups-settings.php#L551-L558)

### `digitalocean_api_form_bottom`

*Action: digitalocean_api_form_bottom*

Fires at the bottom of DigitalOcean API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 586](modules/api-backups/classes/class-api-backups-settings.php#L586-L593)

### `cpanel_api_form`

*Action: cpanel_api_form*

Fires at the top of cPanel API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 618](modules/api-backups/classes/class-api-backups-settings.php#L618-L625)

### `cpanel_api_form_bottom`

*Action: cpanel_api_form_bottom*

Fires at the bottom of cPanel API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 685](modules/api-backups/classes/class-api-backups-settings.php#L685-L692)

### `plesk_api_form_top`

*Action: plesk_api_form_top*

Fires at the top of Plesk API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 718](modules/api-backups/classes/class-api-backups-settings.php#L718-L725)

### `plesk_api_form_bottom`

*Action: plesk_api_form_bottom*

Fires at the bottom of Plesk API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 762](modules/api-backups/classes/class-api-backups-settings.php#L762-L769)

### `kinsta_api_form_top`

*Action: kinsta_api_form_top*

Fires at the top of Kinsta API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 795](modules/api-backups/classes/class-api-backups-settings.php#L795-L802)

### `kinsta_api_form_bottom`

*Action: kinsta_api_form_bottom*

Fires at the bottom of Kinsta API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./modules/api-backups/classes/class-api-backups-settings.php](modules/api-backups/classes/class-api-backups-settings.php), [line 851](modules/api-backups/classes/class-api-backups-settings.php#L851-L858)

### `mainwp_pageheader_sites`

*Render Tabs.*

Renders the page tabs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'ApiBackups'` |  | 

Source: [./modules/api-backups/classes/class-api-backups-overview.php](modules/api-backups/classes/class-api-backups-overview.php), [line 76](modules/api-backups/classes/class-api-backups-overview.php#L76-L82)

### `mainwp_pagefooter_sites`

*Render Tabs.*

Renders the page tabs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'ApiBackups'` |  | 

Source: [./modules/api-backups/classes/class-api-backups-overview.php](modules/api-backups/classes/class-api-backups-overview.php), [line 76](modules/api-backups/classes/class-api-backups-overview.php#L76-L103)

### `mainwp_log_action`

*Debugging log.*

Sets logging for debugging purpose.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'API Backups :: ' . $message` |  | 
`MainWP_Logger::API_BACKUPS_LOG_PRIORITY` |  | 
`$log_color` | `int` | Log color.

Source: [./modules/api-backups/classes/class-api-backups-utility.php](modules/api-backups/classes/class-api-backups-utility.php), [line 173](modules/api-backups/classes/class-api-backups-utility.php#L173-L191)

### `mainwp_delete_key_file`

*Method update_compatible_site_api_key*

Encrypt data.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$key_file` |  | 

Source: [./modules/api-backups/classes/class-api-backups-utility.php](modules/api-backups/classes/class-api-backups-utility.php), [line 607](modules/api-backups/classes/class-api-backups-utility.php#L607-L643)

### `mainwp_delete_key_file`

*Method update child api key.*

Encrypt data.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$key_file` |  | 

Source: [./modules/api-backups/classes/class-api-backups-utility.php](modules/api-backups/classes/class-api-backups-utility.php), [line 700](modules/api-backups/classes/class-api-backups-utility.php#L700-L742)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'mainwp_api_backups_selected_websites'` |  | 
`array(&$this, 'ajax_backups_selected_websites')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-handler.php](modules/api-backups/classes/class-api-backups-handler.php), [line 53](modules/api-backups/classes/class-api-backups-handler.php#L53-L58)

### `mainwp_secure_request`

*Method security_nonce().*

Handle security nonce.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$action` | `string` | security action.

Source: [./modules/api-backups/classes/class-api-backups-helper.php](modules/api-backups/classes/class-api-backups-helper.php), [line 134](modules/api-backups/classes/class-api-backups-helper.php#L134-L143)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cloudways_action_backup'` |  | 
`array(&$this, 'ajax_cloudways_action_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L105)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cloudways_action_individual_backup'` |  | 
`array(&$this, 'ajax_cloudways_action_individual_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L106)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cloudways_action_update_ids'` |  | 
`array(&$this, 'ajax_cloudways_action_update_ids')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L107)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cloudways_action_refresh_available_backups'` |  | 
`array(&$this, 'cloudways_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L108)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cloudways_action_restore_backup'` |  | 
`array(&$this, 'cloudways_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L109)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cloudways_action_delete_backup'` |  | 
`array(&$this, 'cloudways_action_delete_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L110)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'gridpane_action_create_backup'` |  | 
`array(&$this, 'ajax_gridpane_action_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L113)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'gridpane_action_individual_create_backup'` |  | 
`array(&$this, 'ajax_gridpane_action_individual_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L114)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'gridpane_action_update_ids'` |  | 
`array(&$this, 'ajax_gridpane_action_update_ids')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L115)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'gridpane_action_refresh_available_backups'` |  | 
`array(&$this, 'gridpane_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L116)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'gridpane_action_restore_backup'` |  | 
`array(&$this, 'gridpane_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L117)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'gridpane_action_delete_backup'` |  | 
`array(&$this, 'gridpane_action_delete_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L118)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'vultr_action_create_snapshot'` |  | 
`array(&$this, 'ajax_vultr_action_create_snapshot')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L121)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'vultr_action_individual_create_snapshot'` |  | 
`array(&$this, 'ajax_vultr_action_individual_create_snapshot')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L122)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'vultr_action_refresh_available_backups'` |  | 
`array(&$this, 'vultr_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L123)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'vultr_action_restore_backup'` |  | 
`array(&$this, 'ajax_vultr_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L124)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'vultr_action_delete_backup'` |  | 
`array(&$this, 'vultr_action_delete_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L125)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'linode_action_create_backup'` |  | 
`array(&$this, 'ajax_linode_action_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L128)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'linode_action_individual_create_backup'` |  | 
`array(&$this, 'ajax_linode_action_individual_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L129)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'linode_action_refresh_available_backups'` |  | 
`array(&$this, 'linode_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L130)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'linode_action_restore_backup'` |  | 
`array(&$this, 'linode_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L131)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'linode_action_cancel_backups'` |  | 
`array(&$this, 'linode_action_cancel_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L132)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'digitalocean_action_create_backup'` |  | 
`array(&$this, 'ajax_digitalocean_action_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L135)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'digitalocean_action_individual_create_backup'` |  | 
`array(&$this, 'ajax_digitalocean_action_individual_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L136)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'digitalocean_action_refresh_available_backups'` |  | 
`array(&$this, 'digitalocean_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L137)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'digitalocean_action_restore_backup'` |  | 
`array(&$this, 'digitalocean_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L138)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'digitalocean_action_delete_backup'` |  | 
`array(&$this, 'digitalocean_action_delete_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L139)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_refresh_available_backups'` |  | 
`array(&$this, 'ajax_cpanel_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L142)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_create_manual_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_create_manual_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L143)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_create_wptk_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_create_wptk_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L144)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_restore_wptk_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_restore_wptk_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L145)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_delete_wptk_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_delete_wptk_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L146)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_restore_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L147)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_restore_database_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_restore_database_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L148)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_restore_manual_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_restore_manual_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L149)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_create_database_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_create_database_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L150)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cpanel_action_create_full_backup'` |  | 
`array(&$this, 'ajax_cpanel_action_create_full_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L151)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plesk_action_refresh_available_backups'` |  | 
`array(&$this, 'ajax_plesk_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L154)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plesk_action_create_backup'` |  | 
`array(&$this, 'ajax_plesk_action_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L155)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plesk_action_restore_backup'` |  | 
`array(&$this, 'ajax_plesk_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L156)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plesk_action_delete_backup'` |  | 
`array(&$this, 'ajax_plesk_action_delete_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L157)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'kinsta_action_refresh_available_backups'` |  | 
`array(&$this, 'ajax_kinsta_action_refresh_available_backups')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L160)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'kinsta_action_create_backup'` |  | 
`array(&$this, 'ajax_kinsta_action_create_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L161)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'kinsta_action_restore_backup'` |  | 
`array(&$this, 'ajax_kinsta_action_restore_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L162)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'kinsta_action_delete_backup'` |  | 
`array(&$this, 'ajax_kinsta_action_delete_backup')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L163)

### `mainwp_ajax_add_action`

*Init ajax actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'action_backup_selected_sites'` |  | 
`array(&$this, 'action_backup_selected_sites')` |  | 

Source: [./modules/api-backups/classes/class-api-backups-3rd-party.php](modules/api-backups/classes/class-api-backups-3rd-party.php), [line 100](modules/api-backups/classes/class-api-backups-3rd-party.php#L100-L166)

### `mainwp_module_log_record_insert_error`

*Fires on a record insertion error*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$record` | `array` | 
`false` |  | 

Source: [./modules/logs/classes/class-log-db.php](modules/logs/classes/class-log-db.php), [line 77](modules/logs/classes/class-log-db.php#L77-L83)

### `mainwp_module_log_record_inserted`

*Fires after a record has been inserted*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$record_id` | `int` | 
`$record` | `array` | 

Source: [./modules/logs/classes/class-log-db.php](modules/logs/classes/class-log-db.php), [line 88](modules/logs/classes/class-log-db.php#L88-L94)

### `mainwp_compact_action`

*Create compact logs and erase records from the database.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'saved'` |  | 
`$year` |  | 
`$year_data` |  | 
`$start_time` | `int` | start time to compact.
`$end_time` | `int` | end time to compact.

Source: [./modules/logs/classes/class-log-db.php](modules/logs/classes/class-log-db.php), [line 205](modules/logs/classes/class-log-db.php#L205-L266)

### `mainwp_sync_site_log_install_actions`

*Method sync_log_site_actions().*

Sync site actions data.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | website data.
`$record_mapping` |  | 
`$object_id` |  | 

Source: [./modules/logs/classes/class-log-manager.php](modules/logs/classes/class-log-manager.php), [line 239](modules/logs/classes/class-log-manager.php#L239-L329)

### `mainwp_log_action`

*Schedules a purge of records.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'module log :: purge logs schedule start.'` |  | 
`MainWP_Logger::LOGS_AUTO_PURGE_LOG_PRIORITY` |  | 

Source: [./modules/logs/classes/class-log-admin.php](modules/logs/classes/class-log-admin.php), [line 192](modules/logs/classes/class-log-admin.php#L192-L217)

### `mainwp_module_dashboard_insights_help_item`

*Action: mainwp_module_dashboard_insights_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Insights page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./modules/logs/classes/class-log-admin.php](modules/logs/classes/class-log-admin.php), [line 309](modules/logs/classes/class-log-admin.php#L309-L320)

### `mainwp_pageheader_settings`

*This action is documented in ../pages/page-mainwp-manage-sites.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'Insights'` |  | 

Source: [./modules/logs/classes/class-log-settings.php](modules/logs/classes/class-log-settings.php), [line 164](modules/logs/classes/class-log-settings.php#L164-L165)

### `mainwp_pagefooter_settings`

*This action is documented in ../pages/page-mainwp-manage-sites.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'Insights'` |  | 

Source: [./modules/logs/classes/class-log-settings.php](modules/logs/classes/class-log-settings.php), [line 263](modules/logs/classes/class-log-settings.php#L263-L264)

### `mainwp_module_log_after_connectors_registration`

*Fires after all connectors have been registered.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$labels` | `array` | All register connectors labels array
`$this` |  | 

Source: [./modules/logs/classes/class-log-connectors.php](modules/logs/classes/class-log-connectors.php), [line 179](modules/logs/classes/class-log-connectors.php#L179-L185)

### `mainwp_before_overview_widgets`

*Action: mainwp_before_overview_widgets*

Fires at the top of the Overview page (before first widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'insights'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 903](modules/logs/pages/page-log-insights-page.php#L903-L910)

### `mainwp_after_overview_widgets`

*Action: 'mainwp_after_overview_widgets'*

Fires at the bottom of the Overview page (after the last widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'insights'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 925](modules/logs/pages/page-log-insights-page.php#L925-L932)

### `mainwp_module_log_overview_screen_options_top`

*Action: mainwp_module_log_overview_screen_options_top*

Fires at the top of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 962](modules/logs/pages/page-log-insights-page.php#L962-L969)

### `mainwp_module_log_overview_screen_options_bottom`

*Action: mainwp_module_log_overview_screen_options_bottom*

Fires at the bottom of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 976](modules/logs/pages/page-log-insights-page.php#L976-L983)

### `mainwp_screen_options_modal_top`

*Action: mainwp_screen_options_modal_top*

Fires at the top of the Page Settings modal element.


**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 1050](modules/logs/pages/page-log-insights-page.php#L1050-L1057)

### `mainwp_screen_options_modal_bottom`

*Action: mainwp_screen_options_modal_bottom*

Fires at the bottom of the Page Settings modal element.


**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 1086](modules/logs/pages/page-log-insights-page.php#L1086-L1093)

### `mainwp_logs_manage_table_top`

*Action: mainwp_logs_manage_table_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'recent_events'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.4` | 

Source: [./modules/logs/pages/page-log-manage-insights-events-page.php](modules/logs/pages/page-log-manage-insights-events-page.php), [line 189](modules/logs/pages/page-log-manage-insights-events-page.php#L189-L196)

### `mainwp_logs_manage_table_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'recent_events'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.4` | 

Source: [./modules/logs/pages/page-log-manage-insights-events-page.php](modules/logs/pages/page-log-manage-insights-events-page.php), [line 203](modules/logs/pages/page-log-manage-insights-events-page.php#L203-L210)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'users'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-users-widget.php](modules/logs/widgets/widget-log-users-widget.php), [line 91](modules/logs/widgets/widget-log-users-widget.php#L91-L98)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'users'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-users-widget.php](modules/logs/widgets/widget-log-users-widget.php), [line 106](modules/logs/widgets/widget-log-users-widget.php#L106-L113)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'pages'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-pages-widget.php](modules/logs/widgets/widget-log-pages-widget.php), [line 91](modules/logs/widgets/widget-log-pages-widget.php#L91-L98)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'pages'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-pages-widget.php](modules/logs/widgets/widget-log-pages-widget.php), [line 106](modules/logs/widgets/widget-log-pages-widget.php#L106-L113)

### `mainwp_logs_widget_top`

*Actoin: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'recent_events'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-recent-events-widget.php](modules/logs/widgets/widget-log-recent-events-widget.php), [line 85](modules/logs/widgets/widget-log-recent-events-widget.php#L85-L92)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'recent_events'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-recent-events-widget.php](modules/logs/widgets/widget-log-recent-events-widget.php), [line 100](modules/logs/widgets/widget-log-recent-events-widget.php#L100-L107)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plugins'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-plugins-widget.php](modules/logs/widgets/widget-log-plugins-widget.php), [line 91](modules/logs/widgets/widget-log-plugins-widget.php#L91-L98)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plugins'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-plugins-widget.php](modules/logs/widgets/widget-log-plugins-widget.php), [line 106](modules/logs/widgets/widget-log-plugins-widget.php#L106-L113)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'wp'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-wp-widget.php](modules/logs/widgets/widget-log-graph-wp-widget.php), [line 76](modules/logs/widgets/widget-log-graph-wp-widget.php#L76-L83)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'wp'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-wp-widget.php](modules/logs/widgets/widget-log-graph-wp-widget.php), [line 91](modules/logs/widgets/widget-log-graph-wp-widget.php#L91-L98)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-status-widget.php](modules/logs/widgets/widget-log-graph-status-widget.php), [line 76](modules/logs/widgets/widget-log-graph-status-widget.php#L76-L83)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-status-widget.php](modules/logs/widgets/widget-log-graph-status-widget.php), [line 91](modules/logs/widgets/widget-log-graph-status-widget.php#L91-L98)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-clients-widget.php](modules/logs/widgets/widget-log-graph-clients-widget.php), [line 76](modules/logs/widgets/widget-log-graph-clients-widget.php#L76-L83)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-clients-widget.php](modules/logs/widgets/widget-log-graph-clients-widget.php), [line 91](modules/logs/widgets/widget-log-graph-clients-widget.php#L91-L98)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-plugins-widget.php](modules/logs/widgets/widget-log-graph-plugins-widget.php), [line 76](modules/logs/widgets/widget-log-graph-plugins-widget.php#L76-L83)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-plugins-widget.php](modules/logs/widgets/widget-log-graph-plugins-widget.php), [line 91](modules/logs/widgets/widget-log-graph-plugins-widget.php#L91-L98)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'php'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-php-widget.php](modules/logs/widgets/widget-log-graph-php-widget.php), [line 76](modules/logs/widgets/widget-log-graph-php-widget.php#L76-L83)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'php'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-php-widget.php](modules/logs/widgets/widget-log-graph-php-widget.php), [line 91](modules/logs/widgets/widget-log-graph-php-widget.php#L91-L98)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'themes'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-themes-widget.php](modules/logs/widgets/widget-log-themes-widget.php), [line 91](modules/logs/widgets/widget-log-themes-widget.php#L91-L98)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'themes'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-themes-widget.php](modules/logs/widgets/widget-log-themes-widget.php), [line 106](modules/logs/widgets/widget-log-themes-widget.php#L106-L113)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'core'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-sites-widget.php](modules/logs/widgets/widget-log-sites-widget.php), [line 92](modules/logs/widgets/widget-log-sites-widget.php#L92-L99)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'core'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-sites-widget.php](modules/logs/widgets/widget-log-sites-widget.php), [line 107](modules/logs/widgets/widget-log-sites-widget.php#L107-L114)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-tags-widget.php](modules/logs/widgets/widget-log-graph-tags-widget.php), [line 78](modules/logs/widgets/widget-log-graph-tags-widget.php#L78-L85)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'status'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-tags-widget.php](modules/logs/widgets/widget-log-graph-tags-widget.php), [line 93](modules/logs/widgets/widget-log-graph-tags-widget.php#L93-L100)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'posts'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-posts-widget.php](modules/logs/widgets/widget-log-posts-widget.php), [line 91](modules/logs/widgets/widget-log-posts-widget.php#L91-L98)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'posts'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-posts-widget.php](modules/logs/widgets/widget-log-posts-widget.php), [line 106](modules/logs/widgets/widget-log-posts-widget.php#L106-L113)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'themes'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-themes-widget.php](modules/logs/widgets/widget-log-graph-themes-widget.php), [line 76](modules/logs/widgets/widget-log-graph-themes-widget.php#L76-L83)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'themes'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-graph-themes-widget.php](modules/logs/widgets/widget-log-graph-themes-widget.php), [line 91](modules/logs/widgets/widget-log-graph-themes-widget.php#L91-L98)

### `mainwp_logs_widget_top`

*Action: mainwp_logs_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'clients'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-clients-widget.php](modules/logs/widgets/widget-log-clients-widget.php), [line 91](modules/logs/widgets/widget-log-clients-widget.php#L91-L98)

### `mainwp_logs_widget_bottom`

*Action: mainwp_logs_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'clients'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/widgets/widget-log-clients-widget.php](modules/logs/widgets/widget-log-clients-widget.php), [line 106](modules/logs/widgets/widget-log-clients-widget.php#L106-L113)

### `mainwp_module_cost_tracker_help_item`

*Action: mainwp_module_cost_tracker_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Cost Tracker page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`5.0` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-admin.php](modules/cost-tracker/classes/class-cost-tracker-admin.php), [line 874](modules/cost-tracker/classes/class-cost-tracker-admin.php#L874-L885)

### `mainwp_before_overview_widgets`

*Action: mainwp_before_overview_widgets*

Fires at the top of the Overview page (before first widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'costsummary'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 373](modules/cost-tracker/classes/class-cost-tracker-summary.php#L373-L380)

### `mainwp_after_overview_widgets`

*Action: 'mainwp_after_overview_widgets'*

Fires at the bottom of the Overview page (after the last widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'costsummary'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 393](modules/cost-tracker/classes/class-cost-tracker-summary.php#L393-L400)

### `mainwp_module_cost_tracker_summary_screen_options_top`

*Action: mainwp_module_cost_tracker_summary_screen_options_top*

Fires at the top of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 437](modules/cost-tracker/classes/class-cost-tracker-summary.php#L437-L444)

### `mainwp_module_cost_tracker_summary_screen_options_bottom`

*Action: mainwp_module_cost_tracker_summary_screen_options_bottom*

Fires at the bottom of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 451](modules/cost-tracker/classes/class-cost-tracker-summary.php#L451-L458)

### `mainwp_screen_options_modal_top`

*Action: mainwp_screen_options_modal_top*

Fires at the top of the Page Settings modal element.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'costsummary'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 515](modules/cost-tracker/classes/class-cost-tracker-summary.php#L515-L522)

### `mainwp_screen_options_modal_bottom`

*Action: mainwp_screen_options_modal_bottom*

Fires at the bottom of the Page Settings modal element.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'costsummary'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 551](modules/cost-tracker/classes/class-cost-tracker-summary.php#L551-L558)

### `mainwp_module_cost_tracker_email_header`

*HTTP Check Email Header*

Fires at the top of the HTTP check (after update checks) email template.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./modules/cost-tracker/templates/emails/module-cost-tracker-email.php](modules/cost-tracker/templates/emails/module-cost-tracker-email.php), [line 29](modules/cost-tracker/templates/emails/module-cost-tracker-email.php#L29-L36)

### `mainwp_module_cost_tracker_email_footer`

*HTTP Check Email Footer*

Fires at the bottom of the HTTP check (after update checks) email template.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./modules/cost-tracker/templates/emails/module-cost-tracker-email.php](modules/cost-tracker/templates/emails/module-cost-tracker-email.php), [line 75](modules/cost-tracker/templates/emails/module-cost-tracker-email.php#L75-L82)

### `mainwp_module_cost_tracker_actions_bar_left`

*Render Actions Bar*

Renders the actions bar on the Dashboard tab.


Source: [./modules/cost-tracker/pages/page-cost-tracker-dashboard.php](modules/cost-tracker/pages/page-cost-tracker-dashboard.php), [line 1110](modules/cost-tracker/pages/page-cost-tracker-dashboard.php#L1110-L1125)

### `mainwp_module_cost_tracker_actions_bar_right`

*Render Actions Bar*

Renders the actions bar on the Dashboard tab.


Source: [./modules/cost-tracker/pages/page-cost-tracker-dashboard.php](modules/cost-tracker/pages/page-cost-tracker-dashboard.php), [line 1110](modules/cost-tracker/pages/page-cost-tracker-dashboard.php#L1110-L1129)

### `mainwp_select_sites_box`

*Render settings*

Renders the extension settings page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`'checkbox'` |  | 
`true` |  | 
`true` |  | 
`''` |  | 
`''` |  | 
`$sel_sites` |  | 
`$sel_groups` |  | 
`true` |  | 
`$sel_clients` |  | 

Source: [./modules/cost-tracker/pages/page-cost-tracker-add-edit.php](modules/cost-tracker/pages/page-cost-tracker-add-edit.php), [line 85](modules/cost-tracker/pages/page-cost-tracker-add-edit.php#L85-L507)

### `mainwp_module_cost_tracker_settings_bottom`

*Render settings content.*

Renders the extension settings page.


Source: [./modules/cost-tracker/pages/page-cost-tracker-settings.php](modules/cost-tracker/pages/page-cost-tracker-settings.php), [line 88](modules/cost-tracker/pages/page-cost-tracker-settings.php#L88-L343)

### `mainwp_module_upcoming_renewals_before_costs_list`

*Action: mainwp_module_upcoming_renewals_before_costs_list*

Fires before the list of costs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$tab` | `string` | Tab.
`$cost_data` | `array` | Cost data.

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php), [line 185](modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php#L185-L195)

### `mainwp_module_upcoming_renewals_after_costs_list`

*Action: mainwp_module_upcoming_renewals_after_costs_list*

Fires after the list of costs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$tab` | `string` | Tab.
`$cost_data` | `array` | Cost data.

**Changelog**

Version | Description
------- | -----------
`5.0.1` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php), [line 223](modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php#L223-L233)

### `mainwp_module_yearly_renewals_before_costs_list`

*Action: mainwp_module_yearly_renewals_before_costs_list*

Fires before the list of costs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$tab` | `string` | Tab.
`$cost_data` | `array` | Cost data.

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php), [line 193](modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php#L193-L203)

### `mainwp_module_yearly_renewals_after_costs_list`

*Action: mainwp_module_yearly_renewals_after_costs_list*

Fires after the list of costs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$tab` | `string` | Tab.
`$cost_data` | `array` | Cost data.

**Changelog**

Version | Description
------- | -----------
`5.0.1` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php), [line 243](modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php#L243-L253)

### `mainwp_module_monthly_renewals_before_costs_list`

*Action: mainwp_module_monthly_renewals_before_costs_list*

Fires before the list of costs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$tab` | `string` | Tab.
`$cost_data` | `array` | Cost data.

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php), [line 190](modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php#L190-L200)

### `mainwp_module_monthly_renewals_after_costs_list`

*Action: mainwp_module_monthly_renewals_after_costs_list*

Fires after the list of costs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$tab` | `string` | Tab.
`$cost_data` | `array` | Cost data.

**Changelog**

Version | Description
------- | -----------
`5.0.1` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php), [line 240](modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php#L240-L250)

### `mainwp_module_cost_tracker_widget_top`

*Action: mainwp_module_cost_tracker_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'payment-left-for-this-month'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-payment-left-this-month.php](modules/cost-tracker/widgets/widget-cost-tracker-payment-left-this-month.php), [line 65](modules/cost-tracker/widgets/widget-cost-tracker-payment-left-this-month.php#L65-L72)

### `mainwp_module_cost_tracker_widget_bottom`

*Action: mainwp_module_cost_tracker_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'payment-left-for-this-month'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-payment-left-this-month.php](modules/cost-tracker/widgets/widget-cost-tracker-payment-left-this-month.php), [line 79](modules/cost-tracker/widgets/widget-cost-tracker-payment-left-this-month.php#L79-L86)

### `mainwp_module_cost_tracker_widget_top`

*Action: mainwp_module_cost_tracker_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'monthly-totals'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-monthly-totals.php](modules/cost-tracker/widgets/widget-cost-tracker-monthly-totals.php), [line 65](modules/cost-tracker/widgets/widget-cost-tracker-monthly-totals.php#L65-L72)

### `mainwp_module_cost_tracker_widget_bottom`

*Action: mainwp_module_cost_tracker_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'monthly-totals'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-monthly-totals.php](modules/cost-tracker/widgets/widget-cost-tracker-monthly-totals.php), [line 79](modules/cost-tracker/widgets/widget-cost-tracker-monthly-totals.php#L79-L86)

### `mainwp_module_cost_tracker_widget_top`

*Action: mainwp_module_cost_tracker_widget_top*

Fires at the top of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'category-totals'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-category-totals.php](modules/cost-tracker/widgets/widget-cost-tracker-category-totals.php), [line 65](modules/cost-tracker/widgets/widget-cost-tracker-category-totals.php#L65-L72)

### `mainwp_module_cost_tracker_widget_bottom`

*Action: mainwp_module_cost_tracker_widget_bottom*

Fires at the bottom of the widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'category-totals'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.2` | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-category-totals.php](modules/cost-tracker/widgets/widget-cost-tracker-category-totals.php), [line 79](modules/cost-tracker/widgets/widget-cost-tracker-category-totals.php#L79-L86)

### `mainwp_before_save_general_settings`

*Action: mainwp_before_save_general_settings*

Fires before general settings save.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_POST` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 454](pages/page-mainwp-settings.php#L454-L461)

### `mainwp_after_save_general_settings`

*Action: mainwp_after_save_general_settings*

Fires after save general settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_POST` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 585](pages/page-mainwp-settings.php#L585-L592)

### `mainwp_settings_form_top`

*Action: mainwp_settings_form_top*

Fires at the top of settings form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 631](pages/page-mainwp-settings.php#L631-L638)

### `mainwp_settings_form_bottom`

*Action: mainwp_settings_form_bottom*

Fires at the bottom of settings form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 906](pages/page-mainwp-settings.php#L906-L913)

### `mainwp_before_save_advanced_settings`

*Action: mainwp_before_save_advanced_settings*

Fires before save advanced settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_POST` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1319](pages/page-mainwp-settings.php#L1319-L1326)

### `mainwp_after_save_advanced_settings`

*Action: mainwp_after_save_advanced_settings*

Fires after advanced settings save.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_POST` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1373](pages/page-mainwp-settings.php#L1373-L1380)

### `mainwp_advanced_settings_form_top`

*Action: mainwp_advanced_settings_form_top*

Fires at the top of advanced settings form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1401](pages/page-mainwp-settings.php#L1401-L1408)

### `mainwp_advanced_settings_form_bottom`

*Action: mainwp_advanced_settings_form_bottom*

Fires at the bottom of advanced settings form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1680](pages/page-mainwp-settings.php#L1680-L1687)

### `mainwp_tools_form_top`

*Action: mainwp_tools_form_top*

Fires at the top of MainWP tools form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1995](pages/page-mainwp-settings.php#L1995-L2002)

### `mainwp_tools_form_bottom`

*Action: mainwp_tools_form_bottom*

Fires at the bottom of mainwp tools form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 2111](pages/page-mainwp-settings.php#L2111-L2118)

### `mainwp_settings_help_item`

*Action: mainwp_settings_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Settings page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 2372](pages/page-mainwp-settings.php#L2372-L2383)

### `mainwp_plugins_actions_bar_left`

*Action: mainwp_plugins_actions_bar_left*

Fires at the left side of the actions bar on the Plugins screen, after the Bulk Actions menu.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 447](pages/page-mainwp-plugins.php#L447-L454)

### `mainwp_plugins_actions_bar_right`

*Action: mainwp_plugins_actions_bar_right*

Fires at the right side of the actions bar on the Plugins screen.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 461](pages/page-mainwp-plugins.php#L461-L468)

### `mainwp_manage_plugins_sidebar_top`

*Action: mainwp_manage_plugins_sidebar_top*

Fires at the top of the sidebar on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 505](pages/page-mainwp-plugins.php#L505-L512)

### `mainwp_manage_plugins_before_select_sites`

*Action: mainwp_manage_plugins_before_select_sites*

Fires before the Select Sites elemnt on Manage plugins.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 517](pages/page-mainwp-plugins.php#L517-L524)

### `mainwp_manage_plugins_after_select_sites`

*Action: mainwp_manage_plugins_after_select_sites*

Fires after the Select Sites elemnt on Manage plugins.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 540](pages/page-mainwp-plugins.php#L540-L547)

### `mainwp_manage_plugins_before_search_options`

*Action: mainwp_manage_plugins_before_search_options*

Fires before the Search Options elemnt on Manage plugins.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 555](pages/page-mainwp-plugins.php#L555-L562)

### `mainwp_manage_plugins_after_search_options`

*Action: mainwp_manage_plugins_after_search_options*

Fires after the Search Options elemnt on Manage plugins.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 580](pages/page-mainwp-plugins.php#L580-L587)

### `mainwp_manage_plugins_before_submit_button`

*Action: mainwp_manage_plugins_before_submit_button*

Fires before the Submit Button elemnt on Manage plugins.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 596](pages/page-mainwp-plugins.php#L596-L603)

### `mainwp_manage_plugins_after_submit_button`

*Action: mainwp_manage_plugins_after_submit_button*

Fires after the Submit Button elemnt on Manage plugins.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 607](pages/page-mainwp-plugins.php#L607-L614)

### `mainwp_manage_plugins_sidebar_bottom`

*Action: mainwp_manage_plugins_sidebar_bottom*

Fires at the bottom of the sidebar on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 618](pages/page-mainwp-plugins.php#L618-L625)

### `mainwp_plugins_bulk_action`

*Action: mainwp_plugins_bulk_action*

Adds a new action to the Manage Plugins bulk actions menu.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1132](pages/page-mainwp-plugins.php#L1132-L1141)

### `mainwp_before_plugins_table`

*Action: mainwp_before_plugins_table*

Fires before the Plugins table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1268](pages/page-mainwp-plugins.php#L1268-L1275)

### `mainwp_after_plugins_table`

*Action: mainwp_after_plugins_table*

Fires after the Plugins table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1476](pages/page-mainwp-plugins.php#L1476-L1483)

### `mainwp_before_plugins_table`

*Action: mainwp_before_plugins_table*

Fires before the Plugins table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1553](pages/page-mainwp-plugins.php#L1553-L1560)

### `mainwp_after_plugins_table`

*Action: mainwp_after_plugins_table*

Fires after the Plugins table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1784](pages/page-mainwp-plugins.php#L1784-L1791)

### `mainwp_install_plugin_theme_tabs_header_top`

*Render Install plugins Table.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plugin'` |  | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1834)

### `mainwp_install_plugins_actions_bar_right`

*Install Plugins actions bar (right)*

Fires at the left side of the actions bar on the Install Plugins screen, after the Nav buttons.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1837](pages/page-mainwp-plugins.php#L1837-L1844)

### `mainwp_install_plugins_actions_bar_left`

*Install Plugins actions bar (left)*

Fires at the left side of the actions bar on the Install Plugins screen, after the Search bar.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1871](pages/page-mainwp-plugins.php#L1871-L1878)

### `mainwp_bulk_install_tabs_content`

*Render Install plugins Table.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plugin'` |  | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1905)

### `mainwp_manage_plugins_sidebar_top`

*Render Install plugins Table.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1922)

### `mainwp_manage_plugins_before_select_sites`

*Render Install plugins Table.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1924)

### `mainwp_manage_plugins_after_select_sites`

*Render Install plugins Table.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1936)

### `mainwp_manage_plugins_before_search_options`

*Render Install plugins Table.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1941)

### `mainwp_manage_plugins_after_search_options`

*Render Install plugins Table.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1959)

### `mainwp_manage_plugins_before_submit_button`

*Render Install plugins Table.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1963)

### `mainwp_manage_plugins_before_submit_button`

*Render Install plugins Table.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1984)

### `mainwp_bulk_install_sidebar_submit_bottom`

*Render Install plugins Table.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'plugin'` |  | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1987)

### `mainwp_manage_plugins_sidebar_bottom`

*Render Install plugins Table.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'install'` |  | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1803](pages/page-mainwp-plugins.php#L1803-L1990)

### `mainwp_plugins_auto_updates_bulk_action`

*Action: mainwp_plugins_auto_updates_bulk_action*

Adds new action to the bulk actions menu on Plugins Auto Updates.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2030](pages/page-mainwp-plugins.php#L2030-L2037)

### `mainwp_manage_plugins_sidebar_top`

*Render Autoupdate SubPage.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1997](pages/page-mainwp-plugins.php#L1997-L2079)

### `mainwp_manage_plugins_before_search_options`

*Render Autoupdate SubPage.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1997](pages/page-mainwp-plugins.php#L1997-L2081)

### `mainwp_manage_plugins_after_search_options`

*Render Autoupdate SubPage.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1997](pages/page-mainwp-plugins.php#L1997-L2094)

### `mainwp_manage_plugins_before_submit_button`

*Render Autoupdate SubPage.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1997](pages/page-mainwp-plugins.php#L1997-L2119)

### `mainwp_manage_plugins_after_submit_button`

*Render Autoupdate SubPage.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1997](pages/page-mainwp-plugins.php#L1997-L2121)

### `mainwp_manage_plugins_sidebar_bottom`

*Render Autoupdate SubPage.*


Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1997](pages/page-mainwp-plugins.php#L1997-L2123)

### `mainwp_plugins_before_auto_updates_table`

*Action: mainwp_plugins_before_auto_updates_table*

Fires before the Auto Update Plugins table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2313](pages/page-mainwp-plugins.php#L2313-L2320)

### `mainwp_plugins_after_auto_updates_table`

*Action: mainwp_plugins_after_auto_updates_table*

Fires after the Auto Update Plugins table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2398](pages/page-mainwp-plugins.php#L2398-L2405)

### `mainwp_plugins_before_ignored_updates`

*Action: mainwp_plugins_before_ignored_updates*

Fires on the top of the Ignored Plugin Updates page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredPlugins` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2494](pages/page-mainwp-plugins.php#L2494-L2501)

### `mainwp_plugins_after_ignored_updates`

*Action: mainwp_plugins_after_ignored_updates*

Fires on the bottom of the Ignored Plugin Updates page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredPlugins` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2515](pages/page-mainwp-plugins.php#L2515-L2522)

### `mainwp_plugins_before_ignored_abandoned`

*Action: mainwp_plugins_before_ignored_abandoned*

Fires on the top of the Ignored Plugins Abandoned page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredPlugins` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2780](pages/page-mainwp-plugins.php#L2780-L2787)

### `mainwp_plugins_after_ignored_abandoned`

*Action: mainwp_plugins_after_ignored_abandoned*

Fires on the bottom of the Ignored Plugins Abandoned page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredPlugins` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2801](pages/page-mainwp-plugins.php#L2801-L2808)

### `mainwp_plugins_help_item`

*Action: mainwp_plugins_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Plugins page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 3018](pages/page-mainwp-plugins.php#L3018-L3029)

### `mainwp_check_site_result`

*Method check_site()*

Check to add site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ret` |  | 
`$_POST` |  | 

Source: [./pages/page-mainwp-manage-sites-handler.php](pages/page-mainwp-manage-sites-handler.php), [line 26](pages/page-mainwp-manage-sites-handler.php#L26-L93)

### `mainwp_applypluginsettings_{$ext_dir_slug}`

*Apply plugin settings*

Fires to apply certain plugin settigns automatically while adding a new site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$site_id` | `int` | Child site ID.

Source: [./pages/page-mainwp-manage-sites-handler.php](pages/page-mainwp-manage-sites-handler.php), [line 276](pages/page-mainwp-manage-sites-handler.php#L276-L285)

### `mainwp_delete_site`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

Source: [./pages/page-mainwp-manage-sites-handler.php](pages/page-mainwp-manage-sites-handler.php), [line 453](pages/page-mainwp-manage-sites-handler.php#L453-L453)

### `mainwp_site_deleted`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

Source: [./pages/page-mainwp-manage-sites-handler.php](pages/page-mainwp-manage-sites-handler.php), [line 462](pages/page-mainwp-manage-sites-handler.php#L462-L462)

### `mainwp_reset_admin_pass_modal_top`

*Action: mainwp_reset_admin_pass_modal_top*

Fires at the top of the Update Admin Passwords modal.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 193](pages/page-mainwp-bulk-update-admin-passwords.php#L193-L200)

### `mainwp_reset_admin_pass_modal_bottom`

*Action: mainwp_reset_admin_pass_modal_bottom*

Fires at the bottom of the Update Admin Passwords modal.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 213](pages/page-mainwp-bulk-update-admin-passwords.php#L213-L220)

### `mainwp_admin_pass_before_users_table`

*Action: mainwp_admin_pass_before_users_table*

Fires before the Connected Admin Users mysql_list_tables


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 264](pages/page-mainwp-bulk-update-admin-passwords.php#L264-L271)

### `mainwp_admin_pass_after_users_table`

*Action: mainwp_admin_pass_after_users_table*

Fires after the Connected Admin Users mysql_list_tables


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 309](pages/page-mainwp-bulk-update-admin-passwords.php#L309-L316)

### `mainwp_admin_pass_sidebar_top`

*Action: mainwp_admin_pass_sidebar_top*

Fires at the top of the sidebar on Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 357](pages/page-mainwp-bulk-update-admin-passwords.php#L357-L364)

### `mainwp_admin_pass_before_select_sites`

*Action: mainwp_admin_pass_before_select_sites*

Fires before the Select Sites section on the Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 368](pages/page-mainwp-bulk-update-admin-passwords.php#L368-L375)

### `mainwp_admin_pass_after_select_sites`

*Action: mainwp_admin_pass_after_select_sites*

Fires after the Select Sites section on the Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 387](pages/page-mainwp-bulk-update-admin-passwords.php#L387-L394)

### `mainwp_admin_pass_before_pass_form`

*Action: mainwp_admin_pass_before_pass_form*

Fires before the New password form on the Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 402](pages/page-mainwp-bulk-update-admin-passwords.php#L402-L409)

### `mainwp_admin_pass_after_pass_form`

*Action: mainwp_admin_pass_after_pass_form*

Fires after the New password form on the Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 423](pages/page-mainwp-bulk-update-admin-passwords.php#L423-L430)

### `mainwp_admin_pass_before_submit_button`

*Action: mainwp_admin_pass_before_submit_button*

Fires before the Submit button on the Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 437](pages/page-mainwp-bulk-update-admin-passwords.php#L437-L444)

### `mainwp_admin_pass_after_submit_button`

*Action: mainwp_admin_pass_after_submit_button*

Fires after the Submit button on the Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 452](pages/page-mainwp-bulk-update-admin-passwords.php#L452-L459)

### `mainwp_admin_pass_sidebar_bottom`

*Action: mainwp_admin_pass_sidebar_bottom*

Fires at the bottom of the sidebar on Admin Passwords page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 463](pages/page-mainwp-bulk-update-admin-passwords.php#L463-L470)

### `mainwp_bulkpost_before_post`

*Before Post post action*

Fires right before posting the 'bulkpost' to child sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$p_id` | `int` | Page ID.

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 447](pages/page-mainwp-post-page-handler.php#L447-L456)

### `mainwp_posts_posting_popup_actions`

*Method posting()*

Create bulk posts on sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_id` | `int` | Post or Page ID.

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 419](pages/page-mainwp-post-page-handler.php#L419-L480)

### `mainwp-post-posting-post`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($website, $output->added_id[$website->id], $links)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_post_posting_post'` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L819)

### `mainwp-bulkposting-done`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($_post, $website, $output)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_bulkposting_done'` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L820)

### `mainwp_post_posting_post`

*Posting post*

Fires while posting post.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing child site data.
`$output->added_id[$website->id]` |  | 
`$links` | `array` | Links.

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 822](pages/page-mainwp-post-page-handler.php#L822-L833)

### `mainwp_bulkposting_done`

*Posting post completed*

Fires after the post posting process is completed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_post` | `array` | Array containing the post data.
`$website` | `object` | Object containing child site data.
`$output` | `array` | Output data.

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 835](pages/page-mainwp-post-page-handler.php#L835-L846)

### `mainwp_manageclients_tabletop`

*Method render_second_top_header()*

Render second top header.


Source: [./pages/page-mainwp-client.php](pages/page-mainwp-client.php), [line 565](pages/page-mainwp-client.php#L565-L576)

### `mainwp_client_updated`

*Add client*

Fires after add a client.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$inserted` | `object` | client data.
`$add_new` | `bool` | true add new, false updated.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./pages/page-mainwp-client.php](pages/page-mainwp-client.php), [line 1340](pages/page-mainwp-client.php#L1340-L1350)

### `mainwp_client_suspend`

*Fires immediately after update client suspend/unsuspend.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$inserted` |  | 
`$new_suspended` | `bool` | true\|false.

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./pages/page-mainwp-client.php](pages/page-mainwp-client.php), [line 1353](pages/page-mainwp-client.php#L1353-L1361)

### `mainwp_manage_posts_bulk_action`

*Method render()*

Render the page content.


Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 539](pages/page-mainwp-post.php#L539-L583)

### `mainwp_posts_bulk_action`

*Action: mainwp_posts_bulk_action*

Adds new action to the Bulk Actions menu on Manage Posts.

Suggested HTML Markup:
<option value="Your custom value">Your custom text</option>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 588](pages/page-mainwp-post.php#L588-L598)

### `mainwp_posts_actions_bar_left`

*Action: mainwp_posts_actions_bar_left*

Fires at the left side of the actions bar on the Posts screen, after the Bulk Actions menu.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 603](pages/page-mainwp-post.php#L603-L610)

### `mainwp_posts_actions_bar_right`

*Action: mainwp_posts_actions_bar_right*

Fires at the right side of the actions bar on the Posts screen.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 615](pages/page-mainwp-post.php#L615-L622)

### `mainwp_manage_posts_sidebar_top`

*Action: mainwp_manage_posts_sidebar_top*

Fires at the top of the sidebar on Manage posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 640](pages/page-mainwp-post.php#L640-L647)

### `mainwp_manage_posts_before_select_sites`

*Action: mainwp_manage_posts_before_select_sites*

Fires before the Select Sites section on Manage posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 651](pages/page-mainwp-post.php#L651-L658)

### `mainwp_manage_posts_after_select_sites`

*Action: mainwp_manage_posts_after_select_sites*

Fires after the Select Sites section on Manage posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 674](pages/page-mainwp-post.php#L674-L681)

### `mainwp_manage_posts_before_search_options`

*Action: mainwp_manage_posts_before_search_options*

Fires before the Search Options on Manage Posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 689](pages/page-mainwp-post.php#L689-L696)

### `mainwp_manage_posts_after_search_options`

*Action: mainwp_manage_posts_after_search_options*

Fires after the Search Options on Manage Posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 719](pages/page-mainwp-post.php#L719-L726)

### `mainwp_manage_posts_before_submit_button`

*Action: mainwp_manage_posts_before_submit_button*

Fires before the Submit Button on Manage Posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 738](pages/page-mainwp-post.php#L738-L745)

### `mainwp_manage_posts_after_submit_button`

*Action: mainwp_manage_posts_after_submit_button*

Fires after the Submit Button on Manage Posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 754](pages/page-mainwp-post.php#L754-L761)

### `mainwp_manage_posts_sidebar_bottom`

*Action: mainwp_manage_posts_sidebar_bottom*

Fires at the bottom of the sidebar on Manage posts.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 765](pages/page-mainwp-post.php#L765-L772)

### `mainwp_before_posts_table`

*Action: mainwp_before_posts_table*

Fires before the Manage Posts table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 934](pages/page-mainwp-post.php#L934-L941)

### `mainwp_posts_table_header`

*Action: mainwp_posts_table_header*

Adds new column header to the Manage posts table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 948](pages/page-mainwp-post.php#L948-L955)

### `mainwp_after_posts_table`

*Action: mainwp_after_posts_table*

Fires after the Manage Posts table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 992](pages/page-mainwp-post.php#L992-L999)

### `mainwp_posts_table_column`

*Action: mainwp_posts_table_column*

Adds a new column item in the Manage posts table.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` | `array` | Array containing the post data.
`$website` | `array` | Object containing the website data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1353](pages/page-mainwp-post.php#L1353-L1363)

### `mainwp_manage_posts_action_item`

*Method posts_search_handler()*

Post page search handler.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` |  | 
`$child_to_dash_array` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1282](pages/page-mainwp-post.php#L1282-L1455)

### `mainwp_posts_table_action`

*Action: mainwp_posts_table_action*

Adds a new item in the Actions menu in Manage Posts table.

Suggested HTML markup:
<a class="item" href="Your custom URL">Your custom label</a>

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` | `array` | Array containing the post data.
`$website` | `array` | Object containing the website data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1460](pages/page-mainwp-post.php#L1460-L1473)

### `mainwp_top_bulkpost_edit_content`

*Renders bulkpost to edit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2009](pages/page-mainwp-post.php#L2009-L2108)

### `mainwp_before_bulkpost_editor`

*Renders bulkpost to edit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2009](pages/page-mainwp-post.php#L2009-L2150)

### `mainwp_bulkpost_edit`

*Edit bulkpost*

First on the Edit post screen after default fields.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` | `object` | Object containing the Post data.
`$post_type` | `string` | Post type.

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2233](pages/page-mainwp-post.php#L2233-L2241)

### `add_meta_boxes`

*Edit bulkpost metaboxes*

Fires after all built-in meta boxes have been added.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_type` | `string` | Post type.
`$post` | `object` | Object containing the Post data.

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2247](pages/page-mainwp-post.php#L2247-L2257)

### `mainwp_bulkpost_edit_top_side`

*Renders bulkpost to edit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` |  | 
`$post_type` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2009](pages/page-mainwp-post.php#L2009-L2287)

### `mainwp_edit_posts_before_submit_button`

*Action: mainwp_edit_posts_before_submit_button*

Fires right before the Submit button.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post` | `object` | Object containing the Post data.
`$post_type` | `string` | Post type.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2318](pages/page-mainwp-post.php#L2318-L2328)

### `mainwp_edit_posts_after_submit_button`

*Action: mainwp_edit_posts_after_submit_button*

Fires right after the Submit button.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2341](pages/page-mainwp-post.php#L2341-L2348)

### `mainwp_posts_help_item`

*Action: mainwp_posts_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Posts page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2743](pages/page-mainwp-post.php#L2743-L2754)

### `mainwp-manage-sites-edit`

*Method render_new_site_add_new_site()*

Render page managesites add new site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(false)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_manage_sites_edit'` |  | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 783](pages/page-mainwp-manage-sites.php#L783-L1050)

### `mainwp_manage_sites_edit`

*Edit site*

Fires on the Edit child site page and allows user to hook in new site options.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 1052](pages/page-mainwp-manage-sites.php#L1052-L1059)

### `mainwp_before_save_email_settings`

*Action: mainwp_before_save_email_settings*

Fires before save email settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$type` |  | 
`$update_settings` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 1894](pages/page-mainwp-manage-sites.php#L1894-L1901)

### `mainwp_after_save_email_settings`

*Action: mainwp_after_save_email_settings*

Fires after save email settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$settings_emails` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 1907](pages/page-mainwp-manage-sites.php#L1907-L1914)

### `mainwp_update_site`

*Update site*

Fires after updating a website settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website->id` |  | 

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 1999](pages/page-mainwp-manage-sites.php#L1999-L2008)

### `mainwp_site_updated`

*Update site*

Fires after updating a website settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `int` | Child site Ọbject.
`$_POST` |  | 

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 2067](pages/page-mainwp-manage-sites.php#L2067-L2076)

### `mainwp_site_suspended`

*Site suspended changed.*

Fires after suspended a website changed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `int` | ->id Child site ID.
`$suspended` |  | 

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 2079](pages/page-mainwp-manage-sites.php#L2079-L2088)

### `rest_api_form_top`

*Action: rest_api_form_top*

Fires at the top of REST API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-rest-api-page.php](pages/page-mainwp-rest-api-page.php), [line 850](pages/page-mainwp-rest-api-page.php#L850-L857)

### `rest_api_form_bottom`

*Action: rest_api_form_bottom*

Fires at the bottom of REST API form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-rest-api-page.php](pages/page-mainwp-rest-api-page.php), [line 936](pages/page-mainwp-rest-api-page.php#L936-L943)

### `mainwp_rest_api_help_item`

*Action: mainwp_rest_api_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the REST API page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-rest-api-page.php](pages/page-mainwp-rest-api-page.php), [line 1260](pages/page-mainwp-rest-api-page.php#L1260-L1271)

### `mainwp_before_plugin_ignore`

*Action: mainwp_before_plugin_ignore*

Fires before plugin ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins-handler.php](pages/page-mainwp-plugins-handler.php), [line 149](pages/page-mainwp-plugins-handler.php#L149-L156)

### `mainwp_after_plugin_ignore`

*Action: mainwp_after_plugin_ignore*

Fires after plugin ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins-handler.php](pages/page-mainwp-plugins-handler.php), [line 160](pages/page-mainwp-plugins-handler.php#L160-L167)

### `mainwp_before_plugin_action`

*Action: mainwp_before_plugin_action*

Fires before plugin activate/deactivate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$pAction` |  | 
`$plugin` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins-handler.php](pages/page-mainwp-plugins-handler.php), [line 217](pages/page-mainwp-plugins-handler.php#L217-L224)

### `mainwp_after_plugin_action`

*Action: mainwp_after_plugin_action*

Fires after plugin activate/deactivate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$pAction` |  | 
`$plugin` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins-handler.php](pages/page-mainwp-plugins-handler.php), [line 235](pages/page-mainwp-plugins-handler.php#L235-L242)

### `mainwp_cores_before_ignored_updates`

*Action: mainwp_cores_before_ignored_updates*

Fires on the top of the Ignored Plugin Updates page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./pages/page-mainwp-wp-updates.php](pages/page-mainwp-wp-updates.php), [line 74](pages/page-mainwp-wp-updates.php#L74-L81)

### `mainwp_cores_after_ignored_updates`

*Action: mainwp_cores_after_ignored_updates*

Fires on the bottom of the Ignored Plugin Updates page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-wp-updates.php](pages/page-mainwp-wp-updates.php), [line 95](pages/page-mainwp-wp-updates.php#L95-L102)

### `mainwp_users_bulk_action`

*Action: mainwp_users_bulk_action*

Adds new Bulk Actions option under on Manage Users.

Suggested HTML Markup:
<option value="Your custom value">Your custom label</option>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 411](pages/page-mainwp-user.php#L411-L421)

### `mainwp_users_actions_bar_left`

*Users actions bar (left)*

Fires at the left side of the actions bar on the Users screen, after the Bulk Actions menu.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 426](pages/page-mainwp-user.php#L426-L433)

### `mainwp_users_actions_bar_right`

*Users actions bar (right)*

Fires at the right side of the actions bar on the Users screen.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 438](pages/page-mainwp-user.php#L438-L445)

### `mainwp_manage_users_sidebar_top`

*Action: mainwp_manage_users_sidebar_top*

Fires on top of the sidebar on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 474](pages/page-mainwp-user.php#L474-L481)

### `mainwp_manage_users_before_select_sites`

*Action: mainwp_manage_users_before_select_sites*

Fires before the Select Sites section on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 485](pages/page-mainwp-user.php#L485-L492)

### `mainwp_manage_users_after_select_sites`

*Action: mainwp_manage_users_after_select_sites*

Fires after the Select Sites section on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 508](pages/page-mainwp-user.php#L508-L515)

### `mainwp_manage_users_before_search_options`

*Action: mainwp_manage_users_before_search_options*

Fires before the Search Options section on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 538](pages/page-mainwp-user.php#L538-L545)

### `mainwp_manage_users_after_search_options`

*Action: mainwp_manage_users_after_search_options*

Fires after the Search Options section on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 565](pages/page-mainwp-user.php#L565-L572)

### `mainwp_manage_users_before_submit_button`

*Action: mainwp_manage_users_before_submit_button*

Fires before the Submit Button on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 584](pages/page-mainwp-user.php#L584-L591)

### `mainwp_manage_users_after_submit_button`

*Action: mainwp_manage_users_after_submit_button*

Fires after the Submit Button on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 595](pages/page-mainwp-user.php#L595-L602)

### `mainwp_manage_users_sidebar_bottom`

*Action: mainwp_manage_users_sidebar_bottom*

Fires at the bottom of the sidebar on Manage Users page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 606](pages/page-mainwp-user.php#L606-L613)

### `mainwp_before_users_table`

*Action: mainwp_before_users_table*

Fires before the User table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 819](pages/page-mainwp-user.php#L819-L826)

### `mainwp_users_table_header`

*Renders Users Table.*


Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 805](pages/page-mainwp-user.php#L805-L832)

### `mainwp_after_users_table`

*Action: mainwp_after_users_table*

Fires after the User table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 853](pages/page-mainwp-user.php#L853-L860)

### `mainwp_users_table_column`

*Renders Search results.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$user` |  | 
`$website` | `object` | Object containing the child site info.

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1207](pages/page-mainwp-user.php#L1207-L1229)

### `mainwp_users_table_action`

*Action: mainwp_users_table_action*

Adds a new item in the Actions menu in Manage Users table.

Suggested HTML markup:
<a class="item" href="Your custom URL">Your custom label</a>

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$user` | `array` | Array containing the user data.
`$website` | `array` | Object containing the website data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1257](pages/page-mainwp-user.php#L1257-L1270)

### `mainwp_before_user_action`

*Action: mainwp_before_user_action*

Fires before user edit/delete/update_user/update_password actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$pAction` |  | 
`$userId` |  | 
`$extra` |  | 
`$pass` |  | 
`$optimize` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1415](pages/page-mainwp-user.php#L1415-L1422)

### `mainwp_user_action`

*Fires immediately after user action.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$pAction` |  | 
`$data` |  | 
`$extra` |  | 
`$optimize` |  | 

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1440](pages/page-mainwp-user.php#L1440-L1445)

### `mainwp_after_user_action`

*Action: mainwp_after_user_action*

Fires after user edit/delete/update_user/update_password actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$pAction` |  | 
`$userId` |  | 
`$extra` |  | 
`$pass` |  | 
`$optimize` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1451](pages/page-mainwp-user.php#L1451-L1458)

### `mainwp_before_new_user_form`

*Action: mainwp_before_new_user_form*

Fires before the Add New user form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1499](pages/page-mainwp-user.php#L1499-L1506)

### `mainwp_before_new_user_form_fields`

*Action: mainwp_before_new_user_form_fields*

Fires before the Add New user form fields.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1521](pages/page-mainwp-user.php#L1521-L1528)

### `mainwp_after_new_user_form_fields`

*Action: mainwp_after_new_user_form_fields*

Fires after the Add New user form fields.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1621](pages/page-mainwp-user.php#L1621-L1628)

### `mainwp_add_new_user_sidebar_top`

*Action: mainwp_add_new_user_sidebar_top*

Fires at the top of the sidebar on Add New user page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1634](pages/page-mainwp-user.php#L1634-L1641)

### `mainwp_add_new_user_before_select_sites`

*Action: mainwp_add_new_user_before_select_sites*

Fires before the Select Sites section on the Add New user page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1645](pages/page-mainwp-user.php#L1645-L1652)

### `mainwp_add_new_user_after_select_sites`

*Action: mainwp_add_new_user_after_select_sites*

Fires after the Select Sites section on the Add New user page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1664](pages/page-mainwp-user.php#L1664-L1671)

### `mainwp_add_new_user_before_submit_button`

*Action: mainwp_add_new_user_before_submit_button*

Fires before the Submit button on the Add New user page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1677](pages/page-mainwp-user.php#L1677-L1684)

### `mainwp_add_new_user_after_submit_button`

*Action: mainwp_add_new_user_after_submit_button*

Fires after the Submit button on the Add New user page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1694](pages/page-mainwp-user.php#L1694-L1701)

### `mainwp_add_new_user_sidebar_bottom`

*Action: mainwp_add_new_user_sidebar_bottom*

Fires at the bottom of the sidebar on Add New user page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1705](pages/page-mainwp-user.php#L1705-L1712)

### `mainwp_after_new_user_form`

*Action: mainwp_after_new_user_form*

Fires after the Add New user form.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1718](pages/page-mainwp-user.php#L1718-L1725)

### `mainwp_before_import_users`

*Action: mainwp_before_import_users*

Fires above the Import Users section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1773](pages/page-mainwp-user.php#L1773-L1780)

### `mainwp_after_import_users`

*Action: mainwp_after_import_users*

Fires under the Import Users section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1813](pages/page-mainwp-user.php#L1813-L1820)

### `mainwp_before_user_create`

*Action: mainwp_before_user_create*

Fires before user create.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 
`$dbwebsites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1952](pages/page-mainwp-user.php#L1952-L1959)

### `mainwp_after_user_create`

*Action: mainwp_after_user_create*

Fires after user create.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output` |  | 
`$post_data` |  | 
`$dbwebsites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1972](pages/page-mainwp-user.php#L1972-L1979)

### `mainwp_import_users_modal_top`

*Action: mainwp_import_users_modal_top*

Fires on the top of the Import Users modal.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 2099](pages/page-mainwp-user.php#L2099-L2106)

### `mainwp_import_users_modal_bottom`

*Action: mainwp_import_users_modal_bottom*

Fires on the bottom of the Import Users modal.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 2120](pages/page-mainwp-user.php#L2120-L2127)

### `mainwp_before_user_create`

*Action: mainwp_before_user_create*

Fires before user create.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 
`$dbwebsites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 2278](pages/page-mainwp-user.php#L2278-L2285)

### `mainwp_after_user_create`

*Action: mainwp_after_user_create*

Fires after user create.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output` |  | 
`$post_data` |  | 
`$dbwebsites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 2298](pages/page-mainwp-user.php#L2298-L2305)

### `mainwp_users_help_item`

*Action: mainwp_users_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Users page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 2359](pages/page-mainwp-user.php#L2359-L2370)

### `mainwp_update_backuptask`

*Update backup task.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$task->id` |  | 

Source: [./pages/page-mainwp-manage-backups-handler.php](pages/page-mainwp-manage-backups-handler.php), [line 129](pages/page-mainwp-manage-backups-handler.php#L129-L187)

### `mainwp_add_backuptask`

*Add backup task.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$task->id` |  | 

Source: [./pages/page-mainwp-manage-backups-handler.php](pages/page-mainwp-manage-backups-handler.php), [line 211](pages/page-mainwp-manage-backups-handler.php#L211-L276)

### `mainwp_managesite_schedule_backup`

*Execute the backup task.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`array('type' => $task->type)` |  | 
`$_backup_result` |  | 

Source: [./pages/page-mainwp-manage-backups-handler.php](pages/page-mainwp-manage-backups-handler.php), [line 282](pages/page-mainwp-manage-backups-handler.php#L282-L422)

### `mainwp_secure_request`

*Method admin_init()*

Handles the uploading of a file.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'qq_nonce'` |  | 
`'qq_nonce'` |  | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 42](pages/page-mainwp-install-bulk.php#L42-L52)

### `mainwp_before_plugin_theme_install`

*Action: mainwp_before_plugin_theme_install*

Fires before plugin/theme install.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 457](pages/page-mainwp-install-bulk.php#L457-L464)

### `mainwp_after_plugin_theme_install`

*Action: mainwp_after_plugin_theme_install*

Fires after plugin/theme install.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output` |  | 
`$post_data` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 483](pages/page-mainwp-install-bulk.php#L483-L490)

### `mainwp_before_plugin_theme_install`

*Action: mainwp_before_plugin_theme_install*

Fires before plugin/theme install.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 671](pages/page-mainwp-install-bulk.php#L671-L678)

### `mainwp_after_plugin_theme_install`

*Action: mainwp_after_plugin_theme_install*

Fires after plugin/theme install.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output` |  | 
`$post_data` |  | 
`$websites` |  | 
`$type` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 695](pages/page-mainwp-install-bulk.php#L695-L702)

### `mainwp_before_overview_widgets`

*Action: mainwp_before_overview_widgets*

Fires at the top of the Overview page (before first widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'dashboard'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-overview.php](pages/page-mainwp-overview.php), [line 382](pages/page-mainwp-overview.php#L382-L389)

### `mainwp_after_overview_widgets`

*Action: 'mainwp_after_overview_widgets'*

Fires at the bottom of the Overview page (after the last widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'dashboard'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-overview.php](pages/page-mainwp-overview.php), [line 395](pages/page-mainwp-overview.php#L395-L402)

### `mainwp_overview_help_item`

*Action: mainwp_overview_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Overview page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-overview.php](pages/page-mainwp-overview.php), [line 445](pages/page-mainwp-overview.php#L445-L456)

### `mainwp_extensions_help_item`

*Action: mainwp_extensions_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Extensions page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./pages/page-mainwp-extensions.php](pages/page-mainwp-extensions.php), [line 799](pages/page-mainwp-extensions.php#L799-L810)

### `mainwp_before_server_info_table`

*Action: mainwp_before_server_info_table*

Fires on the top of the Info page, before the Server Info table.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 422](pages/page-mainwp-server-information.php#L422-L429)

### `mainwp_after_server_info_table`

*Action: mainwp_after_server_info_table*

Fires on the bottom of the Info page, after the Server Info table.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 567](pages/page-mainwp-server-information.php#L567-L574)

### `mainwp_before_system_requirements_check`

*Action: mainwp_before_system_requirements_check*

Fires on the bottom of the System Requirements page, in Quick Setup Wizard.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 911](pages/page-mainwp-server-information.php#L911-L918)

### `mainwp_after_system_requirements_check`

*Action: mainwp_after_system_requirements_check*

Fires on the bottom of the System Requirements page, in Quick Setup Wizard.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 973](pages/page-mainwp-server-information.php#L973-L980)

### `mainwp_before_cron_jobs_table`

*Action: mainwp_before_cron_jobs_table*

Renders on the top of the Cron Jobs page, before the Schedules table.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1042](pages/page-mainwp-server-information.php#L1042-L1049)

### `mainwp_cron_jobs_list`

*Action: mainwp_cron_jobs_list*

Renders as the last row of the Schedules table.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1120](pages/page-mainwp-server-information.php#L1120-L1127)

### `mainwp_after_cron_jobs_table`

*Action: mainwp_after_cron_jobs_table*

Renders on the bottom of the Cron Jobs page, after the Schedules table.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1164](pages/page-mainwp-server-information.php#L1164-L1171)

### `mainwp_before_error_log_table`

*Action: mainwp_before_error_log_table*

Fires before the Error Log table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1432](pages/page-mainwp-server-information.php#L1432-L1439)

### `mainwp_after_error_log_table`

*Action: mainwp_after_error_log_table*

Fires after the Error Log table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1484](pages/page-mainwp-server-information.php#L1484-L1491)

### `mainwp_before_wp_config_section`

*Action: mainwp_before_wp_config_section*

Fires before the WP Config section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1584](pages/page-mainwp-server-information.php#L1584-L1591)

### `mainwp_after_wp_config_section`

*Action: mainwp_after_wp_config_section*

Fires after the WP Config section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1622](pages/page-mainwp-server-information.php#L1622-L1629)

### `mainwp_before_plugin_privacy_section`

*Action: mainwp_before_plugin_privacy_section*

Fires before the Plugin Privacy section.


**Changelog**

Version | Description
------- | -----------
`4.2` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1761](pages/page-mainwp-server-information.php#L1761-L1768)

### `mainwp_after_plugin_privacy_section`

*Action: mainwp_after_plugin_privacy_section*

Fires after the Plugin Privacy section.


**Changelog**

Version | Description
------- | -----------
`4.2` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1826](pages/page-mainwp-server-information.php#L1826-L1833)

### `mainwp_before_htaccess_section`

*Action: mainwp_before_htaccess_section*

Fires before the .htaccess file section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1849](pages/page-mainwp-server-information.php#L1849-L1856)

### `mainwp_after_htaccess_section`

*Action: mainwp_after_htaccess_section*

Fires after the .htaccess file section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1872](pages/page-mainwp-server-information.php#L1872-L1879)

### `mainwp_before_overview_widgets`

*Action: mainwp_before_overview_widgets*

Fires at the top of the Overview page (before first widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'clients'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 316](pages/page-mainwp-client-overview.php#L316-L323)

### `mainwp_after_overview_widgets`

*Action: 'mainwp_after_overview_widgets'*

Fires at the bottom of the Overview page (after the last widget).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'clients'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 329](pages/page-mainwp-client-overview.php#L329-L336)

### `mainwp_clients_overview_screen_options_top`

*Action: mainwp_clients_overview_screen_options_top*

Fires at the top of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 366](pages/page-mainwp-client-overview.php#L366-L373)

### `mainwp_clients_overview_screen_options_bottom`

*Action: mainwp_clients_overview_screen_options_bottom*

Fires at the bottom of the Sceen Options modal on the Overview page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 380](pages/page-mainwp-client-overview.php#L380-L387)

### `mainwp_screen_options_modal_top`

*Action: mainwp_screen_options_modal_top*

Fires at the top of the Page Settings modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 456](pages/page-mainwp-client-overview.php#L456-L463)

### `mainwp_screen_options_modal_bottom`

*Action: mainwp_screen_options_modal_bottom*

Fires at the bottom of the Page Settings modal element.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 492](pages/page-mainwp-client-overview.php#L492-L499)

### `mainwp_clients_overview_help_item`

*Action: mainwp_clients_overview_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Clients page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 521](pages/page-mainwp-client-overview.php#L521-L532)

### `mainwp_pageheader_tags`

*Sites Page header*

Renders the tabs on the Sites screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'ManageGroups'` |  | 

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 293](pages/page-mainwp-manage-groups.php#L293-L300)

### `mainwp_before_groups_table`

*Action: mainwp_before_groups_table*

Fires before the Manage Groups table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 315](pages/page-mainwp-manage-groups.php#L315-L322)

### `mainwp_after_groups_table`

*Action: mainwp_after_groups_table*

Fires after the Manage Groups table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 463](pages/page-mainwp-manage-groups.php#L463-L470)

### `mainwp_pagefooter_tags`

*Sites Page Footer*

Renders the footer on the Sites screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'ManageGroups'` |  | 

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 474](pages/page-mainwp-manage-groups.php#L474-L481)

### `mainwp_site_tag_action`

*Fires after a new sites tag has been created.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$group` | `object` | tag created.
`'updated'` |  | 
`$data` |  | 

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 588](pages/page-mainwp-manage-groups.php#L588-L595)

### `mainwp_added_new_group`

*New Group Added*

Fires after a new sites group has been created.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$groupId` | `int` | Group ID.

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 688](pages/page-mainwp-manage-groups.php#L688-L695)

### `mainwp_added_new_group`

*New Group Added*

Fires after a new sites group has been created.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$groupId` | `int` | Group ID.

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 733](pages/page-mainwp-manage-groups.php#L733-L740)

### `mainwp_tags_help_item`

*Action: mainwp_tags_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Tags page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 793](pages/page-mainwp-manage-groups.php#L793-L804)

### `mainwp_updates_before_wp_updates`

*Action: mainwp_updates_before_wp_updates*

Fires at the top of the WP updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_wp_upgrades` | `int` | Number of available WP upates.
`$all_groups_sites` | `array` | Array containing all groups and sites.
`$all_groups` | `array` | Array containing all groups.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 851](pages/page-mainwp-updates.php#L851-L864)

### `mainwp_updates_pergroup_before_wp_updates`

*Action: mainwp_updates_pergroup_before_wp_updates*

Fires at the top of the WP updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_wp_upgrades` | `int` | Number of available WP upates.
`$all_groups_sites` | `array` | Array containing all groups and sites.
`$all_groups` | `array` | Array containing all groups.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 866](pages/page-mainwp-updates.php#L866-L879)

### `mainwp_updates_pergroup_after_wp_updates`

*Action: mainwp_updates_pergroup_after_wp_updates*

Fires at the bottom of the WP updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_wp_upgrades` | `int` | Number of available WP upates.
`$all_groups_sites` | `array` | Array containing all groups and sites.
`$all_groups` | `array` | Array containing all groups.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 881](pages/page-mainwp-updates.php#L881-L894)

### `mainwp_updates_pergroup_before_wp_updates`

*Action: mainwp_updates_persite_before_wp_updates*

Fires at the top of the WP updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_wp_upgrades` | `int` | Number of available WP upates.
`$all_groups_sites` | `array` | Array containing all groups and sites.
`$all_groups` | `array` | Array containing all groups.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 896](pages/page-mainwp-updates.php#L896-L909)

### `mainwp_updates_persite_after_wp_updates`

*Action: mainwp_updates_persite_after_wp_updates*

Fires at the bottom of the WP updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_wp_upgrades` | `int` | Number of available WP upates.
`$all_groups_sites` | `array` | Array containing all groups and sites.
`$all_groups` | `array` | Array containing all groups.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 912](pages/page-mainwp-updates.php#L912-L925)

### `mainwp_updates_after_wp_updates`

*Action: mainwp_updates_after_wp_updates*

Fires at the top of the WP updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_wp_upgrades` | `int` | Number of available WP upates.
`$all_groups_sites` | `array` | Array containing all groups and sites.
`$all_groups` | `array` | Array containing all groups.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 927](pages/page-mainwp-updates.php#L927-L940)

### `mainwp_updates_before_plugin_updates`

*Action: mainwp_updates_before_plugin_updates*

Fires at the top of the Plugin updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 982](pages/page-mainwp-updates.php#L982-L998)

### `mainwp_updates_persite_before_plugin_updates`

*Action: mainwp_updates_persite_before_plugin_updates*

Fires at the top of the Plugin updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1000](pages/page-mainwp-updates.php#L1000-L1016)

### `mainwp_updates_persite_after_plugin_updates`

*Action: mainwp_updates_persite_after_plugin_updates*

Fires at the bottom of the Plugin updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1018](pages/page-mainwp-updates.php#L1018-L1034)

### `mainwp_updates_pergroup_before_plugin_updates`

*Action: mainwp_updates_pergroup_before_plugin_updates*

Fires at the top of the Plugin updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1036](pages/page-mainwp-updates.php#L1036-L1052)

### `mainwp_updates_pergroup_after_plugin_updates`

*Action: mainwp_updates_pergroup_after_plugin_updates*

Fires at the bottom of the Plugin updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1054](pages/page-mainwp-updates.php#L1054-L1070)

### `mainwp_updates_perplugin_before_plugin_updates`

*Action: mainwp_updates_perplugin_before_plugin_updates*

Fires at the top of the Plugin updates tab, per Plugin view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1072](pages/page-mainwp-updates.php#L1072-L1088)

### `mainwp_updates_perplugin_after_plugin_updates`

*Action: mainwp_updates_perplugin_after_plugin_updates*

Fires at the bottom of the Plugin updates tab, per Plugin view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1090](pages/page-mainwp-updates.php#L1090-L1106)

### `mainwp_updates_after_plugin_updates`

*Action: mainwp_updates_after_plugin_updates*

Fires at the bottom of the Plugin updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_plugin_upgrades` | `int` | Number of available plugin updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPlugins` | `array` | Array of all plugins.
`$pluginsInfo` | `array` | Array of all plugins info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1108](pages/page-mainwp-updates.php#L1108-L1124)

### `mainwp_updates_before_theme_updates`

*Action: mainwp_updates_before_theme_updates*

Fires at the top of the Theme updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1155](pages/page-mainwp-updates.php#L1155-L1171)

### `mainwp_updates_persite_before_theme_updates`

*Action: mainwp_updates_persite_before_theme_updates*

Fires at the top of the Theme updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1173](pages/page-mainwp-updates.php#L1173-L1189)

### `mainwp_updates_persite_after_theme_updates`

*Action: mainwp_updates_persite_after_theme_updates*

Fires at the bottom of the Theme updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1191](pages/page-mainwp-updates.php#L1191-L1207)

### `mainwp_updates_pergroup_before_theme_updates`

*Action: mainwp_updates_pergroup_before_theme_updates*

Fires at the top of the Theme updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1209](pages/page-mainwp-updates.php#L1209-L1225)

### `mainwp_updates_pergroup_after_theme_updates`

*Action: mainwp_updates_pergroup_after_theme_updates*

Fires at the bottom of the Theme updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1227](pages/page-mainwp-updates.php#L1227-L1243)

### `mainwp_updates_pertheme_before_theme_updates`

*Action: mainwp_updates_pertheme_before_theme_updates*

Fires at the top of the Theme updates tab, per Theme view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1245](pages/page-mainwp-updates.php#L1245-L1261)

### `mainwp_updates_pertheme_after_theme_updates`

*Action: mainwp_updates_pertheme_after_theme_updates*

Fires at the bottom of the Theme updates tab, per Theme view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1263](pages/page-mainwp-updates.php#L1263-L1279)

### `mainwp_updates_after_theme_updates`

*Action: mainwp_updates_after_theme_updates*

Fires at the bottom of the Theme updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_theme_upgrades` | `int` | Number of available theme updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemes` | `array` | Array of all themes.
`$themesInfo` | `array` | Array of all themes info.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1281](pages/page-mainwp-updates.php#L1281-L1297)

### `mainwp_updates_before_translation_updates`

*Action: mainwp_updates_before_translation_updates*

Fires at the top of the Translation updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1326](pages/page-mainwp-updates.php#L1326-L1342)

### `mainwp_updates_persite_before_translation_updates`

*Action: mainwp_updates_persite_before_translation_updates*

Fires at the top of the Translation updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1344](pages/page-mainwp-updates.php#L1344-L1360)

### `mainwp_updates_persite_after_translation_updates`

*Action: mainwp_updates_persite_after_translation_updates*

Fires at the bottom of the Translation updates tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1362](pages/page-mainwp-updates.php#L1362-L1378)

### `mainwp_updates_pergroup_before_translation_updates`

*Action: mainwp_updates_pergroup_before_translation_updates*

Fires at the top of the Translation updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1380](pages/page-mainwp-updates.php#L1380-L1396)

### `mainwp_updates_pergroup_after_translation_updates`

*Action: mainwp_updates_pergroup_after_translation_updates*

Fires at the bottom of the Translation updates tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1398](pages/page-mainwp-updates.php#L1398-L1414)

### `mainwp_updates_pertranslation_before_translation_updates`

*Action: mainwp_updates_pertranslation_before_translation_updates*

Fires at the top of the Translation updates tab, per Translation view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1416](pages/page-mainwp-updates.php#L1416-L1432)

### `mainwp_updates_pertranslation_after_translation_updates`

*Action: mainwp_updates_pertranslation_after_translation_updates*

Fires at the bottom of the Translation updates tab, per Translation view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1434](pages/page-mainwp-updates.php#L1434-L1450)

### `mainwp_updates_after_translation_updates`

*Action: mainwp_updates_after_translation_updates*

Fires at the bottom of the Translation updates tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$total_translation_upgrades` | `int` | Number of available translation updates.
`$userExtension` | `object` | User extension.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allTranslations` | `array` | Array of all translations.
`$translationsInfo` | `array` | Array of all translations info.
`$mainwp_show_language_updates` |  | 
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1452](pages/page-mainwp-updates.php#L1452-L1468)

### `mainwp_updates_before_abandoned_plugins`

*Action: mainwp_updates_before_abandoned_plugins*

Fires at the top of the Abandoned plugins tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1494](pages/page-mainwp-updates.php#L1494-L1508)

### `mainwp_updates_persite_before_abandoned_plugins`

*Action: mainwp_updates_persite_before_abandoned_plugins*

Fires at the top of the Abandoned plugins tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1510](pages/page-mainwp-updates.php#L1510-L1524)

### `mainwp_updates_persite_after_abandoned_plugins`

*Action: mainwp_updates_persite_after_abandoned_plugins*

Fires at the bottom of the Abandoned plugins tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1526](pages/page-mainwp-updates.php#L1526-L1540)

### `mainwp_updates_pergroup_before_abandoned_plugins`

*Action: mainwp_updates_pergroup_before_abandoned_plugins*

Fires at the top of the Abandoned plugins tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1542](pages/page-mainwp-updates.php#L1542-L1556)

### `mainwp_updates_pergroup_after_abandoned_plugins`

*Action: mainwp_updates_pergroup_after_abandoned_plugins*

Fires at the bottom of the Abandoned plugins tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1558](pages/page-mainwp-updates.php#L1558-L1572)

### `mainwp_updates_perplugin_before_abandoned_plugins`

*Action: mainwp_updates_perplugin_before_abandoned_plugins*

Fires at the top of the Abandoned plugins tab, per Plugin view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1574](pages/page-mainwp-updates.php#L1574-L1588)

### `mainwp_updates_perplugin_after_abandoned_plugins`

*Action: mainwp_updates_perplugin_after_abandoned_plugins*

Fires at the bottom of the Abandoned plugins tab, per Plugin view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1590](pages/page-mainwp-updates.php#L1590-L1604)

### `mainwp_updates_after_abandoned_plugins`

*Action: mainwp_updates_after_abandoned_plugins*

Fires at the bottom of the Abandoned plugins tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allPluginsOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedPlugins` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1606](pages/page-mainwp-updates.php#L1606-L1620)

### `mainwp_updates_before_abandoned_themes`

*Action: mainwp_updates_before_abandoned_themes*

Fires at the top of the Abandoned themes tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1645](pages/page-mainwp-updates.php#L1645-L1659)

### `mainwp_updates_persite_before_abandoned_themes`

*Action: mainwp_updates_persite_before_abandoned_themes*

Fires at the top of the Abandoned themes tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1661](pages/page-mainwp-updates.php#L1661-L1675)

### `mainwp_updates_persite_after_abandoned_themes`

*Action: mainwp_updates_persite_after_abandoned_themes*

Fires at the bottom of the Abandoned themes tab, per Site view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1677](pages/page-mainwp-updates.php#L1677-L1691)

### `mainwp_updates_pergroup_before_abandoned_themes`

*Action: mainwp_updates_pergroup_before_abandoned_themes*

Fires at the top of the Abandoned themes tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1693](pages/page-mainwp-updates.php#L1693-L1707)

### `mainwp_updates_pergroup_after_abandoned_themes`

*Action: mainwp_updates_pergroup_after_abandoned_themes*

Fires at the bottom of the Abandoned themes tab, per Group view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1709](pages/page-mainwp-updates.php#L1709-L1723)

### `mainwp_updates_pertheme_before_abandoned_themes`

*Action: mainwp_updates_pertheme_before_abandoned_themes*

Fires at the top of the Abandoned themes tab, per Theme view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1725](pages/page-mainwp-updates.php#L1725-L1739)

### `mainwp_updates_pertheme_after_abandoned_themes`

*Action: mainwp_updates_pertheme_after_abandoned_themes*

Fires at the bottom of the Abandoned themes tab, per Theme view.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1741](pages/page-mainwp-updates.php#L1741-L1755)

### `mainwp_updates_after_abandoned_themes`

*Action: mainwp_updates_after_abandoned_themes*

Fires at the bottom of the Abandoned themes tab.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websites` | `object` | Object containing child sites info.
`$all_groups_sites` | `array` | Array of all groups and sites.
`$all_groups` | `array` | Array of all groups.
`$allThemesOutdate` | `array` | Array of all abandoned plugins.
`$decodedDismissedThemes` | `array` | Array of dismissed abandoned plugins.
`$site_offset_for_groups` | `int` | Offset value.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1757](pages/page-mainwp-updates.php#L1757-L1771)

### `mainwp_updates_before_nav_tabs`

*Action: mainwp_updates_before_nav_tabs*

Fires before the navigation tabs on the Updates page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1923](pages/page-mainwp-updates.php#L1923-L1930)

### `mainwp_updates_after_nav_tabs`

*Action: mainwp_updates_after_nav_tabs*

Fires after the navigation tabs on the Updates page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1993](pages/page-mainwp-updates.php#L1993-L2000)

### `mainwp_updates_before_actions_bar`

*Action: mainwp_updates_before_actions_bar*

Fires before the actions bar on the Updates page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 2002](pages/page-mainwp-updates.php#L2002-L2009)

### `mainwp_updates_after_actions_bar`

*Action: mainwp_updates_after_actions_bar*

Fires after the actions bar on the Updates page.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 2040](pages/page-mainwp-updates.php#L2040-L2047)

### `mainwp_updates_help_item`

*Action: mainwp_updates_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Updates page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 2494](pages/page-mainwp-updates.php#L2494-L2505)

### `mainwp_before_theme_action`

*Action: mainwp_before_theme_action*

Fires before theme activate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$pAction` |  | 
`$theme` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes-handler.php](pages/page-mainwp-themes-handler.php), [line 145](pages/page-mainwp-themes-handler.php#L145-L152)

### `mainwp_after_theme_action`

*Action: mainwp_after_theme_action*

Fires after theme activate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$pAction` |  | 
`$theme` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes-handler.php](pages/page-mainwp-themes-handler.php), [line 167](pages/page-mainwp-themes-handler.php#L167-L174)

### `mainwp_before_theme_ignore`

*Action: mainwp_before_theme_ignore*

Fires before theme ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$decodedIgnoredThemes` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes-handler.php](pages/page-mainwp-themes-handler.php), [line 230](pages/page-mainwp-themes-handler.php#L230-L237)

### `mainwp_after_theme_ignore`

*Action: mainwp_after_theme_ignore*

Fires after theme ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$decodedIgnoredThemes` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes-handler.php](pages/page-mainwp-themes-handler.php), [line 240](pages/page-mainwp-themes-handler.php#L240-L247)

### `mainwp_post_created`

*Method posting_bulk_handler()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | The website object.
`'newpost'` |  | 
`$information['other_data']['new_post_data']` |  | 

Source: [./pages/page-mainwp-bulk-add.php](pages/page-mainwp-bulk-add.php), [line 34](pages/page-mainwp-bulk-add.php#L34-L57)

### `mainwp_user_action`

*Fires immediately after new user action.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`'created'` |  | 
`$data` |  | 

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./pages/page-mainwp-bulk-add.php](pages/page-mainwp-bulk-add.php), [line 62](pages/page-mainwp-bulk-add.php#L62-L67)

### `mainwp_user_action`

*Fires immediately after update admin password action.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`'newadminpassword'` |  | 
`$data` |  | 

**Changelog**

Version | Description
------- | -----------
`4.5.1.1` | 

Source: [./pages/page-mainwp-bulk-add.php](pages/page-mainwp-bulk-add.php), [line 72](pages/page-mainwp-bulk-add.php#L72-L77)

### `admin_print_styles`

*Method setup_wizard_header()*

Render Setup Wizard's header.


Source: [./pages/page-mainwp-setup-wizard.php](pages/page-mainwp-setup-wizard.php), [line 203](pages/page-mainwp-setup-wizard.php#L203-L234)

### `mainwp_pageheader_extensions`

*Method render_extensions_groups()*


Source: [./pages/page-mainwp-extensions-groups.php](pages/page-mainwp-extensions-groups.php), [line 921](pages/page-mainwp-extensions-groups.php#L921-L968)

### `mainwp_pagefooter_extensions`

*Method render_extensions_groups()*


Source: [./pages/page-mainwp-extensions-groups.php](pages/page-mainwp-extensions-groups.php), [line 921](pages/page-mainwp-extensions-groups.php#L921-L1086)

### `mainwp_manage_pages_bulk_action`

*Renders Bulk Page Manager.*


Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 434](pages/page-mainwp-page.php#L434-L474)

### `mainwp_pages_bulk_action`

*Action: mainwp_pages_bulk_action*

Adds new action to the Bulk Actions menu on Manage Pages.

Suggested HTML Markup:
<option value="Your custom value">Your custom text</option>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 479](pages/page-mainwp-page.php#L479-L489)

### `mainwp_pages_actions_bar_left`

*Action: mainwp_pages_actions_bar_left*

Fires at the left side of the actions bar on the Pages screen, after the Bulk Actions menu.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 494](pages/page-mainwp-page.php#L494-L501)

### `mainwp_pages_actions_bar_right`

*Action: mainwp_pages_actions_bar_right*

Fires at the right side of the actions bar on the Pages screen.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 506](pages/page-mainwp-page.php#L506-L513)

### `mainwp_manage_pages_sidebar_top`

*Action: mainwp_manage_pages_sidebar_top*

Fires at the top of the sidebar on Manage pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 531](pages/page-mainwp-page.php#L531-L538)

### `mainwp_manage_pages_before_select_sites`

*Action: mainwp_manage_pages_before_select_sites*

Fires before the Select Sites section on Manage pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 542](pages/page-mainwp-page.php#L542-L549)

### `mainwp_manage_pages_after_select_sites`

*Action: mainwp_manage_pages_after_select_sites*

Fires after the Select Sites section on Manage pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 565](pages/page-mainwp-page.php#L565-L572)

### `mainwp_manage_pages_before_search_options`

*Action: mainwp_manage_pages_before_search_options*

Fires before the Search Options on Manage Pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 580](pages/page-mainwp-page.php#L580-L587)

### `mainwp_manage_pages_after_search_options`

*Action: mainwp_manage_pages_after_search_options*

Fires after the Search Options on Manage Pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 610](pages/page-mainwp-page.php#L610-L617)

### `mainwp_manage_pages_before_submit_button`

*Action: mainwp_manage_pages_before_submit_button*

Fires before the Submit Button on Manage Pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 624](pages/page-mainwp-page.php#L624-L631)

### `mainwp_manage_pages_after_submit_button`

*Action: mainwp_manage_pages_after_submit_button*

Fires after the Submit Button on Manage Pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 640](pages/page-mainwp-page.php#L640-L647)

### `mainwp_manage_pages_sidebar_bottom`

*Action: mainwp_manage_pages_sidebar_bottom*

Fires at the bottom of the sidebar on Manage pages.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 651](pages/page-mainwp-page.php#L651-L658)

### `mainwp_before_pages_table`

*Action: mainwp_before_pages_table*

Fires before the Manage Pages table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 793](pages/page-mainwp-page.php#L793-L800)

### `mainwp_pages_table_header`

*Action: mainwp_pages_table_header*

Adds new column header to the Manage pages table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 807](pages/page-mainwp-page.php#L807-L814)

### `mainwp_after_pages_table`

*Action: mainwp_after_pages_table*

Fires after the Manage Pages table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 842](pages/page-mainwp-page.php#L842-L849)

### `mainwp_pages_table_column`

*Action: mainwp_pages_table_column*

Adds a new column item in the Manage pages table.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$page` | `array` | Array containing the page data.
`$website` | `array` | Object containing the website data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1146](pages/page-mainwp-page.php#L1146-L1156)

### `mainwp_manage_pages_action_item`

*Method pages_search_handler()*

Pages Search handler.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$page` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1095](pages/page-mainwp-page.php#L1095-L1221)

### `mainwp_pages_table_action`

*Action: mainwp_pages_table_action*

Adds a new item in the Actions menu in Manage Pages table.

Suggested HTML markup:
<a class="item" href="Your custom URL">Your custom label</a>

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$page` |  | 
`$website` | `array` | Object containing the website data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1233](pages/page-mainwp-page.php#L1233-L1246)

### `mainwp_bulkpage_before_post`

*Before Page post action*

Fires right before posting the 'bulkpage' to child sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_id` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1427](pages/page-mainwp-page.php#L1427-L1436)

### `mainwp-post-posting-page`

*Method posting()*

Render Posting page modal window.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($website, $output->added_id[$website->id], $links)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_post_posting_page'` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1385](pages/page-mainwp-page.php#L1385-L1619)

### `mainwp-bulkposting-done`

*Method posting()*

Render Posting page modal window.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($_post, $website, $output)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_bulkposting_done'` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1385](pages/page-mainwp-page.php#L1385-L1620)

### `mainwp_post_posting_page`

*Posting page*

Fires while posting page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing child site data.
`$output->added_id[$website->id]` |  | 
`$links` | `array` | Links.

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1622](pages/page-mainwp-page.php#L1622-L1633)

### `mainwp_bulkposting_done`

*Posting page completed*

Fires after the page posting process is completed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_post` | `array` | Array containing the post data.
`$website` | `object` | Object containing child site data.
`$output` | `array` | Output data.

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1635](pages/page-mainwp-page.php#L1635-L1646)

### `mainwp_pages_posting_popup_actions`

*Method posting()*

Render Posting page modal window.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$id` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1385](pages/page-mainwp-page.php#L1385-L1703)

### `mainwp_pages_help_item`

*Action: mainwp_pages_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Pages page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1741](pages/page-mainwp-page.php#L1741-L1752)

### `mainwp_after_upgrade_wp_success`

*Method upgrade_site()*

Check Child Site ID & Update.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$information` |  | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 26](pages/page-mainwp-updates-handler.php#L26-L56)

### `mainwp_before_wp_update`

*Action: mainwp_before_wp_update*

Fires before WP update.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 99](pages/page-mainwp-updates-handler.php#L99-L106)

### `mainwp_after_wp_update`

*Action: mainwp_after_wp_update*

Fires after WP update.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 138](pages/page-mainwp-updates-handler.php#L138-L145)

### `mainwp_before_plugin_ignore`

*Action: mainwp_before_plugin_ignore*

Fires before plugin ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 175](pages/page-mainwp-updates-handler.php#L175-L182)

### `mainwp_after_plugin_ignore`

*Action: mainwp_after_plugin_ignore*

Fires after plugin ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 209](pages/page-mainwp-updates-handler.php#L209-L216)

### `mainwp_before_theme_ignore`

*Action: mainwp_before_theme_ignore*

Fires before theme ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredThemes` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 221](pages/page-mainwp-updates-handler.php#L221-L228)

### `mainwp_after_theme_ignore`

*Action: mainwp_after_theme_ignore*

Fires after theme ignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$decodedIgnoredThemes` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 252](pages/page-mainwp-updates-handler.php#L252-L259)

### `mainwp_before_plugin_theme_unignore`

*Action: mainwp_before_plugin_theme_unignore*

Fires after plugin/theme unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$type` |  | 
`$slug` |  | 
`$id` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 289](pages/page-mainwp-updates-handler.php#L289-L296)

### `mainwp_before_plugin_unignore`

*Action: mainwp_before_plugin_unignore*

Fires before plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 303](pages/page-mainwp-updates-handler.php#L303-L310)

### `mainwp_after_plugin_unignore`

*Action: mainwp_after_plugin_unignore*

Fires after plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 314](pages/page-mainwp-updates-handler.php#L314-L321)

### `mainwp_before_theme_unignore`

*Action: mainwp_before_theme_unignore*

Fires before theme unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 324](pages/page-mainwp-updates-handler.php#L324-L331)

### `mainwp_after_theme_unignore`

*Action: mainwp_after_theme_unignore*

Fires after theme unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 334](pages/page-mainwp-updates-handler.php#L334-L341)

### `mainwp_before_plugin_unignore`

*Action: mainwp_before_plugin_unignore*

Fires before plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 352](pages/page-mainwp-updates-handler.php#L352-L359)

### `mainwp_after_plugin_unignore`

*Action: mainwp_after_plugin_unignore*

Fires after plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredPlugins` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 387](pages/page-mainwp-updates-handler.php#L387-L394)

### `mainwp_before_theme_unignore`

*Action: mainwp_before_theme_unignore*

Fires before theme unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredThemes` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 400](pages/page-mainwp-updates-handler.php#L400-L407)

### `mainwp_after_theme_unignore`

*Action: mainwp_after_theme_unignore*

Fires after theme unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$decodedIgnoredThemes` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 437](pages/page-mainwp-updates-handler.php#L437-L444)

### `mainwp_before_core_unignore`

*Action: mainwp_before_core_unignore*

Fires before plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'_ALL_'` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 474](pages/page-mainwp-updates-handler.php#L474-L481)

### `mainwp_before_core_unignore`

*Action: mainwp_after_core_unignore*

Fires after plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'_ALL_'` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 484](pages/page-mainwp-updates-handler.php#L484-L491)

### `mainwp_before_core_unignore`

*Action: mainwp_before_core_unignore*

Fires before plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignored_info` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 504](pages/page-mainwp-updates-handler.php#L504-L511)

### `mainwp_after_core_unignore`

*Action: mainwp_after_core_unignore*

Fires after plugin unignore.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignored_info` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 526](pages/page-mainwp-updates-handler.php#L526-L533)

### `mainwp_before_plugin_theme_translation_update`

*Action: mainwp_before_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$type` |  | 
`$list_items` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 1144](pages/page-mainwp-updates-handler.php#L1144-L1151)

### `mainwp_after_plugin_theme_translation_update`

*Action: mainwp_after_plugin_theme_translation_update*

Fires before plugin/theme/translation update actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$type` |  | 
`$list_items` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 1162](pages/page-mainwp-updates-handler.php#L1162-L1169)

### `mainwp_themes_actions_bar_left`

*Action: mainwp_themes_actions_bar_left*

Fires at the left side of the actions bar on the Themes screen, after the Bulk Actions menu.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 437](pages/page-mainwp-themes.php#L437-L444)

### `mainwp_themes_actions_bar_right`

*Action: mainwp_themes_actions_bar_right*

Fires at the right side of the actions bar on the Themes screen.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 451](pages/page-mainwp-themes.php#L451-L458)

### `mainwp_manage_themes_sidebar_top`

*Action: mainwp_manage_themes_sidebar_top*

Fires at the top of the sidebar on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 494](pages/page-mainwp-themes.php#L494-L501)

### `mainwp_manage_themes_before_select_sites`

*Action: mainwp_manage_themes_before_select_sites*

Fires before the Select Sites element on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 505](pages/page-mainwp-themes.php#L505-L512)

### `mainwp_manage_themes_after_select_sites`

*Action: mainwp_manage_themes_after_select_sites*

Fires after the Select Sites element on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 528](pages/page-mainwp-themes.php#L528-L535)

### `mainwp_manage_themes_before_search_options`

*Action: mainwp_manage_themes_before_search_options*

Fires before the Search Options element on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 543](pages/page-mainwp-themes.php#L543-L550)

### `mainwp_manage_themes_after_search_options`

*Action: mainwp_manage_themes_after_search_options*

Fires after the Search Options element on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 568](pages/page-mainwp-themes.php#L568-L575)

### `mainwp_manage_themes_before_submit_button`

*Action: mainwp_manage_themes_before_submit_button*

Fires before the Submit Button element on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 584](pages/page-mainwp-themes.php#L584-L591)

### `mainwp_manage_themes_after_submit_button`

*Action: mainwp_manage_themes_after_submit_button*

Fires after the Submit Button element on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 595](pages/page-mainwp-themes.php#L595-L602)

### `mainwp_manage_themes_sidebar_bottom`

*Action: mainwp_manage_themes_sidebar_bottom*

Fires at the bottom of the sidebar on Manage themes.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 606](pages/page-mainwp-themes.php#L606-L613)

### `mainwp_before_themes_table`

*Action: mainwp_before_themes_table*

Fires before the Themes table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1127](pages/page-mainwp-themes.php#L1127-L1134)

### `mainwp_after_themes_table`

*Action: mainwp_after_themes_table*

Fires after the Themes table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1327](pages/page-mainwp-themes.php#L1327-L1334)

### `mainwp_before_themes_table`

*Action: mainwp_before_themes_table*

Fires before the Themes table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1402](pages/page-mainwp-themes.php#L1402-L1409)

### `mainwp_after_themes_table`

*Action: mainwp_after_themes_table*

Fires after the Themes table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1628](pages/page-mainwp-themes.php#L1628-L1635)

### `mainwp_themes_bulk_action`

*Action: mainwp_themes_bulk_action*

Adds a new action to the Manage Themes bulk actions menu.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1679](pages/page-mainwp-themes.php#L1679-L1688)

### `mainwp_install_plugin_theme_tabs_header_top`

*Render the Themes table for the Install Themes Tab.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'theme'` |  | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1754)

### `mainwp_install_themes_actions_bar_right`

*Install Themes actions bar (right)*

Fires at the right side of the actions bar on the Install Themes screen.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1757](pages/page-mainwp-themes.php#L1757-L1764)

### `mainwp_install_themes_actions_bar_left`

*Install Themes actions bar (left)*

Fires at the left side of the actions bar on the Install Themes screen, after the search form.


**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1773](pages/page-mainwp-themes.php#L1773-L1780)

### `mainwp_bulk_install_tabs_content`

*Render the Themes table for the Install Themes Tab.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'theme'` |  | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1806)

### `mainwp_manage_themes_sidebar_top`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1812)

### `mainwp_manage_themes_before_select_sites`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1814)

### `mainwp_manage_themes_after_select_sites`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1835)

### `mainwp_manage_themes_before_search_options`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1839)

### `mainwp_manage_themes_after_search_options`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1851)

### `mainwp_manage_themes_before_submit_button`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1855)

### `mainwp_manage_themes_after_submit_button`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1876)

### `mainwp_bulk_install_sidebar_submit_bottom`

*Render the Themes table for the Install Themes Tab.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'theme'` |  | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1879)

### `mainwp_manage_themes_sidebar_bottom`

*Render the Themes table for the Install Themes Tab.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'install'` |  | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1882)

### `mainwp_install_theme_card_template_bottom`

*Render the Themes table for the Install Themes Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1926)

### `mainwp_themes_auto_updates_bulk_action`

*Action: mainwp_themes_auto_updates_bulk_action*

Adds new action to the bulk actions menu on Themes Auto Updates.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2015](pages/page-mainwp-themes.php#L2015-L2022)

### `mainwp_manage_themes_sidebar_top`

*Render the Themes Auto Update Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1978](pages/page-mainwp-themes.php#L1978-L2063)

### `mainwp_manage_themes_before_search_options`

*Render the Themes Auto Update Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1978](pages/page-mainwp-themes.php#L1978-L2080)

### `mainwp_manage_themes_after_search_options`

*Render the Themes Auto Update Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1978](pages/page-mainwp-themes.php#L1978-L2099)

### `mainwp_manage_themes_before_submit_button`

*Render the Themes Auto Update Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1978](pages/page-mainwp-themes.php#L1978-L2103)

### `mainwp_manage_themes_after_submit_button`

*Render the Themes Auto Update Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1978](pages/page-mainwp-themes.php#L1978-L2105)

### `mainwp_manage_themes_sidebar_bottom`

*Render the Themes Auto Update Tab.*


Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1978](pages/page-mainwp-themes.php#L1978-L2107)

### `mainwp_themes_before_auto_updates_table`

*Action: mainwp_themes_before_auto_updates_table*

Fires before the Auto Update Themes table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2273](pages/page-mainwp-themes.php#L2273-L2280)

### `mainwp_themes_after_auto_updates_table`

*Action: mainwp_themes_after_auto_updates_table*

Fires before the Auto Update Themes table.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2351](pages/page-mainwp-themes.php#L2351-L2358)

### `mainwp_themes_before_ignored_updates`

*Action: mainwp_themes_before_ignored_updates*

Fires on the top of the Ignored Theme Updates page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredThemes` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2446](pages/page-mainwp-themes.php#L2446-L2453)

### `mainwp_themes_after_ignored_updates`

*Action: mainwp_themes_after_ignored_updates*

Fires on the bottom of the Ignored Theme Updates page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredThemes` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2467](pages/page-mainwp-themes.php#L2467-L2474)

### `mainwp_themes_before_ignored_abandoned`

*Action: mainwp_themes_before_ignored_abandoned*

Fires on the top of the Ignored Themes Abandoned page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredThemes` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2713](pages/page-mainwp-themes.php#L2713-L2720)

### `mainwp_themes_after_ignored_abandoned`

*Action: mainwp_themes_after_ignored_abandoned*

Fires on the bottom of the Ignored Themes Abandoned page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ignoredThemes` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2734](pages/page-mainwp-themes.php#L2734-L2741)

### `mainwp_themes_help_item`

*Action: mainwp_themes_help_item*

Fires at the bottom of the help articles list in the Help sidebar on the Themes page.

Suggested HTML markup:

<div class="item"><a href="Your custom URL">Your custom text</a></div>


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2919](pages/page-mainwp-themes.php#L2919-L2930)

### `mainwp_added_extension_menu`

*Adds Extension to the navigation menu*

Adds Extension instance to the Extensions located in the main MainWP navigation menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$slug` | `string` | Extension slug.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-extensions-handler.php](pages/page-mainwp-extensions-handler.php), [line 345](pages/page-mainwp-extensions-handler.php#L345-L354)

### `mainwp_added_new_site`

*This action is documented in class\class-mainwp-manage-sites-view.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$id` |  | 
`$website` |  | 

Source: [./pages/page-mainwp-extensions-handler.php](pages/page-mainwp-extensions-handler.php), [line 950](pages/page-mainwp-extensions-handler.php#L950-L951)

### `mainwp_delete_site`

*This action is documented in pages\page-mainwp-manage-sites-handler.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$clone_site` |  | 

Source: [./pages/page-mainwp-extensions-handler.php](pages/page-mainwp-extensions-handler.php), [line 1040](pages/page-mainwp-extensions-handler.php#L1040-L1041)

### `mainwp_added_new_group`

*This action is documented in pages\page-mainwp-manage-groups.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$groupId` |  | 

Source: [./pages/page-mainwp-extensions-handler.php](pages/page-mainwp-extensions-handler.php), [line 1075](pages/page-mainwp-extensions-handler.php#L1075-L1076)

### `mainwp_pageheader_sites`

*This action is documented in ../pages/page-mainwp-manage-sites.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'MonitoringSites'` |  | 

Source: [./pages/page-mainwp-monitoring.php](pages/page-mainwp-monitoring.php), [line 291](pages/page-mainwp-monitoring.php#L291-L292)

### `mainwp_pagefooter_sites`

*This action is documented in ../pages/page-mainwp-manage-sites.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'MonitoringSites'` |  | 

Source: [./pages/page-mainwp-monitoring.php](pages/page-mainwp-monitoring.php), [line 306](pages/page-mainwp-monitoring.php#L306-L307)

### `mainwp_pageheader_sites`

*Sites Page header*

Renders the tabs on the Sites screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'managesites'` |  | 

Source: [./pages/page-mainwp-manage-screenshots.php](pages/page-mainwp-manage-screenshots.php), [line 215](pages/page-mainwp-manage-screenshots.php#L215-L222)

### `mainwp_pagefooter_sites`

*Sites Page Footer*

Renders the footer on the Sites screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'managesites'` |  | 

Source: [./pages/page-mainwp-manage-screenshots.php](pages/page-mainwp-manage-screenshots.php), [line 446](pages/page-mainwp-manage-screenshots.php#L446-L453)

### `mainwp_clients_overview_note_widget_top`

*Actoin: mainwp_clients_overview_note_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-note.php](widgets/widget-mainwp-client-overview-note.php), [line 78](widgets/widget-mainwp-client-overview-note.php#L78-L87)

### `mainwp_clients_overview_note_widget_bottom`

*Action: mainwp_clients_overview_note_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-note.php](widgets/widget-mainwp-client-overview-note.php), [line 100](widgets/widget-mainwp-client-overview-note.php#L100-L109)

### `mainwp_clients_overview_contact_widget_top`

*Actoin: mainwp_clients_overview_contact_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$contact_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-contacts.php](widgets/widget-mainwp-client-overview-contacts.php), [line 82](widgets/widget-mainwp-client-overview-contacts.php#L82-L91)

### `mainwp_clients_overview_contact_widget_bottom`

*Action: mainwp_clients_overview_contact_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$contact_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-contacts.php](widgets/widget-mainwp-client-overview-contacts.php), [line 142](widgets/widget-mainwp-client-overview-contacts.php#L142-L151)

### `mainwp_clients_overview_overview_widget_top`

*Actoin: mainwp_clients_overview_overview_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-info.php](widgets/widget-mainwp-client-overview-info.php), [line 82](widgets/widget-mainwp-client-overview-info.php#L82-L91)

### `mainwp_clients_overview_overview_widget_bottom`

*Action: mainwp_clients_overview_overview_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-info.php](widgets/widget-mainwp-client-overview-info.php), [line 159](widgets/widget-mainwp-client-overview-info.php#L159-L168)

### `mainwp_site_info_widget_top`

*Actoin: mainwp_site_info_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-info.php](widgets/widget-mainwp-site-info.php), [line 124](widgets/widget-mainwp-site-info.php#L124-L133)

### `mainwp_site_info_table_top`

*Action: mainwp_site_info_table_top*

Fires at the top of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-info.php](widgets/widget-mainwp-site-info.php), [line 146](widgets/widget-mainwp-site-info.php#L146-L155)

### `mainwp_site_info_table_bottom`

*Action: mainwp_site_info_table_bottom*

Fires at the bottom of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-info.php](widgets/widget-mainwp-site-info.php), [line 179](widgets/widget-mainwp-site-info.php#L179-L188)

### `mainwp_site_info_widget_bottom`

*Action: mainwp_site_info_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-info.php](widgets/widget-mainwp-site-info.php), [line 194](widgets/widget-mainwp-site-info.php#L194-L203)

### `mainwp_clients_overview_info_widget_top`

*Actoin: mainwp_clients_overview_info_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-custom-info.php](widgets/widget-mainwp-client-overview-custom-info.php), [line 71](widgets/widget-mainwp-client-overview-custom-info.php#L71-L80)

### `mainwp_clients_overview_info_table_top`

*Action: mainwp_clients_overview_info_table_top*

Fires at the top of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-custom-info.php](widgets/widget-mainwp-client-overview-custom-info.php), [line 89](widgets/widget-mainwp-client-overview-custom-info.php#L89-L98)

### `mainwp_clients_overview_info_table_bottom`

*Action: mainwp_clients_overview_info_table_bottom*

Fires at the bottom of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-custom-info.php](widgets/widget-mainwp-client-overview-custom-info.php), [line 128](widgets/widget-mainwp-client-overview-custom-info.php#L128-L137)

### `mainwp_clients_overview_info_widget_bottom`

*Action: mainwp_clients_overview_info_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-custom-info.php](widgets/widget-mainwp-client-overview-custom-info.php), [line 147](widgets/widget-mainwp-client-overview-custom-info.php#L147-L156)

### `mainwp_notes_widget_top`

*Action: mainwp_notes_widget_top*

Fires at the top of the Notes widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-notes.php](widgets/widget-mainwp-notes.php), [line 70](widgets/widget-mainwp-notes.php#L70-L79)

### `mainwp_notes_widget_bottom`

*Action: mainwp_notes_widget_bottom*

Fires at the bottom of the Notes widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-notes.php](widgets/widget-mainwp-notes.php), [line 95](widgets/widget-mainwp-notes.php#L95-L104)

### `mainwp_clients_widget_top`

*Actoin: mainwp_clients_widget_top*

Fires at the top of the Clients widget on the overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$clients` | `object` | Object containing the clients info.

**Changelog**

Version | Description
------- | -----------
`4.4` | 

Source: [./widgets/widget-mainwp-clients.php](widgets/widget-mainwp-clients.php), [line 62](widgets/widget-mainwp-clients.php#L62-L71)

### `mainwp_clients_widget_bottom`

*Action: mainwp_clients_widget_bottom*

Fires at the bottom of the Clients widget on the overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$clients` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.4` | 

Source: [./widgets/widget-mainwp-clients.php](widgets/widget-mainwp-clients.php), [line 161](widgets/widget-mainwp-clients.php#L161-L170)

### `mainwp_security_issues_widget_top`

*Action: mainwp_security_issues_widget_top*

Fires at the bottom of the Security Issues widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-security-issues-widget.php](widgets/widget-mainwp-security-issues-widget.php), [line 166](widgets/widget-mainwp-security-issues-widget.php#L166-L173)

### `mainwp_security_issues_widget_top`

*Action: mainwp_security_issues_widget_top*

Fires at the bottom of the Security Issues widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-security-issues-widget.php](widgets/widget-mainwp-security-issues-widget.php), [line 178](widgets/widget-mainwp-security-issues-widget.php#L178-L185)

### `mainwp_security_issues_list_item_column`

*Action: mainwp_security_issues_list_item_column*

Fires before the last (actions) colum in the security issues list.

Preferred HTML structure:

<div class="column middle aligned">
Your content here!
</div>

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-security-issues-widget.php](widgets/widget-mainwp-security-issues-widget.php), [line 248](widgets/widget-mainwp-security-issues-widget.php#L248-L263)

### `mainwp_security_issues_widget_bottom`

*Action: mainwp_security_issues_widget_bottom*

Fires at the bottom of the Security Issues widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-security-issues-widget.php](widgets/widget-mainwp-security-issues-widget.php), [line 271](widgets/widget-mainwp-security-issues-widget.php#L271-L278)

### `mainwp_get_started_widget_top`

*Action: mainwp_get_started_widget_top*

Fires top the widget.


**Changelog**

Version | Description
------- | -----------
`5.0` | 

Source: [./widgets/widget-mainwp-get-started.php](widgets/widget-mainwp-get-started.php), [line 93](widgets/widget-mainwp-get-started.php#L93-L100)

### `mainwp_get_started_widget_bottom`

*Action: mainwp_get_started_widget_bottom*

Fires bottom the widget.


**Changelog**

Version | Description
------- | -----------
`5.0` | 

Source: [./widgets/widget-mainwp-get-started.php](widgets/widget-mainwp-get-started.php), [line 135](widgets/widget-mainwp-get-started.php#L135-L142)

### `mainwp_plugins_widget_top`

*Action: mainwp_plugins_widget_top*

Fires at the top of the Plugins widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$allPlugins` | `array` | Array containing all detected plugins data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 154](widgets/widget-mainwp-widget-plugins.php#L154-L164)

### `mainwp_before_active_plugins_list`

*Action: mainwp_before_active_plugins_list*

Fires before the active plugins list in the Plugins widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$actived_plugins` | `array` | Array containing all active plugins data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 168](widgets/widget-mainwp-widget-plugins.php#L168-L178)

### `mainwp_after_active_plugins_list`

*Action: mainwp_after_active_plugins_list*

Fires after the active plugins list in the Plugins widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$actived_plugins` | `array` | Array containing all active plugins data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 213](widgets/widget-mainwp-widget-plugins.php#L213-L223)

### `mainwp_before_inactive_plugins_list`

*Action: mainwp_before_inactive_plugins_list*

Fires before the inactive plugins list in the Plugins widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$inactive_plugins` | `array` | Array containing all active plugins data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 228](widgets/widget-mainwp-widget-plugins.php#L228-L238)

### `mainwp_after_inactive_plugins_list`

*Action: mainwp_after_inactive_plugins_list*

Fires after the inactive plugins list in the Plugins widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$inactive_plugins` | `array` | Array containing all active plugins data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 276](widgets/widget-mainwp-widget-plugins.php#L276-L286)

### `mainwp_plugins_widget_bottom`

*Action: mainwp_plugins_widget_bottom*

Fires at the bottom of the Plugins widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$allPlugins` | `array` | Array containing all detected plugins data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 297](widgets/widget-mainwp-widget-plugins.php#L297-L307)

### `mainwp_before_plugin_action`

*Action: mainwp_before_plugin_action*

Fires before plugin activate/deactivate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$action` |  | 
`$plugin` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 383](widgets/widget-mainwp-widget-plugins.php#L383-L390)

### `mainwp_after_plugin_action`

*Action: mainwp_after_plugin_action*

Fires after plugin activate/deactivate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$action` |  | 
`$plugin` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 401](widgets/widget-mainwp-widget-plugins.php#L401-L408)

### `mainwp_connection_status_widget_bottom`

*Action: mainwp_connection_status_widget_bottom*

Fires at the bottom of the Connection Status widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 103](widgets/widget-mainwp-connection-status.php#L103-L110)

### `mainwp_connection_status_widget_top`

*Action: mainwp_connection_status_widget_top*

Fires at the top of the Connection Status widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 199](widgets/widget-mainwp-connection-status.php#L199-L206)

### `mainwp_connection_status_before_all_sites_list`

*Action: mainwp_connection_status_before_all_sites_list*

Fires before the list of all sites in the connection status widgets


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 264](widgets/widget-mainwp-connection-status.php#L264-L271)

### `mainwp_connection_status_after_all_sites_list`

*Action: mainwp_connection_status_after_all_sites_list*

Fires after the list of all sites in the connection status widgets


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 277](widgets/widget-mainwp-connection-status.php#L277-L284)

### `mainwp_connection_status_before_connected_sites_list`

*Action: mainwp_connection_status_before_connected_sites_list*

Fires before the list of connected sites in the connection status widgets


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 290](widgets/widget-mainwp-connection-status.php#L290-L297)

### `mainwp_connection_status_after_connected_sites_list`

*Action: mainwp_connection_status_after_connected_sites_list*

Fires after the list of connected sites in the connection status widgets


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 303](widgets/widget-mainwp-connection-status.php#L303-L310)

### `mainwp_connection_status_before_disconnected_sites_list`

*Action: mainwp_connection_status_before_disconnected_sites_list*

Fires before the list of disconnected sites in the connection status widgets


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 316](widgets/widget-mainwp-connection-status.php#L316-L323)

### `mainwp_connection_status_after_disconnected_sites_list`

*Action: mainwp_connection_status_after_disconnected_sites_list*

Fires after the list of disconnected sites in the connection status widgets


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 329](widgets/widget-mainwp-connection-status.php#L329-L336)

### `mainwp_connection_status_widget_footer_left`

*Action: mainwp_connection_status_widget_footer_left*

Fires in the left column of the Connection status widget


**Changelog**

Version | Description
------- | -----------
`5.3` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 344](widgets/widget-mainwp-connection-status.php#L344-L351)

### `mainwp_connection_status_widget_footer_right`

*Action: mainwp_connection_status_widget_footer_right*

Fires in the right column of the Connection status widget


**Changelog**

Version | Description
------- | -----------
`5.3` | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 356](widgets/widget-mainwp-connection-status.php#L356-L363)

### `mainwp_themes_widget_top`

*Action: mainwp_themes_widget_top*

Fires at the top of the Themes widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$allThemes` | `array` | Array containing all detected themes data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-themes.php](widgets/widget-mainwp-widget-themes.php), [line 114](widgets/widget-mainwp-widget-themes.php#L114-L124)

### `mainwp_before_inactive_themes_list`

*Action: mainwp_before_inactive_themes_list*

Fires before the inactive themes list in the Themes widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$inactive_themes` | `array` | Array containing all inactive themes data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-themes.php](widgets/widget-mainwp-widget-themes.php), [line 128](widgets/widget-mainwp-widget-themes.php#L128-L138)

### `mainwp_after_inactive_themes_list`

*Action: mainwp_after_inactive_themes_list*

Fires after the inactive themes list in the Themes widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$inactive_themes` | `array` | Array containing all inactive themes data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-themes.php](widgets/widget-mainwp-widget-themes.php), [line 175](widgets/widget-mainwp-widget-themes.php#L175-L185)

### `mainwp_themes_widget_bottom`

*Action: mainwp_themes_widget_bottom*

Fires at the bottom of the Themes widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.
`$allThemes` | `array` | Array containing all detected themes data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-themes.php](widgets/widget-mainwp-widget-themes.php), [line 191](widgets/widget-mainwp-widget-themes.php#L191-L201)

### `mainwp_before_theme_action`

*Action: mainwp_before_theme_action*

Fires before theme activate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$action` |  | 
`$theme` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-themes.php](widgets/widget-mainwp-widget-themes.php), [line 272](widgets/widget-mainwp-widget-themes.php#L272-L279)

### `mainwp_after_theme_action`

*Action: mainwp_after_theme_action*

Fires after theme activate/delete actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$action` |  | 
`$theme` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-widget-themes.php](widgets/widget-mainwp-widget-themes.php), [line 293](widgets/widget-mainwp-widget-themes.php#L293-L300)

### `mainwp_clients_info_widget_top`

*Actoin: mainwp_clients_info_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-info.php](widgets/widget-mainwp-client-info.php), [line 84](widgets/widget-mainwp-client-info.php#L84-L93)

### `mainwp_clients_info_table_top`

*Action: mainwp_clients_info_table_top*

Fires at the top of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-info.php](widgets/widget-mainwp-client-info.php), [line 107](widgets/widget-mainwp-client-info.php#L107-L116)

### `mainwp_clients_info_table_bottom`

*Action: mainwp_clients_info_table_bottom*

Fires at the bottom of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-info.php](widgets/widget-mainwp-client-info.php), [line 168](widgets/widget-mainwp-client-info.php#L168-L177)

### `mainwp_clients_info_widget_bottom`

*Action: mainwp_clients_info_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-info.php](widgets/widget-mainwp-client-info.php), [line 183](widgets/widget-mainwp-client-info.php#L183-L192)

### `mainwp_clients_overview_websites_widget_top`

*Actoin: mainwp_clients_overview_websites_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-sites.php](widgets/widget-mainwp-client-overview-sites.php), [line 124](widgets/widget-mainwp-client-overview-sites.php#L124-L133)

### `mainwp_clients_overview_websites_widget_bottom`

*Action: mainwp_clients_overview_websites_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_info` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-client-overview-sites.php](widgets/widget-mainwp-client-overview-sites.php), [line 149](widgets/widget-mainwp-client-overview-sites.php#L149-L158)

### `mainwp_recent_posts_widget_top`

*Action: mainwp_recent_posts_widget_top*

Fires at the top of the Recent Posts widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 125](widgets/widget-mainwp-recent-posts.php#L125-L132)

### `mainwp_recent_posts_after_lists`

*Action: mainwp_recent_posts_after_lists*

Fires after the recent posts lists, before the bottom actions section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 144](widgets/widget-mainwp-recent-posts.php#L144-L151)

### `mainwp_recent_posts_widget_bottom`

*Action: mainwp_recent_posts_widget_bottom*

Fires at the bottom of the Recent Posts widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 163](widgets/widget-mainwp-recent-posts.php#L163-L170)

### `mainwp_recent_posts_before_publised_list`

*Action: mainwp_recent_posts_before_publised_list*

Fires before the list of recent published Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 233](widgets/widget-mainwp-recent-posts.php#L233-L243)

### `mainwp_recent_posts_after_publised_list`

*Action: mainwp_recent_posts_after_publised_list*

Fires after the list of recent published Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 292](widgets/widget-mainwp-recent-posts.php#L292-L302)

### `mainwp_recent_posts_before_draft_list`

*Action: mainwp_recent_posts_before_draft_list*

Fires before the list of recent draft Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 327](widgets/widget-mainwp-recent-posts.php#L327-L337)

### `mainwp_recent_posts_after_draft_list`

*Action: mainwp_recent_posts_after_draft_list*

Fires after the list of recent draft Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 383](widgets/widget-mainwp-recent-posts.php#L383-L393)

### `mainwp_recent_posts_before_pending_list`

*Action: mainwp_recent_posts_before_pending_list*

Fires before the list of recent pending Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 418](widgets/widget-mainwp-recent-posts.php#L418-L428)

### `mainwp_recent_posts_after_pending_list`

*Action: mainwp_recent_posts_after_pending_list*

Fires after the list of recent pending Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 474](widgets/widget-mainwp-recent-posts.php#L474-L484)

### `mainwp_recent_posts_before_future_list`

*Action: mainwp_recent_posts_before_future_list*

Fires before the list of recent future Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 509](widgets/widget-mainwp-recent-posts.php#L509-L519)

### `mainwp_recent_posts_after_future_list`

*Action: mainwp_recent_posts_after_future_list*

Fires after the list of recent future Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 566](widgets/widget-mainwp-recent-posts.php#L566-L576)

### `mainwp_recent_posts_before_trash_list`

*Action: mainwp_recent_posts_before_trash_list*

Fires before the list of recent trash Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 601](widgets/widget-mainwp-recent-posts.php#L601-L611)

### `mainwp_recent_posts_after_trash_list`

*Action: mainwp_recent_posts_after_trash_list*

Fires after the list of recent trash Posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPosts` | `array` | All posts data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 656](widgets/widget-mainwp-recent-posts.php#L656-L666)

### `mainwp_before_post_action`

*Action: mainwp_before_post_action*

Fires before post/page publish/unpublish/trash/delete/restore actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$type` |  | 
`$pAction` |  | 
`$postId` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 772](widgets/widget-mainwp-recent-posts.php#L772-L779)

### `mainwp_after_post_action`

*Action: mainwp_after_post_action
Fires after post/page publish/unpublish/trash/delete/restore actions.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$type` |  | 
`$pAction` |  | 
`$postId` |  | 
`$website` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 795](widgets/widget-mainwp-recent-posts.php#L795-L801)

### `mainwp_updates_overview_after_update_details`

*Action: mainwp_updates_overview_after_update_details*

Fires at the bottom of the Update Details section in the Updates Overview widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$currentSite` |  | 
`$globalView` |  | 
`$userExtension` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 424](widgets/widget-mainwp-updates-overview.php#L424-L431)

### `mainwp_updates_overview_before_total_updates`

*Action: mainwp_updates_overview_before_total_updates*

Fires before the total updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 517](widgets/widget-mainwp-updates-overview.php#L517-L524)

### `mainwp_updates_overview_after_total_updates`

*Action: mainwp_updates_overview_after_total_updates*

Fires after the total updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 559](widgets/widget-mainwp-updates-overview.php#L559-L566)

### `mainwp_updates_overview_before_update_details`

*Action: mainwp_updates_overview_before_update_details*

Fires at the top of the Update Details section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 596](widgets/widget-mainwp-updates-overview.php#L596-L603)

### `mainwp_updates_overview_before_wordpress_updates`

*Action: mainwp_updates_overview_before_wordpress_updates*

Fires before the WordPress updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 605](widgets/widget-mainwp-updates-overview.php#L605-L612)

### `mainwp_updates_overview_after_wordpress_updates`

*Action: mainwp_updates_overview_after_wordpress_updates*

Fires after the WordPress updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 652](widgets/widget-mainwp-updates-overview.php#L652-L659)

### `mainwp_updates_overview_before_plugin_updates`

*Action: mainwp_updates_overview_before_plugin_updates*

Fires before the Plugin updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 687](widgets/widget-mainwp-updates-overview.php#L687-L694)

### `mainwp_updates_overview_after_plugin_updates`

*Action: mainwp_updates_overview_after_plugin_updates*

Fires after the Plugin updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 729](widgets/widget-mainwp-updates-overview.php#L729-L736)

### `mainwp_updates_overview_before_theme_updates`

*Action: mainwp_updates_overview_before_theme_updates*

Fires before the Theme updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 764](widgets/widget-mainwp-updates-overview.php#L764-L771)

### `mainwp_updates_overview_after_theme_updates`

*Action: mainwp_updates_overview_after_theme_updates*

Fires after the Theme updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 806](widgets/widget-mainwp-updates-overview.php#L806-L813)

### `mainwp_updates_overview_before_translation_updates`

*Action: mainwp_updates_overview_before_translation_updates*

Fires before the Translation updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 832](widgets/widget-mainwp-updates-overview.php#L832-L839)

### `mainwp_updates_overview_after_translation_updates`

*Action: mainwp_updates_overview_after_translation_updates*

Fires after the Translation updates section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 869](widgets/widget-mainwp-updates-overview.php#L869-L876)

### `mainwp_updates_overview_before_abandoned_plugins_themes`

*Action: mainwp_updates_overview_before_abandoned_plugins_themes*

Fires at the top of the Abandoned Plugins & Themes section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 899](widgets/widget-mainwp-updates-overview.php#L899-L906)

### `mainwp_updates_overview_after_abandoned_plugins_themes`

*Action: mainwp_updates_overview_after_abandoned_plugins_themes*

Fires at the bottom of the Abandoned Plugins & Themes section in the Updates Overview widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 992](widgets/widget-mainwp-updates-overview.php#L992-L999)

### `mainwp_updatesoverview_widget_bottom`

*Action: mainwp_updatesoverview_widget_bottom*

Fires at the bottom of the Updates Overview widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$site_ids` |  | 
`$globalView` | `bool` | Whether it's global or individual site view.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 1115](widgets/widget-mainwp-updates-overview.php#L1115-L1125)

### `mainwp_non_mainwp_changes_widget_top`

*Actoin: mainwp_non_mainwp_changes_widget_top*

Fires at the top of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-actions.php](widgets/widget-mainwp-site-actions.php), [line 150](widgets/widget-mainwp-site-actions.php#L150-L159)

### `mainwp_non_mainwp_changes_table_top`

*Action: mainwp_non_mainwp_changes_table_top*

Fires at the top of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-actions.php](widgets/widget-mainwp-site-actions.php), [line 162](widgets/widget-mainwp-site-actions.php#L162-L171)

### `mainwp_non_mainwp_changes_table_bottom`

*Action: mainwp_non_mainwp_changes_table_bottom*

Fires at the bottom of the Site Info table in Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-actions.php](widgets/widget-mainwp-site-actions.php), [line 180](widgets/widget-mainwp-site-actions.php#L180-L189)

### `mainwp_non_mainwp_changes_widget_bottom`

*Action: mainwp_non_mainwp_changes_widget_bottom*

Fires at the bottom of the Site Info widget on the Individual site overview page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `object` | Object containing the child site info.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-site-actions.php](widgets/widget-mainwp-site-actions.php), [line 205](widgets/widget-mainwp-site-actions.php#L205-L214)

### `mainwp_recent_pages_widget_top`

*Action: mainwp_recent_pages_widget_top*

Fires at the top of the Recent Pages widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 119](widgets/widget-mainwp-recent-pages.php#L119-L126)

### `mainwp_recent_pages_after_lists`

*Action: mainwp_recent_pages_after_lists*

Fires after the recent pages lists, before the bottom actions section.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 139](widgets/widget-mainwp-recent-pages.php#L139-L146)

### `mainwp_recent_pages_widget_bottom`

*Action: mainwp_recent_pages_widget_bottom*

Fires at the bottom of the Recent Pages widget.


**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 159](widgets/widget-mainwp-recent-pages.php#L159-L166)

### `mainwp_recent_pages_before_publised_list`

*Action: mainwp_recent_pages_before_publised_list*

Fires before the list of recent published Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of posts.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 229](widgets/widget-mainwp-recent-pages.php#L229-L239)

### `mainwp_recent_pages_after_publised_list`

*Action: mainwp_recent_pages_after_publised_list*

Fires after the list of recent published Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 289](widgets/widget-mainwp-recent-pages.php#L289-L299)

### `mainwp_recent_pages_before_draft_list`

*Action: mainwp_recent_pages_before_draft_list*

Fires before the list of recent draft Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 324](widgets/widget-mainwp-recent-pages.php#L324-L334)

### `mainwp_recent_pages_after_draft_list`

*Action: mainwp_recent_pages_after_draft_list*

Fires after the list of recent draft Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 381](widgets/widget-mainwp-recent-pages.php#L381-L391)

### `mainwp_recent_pages_before_pending_list`

*Action: mainwp_recent_pages_before_pending_list*

Fires before the list of recent pending pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 415](widgets/widget-mainwp-recent-pages.php#L415-L425)

### `mainwp_recent_pages_after_pending_list`

*Action: mainwp_recent_pages_after_pending_list*

Fires after the list of recent pending pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 472](widgets/widget-mainwp-recent-pages.php#L472-L482)

### `mainwp_recent_pages_before_future_list`

*Action: mainwp_recent_pages_before_future_list*

Fires before the list of recent future Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 507](widgets/widget-mainwp-recent-pages.php#L507-L517)

### `mainwp_recent_pages_after_future_list`

*Action: mainwp_recent_pages_after_future_list*

Fires after the list of recent future Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 565](widgets/widget-mainwp-recent-pages.php#L565-L575)

### `mainwp_recent_pages_before_trash_list`

*Action: mainwp_recent_pages_before_trash_list*

Fires before the list of recent trash Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 600](widgets/widget-mainwp-recent-pages.php#L600-L610)

### `mainwp_recent_pages_after_trash_list`

*Action: mainwp_recent_pages_after_trash_list*

Fires after the list of recent trash Pages.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allPages` | `array` | All pages data.
`$recent_number` | `int` | Number of pages.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 655](widgets/widget-mainwp-recent-pages.php#L655-L665)

## Filters

### `mainwp_is_rest_api_request`

*Whether this is a REST API request.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$is_rest_api_request` |  | 

**Changelog**

Version | Description
------- | -----------
`5.1.1` | 

Source: [./includes/class-mainwp-setup.php](includes/class-mainwp-setup.php), [line 81](includes/class-mainwp-setup.php#L81-L86)

### `mainwp_rest_is_request_to_rest_api`

*Check if is request to our REST API.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mainwp_api || $extension_api` |  | 

Source: [./includes/rest-api/class-mainwp-rest-authentication.php](includes/rest-api/class-mainwp-rest-authentication.php), [line 89](includes/rest-api/class-mainwp-rest-authentication.php#L89-L108)

### `mainwp_disable_rest_api_access_log`

*This filter enables the exclusion of the most recent access time from being logged for REST API calls.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$this->user->key_id` |  | 
`$this->user->user_id` |  | 

**Changelog**

Version | Description
------- | -----------
`5.1.1` | 

Source: [./includes/rest-api/class-mainwp-rest-authentication.php](includes/rest-api/class-mainwp-rest-authentication.php), [line 790](includes/rest-api/class-mainwp-rest-authentication.php#L790-L799)

### `mainwp_rest_api_v2_enabled`

*Hook into WordPress ready to init the REST API as needed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./includes/rest-api/class-mainwp-rest-server.php](includes/rest-api/class-mainwp-rest-server.php), [line 47](includes/rest-api/class-mainwp-rest-server.php#L47-L51)

### `mainwp_rest_api_get_rest_namespaces`

*Get API namespaces - new namespaces should be registered here.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('mainwp/v2' => $this->get_v2_controllers())` |  | 

Source: [./includes/rest-api/class-mainwp-rest-server.php](includes/rest-api/class-mainwp-rest-server.php), [line 89](includes/rest-api/class-mainwp-rest-server.php#L89-L100)

### `mainwp_rest_api_disabled`

*Method is_rest_api_enabled()*

Check if Enabled the REST API.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php](includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php), [line 92](includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php#L92-L99)

### `mainwp_widget_site_actions_limit_number`

*Method mainwp_rest_api_non_mainwp_changes_callback()*

Callback function for managing the response to API requests made for the endpoint: non-mainwp-changes
Can be accessed via a request like: https://yourdomain.com/wp-json/mainwp/v1/site/non-mainwp-changes
API Method: GET

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`10000` |  | 

Source: [./includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php](includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php), [line 3448](includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php#L3448-L3487)

### `mainwp_widget_site_actions_limit_number`

*Method mainwp_rest_api_non_mainwp_changes_count_callback()*

Callback function for managing the response to API requests made for the endpoint: non-mainwp-changes-count
Can be accessed via a request like: https://yourdomain.com/wp-json/mainwp/v1/site/non-mainwp-changes-count
API Method: GET

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`10000` |  | 

Source: [./includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php](includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php), [line 3513](includes/rest-api/controller/version1/class-mainwp-rest-api-v1.php#L3513-L3556)

### `mainwp_rest_batch_items_limit`

*Check batch limit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`100` |  | 
`$this->get_normalized_rest_base()` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-controller.php), [line 189](includes/rest-api/controller/version2/class-mainwp-rest-controller.php#L189-L196)

### `mainwp_rest_{$type}_object_query`

*Filter the query arguments for a request.*

Enables adding extra arguments or setting defaults for a post
collection request.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | Key value array of query var to query value.
`$request` | `\WP_REST_Request` | The request used.

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-controller.php), [line 406](includes/rest-api/controller/version2/class-mainwp-rest-controller.php#L406-L415)

### `mainwp_rest_collection_params`

*Filter collection parameters for the controller.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$params` |  | 
`$this` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-controller.php), [line 1384](includes/rest-api/controller/version2/class-mainwp-rest-controller.php#L1384-L1390)

### `mainwp_rest_batch_items_limit`

*Check batch limit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`100` |  | 
`$this->get_normalized_rest_base()` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-global-batch-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-global-batch-controller.php), [line 471](includes/rest-api/controller/version2/class-mainwp-rest-global-batch-controller.php#L471-L478)

### `mainwp_rest_routes_sites_controller_filter_allowed_fields_by_context`

*Get sites by tag id.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-tags-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-tags-controller.php), [line 370](includes/rest-api/controller/version2/class-mainwp-rest-tags-controller.php#L370-L390)

### `mainwp_rest_routes_clients_controller_filter_allowed_fields_by_context`

*Get client by tag id.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-tags-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-tags-controller.php), [line 404](includes/rest-api/controller/version2/class-mainwp-rest-tags-controller.php#L404-L423)

### `mainwp_rest_pre_insert_site_item`

*Filters an object before it is inserted via the REST API.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$item_fields` | `array` | Site data.
`$request` | `\WP_REST_Request` | Request object.

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php), [line 2078](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php#L2078-L2086)

### `mainwp_rest_pre_update_site_item`

*Filters an object before it is inserted via the REST API.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` |  | 
`$request` | `\WP_REST_Request` | Request object.

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php), [line 2125](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php#L2125-L2133)

### `mainwp_rest_prepare_site`

*Filterobject returned from the REST API.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | The object.
`$item` | `mixed` | The object used to create response.
`$request` | `\WP_REST_Request` | Request object.

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php), [line 2346](includes/rest-api/controller/version2/class-mainwp-rest-sites-controller.php#L2346-L2353)

### `mainwp_rest_routes_sites_controller_filter_allowed_fields_by_context`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`'simple_view'` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php), [line 828](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php#L828-L828)

### `mainwp_rest_routes_sites_controller_filter_allowed_fields_by_context`

*Update all items of site.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`'simple_view'` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php), [line 792](includes/rest-api/controller/version2/class-mainwp-rest-updates-controller.php#L792-L858)

### `mainwp_rest_routes_sites_controller_filter_allowed_fields_by_context`

*Get sites of client.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$site` |  | 

Source: [./includes/rest-api/controller/version2/class-mainwp-rest-clients-controller.php](includes/rest-api/controller/version2/class-mainwp-rest-clients-controller.php), [line 497](includes/rest-api/controller/version2/class-mainwp-rest-clients-controller.php#L497-L521)

### `mainwp_init_load_all_options`

*Method load_all_options()*

Load all wp_options data.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$options` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 297](class/class-mainwp-system.php#L297-L380)

### `mainwp_load_text_domain`

*Method localization()*

Loads plugin language files.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 414](class/class-mainwp-system.php#L414-L420)

### `mainwp_disablemenuitems`

*Method init()*

Instantiate Plugin.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_mainwp_disable_menus_items` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 584](class/class-mainwp-system.php#L584-L598)

### `mainwp_main_menu_disable_menu_items`

*Filter: mainwp_main_menu_disable_menu_items*

Filters disabled MainWP navigation items.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_mainwp_disable_menus_items` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 600](class/class-mainwp-system.php#L600-L607)

### `mainwp_currentusercan`

*Method \mainwp_current_user_can()*

Check permission level by hook mainwp_currentusercan of Team Control extension.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$cap_type` | `string` | group or type of capabilities.
`$cap` | `string` | capabilities for current user.

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 612](class/class-mainwp-system.php#L612-L649)

### `mainwp-getprimarybackup-activated`

*Method admin_init()*

Do nothing if current user is not an Admin else display the page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($return)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getprimarybackup_activated'` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 766](class/class-mainwp-system.php#L766-L807)

### `mainwp_getprimarybackup_activated`

*Method admin_init()*

Do nothing if current user is not an Admin else display the page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$return` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 766](class/class-mainwp-system.php#L766-L808)

### `mainwp_ui_use_wp_calendar`

*Filter: mainwp_ui_use_wp_calendar*

Filters whether default jQuery datepicker should be used to avoid potential problems with Senatic UI Calendar library.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0.5` | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 821](class/class-mainwp-system.php#L821-L828)

### `mainwp_security_nonces`

*Method admin_init()*

Do nothing if current user is not an Admin else display the page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 766](class/class-mainwp-system.php#L766-L864)

### `mainwp_enqueue_script_gridster`

*Method admin_init()*

Do nothing if current user is not an Admin else display the page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$load_gridstack` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 766](class/class-mainwp-system.php#L766-L882)

### `mainwp_admin_enqueue_scripts`

*Method admin_enqueue_scripts()*

Enqueue all Mainwp Admin Scripts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 1053](class/class-mainwp-system.php#L1053-L1102)

### `mainwp_all_disablemenuitems`

*Method admin_footer()*

Create MainWP admin footer.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$_mainwp_disable_menus_items` |  | 

Source: [./class/class-mainwp-system.php](class/class-mainwp-system.php), [line 1240](class/class-mainwp-system.php#L1240-L1330)

### `mainwp_cron_bulk_update_sites_limit`

*Method handle_cron_batch_updates()*

MainWP Cron batch Update

This Cron Checks to see if Automatic Daily Updates need to be performed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`3` |  | 

Source: [./class/class-mainwp-cron-jobs-batch.php](class/class-mainwp-cron-jobs-batch.php), [line 95](class/class-mainwp-cron-jobs-batch.php#L95-L128)

### `mainwp_cron_bulk_update_items_limit`

*Method handle_cron_batch_updates()*

MainWP Cron batch Update

This Cron Checks to see if Automatic Daily Updates need to be performed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`3` |  | 

Source: [./class/class-mainwp-cron-jobs-batch.php](class/class-mainwp-cron-jobs-batch.php), [line 95](class/class-mainwp-cron-jobs-batch.php#L95-L129)

### `mainwp_api_manager_upgrade_url`

*Get Upgrade URL.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->upgrade_url` |  | 

Source: [./class/class-mainwp-api-manager.php](class/class-mainwp-api-manager.php), [line 91](class/class-mainwp-api-manager.php#L91-L97)

### `mainwp_clients_sitestable_item`

*Filter: mainwp_clients_sitestable_item*

Filters the Clients table column items. Allows user to create new column item.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$item` | `array` | Array containing child site data.
`$item` | `array` | Array containing child site data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-client-list-table.php](class/class-mainwp-client-list-table.php), [line 60](class/class-mainwp-client-list-table.php#L60-L69)

### `mainwp_clients_sitestable_getcolumns`

*Filter: mainwp_clients_sitestable_getcolumns*

Filters the Clients table columns. Allows user to create a new column.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$columns` | `array` | Array containing table columns.
`$columns` | `array` | Array containing table columns.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-client-list-table.php](class/class-mainwp-client-list-table.php), [line 156](class/class-mainwp-client-list-table.php#L156-L165)

### `mainwp_manageclients_bulk_actions`

*Filter: mainwp_manageclients_bulk_actions*

Filters bulk actions on the Clients page. Allows user to hook in new actions or remove default ones.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$actions` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-client-list-table.php](class/class-mainwp-client-list-table.php), [line 206](class/class-mainwp-client-list-table.php#L206-L213)

### `mainwp_clients_table_features`

*Filter: mainwp_clients_table_features*

Filter the Clients table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-client-list-table.php](class/class-mainwp-client-list-table.php), [line 409](class/class-mainwp-client-list-table.php#L409-L416)

### `mainwp_currentuserallowedaccesssites`

*Filter: mainwp_currentuserallowedaccesssites*

Filters allowed sites for the current user.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'all'` |  | 

Source: [./class/class-mainwp-db.php](class/class-mainwp-db.php), [line 1889](class/class-mainwp-db.php#L1889-L1896)

### `mainwp_currentuserallowedaccessgroups`

*Filter: mainwp_currentuserallowedaccessgroups*

Filters allowed groups for the current user.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'all'` |  | 

Source: [./class/class-mainwp-db.php](class/class-mainwp-db.php), [line 1960](class/class-mainwp-db.php#L1960-L1967)

### `minwp_notification_template_copy_message`

*Use mainwp_notification_template_copy_message instead.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$templ` |  | 
`$type` |  | 
`$overrided` |  | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 330](class/class-mainwp-notification-settings.php#L330-L336)

### `mainwp_notification_template_copy_message`

*Filter mainwp_notification_template_copy_message.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$copy_message` |  | 
`$templ` |  | 
`$type` |  | 
`$overrided` |  | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 337](class/class-mainwp-notification-settings.php#L337-L343)

### `mainwp_notification_type_desc`

*Get email settings description.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$type` | `string` | Email notification type.

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 378](class/class-mainwp-notification-settings.php#L378-L399)

### `mainwp_notification_types`

*Get email notification types.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$type` | `string` | Email notification type.

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 426](class/class-mainwp-notification-settings.php#L426-L447)

### `mainwp_default_emails_fields`

*Get default email notifications values.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$recipients` |  | 
`$type` | `string` | Email type.
`$field` | `string` | Field name.
`$general` | `bool` | General or individual site settings.

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 551](class/class-mainwp-notification-settings.php#L551-L600)

### `mainwp_boilerplate_get_tokens`

*Filter: mainwp_boilerplate_get_tokens*

Enables and filters the Boilerplate extension tokens.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website` | `object` | Object containing the child site data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 629](class/class-mainwp-notification-settings.php#L629-L638)

### `mainwp_pro_reports_get_site_tokens`

*Filter: mainwp_pro_reports_get_site_tokens*

Enables and filters the Pro Reports extension tokens.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 648](class/class-mainwp-notification-settings.php#L648-L657)

### `mainwp_client_report_get_site_tokens`

*Filter: mainwp_client_report_get_site_tokens*

Enables and filters the Client Reports extension tokens.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 667](class/class-mainwp-notification-settings.php#L667-L676)

### `mainwp_boilerplate_get_tokens`

*This filter is documented in ../class/class-mainwp-notification-settings.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website` |  | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 708](class/class-mainwp-notification-settings.php#L708-L709)

### `mainwp_pro_reports_get_site_tokens`

*This filter is documented in ../class/class-mainwp-notification-settings.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 715](class/class-mainwp-notification-settings.php#L715-L716)

### `mainwp_client_report_get_site_tokens`

*This filter is documented in ../class/class-mainwp-notification-settings.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 

Source: [./class/class-mainwp-notification-settings.php](class/class-mainwp-notification-settings.php), [line 722](class/class-mainwp-notification-settings.php#L722-L723)

### `mainwp_create_security_nonces`

*Create the security nonces.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`static::$security_names` |  | 

Source: [./class/class-mainwp-post-base-handler.php](class/class-mainwp-post-base-handler.php), [line 140](class/class-mainwp-post-base-handler.php#L140-L150)

### `mainwp-getmetaboxes`

*Method apply_filter()*

Apply filter

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($value)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getmetaboxes'` |  | 

Source: [./class/class-mainwp-system-handler.php](class/class-mainwp-system-handler.php), [line 188](class/class-mainwp-system-handler.php#L188-L203)

### `{$filter}`

*Method apply_filter()*

Apply filter

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$value` | `array` | Input value.

Source: [./class/class-mainwp-system-handler.php](class/class-mainwp-system-handler.php), [line 188](class/class-mainwp-system-handler.php#L188-L205)

### `mainwp_update_cached_icons`

*Method update_cached_icons().*

Update cached icons

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$icon` | `string` | The icon.
`$slug` | `string` | slug.
`$type` | `string` | Type: plugin\|theme.

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1039](class/class-mainwp-system-utility.php#L1039-L1061)

### `mainwp_get_plugin_theme_icon`

*Gets a plugin icon via API from WordPress.org*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$slug` | `string` | Plugin slug.
`'plugin'` |  | 

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1212](class/class-mainwp-system-utility.php#L1212-L1220)

### `mainwp_forced_get_plugin_theme_icon`

*Gets a plugin icon via API from WordPress.org*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$forced_get` | `bool` | Forced get icon, default: false.
`$slug` | `string` | Plugin slug.
`'plugin'` |  | 

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1212](class/class-mainwp-system-utility.php#L1212-L1226)

### `mainwp_get_plugin_theme_icon`

*Gets a theme icon via API from WordPress.org*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$slug` | `string` | Theme slug.
`'theme'` |  | 

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1261](class/class-mainwp-system-utility.php#L1261-L1269)

### `mainwp_forced_get_plugin_theme_icon`

*Gets a theme icon via API from WordPress.org*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$forced_get` | `bool` | Forced get icon, default: false.
`$slug` | `string` | Theme slug.
`'theme'` |  | 

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1261](class/class-mainwp-system-utility.php#L1261-L1275)

### `mainwp_plugin_theme_icon_cache_days`

*Gets a plugin|theme icon to output.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`15` |  | 
`$slug` | `string` | Plugin\|Theme slug.
`$type` | `string` | Type icon, plugin\|theme.

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1311](class/class-mainwp-system-utility.php#L1311-L1333)

### `mainwp_cache_icon_expired`

*Gets a plugin|theme icon to output.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$slug` | `string` | Plugin\|Theme slug.
`'theme'` |  | 

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1311](class/class-mainwp-system-utility.php#L1311-L1357)

### `mainwp_connect_sign_algo`

*Method get_connect_sign_algorithm().*

Get supported sign algorithms.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$alg` |  | 
`$website` | `mixed` | The Website object.

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1537](class/class-mainwp-system-utility.php#L1537-L1579)

### `mainwp_staging_current_user_sites_view`

*Method get_staging_options_sites_view_for_current_users()*

Get staging options sites view for current users.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'undefined'` |  | 

Source: [./class/class-mainwp-system-utility.php](class/class-mainwp-system-utility.php), [line 1650](class/class-mainwp-system-utility.php#L1650-L1658)

### `mainwp_updates_table_columns_header`

*Get column info.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($columns, $sortable, $collapsing)` |  | 
`$this->type` |  | 
`$this->view_per` |  | 

Source: [./class/class-mainwp-updates-table-helper.php](class/class-mainwp-updates-table-helper.php), [line 96](class/class-mainwp-updates-table-helper.php#L96-L106)

### `mainwp_updates_table_header_content`

*Echo the column headers.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$column_display_name` |  | 
`$column_key` |  | 
`$top` | `bool` | true\|false.
`$this` |  | 

Source: [./class/class-mainwp-updates-table-helper.php](class/class-mainwp-updates-table-helper.php), [line 141](class/class-mainwp-updates-table-helper.php#L141-L164)

### `mainwp_updates_table_row_columns`

*Echo columns.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$columns` | `array` | Array of columns.
`$website` | `object` | The website.
`$this->type` |  | 
`$this->view_per` |  | 

Source: [./class/class-mainwp-updates-table-helper.php](class/class-mainwp-updates-table-helper.php), [line 222](class/class-mainwp-updates-table-helper.php#L222-L232)

### `mainwp_update_plugintheme_max`

*Filter: mainwp_update_plugintheme_max*

Filters the max number of plugins/themes to be updated in one run in order to improve performance.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$websiteId` | `int` | Child site ID.

Source: [./class/class-mainwp-post-plugin-theme-handler.php](class/class-mainwp-post-plugin-theme-handler.php), [line 567](class/class-mainwp-post-plugin-theme-handler.php#L567-L576)

### `mainwp_html_regression_largest_change_scope`

*Method mainwp_upgrade_plugintheme()*

Update plugin or theme.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$websiteId` |  | 
`false` |  | 

Source: [./class/class-mainwp-post-plugin-theme-handler.php](class/class-mainwp-post-plugin-theme-handler.php), [line 525](class/class-mainwp-post-plugin-theme-handler.php#L525-L638)

### `mainwp_log_status`

*MainWP_Logger constructor.*

Run each time the class is called.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$enabled` |  | 

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 128](class/class-mainwp-logger.php#L128-L140)

### `mainwp_log_specific`

*MainWP_Logger constructor.*

Run each time the class is called.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$specific` |  | 

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 128](class/class-mainwp-logger.php#L128-L141)

### `mainwp_log_to_db_priority`

*Method log_to_db()*

Log to database.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$priority` | `int` | Set priority.
`$website` | `mixed` | website object.

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 422](class/class-mainwp-logger.php#L422-L441)

### `mainwp_log_do_to_db`

*Method log_to_db()*

Log to database.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$do_log` |  | 
`$website` | `mixed` | website object.

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 422](class/class-mainwp-logger.php#L422-L453)

### `mainwp_log_to_db_data`

*Method log_to_db()*

Log to database.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` |  | 

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 422](class/class-mainwp-logger.php#L422-L491)

### `mainwp_logger_to_db`

*Method log()*

Create Log File.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$website` | `mixed` | Site object.

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 498](class/class-mainwp-logger.php#L498-L521)

### `mainwp_logger_keep_days`

*Method check_log_daily()*

Daily checks to clear the log file.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`7` |  | 

Source: [./class/class-mainwp-logger.php](class/class-mainwp-logger.php), [line 745](class/class-mainwp-logger.php#L745-L759)

### `mainwp_fetch_uptime_disable_check_multi_exec`

*Apply disable check multi exec.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`5.3` | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 61](class/class-mainwp-uptime-monitoring-connect.php#L61-L66)

### `mainwp_fetch_uptime_chunk_size_urls`

*Check uptime monitors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`10` |  | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 88](class/class-mainwp-uptime-monitoring-connect.php#L88-L97)

### `mainwp_fetch_uptime_chunk_size_urls`

*Fetch uptime urls.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`10` |  | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 350](class/class-mainwp-uptime-monitoring-connect.php#L350-L375)

### `mainwp_curl_http_version`

*Fetch uptime urls.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 350](class/class-mainwp-uptime-monitoring-connect.php#L350-L497)

### `mainwp_curl_curlopt_resolve`

*Fetch uptime urls.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 
`$mo_url` |  | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 350](class/class-mainwp-uptime-monitoring-connect.php#L350-L502)

### `mainwp_uptime_monitoring_check_importance`

*Method handle response fetch uptime.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$importance` |  | 
`$heartbeat` |  | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 713](class/class-mainwp-uptime-monitoring-connect.php#L713-L845)

### `mainwp_uptime_monitoring_uptime_data`

*Method handle response fetch uptime.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$heartbeat` |  | 
`$monitor` | `mixed` | monitor.
`$previous_heartbeat` |  | 

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 713](class/class-mainwp-uptime-monitoring-connect.php#L713-L849)

### `mainwp_uptime_monitoring_check_url`

*Get apply monitor url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` |  | 
`$monitor` | `mixed` | monitor.

Source: [./class/class-mainwp-uptime-monitoring-connect.php](class/class-mainwp-uptime-monitoring-connect.php), [line 1008](class/class-mainwp-uptime-monitoring-connect.php#L1008-L1038)

### `mainwp_uptime_monitoring_get_monitors_to_check_params`

*Get sites monitors to check.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$params` | `array` | params.

Source: [./class/class-mainwp-db-uptime-monitoring.php](class/class-mainwp-db-uptime-monitoring.php), [line 418](class/class-mainwp-db-uptime-monitoring.php#L418-L427)

### `mainwp_file_uploader_size_limit`

*Filter: 'mainwp_file_uploader_size_limit'*

Filters the maximum upload file size. Default: 8388608 Bytes (B) = 8 Megabytes (MB)

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sizeLimit` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-qq2-file-uploader.php](class/class-mainwp-qq2-file-uploader.php), [line 56](class/class-mainwp-qq2-file-uploader.php#L56-L63)

### `mainwp_connect_sites_not_allow_ports`

*Method mainwp_testwp()*

Test if Child Site can be reached.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$def_not_allow` |  | 
`$url` |  | 

Source: [./class/class-mainwp-post-site-handler.php](class/class-mainwp-post-site-handler.php), [line 236](class/class-mainwp-post-site-handler.php#L236-L264)

### `mainwp_connect_sites_allow_ports`

*Method mainwp_testwp()*

Test if Child Site can be reached.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$url` |  | 

Source: [./class/class-mainwp-post-site-handler.php](class/class-mainwp-post-site-handler.php), [line 236](class/class-mainwp-post-site-handler.php#L236-L282)

### `mainwp_manage_sites_force_use_ipv4`

*Method mainwp_testwp()*

Test if Child Site can be reached.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$url` |  | 

Source: [./class/class-mainwp-post-site-handler.php](class/class-mainwp-post-site-handler.php), [line 236](class/class-mainwp-post-site-handler.php#L236-L292)

### `mainwp_postprocess_backup_sites_feedback`

*Method  backup_site()*

Backup Child Site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$unique` |  | 

Source: [./class/class-mainwp-backup-handler.php](class/class-mainwp-backup-handler.php), [line 28](class/class-mainwp-backup-handler.php#L28-L513)

### `mainwp_header_title`

*Filter: mainwp_header_title*

Filter the MainWP page title in the header element.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$title` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 488](class/class-mainwp-ui.php#L488-L495)

### `mainwp_header_left`

*Filter: mainwp_header_left*

Filter the MainWP header element left side content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$title` |  | 
`$params` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 505](class/class-mainwp-ui.php#L505-L512)

### `mainwp_header_right`

*Filter: mainwp_header_right*

Filter the MainWP header element right side content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$right` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 516](class/class-mainwp-ui.php#L516-L523)

### `mainwp_menu_logo_href`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url('admin.php?page=mainwp_tab')` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 889](class/class-mainwp-ui.php#L889-L889)

### `mainwp_menu_logo_src`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`MAINWP_PLUGIN_URL . 'assets/images/mainwp-icon.svg'` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 901](class/class-mainwp-ui.php#L901-L901)

### `mainwp_menu_logo_alt`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'MainWP'` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 912](class/class-mainwp-ui.php#L912-L912)

### `mainwp_sidbar_pages`

*Method render_header_actions()*

Render header action buttons,
(Sync|Add|Options|Community|User|Updates).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sidebar_pages` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1273](class/class-mainwp-ui.php#L1273-L1286)

### `mainwp_sidebar_pages`

*Method render_header_actions()*

Render header action buttons,
(Sync|Add|Options|Community|User|Updates).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sidebar_pages` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1273](class/class-mainwp-ui.php#L1273-L1287)

### `mainwp_header_actions_right`

*Filter: mainwp_header_actions_right*

Filters the MainWP header element actions.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1345](class/class-mainwp-ui.php#L1345-L1352)

### `mainwp_screen_options_pulse_control`

*Method render_header_actions()*

Render header action buttons,
(Sync|Add|Options|Community|User|Updates).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`1` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1273](class/class-mainwp-ui.php#L1273-L1428)

### `mainwp_page_navigation`

*Filter: mainwp_page_navigation*

Filters MainWP page navigation menu items.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$subitems` |  | 
`$name_caller` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1449](class/class-mainwp-ui.php#L1449-L1456)

### `mainwp_do_widget_boxes_sorted`

*Method do_widget_boxes()*

Customize WordPress do_meta_boxes() function.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$wgsorted` |  | 
`$page` |  | 
`$client_id` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1605](class/class-mainwp-ui.php#L1605-L1663)

### `mainwp_widget_boxes_show_widgets`

*Method do_widget_boxes()*

Customize WordPress do_meta_boxes() function.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$page` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1605](class/class-mainwp-ui.php#L1605-L1670)

### `mainwp_show_all_updates_button_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Show All Updates', 'mainwp')` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 1997](class/class-mainwp-ui.php#L1997-L1997)

### `mainwp-widgets-screen-options`

*Method render_screen_options()*

Render modal window for Page Settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array())` |  | 
`'4.0.7.2'` |  | 
`'mainwp_widgets_screen_options'` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2327](class/class-mainwp-ui.php#L2327-L2361)

### `mainwp_widgets_screen_options`

*Filter: mainwp_widgets_screen_options*

Filters available widgets on the Overview page allowing users to unsent unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$custom_opts` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2363](class/class-mainwp-ui.php#L2363-L2370)

### `mainwp_sidbar_pages`

*Method render_screen_options()*

Render modal window for Page Settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sidebar_pages` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2327](class/class-mainwp-ui.php#L2327-L2383)

### `mainwp_sidebar_pages`

*Method render_screen_options()*

Render modal window for Page Settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sidebar_pages` |  | 

Source: [./class/class-mainwp-ui.php](class/class-mainwp-ui.php), [line 2327](class/class-mainwp-ui.php#L2327-L2384)

### `redirect_post_location`

*Filter: redirect_post_location*

Filters the location for the Edit process.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$location` |  | 
`$post_id` | `int` | Post ID.

Source: [./class/class-mainwp-bulk-post.php](class/class-mainwp-bulk-post.php), [line 56](class/class-mainwp-bulk-post.php#L56-L65)

### `mainwp_daily_digest_content`

*Filter: mainwp_daily_digest_content*

Filters the Daily Digest email content and adds support for enabling text/plain emails.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$sites_ids` | `array` | Array of sites IDs.
`$plain_text` | `bool` | Wether plain text mode is enabled.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification.php](class/class-mainwp-notification.php), [line 210](class/class-mainwp-notification.php#L210-L220)

### `mainwp_send_mail_from_header`

*Method send_wp_mail().*

Send email via wp_mail().

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$email` | `string` | send to email.
`$subject` | `string` | email content.

Source: [./class/class-mainwp-notification.php](class/class-mainwp-notification.php), [line 317](class/class-mainwp-notification.php#L317-L337)

### `mainwp_format_email`

*Method format_email()*

Format email.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mail_send` |  | 

Source: [./class/class-mainwp-format.php](class/class-mainwp-format.php), [line 212](class/class-mainwp-format.php#L212-L579)

### `mainwp_clone_enabled`

*Filter: mainwp_clone_enabled*

Filters whether the Clone feature is enabled or disabled.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 104](class/class-mainwp-sync.php#L104-L111)

### `mainwp-sync-others-data`

*Method sync_site()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array(), $pWebsite)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_sync_others_data'` |  | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 62](class/class-mainwp-sync.php#L62-L150)

### `mainwp_sync_others_data`

*Filter: mainwp_sync_others_data*

Filters additional data in the sync request. Allows extensions or 3rd party plugins to hook data to the sync request.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$othersData` |  | 
`$pWebsite` | `object` | Object contaning child site data.

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 152](class/class-mainwp-sync.php#L152-L163)

### `mainwp_site_actions_saved_days_number`

*Method sync_site()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`30` |  | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 62](class/class-mainwp-sync.php#L62-L165)

### `mainwp_before_save_sync_result`

*Filter: mainwp_before_save_sync_result*

Filters data returned from child site before saving to the database.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$information` |  | 
`$pWebsite` | `object` | Object containing child site data.

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 267](class/class-mainwp-sync.php#L267-L276)

### `mainwp_security_issues_stats`

*This filter is documented in ../pages/page-mainwp-security-issues.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$securityStats` |  | 
`$pWebsite` |  | 

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 366](class/class-mainwp-sync.php#L366-L367)

### `mainwp_sync_site_after_sync_result`

*Method sync_information_array()*

Grab all Child Site Information.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` | `bool` | True\|False.
`$pWebsite` | `object` | The website object.
`$information` | `array` | Array contaning information returned from child site.

Source: [./class/class-mainwp-sync.php](class/class-mainwp-sync.php), [line 221](class/class-mainwp-sync.php#L221-L575)

### `mainwp_remote_destination_info`

*Method mainwp_backup_upload_checkstatus()*

Check upload status

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`isset($_POST['remote_destination']) ? sanitize_text_field(wp_unslash($_POST['remote_destination'])) : ''` |  | 

Source: [./class/class-mainwp-post-backup-handler.php](class/class-mainwp-post-backup-handler.php), [line 376](class/class-mainwp-post-backup-handler.php#L376-L391)

### `mainwp_plugin_information_sslverify`

*Sends and receives data to and from the server API.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$default` |  | 
`$args` | `array` | Request arguments.

**Changelog**

Version | Description
------- | -----------
`1.0.0` | 

Source: [./class/class-mainwp-api-manager-plugin-update.php](class/class-mainwp-api-manager-plugin-update.php), [line 149](class/class-mainwp-api-manager-plugin-update.php#L149-L172)

### `mainwp_api_manager_upgrade_package_url`

*For debugging errors from the API
For errors like: unserialize(): Error at offset 0 of 170 bytes
Comment out $response above first*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$response->package` |  | 
`$response` |  | 

Source: [./class/class-mainwp-api-manager-plugin-update.php](class/class-mainwp-api-manager-plugin-update.php), [line 191](class/class-mainwp-api-manager-plugin-update.php#L191-L199)

### `mainwp_managesites_getbackuplink`

*Filter: mainwp_managesites_getbackuplink*

Filters the link for the last backup item.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$item['id']` |  | 
`$lastBackup` | `string` | Last backup timestamp for the child site.
`$backup_method` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 104](class/class-mainwp-manage-sites-list-table.php#L104-L114)

### `mainwp-sitestable-item`

*Filter is being replaced with mainwp_sitestable_item*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($item, $item)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_sitestable_item'` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 180](class/class-mainwp-manage-sites-list-table.php#L180-L185)

### `mainwp_sitestable_item`

*Filter: mainwp_sitestable_item*

Filters the Manage Sites table column items. Allows user to create new column item.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$item` | `array` | Array containing child site data.
`$column_name` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 187](class/class-mainwp-manage-sites-list-table.php#L187-L196)

### `mainwp-sitestable-getcolumns`

*Filter is being replaced with mainwp_sitestable_getcolumns*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($columns, $columns)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_sitestable_getcolumns'` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 322](class/class-mainwp-manage-sites-list-table.php#L322-L327)

### `mainwp_sitestable_getcolumns`

*Filter: mainwp_sitestable_getcolumns*

Filters the Manage Sites table columns. Allows user to create a new column.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$columns` | `array` | Array containing table columns.
`$columns` | `array` | Array containing table columns.

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 329](class/class-mainwp-manage-sites-list-table.php#L329-L338)

### `mainwp-getprimarybackup-methods`

*Method get_columns()*

Combine all columns.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($primary_methods)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getprimarybackup_methods'` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 311](class/class-mainwp-manage-sites-list-table.php#L311-L346)

### `mainwp_getprimarybackup_methods`

*This filter is documented in ../pages/page-mainwp-server-information-handler.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$primary_methods` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 348](class/class-mainwp-manage-sites-list-table.php#L348-L349)

### `mainwp_managesites_bulk_actions`

*Filter: mainwp_managesites_bulk_actions*

Filters bulk actions on the Manage Sites page. Allows user to hook in new actions or remove default ones.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$actions` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 504](class/class-mainwp-manage-sites-list-table.php#L504-L511)

### `mainwp_sitestable_prepare_extra_view`

*Prepare the items to be listed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('favi_icon', 'health_site_status')` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 694](class/class-mainwp-manage-sites-list-table.php#L694-L719)

### `mainwp_sites_table_features`

*Filter: mainwp_sites_table_features*

Filter the Monitoring table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1136](class/class-mainwp-manage-sites-list-table.php#L1136-L1143)

### `mainwp_sitestable_website`

*Get table rows.*

Optimize for shared hosting or big networks.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` |  | 
`$this->userExtension` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1554](class/class-mainwp-manage-sites-list-table.php#L1554-L1700)

### `mainwp_sitestable_display_row_columns`

*Get table rows.*

Optimize for shared hosting or big networks.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$column_name` |  | 
`$website` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1554](class/class-mainwp-manage-sites-list-table.php#L1554-L1722)

### `mainwp_sitestable_website`

*Columns for a single row.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website` | `mixed` | Child Site.
`$this->userExtension` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1971](class/class-mainwp-manage-sites-list-table.php#L1971-L2148)

### `mainwp_sitestable_render_column`

*Columns for a single row.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$column_name` |  | 
`$website` | `mixed` | Child Site.
`$classes` |  | 

Source: [./class/class-mainwp-manage-sites-list-table.php](class/class-mainwp-manage-sites-list-table.php), [line 1971](class/class-mainwp-manage-sites-list-table.php#L1971-L2166)

### `mainwp_open_hide_referrer`

*Filter: mainwp_open_hide_referrer*

Filters whether the MainWP should hide referrer when going to child site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./class/class-mainwp-system-view.php](class/class-mainwp-system-view.php), [line 823](class/class-mainwp-system-view.php#L823-L830)

### `mainwp_page_admin_body_class`

*MainWP Admin body CSS class attributes.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$class_string` | `mixed` | MainWP CSS Class attributes.

Source: [./class/class-mainwp-system-view.php](class/class-mainwp-system-view.php), [line 944](class/class-mainwp-system-view.php#L944-L991)

### `mainwp_plugins_install_checks`

*Method get_plugins_install_check()*

Get plugins for install checking.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$plugins` |  | 

Source: [./class/class-mainwp-system-view.php](class/class-mainwp-system-view.php), [line 1129](class/class-mainwp-system-view.php#L1129-L1184)

### `mainwp_monitoring_sitestable_item`

*Filter: mainwp_monitoring_sitestable_item*

Filters the Monitoring Sites table column items. Allows user to create new column item.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$item` | `array` | Array containing child site data.
`$item` | `array` | Array containing child site data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-monitoring-sites-list-table.php](class/class-mainwp-monitoring-sites-list-table.php), [line 99](class/class-mainwp-monitoring-sites-list-table.php#L99-L108)

### `mainwp_monitoring_sitestable_getcolumns`

*Filter: mainwp_monitoring_sitestable_getcolumns*

Filters the Monitoring Sites table columns. Allows user to create a new column.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$columns` | `array` | Array containing table columns.
`$columns` | `array` | Array containing table columns.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-monitoring-sites-list-table.php](class/class-mainwp-monitoring-sites-list-table.php), [line 185](class/class-mainwp-monitoring-sites-list-table.php#L185-L194)

### `mainwp_monitoringsites_bulk_actions`

*Filter: mainwp_monitoringsites_bulk_actions*

Filters bulk actions on the Monitoring Sites page. Allows user to hook in new actions or remove default ones.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$actions` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-monitoring-sites-list-table.php](class/class-mainwp-monitoring-sites-list-table.php), [line 295](class/class-mainwp-monitoring-sites-list-table.php#L295-L302)

### `mainwp_monitoring_sitestable_prepare_extra_view`

*Prepair the items to be listed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('favi_icon', 'health_site_status')` |  | 

Source: [./class/class-mainwp-monitoring-sites-list-table.php](class/class-mainwp-monitoring-sites-list-table.php), [line 409](class/class-mainwp-monitoring-sites-list-table.php#L409-L616)

### `mainwp_monitoring_table_features`

*Filter: mainwp_monitoring_table_features*

Filter the Monitoring table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-monitoring-sites-list-table.php](class/class-mainwp-monitoring-sites-list-table.php), [line 722](class/class-mainwp-monitoring-sites-list-table.php#L722-L729)

### `mainwp_is_enable_schedule_job`

*Method init_mainwp_cron()*

Schedual Cron Jobs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$useWPCron` | `mixed` | Wether or not to use WP_Cron.
`$cron_hook` | `mixed` | When cron is going to reoccur.
`$recurrence` | `mixed` | Cron job hook.

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 147](class/class-mainwp-system-cron-jobs.php#L147-L158)

### `mainwp_updatescheck_sendmail_at_time`

*Filter: mainwp_updatescheck_sendmail_at_time*

Filters the the time when the Daily Digest email will be sent.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 436](class/class-mainwp-system-cron-jobs.php#L436-L443)

### `mainwp_updatescheck_sendmail_for_each_auto_sync_finished`

*Method cron_updates_check()*

MainWP Cron Check Update

This Cron Checks to see if Automatic Daily Updates need to be performed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 375](class/class-mainwp-system-cron-jobs.php#L375-L452)

### `mainwp_updatescheck_hours_interval`

*Filter: mainwp_updatescheck_hours_interval*

Filters the status check interval.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 509](class/class-mainwp-system-cron-jobs.php#L509-L516)

### `mainwp_text_format_email`

*Filter: mainwp_text_format_email*

Filters whether the email shuld bein plain text format.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$plain_text` |  | 

**Changelog**

Version | Description
------- | -----------
`3.5` | 

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 625](class/class-mainwp-system-cron-jobs.php#L625-L632)

### `mainwp_license_deactivated_alert_plain_text`

*Method cron_deactivated_licenses_alert()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$plain_text` |  | 

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 1352](class/class-mainwp-system-cron-jobs.php#L1352-L1373)

### `mainwp_register_regular_sequence_process`

*Method perform_sequence_process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./class/class-mainwp-system-cron-jobs.php](class/class-mainwp-system-cron-jobs.php), [line 1688](class/class-mainwp-system-cron-jobs.php#L1688-L1695)

### `mainwp-getprimarybackup-methods`

*Renders the Backup Site Dialog.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($primary_methods)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getprimarybackup_methods'` |  | 

Source: [./class/class-mainwp-manage-sites-backup-view.php](class/class-mainwp-manage-sites-backup-view.php), [line 63](class/class-mainwp-manage-sites-backup-view.php#L63-L78)

### `mainwp_getprimarybackup_methods`

*Renders the Backup Site Dialog.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$primary_methods` |  | 

Source: [./class/class-mainwp-manage-sites-backup-view.php](class/class-mainwp-manage-sites-backup-view.php), [line 63](class/class-mainwp-manage-sites-backup-view.php#L63-L79)

### `mainwp_try_visit_follow_location`

*Method try visit.*

Try connecting to Child Site via cURL.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 32](class/class-mainwp-connect.php#L32-L76)

### `mainwp_curl_http_version`

*Method try visit.*

Try connecting to Child Site via cURL.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`false` |  | 
`$url` | `string` | Child Site URL.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 32](class/class-mainwp-connect.php#L32-L101)

### `mainwp_curl_curlopt_resolve`

*Method try visit.*

Try connecting to Child Site via cURL.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`false` |  | 
`$url` | `string` | Child Site URL.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 32](class/class-mainwp-connect.php#L32-L106)

### `mainwp_pre_fetch_authed_data`

*Method get_post_data_authed()*

Get authorized $_POST data & build query.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$params` | `null` | Post parameters.
`$what` | `mixed` | What we are posting.
`$website` | `mixed` | Array of Child Site Info.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 361](class/class-mainwp-connect.php#L361-L380)

### `mainwp_get_post_data_authed`

*Method get_post_data_authed()*

Get authorized $_POST data & build query.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` |  | 
`$website` | `mixed` | Array of Child Site Info.
`$what` | `mixed` | What we are posting.
`$params` | `null` | Post parameters.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 361](class/class-mainwp-connect.php#L361-L393)

### `mainwp_recent_posts_pages_number`

*This filter is documented in ../widgets/widget-mainwp-recent-posts.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`5` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 421](class/class-mainwp-connect.php#L421-L422)

### `mainwp_stats_scan_dir`

*Method get_post_data_authed()*

Get authorized $_POST data & build query.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website` | `mixed` | Array of Child Site Info.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 361](class/class-mainwp-connect.php#L361-L427)

### `mainwp_alter_login_user`

*Filter: mainwp_alter_login_user*

Filters users accounts so it allows you user to jump to child site under alternative administrator account.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 
`$current_user->ID` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 440](class/class-mainwp-connect.php#L440-L450)

### `mainwp_open_site_login_required_params`

*Method get_get_data_authed()*

Get authorized $_GET data & build query.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$params` |  | 
`$website` | `mixed` | Child Site data.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 525](class/class-mainwp-connect.php#L525-L583)

### `mainwp_alter_login_user`

*This filter is documented in ../class/class-mainwp-connect.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 
`$current_user->ID` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 611](class/class-mainwp-connect.php#L611-L612)

### `mainwp_fetch_urls_chunk_size`

*Method fetch_urls_authed()*

Fetches data from child sites if authenticated.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$chunkSize` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 688](class/class-mainwp-connect.php#L688-L719)

### `mainwp-pre-posting-posts`

*Filter is being replaced with mainwp_pre_posting_posts.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(is_array($params) ? $params : array(), (object) array('id' => $website->id, 'url' => $website->url, 'name' => $website->name))` |  | 
`'4.0.7.2'` |  | 
`// NOSONAR - not IP.
'mainwp_pre_posting_posts'` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 784](class/class-mainwp-connect.php#L784-L801)

### `mainwp_pre_posting_posts`

*Filter: mainwp_pre_posting_posts*

Prepares parameters for the authenticated cURL post.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`is_array($params) ? $params : array()` |  | 
`(object) array('id' => $website->id, 'url' => $website->url, 'name' => $website->name)` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 803](class/class-mainwp-connect.php#L803-L818)

### `mainwp_curl_http_version`

*Method fetch_urls_authed()*

Fetches data from child sites if authenticated.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 688](class/class-mainwp-connect.php#L688-L894)

### `mainwp_curl_curlopt_resolve`

*Method fetch_urls_authed()*

Fetches data from child sites if authenticated.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 
`$website->url` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 688](class/class-mainwp-connect.php#L688-L899)

### `mainwp_curl_http_version`

*Method fetch_url_site()*

M Fetch URL.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website ? $website->id : false` |  | 
`$url` | `string` | URL to fetch from.

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 1351](class/class-mainwp-connect.php#L1351-L1486)

### `mainwp_curl_curlopt_resolve`

*Method fetch_url_site()*

M Fetch URL.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 
`$website->url` |  | 

Source: [./class/class-mainwp-connect.php](class/class-mainwp-connect.php), [line 1351](class/class-mainwp-connect.php#L1351-L1494)

### `mainwp_init_primary_menu_items`

*Method init_mainwp_menu_items()*

Init MainWP menus.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$menus_items` | `array` | menus items.
`$part` | `string` | menus part.

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 332](class/class-mainwp-menu.php#L332-L345)

### `mainwp_subpages_left_menu`

*Method init_subpages_left_menu*

Build left menu subpages array.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$subPages` | `array` | Array of SubPages.
`$initSubpage` | `array` | Initial SubPage Array.
`$parentKey` | `string` | Parent Menu Slug.
`$slug` | `mixed` | SubPage Slug.

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 479](class/class-mainwp-menu.php#L479-L497)

### `mainwp_is_disable_menu_item`

*Method is_disable_menu_item*

Check if $_mainwp_disable_menus_items contains any menu items to hide.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$disabled` |  | 
`$level` | `string` | The level the menu item is on.
`$item` | `array\|string` | The menu items meta data.

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 529](class/class-mainwp-menu.php#L529-L552)

### `mainwp_main_menu`

*Filter: mainwp_main_menu*

Filters main navigation menu items

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mainwp_leftmenu` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 684](class/class-mainwp-menu.php#L684-L691)

### `mainwp_main_menu_submenu`

*Filter: mainwp_main_menu_submenu*

Filters main navigation subt-menu items

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mainwp_sub_leftmenu` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 694](class/class-mainwp-menu.php#L694-L702)

### `mainwp_go_back_wpadmin_link`

*Filter: mainwp_go_back_wpadmin_link*

Filters URL for the Go to WP Admin button in Main navigation.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$link` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 799](class/class-mainwp-menu.php#L799-L806)

### `mainwp_go_back_wpadmin_link`

*Filter: mainwp_go_back_wpadmin_link*

Filters URL for the Go to WP Admin button in Main navigation.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$link` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./class/class-mainwp-menu.php](class/class-mainwp-menu.php), [line 1242](class/class-mainwp-menu.php#L1242-L1249)

### `mainwp_detect_premiums_updates`

*Filter: mainwp_detect_premiums_updates*

Use mainwp_detect_premium_plugins_update instead.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$premiums` |  | 

Source: [./class/class-mainwp-premium-update.php](class/class-mainwp-premium-update.php), [line 90](class/class-mainwp-premium-update.php#L90-L97)

### `mainwp_detect_premium_plugins_update`

*Filter: mainwp_detect_premium_plugins_update*

Filters supported premium plugins to fix compatiblity issues with detecting premium plugin updates.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$premiums` |  | 

Source: [./class/class-mainwp-premium-update.php](class/class-mainwp-premium-update.php), [line 99](class/class-mainwp-premium-update.php#L99-L106)

### `mainwp_detect_premium_themes_update`

*Filter: mainwp_detect_premium_themes_update*

Filters supported premium themes to fix compatiblity issues with detecting premium theme updates.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$premiums` |  | 

Source: [./class/class-mainwp-premium-update.php](class/class-mainwp-premium-update.php), [line 119](class/class-mainwp-premium-update.php#L119-L126)

### `mainwp_request_update_premium_plugins`

*Filter: mainwp_request_update_premium_plugins*

Filters supported premium plugins to fix compatibility problmes with updating premium plugins.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$update_premiums` |  | 

Source: [./class/class-mainwp-premium-update.php](class/class-mainwp-premium-update.php), [line 223](class/class-mainwp-premium-update.php#L223-L230)

### `mainwp_request_update_premium_themes`

*Filter: mainwp_request_update_premium_themes*

Filters supported premium themes to fix compatibility problmes with updating premium themes.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$update_premiums` |  | 

Source: [./class/class-mainwp-premium-update.php](class/class-mainwp-premium-update.php), [line 243](class/class-mainwp-premium-update.php#L243-L250)

### `mainwp_manage_sites_navigation_items`

*Method render_managesites_header()*

Render manage sites header.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$renderItems` |  | 
`$site_id` | `int` | Site id.
`$shownPage` | `string` | Current Page.

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 316](class/class-mainwp-manage-sites-view.php#L316-L374)

### `mainwp-sync-extensions-options`

*Method render_sync_exts_settings()*

Render sync extension settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array())` |  | 
`'4.0.7.2'` |  | 
`'mainwp_sync_extensions_options'` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 566](class/class-mainwp-manage-sites-view.php#L566-L575)

### `mainwp_sync_extensions_options`

*Method render_sync_exts_settings()*

Render sync extension settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sync_extensions_options` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 566](class/class-mainwp-manage-sites-view.php#L566-L576)

### `mainwp_widgetupdates_actions_top`

*Method render_header_tabs()*

Render Sites sub page header tabs.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 676](class/class-mainwp-manage-sites-view.php#L676-L709)

### `mainwp_default_template_locate`

*Render the email notification edit form.*

Credits.

Plugin-Name: WooCommerce.
Plugin URI: https://woocommerce.com/.
Author: Automattic.
Author URI: https://woocommerce.com.
License: GPLv3 or later.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$default_file` |  | 
`$template` |  | 
`$default_dir` |  | 
`$type` | `string` | Email type.
`$siteid` | `bool` | Child site ID.

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 1645](class/class-mainwp-manage-sites-view.php#L1645-L1671)

### `mainwp_manage_sites_force_use_ipv4`

*Method add_site()*

Add Child Site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`null` |  | 
`$params['url']` |  | 

Source: [./class/class-mainwp-manage-sites-view.php](class/class-mainwp-manage-sites-view.php), [line 2011](class/class-mainwp-manage-sites-view.php#L2011-L2030)

### `mainwp_extensions_page_top_header`

*Method render_header()*

Render page header.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extension_name` |  | 
`$extension_name_raw` |  | 

Source: [./class/class-mainwp-extensions-view.php](class/class-mainwp-extensions-view.php), [line 50](class/class-mainwp-extensions-view.php#L50-L71)

### `mainwp_clients_website_client_tokens`

*Method get_website_client_tokens_data()*

Get website client tokens.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client_tokens` |  | 
`$websiteid` | `int` | Website ID.
`$clientid` |  | 

Source: [./class/class-mainwp-client-handler.php](class/class-mainwp-client-handler.php), [line 454](class/class-mainwp-client-handler.php#L454-L530)

### `mainwp_uptime_monitoring_update_monitor_data`

*Method handle_save_settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$update` |  | 
`$site_id` |  | 

Source: [./class/class-mainwp-uptime-monitoring-edit.php](class/class-mainwp-uptime-monitoring-edit.php), [line 88](class/class-mainwp-uptime-monitoring-edit.php#L88-L193)

### `mainwp_uptime_monitoring_allowed_methods`

*Method get_allowed_methods*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('useglobal' => esc_html__('Use global settings', 'mainwp'), 'head' => 'HEAD', 'get' => 'GET', 'post' => 'POST', 'push' => 'PUSH', 'patch' => 'PATCH', 'delete' => 'DELETE')` |  | 

Source: [./class/class-mainwp-uptime-monitoring-edit.php](class/class-mainwp-uptime-monitoring-edit.php), [line 708](class/class-mainwp-uptime-monitoring-edit.php#L708-L727)

### `mainwp_uptime_monitoring_interval_values`

*Method get_interval_values*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$values` |  | 
`$flip_values` | `mixed` | flip values.

Source: [./class/class-mainwp-uptime-monitoring-edit.php](class/class-mainwp-uptime-monitoring-edit.php), [line 737](class/class-mainwp-uptime-monitoring-edit.php#L737-L766)

### `mainwp_uptime_monitoring_timeout_values`

*Method get_timeout_values*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$values` |  | 
`$flip_values` | `mixed` | flip values.

Source: [./class/class-mainwp-uptime-monitoring-edit.php](class/class-mainwp-uptime-monitoring-edit.php), [line 770](class/class-mainwp-uptime-monitoring-edit.php#L770-L808)

### `mainwp_get_template`

*Filter: mainwp_get_template*

Filters available templates and adds support for 3rd party templates.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template` |  | 
`$template_name` | `string` | Template name.
`$args` | `array` | Args.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 140](class/class-mainwp-notification-template.php#L140-L150)

### `mainwp_pro_reports_generate_content`

*Filter: mainwp_pro_reports_generate_content*

Filters the Pro Reports available content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$content` |  | 
`$current_email_site->id` |  | 
`$timestamp_from_date` |  | 
`$timestamp_to_date` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 210](class/class-mainwp-notification-template.php#L210-L217)

### `mainwp_client_report_generate_content`

*Filter: mainwp_client_report_generate_content*

Filters the Client Reports available content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$content` |  | 
`$current_email_site->id` |  | 
`$timestamp_from_date` |  | 
`$timestamp_to_date` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 219](class/class-mainwp-notification-template.php#L219-L226)

### `mainwp_default_template_source_dir`

*Locate a template and return the path for inclusion.*

Credits.

Plugin-Name: WooCommerce.
Plugin URI: https://woocommerce.com/.
Author: Automattic.
Author URI: https://woocommerce.com.
License: GPLv3 or later.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template_path` |  | 
`$template_name` | `string` | Template name.

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 234](class/class-mainwp-notification-template.php#L234-L261)

### `mainwp_locate_template`

*Filer: mainwp_locate_template*

Filters the template location.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template` |  | 
`$template_name` | `string` | Template name.
`$template_path` | `string` | Template path.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 265](class/class-mainwp-notification-template.php#L265-L275)

### `mainwp_get_notification_template_name_by_type`

*Get default template name by email/notification type.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$type` | `string` | email/notification type.

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 293](class/class-mainwp-notification-template.php#L293-L309)

### `mainwp_default_template_source_dir`

*Method handle_template_file_action()*

Handle template file action.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template_path` |  | 
`$templ_base_name` |  | 

Source: [./class/class-mainwp-notification-template.php](class/class-mainwp-notification-template.php), [line 318](class/class-mainwp-notification-template.php#L318-L352)

### `mainwp_automatic_disable_uptime_monitoring_check`

*Method cron_uptime_check*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./class/class-mainwp-uptime-monitoring-schedule.php](class/class-mainwp-uptime-monitoring-schedule.php), [line 67](class/class-mainwp-uptime-monitoring-schedule.php#L67-L74)

### `mainwp_uptime_monitoring_send_notification_limit`

*Run schedule uptime notification.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`3` |  | 

Source: [./class/class-mainwp-uptime-monitoring-schedule.php](class/class-mainwp-uptime-monitoring-schedule.php), [line 173](class/class-mainwp-uptime-monitoring-schedule.php#L173-L214)

### `mainwp_update_uptime_monitor_data`

*Method update_uptime_global_settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$settings` | `array` | settings.

Source: [./class/class-mainwp-uptime-monitoring-handle.php](class/class-mainwp-uptime-monitoring-handle.php), [line 122](class/class-mainwp-uptime-monitoring-handle.php#L122-L134)

### `mainwp_available_updates_count_custom_fields_data`

*Method sites_available_updates_count()*

Returns the number of available udpates for sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`'updates_count'` |  | 

Source: [./class/class-mainwp-common-handler.php](class/class-mainwp-common-handler.php), [line 41](class/class-mainwp-common-handler.php#L41-L56)

### `mainwp_database_updater_supported_plugins`

*Method sites_available_updates_count()*

Returns the number of available udpates for sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./class/class-mainwp-common-handler.php](class/class-mainwp-common-handler.php), [line 41](class/class-mainwp-common-handler.php#L41-L61)

### `mainwp_db_install_tables`

*Method install()*

Installs the new DB.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sql` |  | 
`$currentVersion` |  | 
`$charset_collate` |  | 

Source: [./class/class-mainwp-install.php](class/class-mainwp-install.php), [line 64](class/class-mainwp-install.php#L64-L422)

### `mainwp_cron_bulk_update_sites_limit`

*Method handle_cron_auto_updates()*

MainWP Cron Check Update

This Cron Checks to see if Automatic Daily Updates need to be performed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`3` |  | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 104](class/class-mainwp-cron-jobs-auto-updates.php#L104-L115)

### `mainwp_cron_bulk_update_items_limit`

*Method handle_cron_auto_updates()*

MainWP Cron Check Update

This Cron Checks to see if Automatic Daily Updates need to be performed.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`3` |  | 

Source: [./class/class-mainwp-cron-jobs-auto-updates.php](class/class-mainwp-cron-jobs-auto-updates.php), [line 104](class/class-mainwp-cron-jobs-auto-updates.php#L104-L116)

### `mainwp_encrypt_key_value`

*Method encrypt_api_keys*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$data` | `string` | data.
`$prefix` |  | 
`$file_key` | `string` | file key.

Source: [./modules/api-backups/classes/class-api-backups-utility.php](modules/api-backups/classes/class-api-backups-utility.php), [line 524](modules/api-backups/classes/class-api-backups-utility.php#L524-L547)

### `mainwp_decrypt_key_value`

*Method decrypt_api_keys*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$encrypted_data` | `mixed` | encrypted data.
`$def_val` | `string` | default data.

Source: [./modules/api-backups/classes/class-api-backups-utility.php](modules/api-backups/classes/class-api-backups-utility.php), [line 556](modules/api-backups/classes/class-api-backups-utility.php#L556-L564)

### `mainwp_getsubpages_api_backups`

*This hook allows you to add extra sub pages to the client page via the 'mainwp_getsubpages_cost_tracker' filter.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./modules/api-backups/classes/class-api-backups-admin.php](modules/api-backups/classes/class-api-backups-admin.php), [line 234](modules/api-backups/classes/class-api-backups-admin.php#L234-L237)

### `mainwp_getwebsite_by_id`

*Get sites by website ID.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website_id` | `int` | User ID.
`$selectGroups` | `bool` | Select groups.
`$extra_view` | `array` | get extra option fields.

Source: [./modules/api-backups/classes/class-api-backups-helper.php](modules/api-backups/classes/class-api-backups-helper.php), [line 60](modules/api-backups/classes/class-api-backups-helper.php#L60-L70)

### `mainwp_updatewebsiteoptions`

*Method update_website_option().*

Update the website option.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website` | `object\|int` | website object or ID.
`$opt_name` | `string` | website.
`$opt_value` | `string` | website.

Source: [./modules/api-backups/classes/class-api-backups-helper.php](modules/api-backups/classes/class-api-backups-helper.php), [line 78](modules/api-backups/classes/class-api-backups-helper.php#L78-L88)

### `mainwp_getwebsiteoptions`

*Method get_website_options().*

Get the website options.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website` | `object\|int` | website object or ID.
`$options` | `string\|array` | Options name.

Source: [./modules/api-backups/classes/class-api-backups-helper.php](modules/api-backups/classes/class-api-backups-helper.php), [line 91](modules/api-backups/classes/class-api-backups-helper.php#L91-L100)

### `mainwp_db_fetch_object`

*Method fetch_object().*

Handle fetch object db.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$websites` | `mixed` | websites results.

Source: [./modules/api-backups/classes/class-api-backups-helper.php](modules/api-backups/classes/class-api-backups-helper.php), [line 104](modules/api-backups/classes/class-api-backups-helper.php#L104-L114)

### `mainwp_db_free_result`

*Method free_result().*

Handle fetch result db.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$results` | `mixed` | websites results.

Source: [./modules/api-backups/classes/class-api-backups-helper.php](modules/api-backups/classes/class-api-backups-helper.php), [line 118](modules/api-backups/classes/class-api-backups-helper.php#L118-L131)

### `mainwp_module_log_record_array`

*Filter allows modification of record information*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$record` | `array` | 

Source: [./modules/logs/classes/class-log-db.php](modules/logs/classes/class-log-db.php), [line 59](modules/logs/classes/class-log-db.php#L59-L66)

### `mainwp_module_log_query_args`

*Filter allows additional arguments to query $args*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` |  | 

Source: [./modules/logs/classes/class-log-db.php](modules/logs/classes/class-log-db.php), [line 162](modules/logs/classes/class-log-db.php#L162-L167)

### `mainwp_module_log_get_role_list_separator`

*Tries to find a label for the record's user_role.*

If the user_role exists, use the label associated with it.

Otherwise, if there is a user role label stored as Log meta then use that.
Otherwise, if the user exists, use the label associated with their current role.
Otherwise, use the role slug as the label.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`' - '` |  | 

Source: [./modules/logs/classes/class-log-author.php](modules/logs/classes/class-log-author.php), [line 155](modules/logs/classes/class-log-author.php#L155-L183)

### `mainwp_module_log_current_agent`

*Filter the current agent string*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$agent` |  | 

Source: [./modules/logs/classes/class-log-author.php](modules/logs/classes/class-log-author.php), [line 241](modules/logs/classes/class-log-author.php#L241-L246)

### `mainwp_module_log_agent_label`

*Filter agent labels*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$label` |  | 
`$agent` | `string` | Key representing agent.

Source: [./modules/logs/classes/class-log-author.php](modules/logs/classes/class-log-author.php), [line 269](modules/logs/classes/class-log-author.php#L269-L276)

### `mainwp_module_log_data`

*Log handler*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`compact('connector', 'message', 'args', 'site_id', 'context', 'action', 'state', 'user_id')` |  | 

Source: [./modules/logs/classes/class-log-connector.php](modules/logs/classes/class-log-connector.php), [line 81](modules/logs/classes/class-log-connector.php#L81-L100)

### `mainwp_module_log_connectors`

*Allows for adding additional connectors via classes that extend Connector.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$classes` | `array` | An array of Connector objects.
`$this->manager->log` |  | 

Source: [./modules/logs/classes/class-log-connectors.php](modules/logs/classes/class-log-connectors.php), [line 97](modules/logs/classes/class-log-connectors.php#L97-L102)

### `mainwp_module_log_check_connector_is_excluded`

*Allows excluded connectors to be overridden and registered.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$is_excluded` | `bool` | True if excluded, otherwise false.
`$connector_name` |  | 
`$excluded_connectors` | `array` | An array of all excluded connector slugs.

Source: [./modules/logs/classes/class-log-connectors.php](modules/logs/classes/class-log-connectors.php), [line 148](modules/logs/classes/class-log-connectors.php#L148-L155)

### `mainwp_module_log_cron_tracking`

*Log handler.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$connector` | `\MainWP\Dashboard\Module\Log\Connector` | Connector responsible for logging the event.
`$message` | `string` | sprintf-ready error message string.
`$args` | `array` | sprintf (and extra) arguments to use.
`$site_id` | `int` | Target site id.
`$context` | `string` | Context of the event.
`$action` | `string` | Action of the event.
`$user_id` | `int` | User responsible for the event.
`$state` | `int\|null` | action status: null - N/A, 0 - failed, 1 - success.

Source: [./modules/logs/classes/class-log.php](modules/logs/classes/class-log.php), [line 36](modules/logs/classes/class-log.php#L36-L60)

### `mainwp_insights_getmetaboxes`

*Method add_meta_boxes()*

Add MainWP Overview Page Widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extMetaBoxs` |  | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 248](modules/logs/pages/page-log-insights-page.php#L248-L273)

### `mainwp_module_log_overview_enabled_widgets`

*Unset unwanted Widgets*

Contains the list of enabled widgets and allows user to unset unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`static::$enable_widgets` |  | 
`null` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 284](modules/logs/pages/page-log-insights-page.php#L284-L294)

### `mainwp_module_log_widgets_screen_options`

*Filter: mainwp_module_log_widgets_screen_options*

Filters available widgets on the Overview page allowing users to unsent unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$custom_opts` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/logs/pages/page-log-insights-page.php](modules/logs/pages/page-log-insights-page.php), [line 1032](modules/logs/pages/page-log-insights-page.php#L1032-L1039)

### `mainwp_getsubpages_cost_tracker`

*This hook allows you to add extra sub pages to the client page via the 'mainwp_getsubpages_cost_tracker' filter.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-admin.php](modules/cost-tracker/classes/class-cost-tracker-admin.php), [line 292](modules/cost-tracker/classes/class-cost-tracker-admin.php#L292-L295)

### `mainwp_escape_content`

*Edit subscription Post*

Handles the saving subscription.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$note` |  | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-admin.php](modules/cost-tracker/classes/class-cost-tracker-admin.php), [line 441](modules/cost-tracker/classes/class-cost-tracker-admin.php#L441-L478)

### `mainwp_module_cost_tracker_before_save_settings`

*Settigns Post*

Handles the save settings post request.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$all_opts` |  | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-admin.php](modules/cost-tracker/classes/class-cost-tracker-admin.php), [line 552](modules/cost-tracker/classes/class-cost-tracker-admin.php#L552-L590)

### `mainwp_cost_summary_getmetaboxes`

*Method add_meta_boxes()*

Add MainWP Overview Page Widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extMetaBoxs` |  | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 195](modules/cost-tracker/classes/class-cost-tracker-summary.php#L195-L220)

### `mainwp_module_cost_tracker_summary_enabled_widgets`

*Unset unwanted Widgets*

Contains the list of enabled widgets and allows user to unset unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`static::$enable_widgets` |  | 
`null` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 231](modules/cost-tracker/classes/class-cost-tracker-summary.php#L231-L241)

### `mainwp_module_cost_tracker_summary_widgets_screen_options`

*Filter: mainwp_module_cost_tracker_summary_widgets_screen_options*

Filters available widgets on the Overview page allowing users to unsent unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$custom_opts` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./modules/cost-tracker/classes/class-cost-tracker-summary.php](modules/cost-tracker/classes/class-cost-tracker-summary.php), [line 497](modules/cost-tracker/classes/class-cost-tracker-summary.php#L497-L504)

### `mainwp_escape_content`

*Get table rows.*

Optimize for shared hosting or big networks.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$note` |  | 

Source: [./modules/cost-tracker/pages/page-cost-tracker-dashboard.php](modules/cost-tracker/pages/page-cost-tracker-dashboard.php), [line 745](modules/cost-tracker/pages/page-cost-tracker-dashboard.php#L745-L786)

### `mainwp_escape_content`

*Method ajax_notes_save()*

Post handler for save notes.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$note` |  | 

Source: [./modules/cost-tracker/pages/page-cost-tracker-dashboard.php](modules/cost-tracker/pages/page-cost-tracker-dashboard.php), [line 947](modules/cost-tracker/pages/page-cost-tracker-dashboard.php#L947-L959)

### `mainwp_module_cost_tracker_manager_check_status`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./modules/cost-tracker/pages/page-cost-tracker-settings.php](modules/cost-tracker/pages/page-cost-tracker-settings.php), [line 348](modules/cost-tracker/pages/page-cost-tracker-settings.php#L348-L348)

### `mainwp_module_cost_tracker_upcoming_renewals_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Upcoming Renewals', 'mainwp')` |  | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php), [line 59](modules/cost-tracker/widgets/widget-cost-tracker-upcoming-renewals.php#L59-L59)

### `mainwp_module_cost_tracker_yearly_renewals_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Upcoming Yearly Renewals', 'mainwp')` |  | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php), [line 59](modules/cost-tracker/widgets/widget-cost-tracker-yearly-renewals.php#L59-L59)

### `mainwp_module_cost_tracker_monthly_renewals_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Upcoming Monthly Renewals', 'mainwp')` |  | 

Source: [./modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php](modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php), [line 59](modules/cost-tracker/widgets/widget-cost-tracker-monthly-renewals.php#L59-L59)

### `mainwp_rest_api_enabled`

*Method init_rest_api()*

Adds an action to create the rest API endpoints if activated in the plugin settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php), [line 56](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php#L56-L62)

### `mainwp_rest_api_validate`

*Method cost_tracker_rest_api_get_all_costs_callback()*

Callback function for managing the response to API requests made for the endpoint: cost-tracker
Can be accessed via a request like: https://yourdomain.com/wp-json/mainwp/v1/cost-tracker/get-all-costs
API Method: GET

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$request` | `array` | The request made in the API call which includes all parameters.

Source: [./modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php), [line 167](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php#L167-L180)

### `mainwp_rest_api_validate`

*Method cost_tracker_rest_api_get_client_costs_callback()*

Callback function for managing the response to API requests made for the endpoint: cost-tracker
Can be accessed via a request like: https://yourdomain.com/wp-json/mainwp/v1/cost-tracker/get-client-costs
API Method: GET

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$request` | `array` | The request made in the API call which includes all parameters.

Source: [./modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php), [line 195](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php#L195-L208)

### `mainwp_rest_api_validate`

*Method cost_tracker_rest_api_get_site_costs_callback()*

Callback function for managing the response to API requests made for the endpoint: cost-tracker
Can be accessed via a request like: https://yourdomain.com/wp-json/mainwp/v1/cost-tracker/get-site-costs
API Method: GET

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$request` | `array` | The request made in the API call which includes all parameters.

Source: [./modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php), [line 245](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php#L245-L258)

### `mainwp_rest_api_validate`

*Method cost_tracker_rest_api_get_costs_callback()*

Callback function for managing the response to API requests made for the endpoint: cost-tracker
Can be accessed via a request like: https://yourdomain.com/wp-json/mainwp/v1/cost-tracker/get-costs
API Method: GET

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$request` | `array` | The request made in the API call which includes all parameters.

Source: [./modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php), [line 285](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-v1.php#L285-L298)

### `mainwp_escape_content`

*Method get_cost_field_value().*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cost->note` |  | 

Source: [./modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-handle-v1.php](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-handle-v1.php), [line 127](modules/cost-tracker/rest-api/version1/class-cost-tracker-rest-api-handle-v1.php#L127-L190)

### `mainwp_escape_content`

*Handles the saving item.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$note` |  | 

Source: [./modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php), [line 296](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php#L296-L330)

### `mainwp_rest_routes_sites_controller_get_allowed_fields_by_context`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'view'` |  | 

Source: [./modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php), [line 545](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php#L545-L545)

### `mainwp_rest_routes_sites_controller_filter_allowed_fields_by_context`

*Get sites by item.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$site` |  | 

Source: [./modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php), [line 509](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php#L509-L552)

### `mainwp_rest_routes_clients_controller_filter_allowed_fields_by_context`

*Get clients by item.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$client` |  | 

Source: [./modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php), [line 566](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php#L566-L624)

### `mainwp_rest_cost_collection_params`

*Filter collection parameters.*

This filter registers the collection parameter, but does not map the
collection parameter to an internal WP_Comment_Query parameter. Use the
`wc_rest_review_query` filter to set WP_Comment_Query parameters.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$params` | `array` | JSON Schema-formatted collection parameters.

**Changelog**

Version | Description
------- | -----------
`5.2` | 

Source: [./modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php), [line 753](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php#L753-L763)

### `mainwp_rest_prepare_cost`

*Filter product reviews object returned from the REST API.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | The  object.
`$review` |  | 
`$request` | `\WP_REST_Request` | Request object.

Source: [./modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php), [line 947](modules/cost-tracker/rest-api/version2/class-mainwp-rest-costs-controller.php#L947-L953)

### `mainwp-getsubpages-settings`

*Settings Subpages*

Filters subpages for the Settings page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array())` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_settings'` |  | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 211](pages/page-mainwp-settings.php#L211-L218)

### `mainwp_getsubpages_settings`

*Instantiate the Settings Menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 137](pages/page-mainwp-settings.php#L137-L219)

### `date_formats`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(esc_html__('F j, Y'), 'Y-m-d', 'm/d/Y', 'd/m/Y')` |  | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1139](pages/page-mainwp-settings.php#L1139-L1139)

### `time_formats`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(esc_html__('g:i a'), 'g:i A', 'H:i')` |  | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1179](pages/page-mainwp-settings.php#L1179-L1179)

### `mainwp_show_qsw`

*Render MainWP Tools SubPage.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [./pages/page-mainwp-settings.php](pages/page-mainwp-settings.php), [line 1953](pages/page-mainwp-settings.php#L1953-L2004)

### `mainwp-getsubpages-plugins`

*Plugins Subpages*

Filters subpages for the Plugins page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array())` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_plugins'` |  | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 150](pages/page-mainwp-plugins.php#L150-L157)

### `mainwp_getsubpages_plugins`

*Instantiate Main Plugins Menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 73](pages/page-mainwp-plugins.php#L73-L158)

### `mainwp_manage_plugin_theme_hide_show_updates_per`

*Method render_select_manage_view().*

Handle render view mode selection.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$which` | `string` | plugin\|theme.

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1167](pages/page-mainwp-plugins.php#L1167-L1180)

### `file_mod_allowed`

*Disables plugin installation*

Filters whether file modifications are allowed on the Dashboard site. If not, installation process will be disabled too.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`'mainwp_install_plugin'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 1965](pages/page-mainwp-plugins.php#L1965-L1972)

### `mainwp_plugin_auto_updates_table_fatures`

*Filter: mainwp_plugin_auto_updates_table_fatures*

Filters the Plugin Auto Updates table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-plugins.php](pages/page-mainwp-plugins.php), [line 2418](pages/page-mainwp-plugins.php#L2418-L2425)

### `mainwp_manage_sites_force_use_ipv4`

*Method check_site()*

Check to add site.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`null` |  | 
`$url` |  | 

Source: [./pages/page-mainwp-manage-sites-handler.php](pages/page-mainwp-manage-sites-handler.php), [line 26](pages/page-mainwp-manage-sites-handler.php#L26-L56)

### `mainwp_update_admin_password_complexity`

*Filter: mainwp_update_admin_password_complexity*

Filters the Password lenght for the Update Admin Password, Password field.

Since 4.1

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'24'` |  | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 242](pages/page-mainwp-bulk-update-admin-passwords.php#L242-L249)

### `mainwp_admin_users_table_fatures`

*Filter: mainwp_admin_users_table_fatures*

Filters Admin Users table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-bulk-update-admin-passwords.php](pages/page-mainwp-bulk-update-admin-passwords.php), [line 326](pages/page-mainwp-bulk-update-admin-passwords.php#L326-L333)

### `mainwp_edit_post_get_categories`

*Method ajax_handle_get_categories()*

Get categories.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website` |  | 
`$_REQUEST` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 156](pages/page-mainwp-post-page-handler.php#L156-L244)

### `mainwp_posts_posting_bulk_sites`

*Method posting_bulk()*

Create bulk posts on sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 396](pages/page-mainwp-post-page-handler.php#L396-L408)

### `mainwp_posting_post_selected_by`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$selected_by` |  | 
`$id` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L626)

### `mainwp_posting_post_selected_sites`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$selected_sites` |  | 
`$id` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L634)

### `mainwp_posting_selected_groups`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$selected_groups` |  | 
`$id` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L635)

### `mainwp_posting_selected_clients`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$selected_clients` |  | 
`$id` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L636)

### `mainwp_posting_bulkpost_post_status`

*Post status*

Sets post status when posting 'bulkpost' to child sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_status` |  | 
`$id` | `int` | Post ID.

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 682](pages/page-mainwp-post-page-handler.php#L682-L691)

### `mainwp-after-posting-bulkpost-result`

*After posting a new post*

Sets data after the posting process to show the process feedback.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(false, $_post, $dbwebsites, $output)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_after_posting_bulkpost_result'` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 850](pages/page-mainwp-post-page-handler.php#L850-L861)

### `mainwp_after_posting_bulkpost_result`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$newExtensions` |  | 
`$_post` |  | 
`$dbwebsites` |  | 
`$output` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L866)

### `mainwp_after_posting_delete_bulk_post`

*Method posting_posts()*

Posting posts.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$posting_succeed` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 588](pages/page-mainwp-post-page-handler.php#L588-L907)

### `mainwp_manageposts_get_post_result`

*Method get_post()*

Get post from child site to edit.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ret` |  | 
`$information['my_post']` |  | 
`$websiteId` |  | 

Source: [./pages/page-mainwp-post-page-handler.php](pages/page-mainwp-post-page-handler.php), [line 953](pages/page-mainwp-post-page-handler.php#L953-L1008)

### `mainwp_getsubpages_client`

*Method init_menu()*

Initiate menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-client.php](pages/page-mainwp-client.php), [line 79](pages/page-mainwp-client.php#L79-L141)

### `mainwp_default_settings_indicator`

*Method render_not_default_indicator().*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$indi` |  | 
`$field` | `string` | setting field to check.
`$indi_value` |  | 
`$current_value` | `mixed` | setting current value.
`$render_indi` | `bool` | to render indication.
`$default_val` | `mixed` | default value directly.

Source: [./pages/page-mainwp-settings-indicator.php](pages/page-mainwp-settings-indicator.php), [line 72](pages/page-mainwp-settings-indicator.php#L72-L92)

### `mainwp_default_settings_indicator`

*Method render_not_default_email_settings_indicator().*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$indi` |  | 
`$field` | `string` | setting field to check.
`$def` |  | 
`$current_value` | `mixed` | setting current value.
`$render_indi` | `bool` | to render indication.
`$type` | `string` | setting type to get default value.

Source: [./pages/page-mainwp-settings-indicator.php](pages/page-mainwp-settings-indicator.php), [line 99](pages/page-mainwp-settings-indicator.php#L99-L115)

### `mainwp_default_emails_fields`

*Method get_defaults_email_settings_value().*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$recipients` |  | 
`$type` | `string` | setting type to get default value.
`$field` | `string` | setting field to get default value.
`$general` | `bool` | general setting.

Source: [./pages/page-mainwp-settings-indicator.php](pages/page-mainwp-settings-indicator.php), [line 214](pages/page-mainwp-settings-indicator.php#L214-L263)

### `mainwp-getcustompage-backups`

*Backups Subpages*

Filters subpages for the Backups page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(false)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getcustompage_backups'` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 102](pages/page-mainwp-manage-backups.php#L102-L109)

### `mainwp_getcustompage_backups`

*Instantiate Legacy Backups Menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$customPage` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 90](pages/page-mainwp-manage-backups.php#L90-L110)

### `mainwp-getsubpages-backups`

*Instantiate Legacy Backups Menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($sub_pages)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_backups'` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 90](pages/page-mainwp-manage-backups.php#L90-L144)

### `mainwp_getsubpages_backups`

*Instantiate Legacy Backups Menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 90](pages/page-mainwp-manage-backups.php#L90-L145)

### `mainwp-getprimarybackup-methods`

*Render Legacy Backups page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($primary_methods)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getprimarybackup_methods'` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 320](pages/page-mainwp-manage-backups.php#L320-L352)

### `mainwp_getprimarybackup_methods`

*Render Legacy Backups page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$primary_methods` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 320](pages/page-mainwp-manage-backups.php#L320-L353)

### `mainwp_backuptask_column_destination`

*Column Destination.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$item->id` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 603](pages/page-mainwp-manage-backups.php#L603-L611)

### `mainwp-getprimarybackup-methods`

*Method render_settings()*

Render backup settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($primary_methods)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getprimarybackup_methods'` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 966](pages/page-mainwp-manage-backups.php#L966-L990)

### `mainwp_getprimarybackup_methods`

*Method render_settings()*

Render backup settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$primary_methods` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 966](pages/page-mainwp-manage-backups.php#L966-L991)

### `mainwp-getprimarybackup-methods`

*Method render_individual_settings()*

Render backup settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($primary_methods)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getprimarybackup_methods'` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 1190](pages/page-mainwp-manage-backups.php#L1190-L1201)

### `mainwp_getprimarybackup_methods`

*Method render_individual_settings()*

Render backup settings.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$primary_methods` |  | 

Source: [./pages/page-mainwp-manage-backups.php](pages/page-mainwp-manage-backups.php), [line 1190](pages/page-mainwp-manage-backups.php#L1190-L1202)

### `mainwp-getsubpages-post`

*Method ini_menu()*

Initiate Page menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($sub_pages)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_post'` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 78](pages/page-mainwp-post.php#L78-L123)

### `mainwp_getsubpages_post`

*Method ini_menu()*

Initiate Page menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 78](pages/page-mainwp-post.php#L78-L124)

### `mainwp_edit_bulkpost_getmetaboxes`

*Init custom bulkpost metaboxes.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 151](pages/page-mainwp-post.php#L151-L157)

### `mainwp_posts_search_bulk_sites`

*Method render()*

Render the page content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`0` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 539](pages/page-mainwp-post.php#L539-L732)

### `mainwp_custom_post_types_default`

*Default post types*

Set default custom post types to exclude from the CPT extension options.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 871](pages/page-mainwp-post.php#L871-L878)

### `mainwp_posts_table_fatures`

*Filter: mainwp_posts_table_fatures*

Filters the Manage Posts table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1012](pages/page-mainwp-post.php#L1012-L1019)

### `mainwp_get_all_posts_data`

*Get all posts data*

Set search parameters for the fetch process.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1221](pages/page-mainwp-post.php#L1221-L1228)

### `mainwp_custom_post_types_get_post_connections`

*Method posts_search_handler()*

Post page search handler.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$website->id` |  | 
`$child_post_ids` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1282](pages/page-mainwp-post.php#L1282-L1325)

### `postmeta_form_keys`

*Filters values for the meta key dropdown in the Custom Fields meta box.*

Returning a non-null value will effectively short-circuit and avoid a
potentially expensive query against postmeta.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`null` |  | 
`$_post` | `\MainWP\Dashboard\WP_Post` | The current post object.

**Changelog**

Version | Description
------- | -----------
`4.4.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1568](pages/page-mainwp-post.php#L1568-L1579)

### `postmeta_form_limit`

*Filters the number of custom fields to retrieve for the drop-down
in the Custom Fields meta box.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`30` |  | 

**Changelog**

Version | Description
------- | -----------
`2.1.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1582](pages/page-mainwp-post.php#L1582-L1590)

### `admin_post_thumbnail_size`

*Filters the size used to display the post thumbnail image in the 'Featured Image' meta box.*

Note: When a theme adds 'post-thumbnail' support, a special 'post-thumbnail'
image size is registered, which differs from the 'thumbnail' image size
managed via the Settings > Media screen. See the `$size` parameter description
for more information on default values.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$size` | `string\|array` | Post thumbnail image size to display in the meta box. Accepts any valid<br>image size, or an array of width and height values in pixels (in that order).<br>If the 'post-thumbnail' size is set, default is 'post-thumbnail'. Otherwise,<br>default is an array with 266 as both the height and width values.
`$thumbnail_id` | `int` | Post thumbnail attachment ID.
`$_post` | `\MainWP\Dashboard\WP_Post` | The post object associated with the thumbnail.

**Changelog**

Version | Description
------- | -----------
`4.4.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1704](pages/page-mainwp-post.php#L1704-L1721)

### `mainwp_admin_post_thumbnail_html`

*Filters the admin post thumbnail HTML markup to return.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$html` |  | 
`$_post->ID` |  | 
`$thumbnail_id` | `int` | Thumbnail ID.

**Changelog**

Version | Description
------- | -----------
`4.6.0` | Added the `$thumbnail_id` parameter.
`3.5.0` | Added the `$post_id` parameter.
`2.9.0` | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 1761](pages/page-mainwp-post.php#L1761-L1772)

### `mainwp_custom_render_bulkpost`

*Renders bulkpost to edit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$post_id` | `mixed` | Post ID.
`$post_type` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2009](pages/page-mainwp-post.php#L2009-L2035)

### `mainwp_bulkpost_edit_title`

*Renders bulkpost to edit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$note_title` |  | 
`$post` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2009](pages/page-mainwp-post.php#L2009-L2078)

### `mainwp_bulkpost_editor_settings`

*Renders bulkpost to edit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$post` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2009](pages/page-mainwp-post.php#L2009-L2174)

### `mainwp_bulkpost_select_sites_settings`

*Renders bulkpost to edit.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sites_settings` |  | 
`$post` |  | 

Source: [./pages/page-mainwp-post.php](pages/page-mainwp-post.php), [line 2009](pages/page-mainwp-post.php#L2009-L2275)

### `mainwp-getsubpages-sites`

*Initiate menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($sub_pages)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_sites'` |  | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 178](pages/page-mainwp-manage-sites.php#L178-L241)

### `mainwp_getsubpages_sites`

*Initiate menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 178](pages/page-mainwp-manage-sites.php#L178-L242)

### `mainwp_getmetaboxes`

*Method on_load_page_dashboard()*

Add individual meta boxes.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extMetaBoxs` |  | 
`$dashboard_siteid` |  | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 1397](pages/page-mainwp-manage-sites.php#L1397-L1432)

### `mainwp_overview_enabled_widgets`

*Unset unwanted Widgets*

Contains the list of enabled widgets and allows user to unset unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$values` | `array` | Array containing enabled widgets.
`$dashboard_siteid` | `int` | Child site (Overview) ID.

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 1450](pages/page-mainwp-manage-sites.php#L1450-L1460)

### `mainwp_manage_sites_optimize_loading`

*Method render_all_sites()*

Render manage sites content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`1` |  | 
`'manage-sites'` |  | 

Source: [./pages/page-mainwp-manage-sites.php](pages/page-mainwp-manage-sites.php), [line 1702](pages/page-mainwp-manage-sites.php#L1702-L1713)

### `mainwp_getsubpages_restapi`

*REST API Subpages*

Filters subpages for the REST API page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./pages/page-mainwp-rest-api-page.php](pages/page-mainwp-rest-api-page.php), [line 116](pages/page-mainwp-rest-api-page.php#L116-L123)

### `mainwp_security_issues_stats`

*Filters security issues*

Filters the default security checks and enables user to disable certain checks.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$information` | `object` | Object containing data from che chid site related to security issues.<br>Available options: 'db_reporting', 'php_reporting'.
`$website` | `object` | Object containing child site data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-security-issues.php](pages/page-mainwp-security-issues.php), [line 293](pages/page-mainwp-security-issues.php#L293-L305)

### `mainwp_security_post_data`

*Filters security issues from fixing*

Filters the default security checks and enables user to disable certain issues from being fixed by using the Fix All button.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$skip_features` | `object` | Object containing data from che chid site related to security issues.<br>Available options: 'db_reporting', 'php_reporting'.
`$website` | `object` | Object containing child site data.

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-security-issues.php](pages/page-mainwp-security-issues.php), [line 346](pages/page-mainwp-security-issues.php#L346-L358)

### `mainwp_unset_security_scripts_stylesheets`

*Method Fix Security Issues*

Fix the selected security issue.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [./pages/page-mainwp-security-issues.php](pages/page-mainwp-security-issues.php), [line 312](pages/page-mainwp-security-issues.php#L312-L366)

### `mainwp-getsubpages-user`

*This hook allows you to add extra sub pages to the User page via the 'mainwp-getsubpages-user' filter.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array())` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_user'` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 114](pages/page-mainwp-user.php#L114-L119)

### `mainwp_getsubpages_user`

*Method init_menu()*

Initiate menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 68](pages/page-mainwp-user.php#L68-L120)

### `mainwp-users-manage-roles`

*Renders manage users dashboard.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($user_roles)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_users_manage_roles'` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 368](pages/page-mainwp-user.php#L368-L528)

### `mainwp_users_manage_roles`

*Renders manage users dashboard.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$user_roles` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 368](pages/page-mainwp-user.php#L368-L529)

### `mainwp-users-manage-roles`

*Renders Edit Users Modal window.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($editable_roles)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_users_manage_roles'` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 661](pages/page-mainwp-user.php#L661-L675)

### `mainwp_users_manage_roles`

*Renders Edit Users Modal window.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$editable_roles` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 661](pages/page-mainwp-user.php#L661-L676)

### `mainwp_users_table_fatures`

*Renders Users Table.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 805](pages/page-mainwp-user.php#L805-L879)

### `mainwp_new_user_password_complexity`

*Filter: mainwp_new_user_password_complexity*

Filters the Password lenght for the Add New user, Password field.

Since 4.1

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'24'` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1486](pages/page-mainwp-user.php#L1486-L1493)

### `mainwp-users-manage-roles`

*Renders the Add New user form.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($user_roles)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_users_manage_roles'` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1481](pages/page-mainwp-user.php#L1481-L1597)

### `mainwp_users_manage_roles`

*Renders the Add New user form.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$user_roles` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1481](pages/page-mainwp-user.php#L1481-L1598)

### `mainwp-users-manage-roles`

*Method do_bulk_add()*

Bulk User addition $_POST Handler.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($cus_roles)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_users_manage_roles'` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1826](pages/page-mainwp-user.php#L1826-L1867)

### `mainwp_users_manage_roles`

*Method do_bulk_add()*

Bulk User addition $_POST Handler.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cus_roles` |  | 

Source: [./pages/page-mainwp-user.php](pages/page-mainwp-user.php), [line 1826](pages/page-mainwp-user.php#L1826-L1868)

### `mainwp_backuptask_remotedestinations`

*Get backup tasks and site ID.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 
`$backupTask` |  | 

Source: [./pages/page-mainwp-manage-backups-handler.php](pages/page-mainwp-manage-backups-handler.php), [line 514](pages/page-mainwp-manage-backups-handler.php#L514-L558)

### `mainwp_file_uploader_chunk_size`

*Method render_upload()*

Renders the upload sub part.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`1000000` |  | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 67](pages/page-mainwp-install-bulk.php#L67-L173)

### `mainwp_prepare_install_download_url`

*Method prepare_install()*

Prepare for the installation.

Grab all the necessary data to make the upload and prepare json response.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` |  | 
`$_POST` |  | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 302](pages/page-mainwp-install-bulk.php#L302-L336)

### `mainwp_bulk_prepare_install_result`

*Filter: mainwp_bulk_prepare_install_result*

Fires after plugin/theme prepare install.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output` |  | 
`$type` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 356](pages/page-mainwp-install-bulk.php#L356-L363)

### `mainwp_clear_and_lock_options`

*Clean and Lock extension options*

Adds additional options related to Clean and Lock options in order to avoid conflicts when HTTP Basic auth is set.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 379](pages/page-mainwp-install-bulk.php#L379-L386)

### `mainwp_perform_install_data`

*Perform insatallation additional data*

Adds support for additional data such as HTTP User and HTTP Password.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` | `array` | Array containg the post data.

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 437](pages/page-mainwp-install-bulk.php#L437-L446)

### `mainwp_installbulk_prepareupload`

*Prepare upload*

Prepares upload URLs for the bulk install process.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output['urls']` |  | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 527](pages/page-mainwp-install-bulk.php#L527-L534)

### `mainwp_perform_install_data`

*This filter is documented in pages/page-mainwp-install-bulk.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 649](pages/page-mainwp-install-bulk.php#L649-L650)

### `mainwp_bulk_upload_install_result`

*Filter: mainwp_bulk_upload_install_result*

Fires after plugin/theme install.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output` |  | 
`$type` |  | 
`$post_data` |  | 
`$websites` |  | 

**Changelog**

Version | Description
------- | -----------
`4.6` | 

Source: [./pages/page-mainwp-install-bulk.php](pages/page-mainwp-install-bulk.php), [line 704](pages/page-mainwp-install-bulk.php#L704-L711)

### `mainwp_overview_enabled_widgets`

*Unset unwanted Widgets*

Contains the list of enabled widgets and allows user to unset unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$values` | `array` | Array containing enabled widgets.
`null` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-overview.php](pages/page-mainwp-overview.php), [line 230](pages/page-mainwp-overview.php#L230-L240)

### `mainwp-getextensions`

*Method init_menu()*

Instantiate Extensions Menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($init_extensions)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getextensions'` |  | 

Source: [./pages/page-mainwp-extensions.php](pages/page-mainwp-extensions.php), [line 58](pages/page-mainwp-extensions.php#L58-L86)

### `mainwp_getextensions`

*Method init_menu()*

Instantiate Extensions Menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$init_extensions` |  | 

Source: [./pages/page-mainwp-extensions.php](pages/page-mainwp-extensions.php), [line 58](pages/page-mainwp-extensions.php#L58-L87)

### `mainwp-getsubpages-server`

*Filter mainwp_getsubpages_server*

Filters subpages for the Info page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array())` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_server'` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 141](pages/page-mainwp-server-information.php#L141-L148)

### `mainwp_getsubpages_server`

*Method init_menu()*

Initiate Info subPage menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 36](pages/page-mainwp-server-information.php#L36-L149)

### `mainwp_cron_jobs_table_features`

*Filter: mainwp_cron_jobs_table_features*

Filters the Cron Schedules table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1138](pages/page-mainwp-server-information.php#L1138-L1145)

### `error_log_mainwp_logs`

*Filter: error_log_mainwp_logs*

Filters the error log files to show.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($error_log)` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1511](pages/page-mainwp-server-information.php#L1511-L1518)

### `error_log_mainwp_lines`

*Filter: error_log_mainwp_lines*

Limits the number of error log records to be displayed. Default value, 50.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`100` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1520](pages/page-mainwp-server-information.php#L1520-L1527)

### `mainwp_logger_to_db`

*Renders action logs page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1634](pages/page-mainwp-server-information.php#L1634-L1667)

### `mainwp_specific_action_logs`

*Renders action logs page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$specific_default` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1634](pages/page-mainwp-server-information.php#L1634-L1685)

### `mainwp_log_specific_actions`

*Renders action logs page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$specific_logs` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1634](pages/page-mainwp-server-information.php#L1634-L1686)

### `mainwp_logger_to_db`

*Renders action logs page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [./pages/page-mainwp-server-information.php](pages/page-mainwp-server-information.php), [line 1634](pages/page-mainwp-server-information.php#L1634-L1741)

### `mainwp_clients_getmetaboxes`

*Method add_meta_boxes()*

Add MainWP Overview Page Widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extMetaBoxs` |  | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 143](pages/page-mainwp-client-overview.php#L143-L169)

### `mainwp_clients_overview_enabled_widgets`

*Unset unwanted Widgets*

Contains the list of enabled widgets and allows user to unset unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$values` | `array` | Array containing enabled widgets.
`null` |  | 

**Changelog**

Version | Description
------- | -----------
`4.3` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 191](pages/page-mainwp-client-overview.php#L191-L201)

### `mainwp_clients_widgets_screen_options`

*Filter: mainwp_clients_widgets_screen_options*

Filters available widgets on the Overview page allowing users to unsent unwanted widgets.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$custom_opts` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-client-overview.php](pages/page-mainwp-client-overview.php), [line 438](pages/page-mainwp-client-overview.php#L438-L445)

### `mainwp_getsubpages_tags`

*This hook allows you to add extra sub pages to the Tags page via the 'mainwp-getsubpages-tags' filter.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`static::$subPages` |  | 

Source: [./pages/page-mainwp-manage-groups.php](pages/page-mainwp-manage-groups.php), [line 85](pages/page-mainwp-manage-groups.php#L85-L90)

### `mainwp_sub_leftmenu_updates`

*Initiates Updates menu.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$init_sub_subleftmenu` |  | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 134](pages/page-mainwp-updates.php#L134-L240)

### `mainwp_updates_translation_sort_by`

*Filter: mainwp_updates_translation_sort_by*

Filters the default sorting option for Translation updates.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'name'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 687](pages/page-mainwp-updates.php#L687-L694)

### `mainwp_updates_plugins_sort_by`

*Filter: mainwp_updates_plugins_sort_by*

Filters the default sorting option for Plugin updates.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'name'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 696](pages/page-mainwp-updates.php#L696-L703)

### `mainwp_updates_themes_sort_by`

*Filter: mainwp_updates_themes_sort_by*

Filters the default sorting option for Theme updates.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'name'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 705](pages/page-mainwp-updates.php#L705-L712)

### `mainwp_updates_abandoned_plugins_sort_by`

*Filter: mainwp_updates_abandoned_plugins_sort_by*

Filters the default sorting option for Abandoned plugins.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'name'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 714](pages/page-mainwp-updates.php#L714-L721)

### `mainwp_updates_abandoned_themes_sort_by`

*Filter: mainwp_updates_abandoned_themes_sort_by*

Filters the default sorting option for Abandoned themes.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'name'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 723](pages/page-mainwp-updates.php#L723-L730)

### `mainwp_limit_updates_all`

*Limits number of updates to process.*

Limits the number of updates that will be processed in a single run on Update Everything action.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`0` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 740](pages/page-mainwp-updates.php#L740-L747)

### `mainwp_pages_updates_render_tabs`

*Renders updates page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$current_tab` |  | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 375](pages/page-mainwp-updates.php#L375-L789)

### `mainwp_updates_table_features`

*Filter: mainwp_updates_table_features*

Filters the Updates table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1791](pages/page-mainwp-updates.php#L1791-L1798)

### `mainwp_page_hearder_tabs_updates`

*Renders header tabs*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$header_tabs` |  | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1908](pages/page-mainwp-updates.php#L1908-L1970)

### `mainwp_updates_hide_show_updates_per`

*Renders header tabs*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$hide_show_updates_per` |  | 
`$current_tab` | `string` | current tab.

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 1908](pages/page-mainwp-updates.php#L1908-L1991)

### `mainwp_widgetupdates_actions_top`

*Filter: mainwp_widgetupdates_actions_top*

Filters the udpates actions top content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 2022](pages/page-mainwp-updates.php#L2022-L2029)

### `mainwp_manage_updates_limit_loading`

*Method handle_limit_sites().*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`'updates'` |  | 

Source: [./pages/page-mainwp-updates.php](pages/page-mainwp-updates.php), [line 2180](pages/page-mainwp-updates.php#L2180-L2185)

### `mainwp_menu_extensions_left_menu`

*Method init_extensions_menu()*

Initiate left Extensions menus.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extensions_and_leftmenus` |  | 

Source: [./pages/page-mainwp-extensions-groups.php](pages/page-mainwp-extensions-groups.php), [line 33](pages/page-mainwp-extensions-groups.php#L33-L824)

### `mainwp-getsubpages-page`

*Method init_menu()*

Initiate Menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($sub_pages)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_page'` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 81](pages/page-mainwp-page.php#L81-L111)

### `mainwp_getsubpages_page`

*Method init_menu()*

Initiate Menu.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 81](pages/page-mainwp-page.php#L81-L112)

### `mainwp_pages_table_fatures`

*Filter: mainwp_pages_table_fatures*

Filters the Manage Pages table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 862](pages/page-mainwp-page.php#L862-L869)

### `mainwp_get_all_pages_data`

*Get all pages data*

Set search parameters for the fetch process.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 

**Changelog**

Version | Description
------- | -----------
`3.4` | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1047](pages/page-mainwp-page.php#L1047-L1054)

### `mainwp_posting_bulkpost_post_status`

*Page status*

Sets page status when posting 'bulkpage' to child sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_status` |  | 
`$id` | `int` | Page ID.

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1469](pages/page-mainwp-page.php#L1469-L1478)

### `mainwp_bulkpage_posting`

*Posting new page*

Sets Page data to post to child sites.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_data` |  | 
`$id` | `int` | Page ID.

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1602](pages/page-mainwp-page.php#L1602-L1611)

### `mainwp-after-posting-bulkpage-result`

*After posting a new page*

Sets data after the posting process to show the process feedback.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(false, $_post, $dbwebsites, $output)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_after_posting_bulkpage_result'` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1650](pages/page-mainwp-page.php#L1650-L1661)

### `mainwp_after_posting_bulkpage_result`

*Method posting()*

Render Posting page modal window.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$after_posting` |  | 
`$_post` |  | 
`$dbwebsites` |  | 
`$output` |  | 

Source: [./pages/page-mainwp-page.php](pages/page-mainwp-page.php), [line 1385](pages/page-mainwp-page.php#L1385-L1662)

### `mainwp_open_site_allow_vars`

*Child Site Dashboard Link redirect handler.*

This method checks to see if the current user is allow to access the
Child Site, then grabs the websiteid, location, openurl & passes it onto
either open_site_location or open_site methods.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$allow_vars` |  | 

Source: [./pages/page-mainwp-site-open.php](pages/page-mainwp-site-open.php), [line 27](pages/page-mainwp-site-open.php#L27-L72)

### `mainwp_html_regression_largest_change_scope`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website->id` |  | 
`true` |  | 

Source: [./pages/page-mainwp-updates-handler.php](pages/page-mainwp-updates-handler.php), [line 58](pages/page-mainwp-updates-handler.php#L58-L58)

### `mainwp-getsubpages-themes`

*Themes Subpages*

Filters subpages for the Themes page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(array())` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getsubpages_themes'` |  | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 147](pages/page-mainwp-themes.php#L147-L154)

### `mainwp_getsubpages_themes`

*Method init_menu()*

Initiate the MainWP Themes SubMenu page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sub_pages` |  | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 68](pages/page-mainwp-themes.php#L68-L155)

### `file_mod_allowed`

*Disables themes installation*

Filters whether file modifications are allowed on the Dashboard site. If not, installation process will be disabled too.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`'mainwp_install_theme'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1857](pages/page-mainwp-themes.php#L1857-L1864)

### `mainwp_favorites_themes`

*Render the Themes table for the Install Themes Tab.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 1732](pages/page-mainwp-themes.php#L1732-L1888)

### `mainwp_theme_auto_updates_table_fatures`

*Filter: mainwp_theme_auto_updates_table_fatures*

Filters the Theme Auto Updates table features.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$table_features` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./pages/page-mainwp-themes.php](pages/page-mainwp-themes.php), [line 2371](pages/page-mainwp-themes.php#L2371-L2378)

### `mainwp_manage_sites_optimize_loading`

*Method render_all_sites()*

Render monitoring sites content.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`1` |  | 
`'monitor-sites'` |  | 

Source: [./pages/page-mainwp-monitoring.php](pages/page-mainwp-monitoring.php), [line 272](pages/page-mainwp-monitoring.php#L272-L285)

### `mainwp_cards_per_row`

*Filter: mainwp_cards_per_row*

Filters the number of cards per row in MainWP Screenshots page.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'five'` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1.8` | 

Source: [./pages/page-mainwp-manage-screenshots.php](pages/page-mainwp-manage-screenshots.php), [line 247](pages/page-mainwp-manage-screenshots.php#L247-L254)

### `https_local_ssl_verify`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [./pages/page-mainwp-server-information-handler.php](pages/page-mainwp-server-information-handler.php), [line 704](pages/page-mainwp-server-information-handler.php#L704-L704)

### `mainwp-getprimarybackup-methods`

*Gets MainWP Set Options.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($primary_methods)` |  | 
`'4.0.7.2'` |  | 
`'mainwp_getprimarybackup_methods'` |  | 

Source: [./pages/page-mainwp-server-information-handler.php](pages/page-mainwp-server-information-handler.php), [line 852](pages/page-mainwp-server-information-handler.php#L852-L966)

### `mainwp_getprimarybackup_methods`

*Gets MainWP Set Options.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$primary_methods` |  | 

Source: [./pages/page-mainwp-server-information-handler.php](pages/page-mainwp-server-information-handler.php), [line 852](pages/page-mainwp-server-information-handler.php#L852-L967)

### `mainwp_clients_overview_note_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Notes', 'mainwp')` |  | 
`$client_info` |  | 

Source: [./widgets/widget-mainwp-client-overview-note.php](widgets/widget-mainwp-client-overview-note.php), [line 71](widgets/widget-mainwp-client-overview-note.php#L71-L71)

### `mainwp_clients_overview_contact_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Client Contact', 'mainwp')` |  | 
`$contact_info` |  | 

Source: [./widgets/widget-mainwp-client-overview-contacts.php](widgets/widget-mainwp-client-overview-contacts.php), [line 73](widgets/widget-mainwp-client-overview-contacts.php#L73-L73)

### `mainwp_clients_overview_contact_widget_sutbitle`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Contact Information', 'mainwp')` |  | 
`$contact_info` |  | 

Source: [./widgets/widget-mainwp-client-overview-contacts.php](widgets/widget-mainwp-client-overview-contacts.php), [line 76](widgets/widget-mainwp-client-overview-contacts.php#L76-L76)

### `mainwp_child_site_info_widget_content`

*Filter: mainwp_child_site_info_widget_content*

Filters the Child Info array for the Site Info widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$child_site_info` |  | 

**Changelog**

Version | Description
------- | -----------
`4.1` | 

Source: [./widgets/widget-mainwp-site-info.php](widgets/widget-mainwp-site-info.php), [line 83](widgets/widget-mainwp-site-info.php#L83-L90)

### `mainwp_site_info_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Site Info', 'mainwp')` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-site-info.php](widgets/widget-mainwp-site-info.php), [line 116](widgets/widget-mainwp-site-info.php#L116-L116)

### `mainwp_clients_overview_info_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Additional Client Info', 'mainwp')` |  | 
`$client_info` |  | 

Source: [./widgets/widget-mainwp-client-overview-custom-info.php](widgets/widget-mainwp-client-overview-custom-info.php), [line 64](widgets/widget-mainwp-client-overview-custom-info.php#L64-L64)

### `mainwp_notes_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Notes', 'mainwp')` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-notes.php](widgets/widget-mainwp-notes.php), [line 62](widgets/widget-mainwp-notes.php#L62-L62)

### `mainwp_clients_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Clients', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-clients.php](widgets/widget-mainwp-clients.php), [line 55](widgets/widget-mainwp-clients.php#L55-L55)

### `mainwp_uptime_monitoring_response_time_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Uptime Monitoring', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-uptime-monitoring-site-widget.php](widgets/widget-mainwp-uptime-monitoring-site-widget.php), [line 190](widgets/widget-mainwp-uptime-monitoring-site-widget.php#L190-L190)

### `mainwp_widgets_chart_date_format`

*Prepare response time for ui chart data.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$format_date` |  | 
`$params` | `array` | params.
`$slug` | `string` | for date format hook.

Source: [./widgets/widget-mainwp-uptime-monitoring-site-widget.php](widgets/widget-mainwp-uptime-monitoring-site-widget.php), [line 604](widgets/widget-mainwp-uptime-monitoring-site-widget.php#L604-L623)

### `mainwp_security_issues_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Site Hardening', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-security-issues-widget.php](widgets/widget-mainwp-security-issues-widget.php), [line 98](widgets/widget-mainwp-security-issues-widget.php#L98-L98)

### `mainwp_security_issues_list_item_title_url`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'admin.php?page=managesites&dashboard=' . $website->id` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-security-issues-widget.php](widgets/widget-mainwp-security-issues-widget.php), [line 225](widgets/widget-mainwp-security-issues-widget.php#L225-L225)

### `mainwp_security_issues_list_item_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website->name` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-security-issues-widget.php](widgets/widget-mainwp-security-issues-widget.php), [line 236](widgets/widget-mainwp-security-issues-widget.php#L236-L236)

### `mainwp_uptime_monitoring_status_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Uptime Monitoring', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-uptime-monitoring-status.php](widgets/widget-mainwp-uptime-monitoring-status.php), [line 51](widgets/widget-mainwp-uptime-monitoring-status.php#L51-L51)

### `mainwp_get_started_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Get Started with MainWP', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-get-started.php](widgets/widget-mainwp-get-started.php), [line 63](widgets/widget-mainwp-get-started.php#L63-L63)

### `mainwp_module_cost_tracker_get_total_cost`

*Method render_sites()*

Grab available Child Sites updates a build Widget.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`0` |  | 

Source: [./widgets/widget-mainwp-get-started.php](widgets/widget-mainwp-get-started.php), [line 46](widgets/widget-mainwp-get-started.php#L46-L74)

### `mainwp_plugins_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Plugins', 'mainwp')` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-widget-plugins.php](widgets/widget-mainwp-widget-plugins.php), [line 137](widgets/widget-mainwp-widget-plugins.php#L137-L137)

### `mainwp_connection_status_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Connection Status', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 156](widgets/widget-mainwp-connection-status.php#L156-L156)

### `mainwp_connection_status_list_item_title_url`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'admin.php?page=managesites&dashboard=' . $website->id` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 407](widgets/widget-mainwp-connection-status.php#L407-L407)

### `mainwp_connection_status_list_item_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website->name` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 418](widgets/widget-mainwp-connection-status.php#L418-L418)

### `mainwp_connection_status_list_item_title_url`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'admin.php?page=managesites&dashboard=' . $website->id` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 459](widgets/widget-mainwp-connection-status.php#L459-L459)

### `mainwp_connection_status_list_item_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website->name` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 470](widgets/widget-mainwp-connection-status.php#L470-L470)

### `mainwp_connection_status_list_item_title_url`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'admin.php?page=managesites&dashboard=' . $website->id` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 506](widgets/widget-mainwp-connection-status.php#L506-L506)

### `mainwp_connection_status_list_item_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$website->name` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-connection-status.php](widgets/widget-mainwp-connection-status.php), [line 517](widgets/widget-mainwp-connection-status.php#L517-L517)

### `mainwp_themes_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Themes', 'mainwp')` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-widget-themes.php](widgets/widget-mainwp-widget-themes.php), [line 107](widgets/widget-mainwp-widget-themes.php#L107-L107)

### `mainwp_clients_info_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Client Info', 'mainwp')` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-client-info.php](widgets/widget-mainwp-client-info.php), [line 78](widgets/widget-mainwp-client-info.php#L78-L78)

### `mainwp_clients_overview_websites_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Sites', 'mainwp')` |  | 
`$client_info` |  | 

Source: [./widgets/widget-mainwp-client-overview-sites.php](widgets/widget-mainwp-client-overview-sites.php), [line 117](widgets/widget-mainwp-client-overview-sites.php#L117-L117)

### `mainwp_recent_posts_pages_number`

*Sets number of recent posts & pages*

Limits the number of recent posts & pages to show in the widget. Min 0, Max 30, Default 5.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`5` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 50](widgets/widget-mainwp-recent-posts.php#L50-L57)

### `mainwp_recent_posts_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Recent Posts', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-recent-posts.php](widgets/widget-mainwp-recent-posts.php), [line 189](widgets/widget-mainwp-recent-posts.php#L189-L189)

### `mainwp_limit_updates_all`

*Filter: mainwp_limit_updates_all*

Limits the number of updates that will be processed in a single run on Update Everything action.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`0` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0` | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 373](widgets/widget-mainwp-updates-overview.php#L373-L380)

### `mainwp_updates_overview_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Updates Overview', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 475](widgets/widget-mainwp-updates-overview.php#L475-L475)

### `mainwp_update_everything_button_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Update Everything', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-updates-overview.php](widgets/widget-mainwp-updates-overview.php), [line 551](widgets/widget-mainwp-updates-overview.php#L551-L551)

### `mainwp_widget_site_actions_limit_number`

*Method render()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`50` |  | 

Source: [./widgets/widget-mainwp-site-actions.php](widgets/widget-mainwp-site-actions.php), [line 75](widgets/widget-mainwp-site-actions.php#L75-L84)

### `mainwp_non_mainwp_changes_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Sites Changes', 'mainwp')` |  | 
`$website` |  | 

Source: [./widgets/widget-mainwp-site-actions.php](widgets/widget-mainwp-site-actions.php), [line 127](widgets/widget-mainwp-site-actions.php#L127-L127)

### `mainwp_recent_posts_pages_number`

*This filter is documented in /widgets/widget-mainwp-recent-posts.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`5` |  | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 50](widgets/widget-mainwp-recent-pages.php#L50-L51)

### `mainwp_recent_pages_widget_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Recent Pages', 'mainwp')` |  | 

Source: [./widgets/widget-mainwp-recent-pages.php](widgets/widget-mainwp-recent-pages.php), [line 185](widgets/widget-mainwp-recent-pages.php#L185-L185)


<p align="center"><a href="https://github.com/pronamic/wp-documentor"><img src="https://cdn.jsdelivr.net/gh/pronamic/wp-documentor@main/logos/pronamic-wp-documentor.svgo-min.svg" alt="Pronamic WordPress Documentor" width="32" height="32"></a><br><em>Generated by <a href="https://github.com/pronamic/wp-documentor">Pronamic WordPress Documentor</a> <code>1.2.0</code></em><p>

