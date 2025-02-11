<?php

$routes = require basePath("routes.php");

// Here we are extracting the actual path from the url.
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

function loadAController(string $url, array $routes)
{
    array_key_exists($url, $routes) ? require basePath($routes[$url]) : abort();
}

loadAController($url, $routes);
