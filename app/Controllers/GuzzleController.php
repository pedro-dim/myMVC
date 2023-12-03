<?php

namespace App\Controllers;

use App\Requests\TestRequest;
use GuzzleHttp\Psr7\Response;

class GuzzleController extends Controller
{

    public function show()
    {
        return ($test = TestRequest::getApi());
    }
}
