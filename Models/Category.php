<?php

class Category{
    public $name;
    public $animal_size;

    public function __construct(string $_name, string $_animal_size){
        $this->name = $_name;
        $this->animal_size = $_animal_size;
    }
}