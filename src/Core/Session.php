<?php 

namespace Core;

class Session{

    public static function has(string $key){
        return (bool)Session::get($key);
    }

    public static function get(string $key, $default = null){
        return $_SESSION[$key] ?? $default;
    }

    public static function flash(string $key, array $value)
    {
        $_SESSION[$key] = [];
        $_SESSION[$key] = $value;
    }

    public static function flashOut(string $key = null)
    {
        if ($_SESSION[$key] ?? false) {
            $_SESSION[$key] = [];
        } else {
            $_SESSION = [];
        }
    }
}
?>