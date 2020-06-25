<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', 'spwdb'),
        'host'           => env('DB_HOST', '192.168.1.219'),
        'port'           => env('DB_PORT', '1535'),
        'database'       => env('DB_DATABASE', 'v_rack_capacity'),
        'username'       => env('DB_USERNAME', 'woolodbc'),
        'password'       => env('DB_PASSWORD', 'ferney77'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'edition'        => env('DB_EDITION', 'ora$base'),
        'server_version' => env('DB_SERVER_VERSION', '11g'),
    ],
];
