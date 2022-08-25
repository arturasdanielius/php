<?php

class Tenisininkas{
    private $vardas, $kamuoliukas;

    static private $zaidejas1, $zaidejas2;

    static public function zaidimoPradzia()
    {
        if(self::$zaidejas1 === null || self::$zaidejas2 === null ){
            echo '<h1>A kur Zaidejai? A?</h1>';
            return;
        }
        if(rand(0, 1)){
            self::$zaidejas1->kamuoliukas = false;
            self::$zaidejas2->kamuoliukas = true;
        }else{
            self::$zaidejas1->kamuoliukas = true;
            self::$zaidejas2->kamuoliukas = false;
        }
    }
    
    public function __construct($vardas)
    {
        $this->vardas = $vardas;
        if(self::$zaidejas1 === null){
            self::$zaidejas1 = $this;
        }
        else if(self::$zaidejas2 === null){
            self::$zaidejas2 = $this;
        };
    }

    public function arTuriKamuoliuka()
    {
       return $this->kamuoliukas;
    }

    public function perduotiKamuoliuka()
    {
        if($this->kamuoliukas){
            if(self::$zaidejas1->vardas == $this->vardas){

                self::$zaidejas1->kamuoliukas = false;
                self::$zaidejas2->kamuoliukas = true;
                echo '<h1>' . self::$zaidejas1->vardas . ' perdave ' . self::$zaidejas2->vardas . '</h1>';

            }else if(self::$zaidejas2->vardas == $this->vardas){

                self::$zaidejas2->kamuoliukas = false;
                self::$zaidejas1->kamuoliukas = true;
                echo '<h1>' . self::$zaidejas2->vardas . ' perdave ' . self::$zaidejas1->vardas . '</h1>';
            }else{
                echo '<h1>Ziurovas</h1>';
            } 
        }else{
            echo '<h1>Neturi Kamuoliuko. Vo.</h1>';
        }
        
    }
    
   
}