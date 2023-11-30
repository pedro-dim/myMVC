<?php

require_once  '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../app/Views/twig');
$twig = new \Twig\Environment($loader, [
    //  'cache' => '../app/Cache/twig',
]);

return $twig;
