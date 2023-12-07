<?php

namespace App\Models;

use App\Contracts\ConnectionInterface;
use \R as R;

abstract class Model implements ConnectionInterface
{
    protected $table;
    protected $connection;



    public function __construct()
    {
    }


    public function connect($database)
    {

        try {

            R::setup(
                $database['DB_DRIVE'] .
                    ':host=' . $database['DB_HOST'] .
                    ';dbname=' . $database['DB_NAME'] . '',
                '' . $database['DB_USER'] . '',
                '' . $database['DB_PASSWORD'] . ''
            );
        } catch (\Exception  $e) {
            $e->getMessage();
        }
    }

    public static function getOne($table)
    {

        return  R::findOne($table, 'id = 1');
    }

    public static function all($table)
    {

        return  R::findAll($table);
    }
}
