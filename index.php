<?php

require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hola/:nombre', function ($nombre) {
    echo "Hola ".$nombre;
});

$app->run();