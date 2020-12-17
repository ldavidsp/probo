<?php

$lando_info = json_decode(getenv('LANDO_INFO'), TRUE);
$settings['trusted_host_patterns'] = ['.*'];
$settings['hash_salt'] = md5(getenv('LANDO_HOST_IP'));
$databases['default']['default'] = [
  'driver' => 'mysql',
  'database' => $lando_info['database']['creds']['database'],
  'username' => $lando_info['database']['creds']['user'],
  'password' => $lando_info['database']['creds']['password'],
  'host' => $lando_info['database']['internal_connection']['host'],
  'port' => $lando_info['database']['internal_connection']['port'],
];

// This will prevent Drupal from setting read-only permissions on sites/default.
$settings['skip_permissions_hardening'] = TRUE;

$config['environment_indicator.indicator']['bg_color'] = '#ed3f7a';
$config['environment_indicator.indicator']['fg_color'] = '#fff';
$config['environment_indicator.indicator']['name'] = 'Lando';

$config['config_split.config_split.development']['status'] = TRUE;
