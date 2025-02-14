<?php

use Core\App;
use Core\Database;
use Core\Validator;

$errors = [];

if(!Validator::string($_POST['name'])){
    $errors["name"] = "Name Can Not Be Empty";
    return view("auth/register.view.php", [
        "errors" => $errors
    ]);
}

if (!Validator::email($_POST['email'])) {
    $errors["email"] = "The Email Is Invalid";
    return view("auth/register.view.php", [
        "errors" => $errors
    ]);
}

if(!Validator::password($_POST['password'])){
    $errors['password'] = "Invalid Password, It must at least 8 characters long and contains number, symbol, uppercase and lowercase letters";
    return view("auth/register.view.php", [
        "errors" => $errors
    ]);
}

$db = App::resolve(Database::class);

$result = $db->query("SELECT `email` FROM `users` WHERE `email` = :email", [
    ":email" => $_POST['email']
])->find();

if($result){
    $errors["email"] = "Email Already Exist, Try Log In";
    return view("auth/register.view.php", [
        "errors" => $errors
    ]);
}

$db->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES(:name, :email, :password)", [
    ":name" => $_POST['name'],
    ":email" => $_POST['email'],
    ":password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
]);

$_SESSION['loggedIn'] = true;
$_SESSION['username'] = $_POST['name'];

header("Location: /");
die();