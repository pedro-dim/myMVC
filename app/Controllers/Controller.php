<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Database\Database;
use App\Traits\TwigTrait;
use Twig\Environment;
use App\Contracts\TwigInterface;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\SandboxExtension;





abstract class Controller
{

    use TwigTrait;


    public function __construct()
    {

        $this->view();
    }
}