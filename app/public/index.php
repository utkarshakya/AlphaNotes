<?php

use Core\Router;
use Core\Session;

const BASE_PATH = __DIR__ . '/../../';

require BASE_PATH . "app/Core/functions.php";

session_start();

require basePath("vendor/autoload.php");

loadEnv();

require baseAppPath("bootstrap.php");

$router = new Router;

require baseAppPath("routes.php");

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($url, $method);

Session::flashOutKey("errors");
Session::flashOutKey("temp");
