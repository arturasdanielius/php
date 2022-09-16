<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class HomeController {

    public function home()
    {   
       $title = 'LTU Bankas';
       $welcome = 'Sveiki atvykę į LTU Banką';

       new Json;

       return App::view('home', ['title' => $title, 'welcome' => $welcome]); 
    }

    

}