<?php 

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
};

function isURL(string $value){
   return($value == parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ? true : false);
};