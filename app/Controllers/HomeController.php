<?php

//declare(strict_types=1);

namespace App\Controllers;





use PedroDim\Camus\Camus;

class HomeController extends Controller
{


    public function __construct()
    {
    }



    public function show()
    {

        echo (new Camus())::quote();

        require __DIR__ . "../../Views/home.php";
    }


    public function tview()
    {


        require '../config/twig-config.php';



        $dados = 'joaqum';
        //  var_dump($twig);

        echo $twig->render('template.twig', ['variavel' => $dados]);
    }
}
