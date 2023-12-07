<?php

//declare(strict_types=1);

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use \R as R;
use Pecee\Http\Request;

class LoginController extends Controller
{

    public function show()
    {

        $invoke = (new Helper)();

        die();


        $query = R::findOne('users');

        return $this->twig->render('login-form.twig', ['query' => $query]);
    }
}
