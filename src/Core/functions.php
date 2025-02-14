<?php

use Core\Response;

function dd($value = "")
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
};

function isURL(string $value)
{
    return ($value == parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ? true : false);
};

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($statusCode);
    }
}

function basePath($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes); // This will extract the values of a array.
    require basePath("views/{$path}");
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require basePath("controllers/$statusCode.php");
    die();
}

function login(array $userData)
{
    $_SESSION['loggedIn'] = true;
    $_SESSION['user'] = $userData;
    session_regenerate_id(true);
    
}

function logout() {

    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie("PHPSESSID", "", time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
