<?php

$settings['update_free_access'] = FALSE;

/**
 * Place the config directory outside of the Drupal root.
 */
$settings['config_sync_directory'] = '../config/default';
$settings['config_vcs_directory'] = '../config/default';

$settings['hash_salt'] = 'iJmBXYFnrxvZyDdLgOdbomBpwZUlLjJndqBIhwFCdRmAfBNkLlTHRKSQZaaxoAnl';

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

// #ddev-generated: Automatically generated Drupal settings file.
if (file_exists($app_root . '/' . $site_path . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include $app_root . '/' . $site_path . '/settings.ddev.php';
}
