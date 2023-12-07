<?php

namespace App\Traits;

use App\Database\Database;
use Twig\Environment;
use App\Contracts\TwigInterface;
use Twig\Loader\FilesystemLoader;


trait TwigTrait
{

    public $loader;
    public $twig;


    public function view($pathView,)
    {


        $this->loader = (new FilesystemLoader(__DIR__ . $pathView));
        $this->twig = new Environment($this->loader, []);
    }
}