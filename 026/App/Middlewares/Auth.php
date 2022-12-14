<?php

namespace App\Middlewares;

class Auth {

    static private $protect = ['animals'];

    static public function authorize(array $url) : bool
    {
        if (in_array($url[0], self::$protect)) {
            return (isset($_SESSION['login']) && $_SESSION['login'] == 1);
        }
        return true;
    }

    static public function isLoged() : bool
    {
        return (isset($_SESSION['login']) && $_SESSION['login'] == 1);
    }


}