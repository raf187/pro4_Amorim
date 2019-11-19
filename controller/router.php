<?php
require ('controller.php');

class Router{
    private $routes = [];
    private $url;

    public function __construct(string $url){

        $this->url = $url;

    }

    public function get(string $path, string $action){

        $this->routes['GET'][$path] = $action;
    }

    public function match(){

        foreach ($this->routes as $key => $routes) {
            foreach ($routes as $path => $action) {
                if ($this->url === $path) {
                    //probleme
                    $elements = explode('@', $action);
                    $this->callController($elements);
 
                }
            }
            header('HTTP/1.0 404 Not Found');
        }
    }
    private function callController(array $elements){
        $className = 'controller.php'. $elements[0];
        $method = $elements[1];
        $controller = new $className();
        $controller->$method();
    }
}