<?php

class Category{
    public $name;
    public $type_of;
    public $icon;

    public function __construct(string $_name, string $_type_of, string $_icon = null){
        $this->name = $_name;
        $this->type_of = $_type_of;
        $this->icon = $_icon;
    }

    public function iconName(){
        if($this->name === 'Cane'){
            $this->icon = '<i class="fa-solid fa-dog"></i>';
        } elseif($this->name === 'Gatto'){
            $this->icon = '<i class="fa-solid fa-cat"></i>';
        } else {
            $this->icon = '<i class="fa-solid fa-paw"></i>';
        }
        return $this->icon;
    }
}