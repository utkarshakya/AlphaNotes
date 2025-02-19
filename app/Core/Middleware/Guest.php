<?php

namespace Core\Middleware;

class Guest
{

    public static function handler()
    {
        if ($_SESSION['loggedIn'] ?? false) {
            header("Location: /");
            die();
        }
    }
}
