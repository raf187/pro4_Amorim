<?php  namespace App\Router;


class Route{

    private $path;
    private $action;
    private $matches = [];
    private $params = [];

    public function __construct($path, $action){
        $this->path = trim($path, '/');
        $this->action = $action;
    }
    public function with($param, $regex){
        $this->params[$param] = str_replace('(', '(?:', $regex);
        return $this;
    }
    public function check($url){
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $regex = "#^$path$#i";
        if(!preg_match($regex, $url, $matches)){
            return false;
        }

        array_shift($matches);
        $this->matches = $matches;
        return true;
    }
    public function callAction(){
        if(is_string($this->action)){
            $elements = explode('@', $this->action);
            $class =  $elements[0];
            $method = $elements[1];
            $controller = "App\\Controller\\" . $class;
            $controller = new $controller;
            return call_user_func_array([$controller, $method], $this->matches);
        } else{
            return call_user_func_array($this->action, $this->matches);
        }
    }
}
