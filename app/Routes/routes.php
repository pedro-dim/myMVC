<?php

namespace App\Routes;

use App\Routes\Route;


if ($_SERVER['REQUEST_URI'] == '/') {


    Route::GET('/', 'HomeController', 'tview');
    Route::dispatch('/', 'GET');
}


if ($_SERVER['REQUEST_URI'] == '/about') {


    Route::GET('/about', 'AboutController', 'show');
    Route::dispatch('/about', 'GET');
}




if ($_SERVER['REQUEST_URI'] == '/services') {


    require __DIR__ . '../../Views/services.php';
}
