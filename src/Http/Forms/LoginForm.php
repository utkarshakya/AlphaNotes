<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{

    protected $errors = [];

    public function validate($email, $password)
    {

        if (!Validator::email($email)) {
            $this->errors["email"] = "Invalid Email";
            return false;
        }

        if (!Validator::password($password)) {
            $this->errors['password'] = "Invalid Password";
            return false;
        }

        return true;

    }

    public function getErrors(){
        return $this->errors;
    }

    public function setErrors(string $key, string $value){
        $this->errors[$key] = $value;
    }
}
