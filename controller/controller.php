<?php
//require 'model/model.php';

class FrontController{

    public function index(){

        echo 'index';
    }

    public function author(){
        echo 'author';
    }

    public function chapter(){
        echo 'chapter';
    }

    public function contact(){
        echo 'contact';
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