<?php

declare(strict_types=1);

namespace App\Utils;

class Utils
{




    public function test()
    {


        $partial =  parse_url('www.google.com/views/notes?page=02#trinity');
        dd($partial['fragment']);
    }
}
