<?php

namespace Core;

class Session
{

    public static function has(string $key)
    {
        return (bool)Session::get($key);
    }

    public static function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public static function flash(string $key, array $value)
    {
        $_SESSION[$key] = [];
        $_SESSION[$key] = $value;
    }

    public static function flashOutKey(string $key)
    {
        if ($_SESSION[$key] ?? false) {
            $_SESSION[$key] = [];
            return true;
        }
        return false;
    }

    public static function flashOutAll(){
        $_SESSION = [];
    }
}
