<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\Form;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new Form;

if ($form->validateLogin($email, $password)) {

    if (Authenticator::authenticateLogin($email, $password)) {

        redirect("/");
    }

    $form->setErrors("message", "No Record Found Or Password Is Incorrect, Try Again!");
}

Session::flash("errors", $form->getErrors());
Session::flash("temp", [
    "email" => $email,
    "password" => $password
]);

redirect("/session");
