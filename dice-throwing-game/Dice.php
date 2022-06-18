<?php 

class Dice {
    public $sidesNum = null;
    public $color = null;
    public $lastResult = null;
    
    public function __construct($sidesNum) 
    {
        $this->sidesNum = $sidesNum;
    }

    public function roll(){
        $this->lastResult = rand(1, $this->sidesNum);
        return $this->lastResult;
    }

    public function __toString() {
        return $this->lastResult;
    }
}