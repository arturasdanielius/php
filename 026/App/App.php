<?php

namespace App;

use App\Controllers\HomeController as H;
use App\Controllers\AnimalController as A;
use App\Controllers\LoginController as L;
use App\Controllers\ApiController as Api;
use App\Controllers\ReactController as R;
use App\Middlewares\Auth;

class App {


    static public function start()
    {
        session_start();
        self::router();
    }



    static public function router()
    {
                
        $url = $_SERVER['REQUEST_URI'];
       
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];

        if (!Auth::authorize($url)) {
            return self::redirect('login');
        }


        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {

            return((new H)->home());
            
        }

        
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'create') {
            return((new A)->create());
        }
        if ($method == 'POST' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'store') {
            return((new A)->store());
        }
        if ($method == 'GET' && count($url) == 1 && $url[0] == 'animals') {
            return((new A)->list());
        }
        if ($method == 'GET' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'edit') {
            return((new A)->edit((int) $url[2]));
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'update') {
            return((new A)->update((int) $url[2]));
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'delete') {
            return((new A)->delete((int) $url[2]));
        }

        if ($method == 'GET' && count($url) == 1 && $url[0] == 'login') {
            if (Auth::isLoged()) {
                return self::redirect('');
            }
            return((new L)->login());
        }

        if ($method == 'POST' && count($url) == 1 && $url[0] == 'login') {
            return((new L)->doLogin());
        }

        if ($method == 'POST' && count($url) == 1 && $url[0] == 'logout') {
            return((new L)->logout());
        }

        if ($method == 'GET' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go') {
            return (new Api)->show();
        }

        if ($method == 'POST' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go') {
            return (new Api)->doApi();
        }

        // REACT

        if ($method == 'GET' && count($url) == 2 && $url[0] == 'react' && $url[1] == 'list') {
            return (new R)->list();
        }
        if ($method == 'POST' && count($url) == 2 && $url[0] == 'react' && $url[1] == 'list') {
            return (new R)->store();
        }

    }

    static public function view($name, $data = [])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }

    static public function json(array $data)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    static public function redirect($where)
    {
        header('Location: ' . URL . $where);
    }

}