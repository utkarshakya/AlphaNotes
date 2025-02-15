<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;

$errors = [];

if(!Validator::string($_POST['name'])){
    $errors["name"] = "Name Can Not Be Empty";
    return view("register/create.view.php", [
        "errors" => $errors
    ]);
}

if (!Validator::email($_POST['email'])) {
    $errors["email"] = "The Email Is Invalid";
    return view("register/create.view.php", [
        "errors" => $errors
    ]);
}

if(!Validator::password($_POST['password'])){
    $errors['password'] = "Invalid Password, It must at least 8 characters long and contain a number, symbol, and both case letters";
    return view("register/create.view.php", [
        "errors" => $errors
    ]);
}

$db = App::resolve(Database::class);

$result = $db->query("SELECT `email` FROM `users` WHERE `email` = :email", [
    ":email" => $_POST['email']
])->find();

if($result){
    $errors["email"] = "Email Already Exist, Try Log In";
    return view("register/create.view.php", [
        "errors" => $errors
    ]);
}

$db->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES(:name, :email, :password)", [
    ":name" => $_POST['name'],
    ":email" => $_POST['email'],
    ":password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
]);

Authenticator::login([
    "name" => $_POST['name'],
    "email" => $_POST['email']
]);

redirect("/");