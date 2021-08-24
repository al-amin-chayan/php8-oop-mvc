<?php

class Router {

    protected array $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load(string $file): static
    {
        $router = new static;

        include $file;

        return $router;
    }

    public function get(string $uri, string $controller): void
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post(string $uri, string $controller): void
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct(string $uri, string $requestMethod = 'GET')
    {
        if (! array_key_exists($uri, $this->routes[$requestMethod])) {
            throw new Exception('Route Not Exists');
        }

        return $this->callAction(
            ...explode('@', $this->routes[$requestMethod][$uri])
        );
        
    }

    protected function callAction(string $controller, string $action)
    {
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not have any action {$action}"
            );
        }

        return $controller->$action();
    }
}