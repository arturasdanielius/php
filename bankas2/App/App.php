<?php

namespace App;

use App\Controllers\HomeController as H;
use App\Controllers\UserController as U;

class App {

    static public function start()
    {
        self::router();
    }
    static public function router()   
    {      

        
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];

       

        if ($method == 'GET' && count($url) == 1 && $url[0] == ''){

            return((new H)->home());  

        }
        
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'users' && $url[1] == 'create'){

            return((new U)->create());  

        }

    }

    static public function view($name, $data = [])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }
   

}
