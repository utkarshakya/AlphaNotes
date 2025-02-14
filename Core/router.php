<?php

namespace Core;

use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{

    protected $routes = [];

    public function addRoutes($url, $controller, $method)
    {
        $this->routes[] = [
            "url" => $url,
            "controller" => $controller,
            "method" => $method,
            "middleware" => null
        ];

        return $this;
    }

    public function get($url, $controller)
    {
        return $this->addRoutes($url, $controller, "GET");
    }
    public function post($url, $controller)
    {
        return $this->addRoutes($url, $controller, "POST");
    }
    public function delete($url, $controller)
    {
        return $this->addRoutes($url, $controller, "DELETE");
    }
    public function patch($url, $controller)
    {
        return $this->addRoutes($url, $controller, "PATCH");
    }
    public function put($url, $controller)
    {
        return $this->addRoutes($url, $controller, "PUT");
    }

    public function only($value)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $value;
        return $this;
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $record) {

            if (($record["url"] === $url) && ($record["method"] === strtoupper($method))) {

                Middleware::resolve($record['middleware']);
                return (require basePath($record["controller"]));
                
            }
        }
        abort();
    }
}
