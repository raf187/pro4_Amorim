<?php
require 'vendor/autoload.php';
session_start();

$router = new App\Router\Router($_GET['url']);
//FRONTEND
$router->get('/', 'FrontController@home');
$router->get('/auteur', 'FrontController@author');
$router->get('/chapitre', 'FrontController@indexChapter');
$router->get('/contact', 'FrontController@contact');
$router->get('/chapitre-numero/:id' , 'FrontController@displayChapter')->with('id', '[0-9]+');
$router->post('/chapitre-numero/:id_article' , 'FrontController@comments')->with('id_article', '[0-9]+');
$router->get('/signaler/:id' , 'FrontController@reportComment')->with('id', '[0-9]+');
//BACKEND
//gestion chapitres
$router->get('/chapitres-admin', 'BackController@displayChapter');
$router->post('/modifier-chapitre/:id', 'BackController@updateChapter')->with('id', '[0-9]+');
$router->get('/modifier-chapitre/:id', 'BackController@updateChapter')->with('id', '[0-9]+');
$router->get('/effacer-chapitre/:id', 'BackController@deleteChapter')->with('id', '[0-9]+');
//nouveau chapitres
$router->get('/nouveau-chapitre', 'BackController@createChapter');
$router->post('/nouveau-chapitre', 'BackController@createChapter');
//gestion commentaires
$router->get('/commentaires-admin', 'BackController@displayComments');
$router->get('/valider-com/:id', 'BackController@validateComment')->with('id', '[0-9]+');
$router->get('/supprimer-com/:id', 'BackController@deleteComments')->with('id', '[0-9]+');
//gestion des administrateurs
$router->get('/gestion-admin', 'BackController@createAdmin');
$router->post('/gestion-admin', 'BackController@createAdmin');
$router->get('/modifier-admin/:id' , 'BackController@updateAdmin')->with('id', '[0-9]+');
$router->post('/modifier-admin/:id' , 'BackController@updateAdmin')->with('id', '[0-9]+');
$router->get('/effacer-admin/:id' , 'BackController@deleteAdmin')->with('id', '[0-9]+');
//message
$router->get('/message-admin' , 'BackController@displayMessage');
$router->post('/contact' , 'BackController@postMessage');
$router->get('/effacer-message/:id' , 'BackController@deleteMessage')->with('id', '[0-9]+');
//connexion
$router->get('/connexion', 'BackController@login');
$router->post('/connexion', 'BackController@login');
$router->get('/deconnexion' , 'BackController@logout');
$router->get('/admin', 'BackController@indexAdmin');

$router->match();
