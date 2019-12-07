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
        // echo('<pre>');
        // print_r($route);
        // echo('</pre>');
    }

    // public function post($path, $action){

    //     $route = new Route($path, $action);
    //     $this->routes['POST'][] = $route;
        
    // }

    public function match(){
        // echo('<pre>');
        // print_r($this->routes);
        // echo('</pre>');
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new \Exception('la method existe pas');
        }
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->check($this->url)){
                return $route->callAction();
            } 
        }
        throw new \Exception('pas de chemin');
    }
}
