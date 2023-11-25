<?php


namespace App\Utils;

class Utils
{


    public static function dd($value)
    {
        echo "<pre style='background-color:#222; font-size:16px; color:#fff'>";
        var_dump($value);
        echo "</pre>";
        die();
    }
}
