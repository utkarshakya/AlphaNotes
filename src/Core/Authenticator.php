<?php

namespace Core;

class Authenticator
{

    public static function authenticate(string $email, string $password)
    {

        $result = App::resolve(Database::class)->query("SELECT * FROM `users` WHERE `email` = :email", [
            ":email" => $email
        ])->find();

        if ($result) {
            if (password_verify($password, $result['password'])) {
                static::login([
                    "id" => $result['id'],
                    "name" => $result['name'],
                    "email" => $result['email']
                ]);
                return true;
            }
            return false;
        }
        return false;
    }

    public static function login(array $userData)
    {
        $_SESSION['loggedIn'] = true;
        $_SESSION['user'] = $userData;

        session_regenerate_id(true);
    }

    public static function logout()
    {
        $_SESSION = [];
        session_destroy();

        $params = session_get_cookie_params();
        setcookie("PHPSESSID", "", time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }

}
