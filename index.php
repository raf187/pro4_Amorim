<?php

require  ('controller/router.php');


//var_dump($_SERVER);

$router = new Router($_SERVER['REQUEST_URI']);

$router->get('/', 'FrontController@index');
$router->get('/author', 'FrontController@author');
$router->get('/chapter', 'FrontController@chapter');
$router->get('/contact', 'FrontController@contact');
$router->match();