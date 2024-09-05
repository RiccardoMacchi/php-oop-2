<?php

class Accessories extends Product {
    public $use_for;

    public function __construct(string $_img = null, string $_name, string $_size, float $_price, string $_description, Category $_category, string $_use_for, bool $_aviable = false){
        parent::__construct($_img, $_name, $_size, $_price, $_description, $_category, $_aviable);
        $this->use_for = $_use_for;
    }
}