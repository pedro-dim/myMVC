<?php

require '../app/orm/rb.php';


try {

    R::setup(
        'mysql:host=localhost;dbname=myphp',
        'root',
        ''
    );
} catch (\Exception  $e) {
    $e->getMessage();
}
