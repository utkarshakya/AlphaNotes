<?php

namespace Core;

class Validator {

    public static function string(string $value, $min = 1, $max = INF){

        $value = trim($value);
        return ((strlen($value) >= $min) && (strlen($value) <= $max));

    }

    public static function email(string $value){

        $value = trim($value);
        return filter_var($value, FILTER_VALIDATE_EMAIL);
        
    }

    public static function password(string $value){

        if(static::string($value, 8, 255)){

            $hasNumber = false;
            $hasUppercase = false;
            $hasLowercase = false;
            $hasSymbol = false;

            for ($i=0; $i < strlen($value); $i++) { 

                if (strchr("0123456789", $value[$i])) $hasNumber = true;
                if (strchr("abcdefghijklmnopqrstuvwxyz", $value[$i])) $hasLowercase = true;
                if (strchr("ABCDEFGHIJKLMNOPQRSTUVWXYZ", $value[$i])) $hasUppercase = true;
                if (strchr("!@#$%^&*()_+=-][}{`~;:'\"?.,/|\\", $value[$i])) $hasSymbol = true;
                if($hasSymbol && $hasNumber && $hasLowercase && $hasUppercase) return true;
            }
        }

        return false;

    }
}
