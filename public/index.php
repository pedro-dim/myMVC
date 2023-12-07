<?php

declare(strict_types=1);


require_once __DIR__ . '../../vendor/autoload.php';

use  App\Utils\Utils;
use App\Database\Database;
use App\Middlewares\AuthMiddleware;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\Admin\DashboardController;



require  '../app/config/env.php';
require '../app/Core/functions.php';
require '../app/config/config.php';
//require '../app/config/database.php';


require_once '../app/Router/helpers.php';
require_once '../app/Router/routes.php';


(new Database())->connect($database);



SimpleRouter::setDefaultNamespace('App\Routers');

// Start the routing   
SimpleRouter::start();