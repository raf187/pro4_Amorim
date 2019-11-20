<?php


require 'vendor/autoload.php';

$router = new App\Router\Router($_SERVER['REQUEST_URI']);
//var_dump($router);
$router->get('/pro4/', 'FrontController@index');
$router->get('/pro4/author', 'FrontController@author');
$router->get('/pro4/chapter', 'FrontController@chapter');
$router->get('/pro4/contact', 'FrontController@contact');
$router->match();