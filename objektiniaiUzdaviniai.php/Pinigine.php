<?php

class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

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
}