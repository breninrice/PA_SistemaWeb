<?php

require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");
        
    }
);

$app->get(
    '/time',
    function () {
        
        require_once("view/time.php");
        
    }
);

$app->get(
    '/servico',
    function () {
        
        require_once("view/servicos.php");
        
    }
);

$app->get(
    '/preco',
    function () {
        
        require_once("view/preco.php");
        
    }
);

$app->get(
    '/contato',
    function () {
        
        require_once("view/servicos.php");
        
    }
);


$app->run();


