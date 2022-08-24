<?php

class Kibiras2 {

    protected $akmenuKiekis;

    static private $akmenuKiekisVisuoseKibiruose;

    
    static public function kiekYraAkmenu()
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
 
    public function __construct()
    {
        $this->akmenuKiekis = 0;
    }
 
    public function prideti1Akmeni() : void
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }
 
    public function pridetiDaugAkmenu(int $kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }
 
    public function kiekPririnktaAkmenu() : int
    {
        return $this->akmenuKiekis;
    }

    static public function kiekBendraiYraAkmenu() : int
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

}

