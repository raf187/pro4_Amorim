<?php
require 'vendor/autoload.php';

$router = new App\Router\Router($_GET['url']);

$router->get('/', 'FrontController@index');
$router->get('/author', 'FrontController@author');
$router->get('/chapter', 'FrontController@chapter');
$router->get('/contact', 'FrontController@contact');
$router->get( '/chapterRead/:id' , 'FrontController@chapterRead')->with('id', '[0-9]+');
//$router->post( '/pro4/chapter/:id' , 'FrontController@chapterRead');

$router->match();
