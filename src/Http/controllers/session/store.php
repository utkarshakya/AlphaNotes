<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\Form;

$email = $_POST['email'];
$password = $_POST['password'];

Session::flash("temp", [
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

Session::flash("errors", $form->getErrors());

redirect("/session");
