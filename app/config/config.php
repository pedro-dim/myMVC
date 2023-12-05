<?php


$config = [
    'app' => [
        "APP_NAME" => "My MVC",
        "APP_ROOT" => "App Root desc",
    ],
    'database' => [
        "DB_DRIVE" => "mysql",
        "DB_HOST" => "localhost",
        "DB_PORT" => "",
        "DB_NAME" => "myphp",
        "DB_USER" => "root",
        "DB_PASSWORD" => "",
    ],
    'cache' => [
        "CACHE_DRIVE" => "Redis",
        "CACHE_PORT" => "6379",
    ],
];

return extract($config);
