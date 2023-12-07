<?php

//declare(strict_types=1);

namespace App\Controllers;

use \R as R;

class AboutController extends Controller
{

    public function show()
    {

        $query = R::findOne('users');

        return $this->twig->render('about.twig', ['query' => $query]);
    }
}