<?php

namespace Http\Forms;

use Core\Validator;

class Form
{

    protected $errors = [];

    public static function validate($email, $password, $fullName = null)
    {
        
        if (!Validator::email($email)) {
            $errors['email'] = "Invalid Email";
            return false;
        }

        if (!Validator::password($password)) {
            $errors['password'] = "Invalid Password";
            return false;
        }

        if($fullName){
            if (!Validator::string($fullName)) {
                $errors['full-name'] = "This Field Can Not To Empty";
                return false;
            }
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
