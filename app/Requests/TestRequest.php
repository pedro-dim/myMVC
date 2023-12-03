<?php


namespace App\Requests;

use GuzzleHttp\Client;


class TestRequest
{


    static public function getApi()
    {

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://www.boredapi.com/api/',
            // You can set any number of default request options.
            'timeout'  => 10.0,
        ]);


        return $response = $client->request('GET', 'activity/');
    }
}
