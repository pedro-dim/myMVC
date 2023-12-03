<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../app/Views/twig/');
$twig = new Environment($loader, [
    //  'cache' => '../app/Cache/twig',
]);

return $twig;
