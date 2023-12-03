<?php

//declare(strict_types=1);

namespace App\Controllers;





use PedroDim\Camus\Camus;

class HomeController extends Controller
{


    public function __construct()
    {
        parent::__construct();
    }



    public function show()
    {

        echo (new Camus())::quote();

        require __DIR__ . "../../Views/home.php";
    }


    public function tview()
    {


        // require '../config/twig-config.php';



        echo $this->twig->render('home.twig', []);
    }
}