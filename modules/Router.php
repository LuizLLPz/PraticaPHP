<?php

//Implementação da classe para roteamento
class Router {
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    //Método para adicionar rotas "GET"
    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }
    //Novo método para adicionar rotas "POST"
    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    //Método para executar as rotas
    public function direct($uri, $method) {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        } else {
            throw new Exception("No route defined for this URI.");
        }
    }


    public function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }
}