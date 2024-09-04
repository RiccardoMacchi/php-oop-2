<?php

class Food extends Product {
    public $ingredients;
    public $body_size;

    public function __construct(string $_name, string $_size, float $_price, string $_description, array $_ingredients, string $_body_size){
        parent::__construct($_name, $_size, $_price,$_description);
        $this->body_size = $_body_size;
        $this->ingredients = $_ingredients;
    }

    public function addIngredient($_ingredients){
        return $this->ingredients .= $_ingredients;
    }

    public function printIngredient(){
        $list = '';

        foreach($this->ingredients as $ingredient){
            $list .= "<li> $ingredient </li>";
        }
        echo $list;
    }
}