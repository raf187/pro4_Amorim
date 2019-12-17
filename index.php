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
$router->get('/admin', 'BackController@index');
$router->get('/chapitres-admin', 'BackController@chapterAdmin');
$router->get('/comentaires-admin', 'BackController@modComs');
$router->get('/ajouter-admin', 'BackController@addAdmin');
$router->get('/nouveau-chapitre', 'BackController@addChap');
$router->get('/modifier-chapitre/:id', 'BackController@modifyChapter')->with('id', '[0-9]+');
$router->get( '/modifier-admin/:id' , 'BackController@modAdmin')->with('id', '[0-9]+');

$router->post('/login', 'BackController@log');
$router->post('/nouveau-chapitre', 'BackController@chapterPost');
$router->post('/ajouter-admin', 'BackController@newAdmin');
$router->post( '/chapitre-numero/:id_article' , 'FrontController@comentPost')->with('id_article', '[0-9]+');
$router->post('/modifier-chapitre/:id', 'BackController@modifyChapter')->with('id', '[0-9]+');
$router->post('/chapitres-admin', 'BackController@chapterDelete');
$router->post( '/modifier-admin/:id' , 'BackController@modAdmin');

//$router->post( '/pro4/chapter/:id' , 'FrontController@chapterRead');

$router->match();
