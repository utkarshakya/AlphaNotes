<?php

use Core\App;
use Core\Database;
use Core\Validator;

$errors = [];

if (!Validator::email($_POST['email'])) {
    $errors["email"] = "Invalid Email";
    return view("session/create.view.php", [
        "errors" => $errors
    ]);
}

if (!Validator::password($_POST['password'])) {
    $errors['password'] = "Invalid Password";
    return view("session/create.view.php", [
        "errors" => $errors
    ]);
}

$db = App::resolve(Database::class);

$result = $db->query("SELECT * FROM `users` WHERE `email` = :email", [
    ":email" => $_POST['email']
])->find();

if ($result) {
    if (password_verify($_POST['password'], $result['password'])) {
        login([
            "name" => $result['name'],
            "email" => $result['email']
        ]);
        header("Location : /");
        die();
    }
}

$errors["message"] = "No Record Found Or Password Is Incorrect, Try Again!";
return view("session/create.view.php", [
    "errors" => $errors
]);
