<?php

namespace App\Routes;

use App\Controllers\HomeController;
use App\Controllers\AboutController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\GuzzleController;



// SimpleRouter::get('/', function () {
//     return 'Hello world';
// });


// SimpleRouter::get('/about', function () {
//     return 'About';
// });


SimpleRouter::get('/', [HomeController::class, 'show']);
SimpleRouter::get('/about', [AboutController::class, 'show']);
SimpleRouter::get('/request', [GuzzleController::class, 'show']);
SimpleRouter::get('/services', function () {

    return "Services Page";
});
