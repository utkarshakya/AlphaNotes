<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors["email"] = "Invalid Email";
    return view("session/create.view.php", [
        "errors" => $errors
    ]);
}

if (!Validator::password($password)) {
    $errors['password'] = "Invalid Password";
    return view("session/create.view.php", [
        "errors" => $errors
    ]);
}

$db = App::resolve(Database::class);

$result = $db->query("SELECT * FROM `users` WHERE `email` = :email", [
    ":email" => $email
])->find();

if ($result) {
    if (password_verify($password, $result['password'])) {
        login([
            "id" => $result['id'],
            "name" => $result['name'],
            "email" => $result['email']
        ]);

        header("location: /");
        die();
    }
}

$errors["message"] = "No Record Found Or Password Is Incorrect, Try Again!";
return view("session/create.view.php", [
    "errors" => $errors
]);
