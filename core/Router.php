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

    public function direct(string $uri, string $requestMethod = 'GET'): string
    {
        if (array_key_exists($uri, $this->routes[$requestMethod])) {
            return $this->routes[$requestMethod][$uri];
        }

        throw new Exception('Route Not Exists');
    }
}