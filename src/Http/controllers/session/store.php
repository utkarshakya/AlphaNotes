<?php

use Core\Authenticator;
use Http\Forms\Form;

$email = $_POST['email'];
$password = $_POST['password'];

Authenticator::flash("temp", [
    "email" => $email,
    "password" => $password
]);

$form = new Form;

if ($form->validate($email, $password)) {

    if ((new Authenticator)->authenticate($email, $password)) {

        redirect("/");
    }

    $form->setErrors("message", "No Record Found Or Password Is Incorrect, Try Again!");
}

Authenticator::flash("errors", $form->getErrors());

redirect("/session");
