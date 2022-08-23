<?php

class Grybas {
    private $valgomas, $sukirmijes, $svoris;

    public function __construct()
    {
        $this->valgomas = !!rand(0, 1);
        $this->sukirmijes = !!rand(0, 1);
        $this->svoris = rand(5, 45);

    }


    //__get($ka) paduoda is uz matomumo ribos(private $valgomas, $sukirmijes ar $svoris reiksmes, svarbu indekse nurodyti kokia reiksme imti pvs: $grybas->valgomas($grybas - yra is klaseje krepsys). )
    public function __get($ka)
    {
        return $this->$ka;
    }

}