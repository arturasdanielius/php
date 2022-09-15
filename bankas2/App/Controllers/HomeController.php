<?php

namespace App\Controllers;

use App\App;

class HomeController {

    public function home()
    {   
       $title = 'LTU Bankas';
       $welcome = 'Sveiki atvykę į LTU Banką';

       return App::view('home', ['title' => $title, 'welcome' => $welcome]); 
    }

    

}