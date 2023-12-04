<?php

//declare(strict_types=1);

namespace App\Controllers;

class AboutController extends Controller
{

    public function show()
    {


        echo $this->twig->render('about.twig', []);
    }
}
