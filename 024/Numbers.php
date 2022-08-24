<?php


abstract class Numbers implements Task, Task2 {


    //kolkas nezinoma ka darys, 
    abstract public function number() : int;

    public function show()
    {
        echo '<h1>' . $this->number() . '</h1>';
    }
}