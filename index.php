<?php
require 'vendor/autoload.php';
//session_start();

$router = new App\Router\Router($_GET['url']);

$router->get('/', 'FrontController@index');
$router->get('/auteur', 'FrontController@author');
$router->get('/chapitre', 'FrontController@chapter');
$router->get('/contact', 'FrontController@contact');
$router->get( '/chapitre-numero/:id' , 'FrontController@chapterRead')->with('id', '[0-9]+');

$router->get('/login', 'BackController@log');
$router->post('/login', 'BackController@log');
//$router->post( '/pro4/chapter/:id' , 'FrontController@chapterRead');

$router->match();
