<?php

class Food extends Product {
    public $ingredients;
    public $body_size;

    public function __construct(string $_img = null, string $_name, string $_size, float $_price, string $_description, array $_ingredients, string $_body_size, Category $_category, bool $_aviable = false){
        parent::__construct($_img, $_name, $_size, $_price,$_description, $_category, $_aviable);
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