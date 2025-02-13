<?php 

namespace Core;

class App{

    protected static $container;

    public static function setContainer($value){
        static::$container = $value;
    }

    public static function getContainer(){
        return static::$container;
    }

    public static function resolve($key){
        return static::$container->resolve($key);
    }
}   
