<?php

namespace App\Database;


require_once __DIR__ . '/rb.php';

use \R as R;

class Database
{
    public  $instance;
    public $connection;

    public  $rb;
    public  $database;


    public function __construct()
    {
    }

    public function connect($database)
    {
        R::setup(
            $database['DB_DRIVE'] .
                ':host=' . $database['DB_HOST'] .
                ';dbname=' . $database['DB_NAME'] . '',
            '' . $database['DB_USER'] . '',
            '' . $database['DB_PASSWORD'] . ''
        );
    }
}