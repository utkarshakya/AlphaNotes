<?php 

namespace Core;

use Exception;

class Container{

    protected $container = [];

    public function bind($key, $function){
        $this->container[$key] = $function;
    }

    public function resolve($key){
        if(! array_key_exists($key, $this->container)){
            throw new Exception("Invalid Key");
        }

        return call_user_func($this->container[$key]);
    }
}