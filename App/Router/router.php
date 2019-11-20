<?php

namespace App\Router;

class Router{
    public $routes = [];
    public $url;

    public function __construct($url){

        $this->url = $url;
        
    }

    public function get($path, $action){

        $this->routes['GET'][$path] = $action;
    }

    public function match(){

        foreach ($this->routes as $key => $routes) {
            foreach ($routes as $path => $action) {
                if ($this->url === $path) {
                    $elements = explode('@', $action);
                    $this->runController($elements);
                }
            }
            header('HTTP/1.0 404 Not Found');
        }
    }
    private function runController(array $elements){
        $theClass = 'App\\Controller\\' . $elements[0];
        var_dump($theClass);
        $method = $elements[1];
        $control = new $theClass;
        $control->$method();
    }
}