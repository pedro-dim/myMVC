<?php

require_once __DIR__ . '/../vendor/autoload.php';

require '../app/Core/functions.php';

require '../config/database.php';

use App\Utils\Utils;


//dd(parse_url($_SERVER['REQUEST_URI']));



require '../config/config.php';



extract($config);


include '../app/Views/home/home.php';
