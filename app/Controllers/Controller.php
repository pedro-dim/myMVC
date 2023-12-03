<?php

declare(strict_types=1);

namespace App\Controllers;


use Twig\Environment;
use App\Contracts\TwigInterface;
use Twig\Loader\FilesystemLoader;

abstract class Controller implements TwigInterface
{
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->view();
    }



    public function view()
    {

        $this->loader = (new FilesystemLoader(__DIR__ . '../../Views/twig/'));
        $this->twig = new Environment($this->loader, []);
    }
}