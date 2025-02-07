<?php 

require("routes.php");

// Here we are extracting the actual path from the url.
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

function loadController(string $url, array $routes){
    array_key_exists($url, $routes) ? require($routes[$url]) : responseError();
}

function responseError($error = 404){
    require("controllers/$error.php");
}

loadController($url, $routes);