<?php

class Router{
    protected $routes = array(
        'GET' => array(),
        'POST' => array()
    );

    public function load($file){
        //router = new Router();
        $route = new static();
        require_once $file . '.php';

        return $route;
    }

    public function direct($uri, $requestType){
        if(array_key_exists($uri, $this->routes[$requestType])){
            return $this->callMethod(
                ...explode('/', $this->routes[$requestType][$uri])
            );
        }
        return $this->callMethod('Error404', 'index');
    }

    public function callMethod($controller, $method){
        return (new $controller)->$method();
    }

    public function get($uri, $controller){
        if($uri === '') $uri = '';

        $uri = $this->base_folder($uri) != false ? $this->base_folder($uri) : $uri;

        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){
        if($uri === '') $uri = '';


        $uri = $this->base_folder($uri) != false ? $this->base_folder($uri) : $uri;
        $this->routes['POST'][$uri] = $controller;
    }

    private function base_folder($uri){
        global $config;
        if($config['root_folder'] !== ''){
            $uri = $config['root_folder'].ltrim($uri, '/');
            $uri = rtrim($uri, '/');
            return $uri;
        }else{
            return false;
        }
    }

}
?>