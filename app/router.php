<?php

namespace App;

use Closure;
use Exception;

interface RouterInterface {
    public function addRoute(string $method, string $url, Closure $target): void;
    public function matchRoute(string $method, string $url);
}

class Router implements RouterInterface {
    protected $routes = [];
    protected $allowedMethods = ["GET", "POST"];

    public function addRoute(string $method, string $url, Closure $target): void {
        $this->routes[$method][$url] = $target;
    }

    public function matchRoute(string $method, string $url) {
        if (!in_array($method, $this->allowedMethods)) {
            throw new Exception('Method not allowed');
        }

        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $routeUrl => $target) {
                $pattern = preg_replace('/\/:([^\/]+)/', '/(?P<$1>[^/]+)', $routeUrl);
                if (preg_match('#^' . $pattern . '$#', $url, $matches)) {
                    $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                    call_user_func_array($target, $params);
                    return;
                }
            }
        }
        throw new Exception('Route not found');
    }
}


