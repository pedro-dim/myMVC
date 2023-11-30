<?php

//declare(strict_types=1);

namespace App\Controllers;


use PedroDim\Camus\Camus;

class HomeController extends Controller
{



    public function __construct()
    {
        echo (new Camus())::quote();
    }



    public function show()
    {



        require __DIR__ . "../../Views/home.php";
    }
}
