<?php

use Core\Router;
use Core\Session;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";

session_start();

spl_autoload_register(function ($class){
    
    $class = str_replace("\\", "/", $class);
    require basePath("{$class}.php");

});

require basePath("bootstrap.php");

$router = new Router;

require basePath("routes.php");

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($url, $method);

Session::flashOutKey("errors");
