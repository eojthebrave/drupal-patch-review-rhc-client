<?php
$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => getenv('OPENSHIFT_APP_NAME'),
      'username' => getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
      'password' => getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
      'host' => getenv('OPENSHIFT_MYSQL_DB_HOST'),
      'port' => getenv('OPENSHIFT_MYSQL_DB_PORT'),
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

$update_free_access = FALSE;

$drupal_hash_salt = 'FQmH6OuKSnhlhd8q2W7gY2X9eU_QEhiJ9-2NF77bitQ';
$config_directory_name = 'config_8yXsjFLcACaZtVboEChcNDq39e9pZDEXk5gPQEOPl3o';
$config_directories = array (
  'active' => 
  array (
    'path' => 'config/active_JauLmXMfozM6CnZIJXgMcoXLaFzu13npxY2SMB9aUMI',
  ),
  'staging' => 
  array (
    'path' => 'config/staging_4-iJR17szp5v6GvUEHWe6Y_OpJ66TQs2a8QWfxNMCz8',
  ),
);

// This fixes a problem with OpenShift where it serves pages in mixed HTTP[s]
// mode.
$base_url = 'https://' . getenv('OPENSHIFT_APP_NAME') . '-joeshindelar.rhcloud.com';  // NO trailing slash!

// Settings take direct from default.settings.php
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
