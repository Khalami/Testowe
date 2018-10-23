<?php

class AppController
{
    private $request = null;

    public function __construct(){
        $this->request = strtolower($_SERVER['REQUEST_METHOD']);

    }
    
    public function inPost(){
        return $this->request === 'post';
    }

    public function isGet(){
        return $this->request === 'get';
    }

    public function render(string $filename = null){
        $path = $filename ? dirname(__DIR__).'\views\\'.getclass($this).'\\'.$filename.'.php' : '';
    }
}

?>