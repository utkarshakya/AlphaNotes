<?php

$routes = require("routes.php");

// Here we are extracting the actual path from the url.
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

function loadAController(string $url, array $routes)
{
    array_key_exists($url, $routes) ? require($routes[$url]) : abort();
}

function abort($statusCode = 404)
{

    http_response_code($statusCode);

    require("controllers/$statusCode.php");

    die();
}

loadAController($url, $routes);
