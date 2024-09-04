<?php

class Category{
    public $name;
    public $type_of;

    public function __construct(string $_name, string $_type_of){
        $this->name = $_name;
        $this->type_of = $_type_of;
    }
}