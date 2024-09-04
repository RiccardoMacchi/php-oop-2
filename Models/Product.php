<?php

class Product {
    public $name;
    public $size;
    public $price;
    public $description;
    public $category;
    public $aviable;

    public function __construct(string $_name, string $_size, float $_price, string $_description, Category $_category, bool $_aviable = false){
        $this->name = $_name;
        $this->size = $_size;
        $this->price = $_price;
        $this->description = $_description;
        $this->category = $_category;
        $this->aviable = $_aviable;
    }

    public function getCategory() {
        return $this->category;
    }

    public function printPrice(){
        echo number_format($this->price,2,',','.');
    }
}