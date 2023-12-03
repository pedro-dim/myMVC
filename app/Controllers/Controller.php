<?php

declare(strict_types=1);


namespace App\Controllers;




abstract class Controller
{


    public $twig;

    public function __construct()
    {

        require '../config/twig-config.php';
        $this->twig = $twig;
    }
}
