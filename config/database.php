<?php

require '../app/orm/rb.php';
require 'config.php';

extract($config);



// R::setup( 'mysql:host=localhost;dbname=mydatabase',
// 'user', 'password' );

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



//echo R::findONe('users', 'id=6');