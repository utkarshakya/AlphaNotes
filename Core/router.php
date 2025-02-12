<?php

namespace Core;

class Router
{

    protected $routes = [];

    public function addRoutes($url, $controller, $method)
    {
        $this->routes[] = [
            "url" => $url,
            "controller" => $controller,
            "method" => $method
        ];
    }

    public function get($url, $controller)
    {
        $this->addRoutes($url, $controller, "GET");
    }
    public function post($url, $controller)
    {
        $this->addRoutes($url, $controller, "POST");
    }
    public function delete($url, $controller)
    {
        $this->addRoutes($url, $controller, "DELETE");
    }
    public function patch($url, $controller)
    {
        $this->addRoutes($url, $controller, "PATCH");
    }
    public function put($url, $controller)
    {
        $this->addRoutes($url, $controller, "PUT");
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $record) {

            if (($record["url"] === $url) && ($record["method"] === strtoupper($method))) {
                return (require basePath($record["controller"]));
            }
        }
        abort();
    }

}
