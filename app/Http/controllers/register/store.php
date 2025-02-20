<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\Form;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$form = new Form;

if ($form->validateSignup($email, $password, $name)) {

    if (Authenticator::authenticateRegistration($email, $password, $name)) {

        redirect("/");
    }

    $form->setErrors("message", "Account With This Email Already Exist, Try Log In");
}

Session::flash("errors", $form->getErrors());
Session::flash("temp", [
    "email" => $email,
    "password" => $password,
    "name" => $name
]);

redirect("/register");
