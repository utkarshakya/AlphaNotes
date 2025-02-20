<?php

namespace Http\Forms;

use Core\Validator;

class Form
{

    protected $errors = [];

    public function validateLogin($email, $password)
    {

        if (!Validator::email($email)) {
            $this->errors['email'] = "Invalid Email";
            return false;
        }

        if (!Validator::password($password)) {
            $this->errors['password'] = "Invalid Password";
            return false;
        }

        return true;
    }

    public function validateSignup($email, $password, $name)
    {


        if (!Validator::string($name)) {
            $this->errors['name'] = "This Field Can Not To Empty";
            return false;
        }


        if (!Validator::email($email)) {
            $this->errors['email'] = "Invalid Email";
            return false;
        }

        if (!Validator::password($password)) {
            $this->errors['password'] = "Use Strong Password, Contains Numbers, Symbols, and Both Case Letters";
            return false;
        }

        return true;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors(string $key, string $value)
    {
        $this->errors[$key] = $value;
    }
}
