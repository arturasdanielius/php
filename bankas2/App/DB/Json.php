<?php

namespace App\DB;

class Json implements DataBase {

    private $data;

    private function __construct()
    {
        if(!file_exists(DIR . 'DB/data.json')) {
            file_put_contents(DIR . 'DB/data.json', json_encode([])); 
        }
        $this->data = json_decode(file_get_contents(DIR . 'DB/data.json'), 1); 
    }

    private function getId() : int
    {
        if(!file_exists(DIR . 'DB/data_id.json')) {
            file_put_contents(DIR . 'DB/data_id.json', json_encode(0)); 
        }
        $id = json_decode(file_get_contents(DIR . 'DB/data.json'));
        $id++;
        file_put_contents(DIR . 'DB/data_id.json', json_encode($id));
        return $id;
    }

    public function __destruct()
    {
        file_put_contents(DIR . 'DB/data.json', json_encode([$this->data])); 
    }
    //implementacija is DataBase.php public function:
    public function create(array $userData) : void
    {
        $userData['id'] = $this->getId();
        $this->data[] = $userData;
    }

    public function update(int $userId, array $userData) : void
    {
        foreach ($this->data as &$user){
           if ($user['id'] == $userId){ 
                $userData['id'] = $userId; //eilute nebutina - saugumo sumetimais
                $user = $userData;
                break;
           }  
        }
    }
}