<?php

class Toy extends Product {
    public $colors;

    public function __construct(string $_name, string $_size, float $_price, string $_description, Category $_category, array $_colors, bool $_aviable = false){
        parent::__construct($_name, $_size, $_price, $_description, $_category, $_aviable);
        $this->colors = $_colors;
    }

    
    public function addColor($_colors){
        return $this->colors .= $_colors;
    }

    public function printColor(){
        $list = '';

        foreach($this->colors as $color){
            $list .= "<li> $color </li>";
        }
        echo $list;
    }

}