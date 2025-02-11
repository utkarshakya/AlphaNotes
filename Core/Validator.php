<?php

namespace Core;

class Validator {

    public static function validNote(string $value, $min = 1, $max = INF){

        $value = trim($value);

        return ((strlen($value) >= $min) && (strlen($value) <= $max));
    }
}
