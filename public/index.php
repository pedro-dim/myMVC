<?php

require_once __DIR__ . '/../vendor/autoload.php';

require '../config/env.php';
require '../app/Core/functions.php';
require '../config/database.php';
require '../config/config.php';


//echo  $_ENV['DB_HOST'];


extract($config);

$appName = $config['app']['APP_NAME'];




require '../app/Views/layouts/main.php';
