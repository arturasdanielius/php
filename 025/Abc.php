<?php

class Abc extends C{
    use A;

    //public $kas1 = 125; jei bus vienodas kintamasis su identiska reiksme kitose vietose bus konfliktas 

    public function read()
    {
        return '-ABC-';
    }
}

// B::read insteadOf A;
// A::read as read_bla;
