<?php

//declare(strict_types=1);

namespace App\Controllers;


use PedroDim\Camus\Camus;


class HomeController extends Controller
{





    public function show()
    {

        echo (new Camus())::quote();

        require __DIR__ . "../../Views/home.php";
    }


    public function tview()
    {

        echo $this->twig->render('home.twig', []);
    }
}