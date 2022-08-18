<?php

class Tv {
    public $color;
    private $size;

    public function __construct($c, $s = '42"')
    {
        $this->color = $c;
        $this->size = $s;
    }

    // detructas pasileidzia kai uzsibaigia kodas arba kode yra die; isvalo viska(galima paleisti paskutiniu zingsniu perduodant data i json)
    public function __destruct()
    {
        echo'<h1>******NUMIRO********</h1>';

    }

    // paleidzia funkcija kai nera kintamojo
    public function __get($a)
    {
        return $this->$a;
        // echo'<h1>******'. $a. ' nera********</h1>';
        // if($a == 'size'){
        //     return $this->size;
        // }
    }

    public function __set($kam, $ka)
    {
        $this->$kam = $ka;
        // if($kam == 'size'){
        //     $this->size = $ka;
        // }
    }

    public function show()
    {
        echo'<h1>**************</h1>';
    }

    public function showColor()
    {
        echo'<h1>'. $this->size .'</h1>';
    }
}