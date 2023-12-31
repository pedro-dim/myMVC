<?php

//declare(strict_types=1);

namespace App\Controllers;


use App\Models\User;
use Carbon\Carbon;



class HomeController extends Controller
{


    public  $fakeData = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'age' => 25,
            'email' => 'john@example.com',
        ],
        [
            'id' => 2,
            'name' => 'Jane Doe',
            'age' => 30,
            'email' => 'jane@example.com',
        ],
        [
            'id' => 3,
            'name' => 'Bob Smith',
            'age' => 28,
            'email' => 'bob@example.com',
        ],
        // Add more data as needed
    ];



    public function show()
    {
        $user = new User();

        //  dd($user);


        // $user = R::findOne('users');
        //new User();

        return $this->twig->render('home.twig', ['fakeData' => $this->fakeData, 'user' => $user]);
    }
}