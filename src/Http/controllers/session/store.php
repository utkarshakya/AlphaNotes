<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\Form;

if (Form::validate($email, $password)) {

    if (Authenticator::authenticate($email, $password)) {

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
