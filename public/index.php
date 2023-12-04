<?php

declare(strict_types=1);


use  App\Utils\Utils;

require_once __DIR__ . '/../vendor/autoload.php';


use Pecee\SimpleRouter\SimpleRouter;

require '../config/env.php';
require '../app/Core/functions.php';
require '../config/database.php';
require '../config/config.php';


//extract($config);

$appName = $config['app']['APP_NAME'];
require '../app/Views/layouts/main.php';

require_once '../app/Router/helpers.php';
require_once '../app/Router/routes.php';


SimpleRouter::setDefaultNamespace('App\Routers');

// Start the routing
SimpleRouter::start();
