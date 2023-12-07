<?php


namespace App\Middlewares;

use App\Models\User;


use \R as R;

class Auth
{

    public function __construct()
    {
        $this->login();
    }

    public function login()
    {
        // dd(input('username'));

        $user = User::getOne('users');

        //   dd($user);
        if ($user->username == input('username')) {
            dd(input()->all());
        } else {

            header('location: /');
            exit;
        }
    }
}
