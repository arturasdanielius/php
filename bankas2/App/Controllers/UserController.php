<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController {

    public function create()
    {
        return App::view('user_create', [
            'title' => 'New User',
        ]); 
    }

    public function store()
    {
        Jason::connect()->create([
            'vardas' => $_POST['vardas'],
            'pavarde' => $_POST['pavarde'],
            'ak' => $_POST['ak'],
            'iban' => $_POST['iban'],
            'likutis' => $_POST['likutis']
        ]);
    }

}