<?php

//require 'vendor/autoload.php';
require ('Controller/router.php');


$router = new Router($_SERVER['REQUEST_URI']);
//ar_dump($router);
$router->get('/pro4/', 'FrontController@index');
$router->get('/pro4/author', 'FrontController@author');
$router->get('/pro4/chapter', 'FrontController@chapter');
$router->get('/pro4/contact', 'FrontController@contact');
$router->match();