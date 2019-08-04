<?php return [
  'debug' => false,
  'database' => [
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => 3306,
    'database' => 'flarum',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,
  ],
  'url' => 'http://127.0.0.1:8000',
  'paths' => [
    'api' => 'api',
    'admin' => 'admin',
  ],
];
