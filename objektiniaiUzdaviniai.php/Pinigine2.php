<?php

class Pinigine2 {
    private $popieriniaiPinigai, $metaliniaiPinigai;


    public function ideti(int $kiekis)
    {
        if($kiekis > 2){
            $this->popieriniaiPinigai += $kiekis;
        }else{
            $this->metaliniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti()
    {
        return $this->popieriniaiPinigai + $this->metaliniaiPinigai;
    }

    public function banknotai() : int
    {
        return $this->popieriniaiPinigai;
    }

    public function monetos() : int
    {
        return $this->metaliniaiPinigai;
    }
}