<?php

class Product {
    public $name;
    public $size;
    public $price;
    public $description;
    public $category;

    public function __construct(string $_name, string $_size, float $_price, string $_description, Category $_category){
        $this->name = $_name;
        $this->size = $_size;
        $this->price = $_price;
        $this->description = $_description;
        $this->category = $_category;
    }

    public function getCategory() {
        return $this->category;
    }
}