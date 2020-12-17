<?php

$settings['trusted_host_patterns'] = ['*.<domain>'];
$databases['default']['default'] = [
  'driver' => 'mysql',
  'database' => 'database',
  'username' => 'database',
  'password' => 'database',
  'host' => 'localhost',
  'port' => 3306,
];

$settings['config_sync_directory'] = '../config/main';
