<?php

namespace Core\Middleware;

class Auth
{

    public static function handler()
    {
        if (!($_SESSION['loggedIn'] ?? false)) {
            header("Location: /register");
            die();
        }
    }
}
