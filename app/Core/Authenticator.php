<?php

namespace Core;

class Authenticator
{

    public static function authenticateLogin(string $email, string $password)
    {

        $result = App::resolve(Database::class)->query("SELECT * FROM `users` WHERE `email` = :email", [
            ":email" => $email
        ])->find();

        if ($result && password_verify($password, $result['password'])) {

            static::login([
                "id" => $result['id'],
                "name" => $result['name'],
                "email" => $result['email']
            ]);

            return true;
        }

        return false;
    }

    public static function authenticateRegistration(string $email, string $password, string $name)
    {

        $result = App::resolve(Database::class)->query("SELECT * FROM `users` WHERE `email` = :email", [
            ":email" => $email
        ])->find();

        if (!$result) {

            App::resolve(Database::class)->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES(:name, :email, :password)", [
                ":name" => $name,
                ":email" => $email,
                ":password" => password_hash($password, PASSWORD_DEFAULT)
            ]);

            $result = App::resolve(Database::class)->query("SELECT * FROM `users` WHERE `email` = :email", [
                ":email" => $email
            ])->find();

            static::login([
                "id" => $result['id'],
                "name" => $result['name'],
                "email" => $result['email']
            ]);

            return true;
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
