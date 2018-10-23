<?php

require_once('controllers/DefaultController.php');

class Routing
{
    public $routes =[];

    public function __constructor()
    {
        $this->routes = [
            'index' => [
                'action' => 'index',
                'controllet' => 'DefaultController'
            ],
            'login' => [
                'action' => 'login',
                'controllet' => 'DefaultController'
            ]
        ];
    }

    public function run(){
        //localhost:8000?page=login
        $page = iset($_GET['page']) 
            && isset($this->routes[$_GET['page']]) ? $_GET['page'] : 'index';
    

        if($this->routes[$page]){
           $controller = $this->routes[$page]['controller'];
           $action = $this->routes[$page]['action'];

           $object = new $controller;
            $object->$action();
     }
    }

}

?>