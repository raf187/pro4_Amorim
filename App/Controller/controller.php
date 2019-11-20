<?php

namespace App\Controller;
//require 'model/model.php';

class FrontController{

    public function index(){
        //require '../view/frontend/index.php';
        echo 'index';
    }

    public function author(){
        //require '../view/frontend/author.php';
        echo 'au';
    }

    public function chapter(){
        echo 'ch';
       // $req = getChapter();
        //require '../view/frontend/chapter.php';
    }

    public function contact(){
        echo 'c';
        //require '../view/frontend/contact.php';
    }

}








/*
$routes = [];

function home(){

    require '/view/frontend/index.php';
}

function author(){

    require './view/frontend/author.php';
}

function chapter(){

    $req = getChapter();
    require './view/frontend/chapter.php';
}

function contact(){

    require './view/frontend/contact.php';
}

function route($action, $callback){
    global $routes;
    
    $action = trim($action, '/');

    $routes[$action] = $callback;


}

function dispatch($action){

    global $routes;
    
    $action = trim($action, '/');

    $callback = $routes[$action];

    return call_user_func($callback);

}*/