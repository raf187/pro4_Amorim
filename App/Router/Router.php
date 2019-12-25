<?php namespace App\Router;


class Router{
    private $url;
    private $routes = [];

    public function __construct($url){
        $this->url = $url;
    }
    public function get($path, $action){
        $route = new Route($path, $action);
        $this->routes['GET'][] = $route;
        return $route;
    }
    public function post($path, $action){
        $route = new Route($path, $action);
        $this->routes['POST'][] = $route;
        return $route;
    }
    public function match(){
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            header("location:/forteroche/404");
        }
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->check($this->url)){
                return $route->callAction();
            } 
        }
        header("location:/forteroche/404");
    }
}
