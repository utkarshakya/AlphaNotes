<?php 

function dd($value = null){
    echo '<pre>';
    $value === null ?  : var_dump($value);
    echo '</pre>';
    die();
};

function isURL(string $value){
   return($value == parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ? true : false);
};

function authorize($condition, $statusCode = Response::FORBIDDEN){
    if(! $condition){
        abort($statusCode);
    }
}

function basePath($path){

   return BASE_PATH . $path;
    
}

function view($path, $attributes = []){
    
    extract($attributes); // This will extract the values of a array.
    
    require basePath("views/{$path}");
}