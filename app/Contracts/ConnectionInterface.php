<?php


namespace App\Contracts;

interface  ConnectionInterface
{

    public function connect(array $database);
}
