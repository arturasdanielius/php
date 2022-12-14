<?php

namespace App\DB;

class Json implements DataBase {

    private $data;

    static private $obj;

    static public function connect()
    {
        return self::$obj ?? self::$obj = new self;
    }

    private function __construct()
    {
        if(!file_exists(DIR . 'App/DB/data.json')) {
            file_put_contents(DIR . 'App/DB/data.json', json_encode([])); 
        }
        $this->data = json_decode(file_get_contents(DIR . 'App/DB/data.json'), 1); 
    }

    private function getId() : int
    {
        if(!file_exists(DIR . 'App/DB/data_id.json')) {
            file_put_contents(DIR . 'App/DB/data_id.json', json_encode(0)); 
        }
        $id = json_decode(file_get_contents(DIR . 'App/DB/data_id.json'));
        $id++;
        file_put_contents(DIR . 'App/DB/data_id.json', json_encode($id));
        return $id;
    }

    public function newIban()
    {
        $ibanNumber = 'LT';
        for ($i = 0; $i < 18; $i++) {
            $number = rand(0, 9); //sukuriamas random iban numeris
            $ibanNumber .= $number; //sujungiamas LT ir random numeris is 18 
        }
        return $ibanNumber;
    }

    public function __destruct()
    {   
        file_put_contents(DIR . 'App/DB/data.json', json_encode($this->data)); 
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

    public function delete(int $userId) : void
    {
        foreach ($this->data as $index => $user){
            if ($user['id'] == $userId){ 
                unset($this->data[$index]);
                $this->data = array_values($this->data);
                break;
            }  
         }
    }

    public function show(int $userId) : array
    {
        foreach ($this->data as $user){
            if ($user['id'] == $userId){ 
             return $user;
            }
         }
    }

    public function showAll() : array
    {
        return $this->data;
    }
    


}