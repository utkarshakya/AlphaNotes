<?php

class Validator {

    public static function validNote(string $value, $min = 1, $max = INF){

        $value = trim($value);

        return ($value >= $min && $value <= $max);
    }
}
