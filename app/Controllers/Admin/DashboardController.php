<?php


declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Database\Database;
use App\Traits\TwigTrait;
use Twig\Environment;
use App\Contracts\TwigInterface;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\SandboxExtension;

class DashboardController
{

    use TwigTrait;

    public function __construct()
    {
        $this->view('../../Views/twig/admin/');
    }

    public function show()
    {

        //  return "admin Page";
        // $query = R::findOne('users');

        return $this->twig->render('template.twig', []);
    }
}