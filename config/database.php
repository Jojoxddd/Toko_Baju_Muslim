<?php

use Illuminate\Support\Str;

return [

    'default' => env('DB_CONNECTION', 'pgsql_users'),

    'connections' => [

    'pgsql' => [
    'driver' => 'pgsql',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '5432'),
    'database' => env('DB_DATABASE', 'praktikumdb'),
    'username' => env('DB_USERNAME', 'postgres'),
    'password' => env('DB_PASSWORD', 'user'),
    'charset' => 'utf8',
    'prefix' => '',
    'schema' => 'public',
    'sslmode' => 'prefer',
],

    'pgsql_admin' => [
        'driver' => 'pgsql',
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '5432'),
        'database' => 'ADMIN',
        'username' => env('DB_USERNAME', 'postgres'),
        'password' => env('DB_PASSWORD', 'postgres'),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ],

    'pgsql_product' => [
        'driver' => 'pgsql',
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => '5432',
        'database' => 'PRODUCT',
        'username' => env('DB_USERNAME', 'postgres'),
        'password' => env('DB_PASSWORD', 'postgres'),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ],
],

    'migrations' => 'migrations',

    'redis' => [
        // tidak perlu diubah jika tidak pakai Redis
    ],
];
