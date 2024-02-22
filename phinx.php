<?php

return
[
  'paths' => [
    'migrations' => './app/config/database/migrations',
    'seeds' => './app/config/database/seeds'
  ],
  'environments' => [
    'default_migration_table' => 'showroam',
    'default_environment' => 'development',
    'development' => [
      'adapter' => 'mysql',
      'host' => 'localhost',
      'name' => 'showroam_db',
      'user' => 'root',
      'pass' => '',
      'port' => '3306',
      'charset' => 'utf8',
    ],
  ],
  'version_order' => 'creation'
];
