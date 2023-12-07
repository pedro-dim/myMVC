<?php

namespace App\Routes;

use Pecee\Http\Request;
use Pecee\Http\Middleware;
use App\Controllers\HomeController;
use App\Middlewares\Auth;
use App\Controllers\AboutController;
use App\Controllers\LoginController;
use App\Controllers\GuzzleController;
use App\Controllers\Admin\DashboardController;
use Pecee\SimpleRouter\SimpleRouter as Router;

// SimpleRouter::get('/', function () {
//     return 'Hello world';
// });


// SimpleRouter::get('/about', function () {
//     return 'About';
// });


Router::get('/', [HomeController::class, 'show']);
Router::get('/about', [AboutController::class, 'show']);
Router::get('/request', [GuzzleController::class, 'show']);
Router::get('/services', function () {

    return "Services Page";
});


Router::get('/login-form', [LoginController::class, 'show']);

Router::post('/login', [LoginController::class, 'login'])->addMiddleware(Auth::class);


// Router::post('/login-action', function () {
//     dd(input()->all());

//    Login Page";
// });




Router::get('/register', function () {

    return "Register Page";
});



Router::group(
    ['middleware' => AuthMiddleware::class],
    function () {

        Router::get('/admin', [DashboardController::class, 'show']);
    }
);

//Admin Routes