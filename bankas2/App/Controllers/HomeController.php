<?php

namespace App\Controllers;

use App\App;

class HomeController {

    public function home()
    {   
       $title = 'LTU Bankas';
       return App::view('home', ['title' => $title]); 
    }

    

}