<?php

declare(strict_types=1);



use  App\Utils\Utils;

require_once __DIR__ . '/../vendor/autoload.php';

require '../config/env.php';
require '../app/Core/functions.php';
require '../config/database.php';
require '../config/config.php';



//echo  $_ENV['DB_HOST'];



extract($config);

$appName = $config['app']['APP_NAME'];

//echo (new Utils())->test('host');



require '../app/Views/layouts/main.php';
