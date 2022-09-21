<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class HomeController {

    public function home()
    {   
       $title = 'LTU Bankas';
       $welcome = 'Sveiki atvykę į LTU Banką';

       Json::connect();

       return App::view('home', ['title' => $title, 'welcome' => $welcome]); 
    }

    

}