<?php

class Product {
    public $img;
    public $name;
    public $size;
    public $price;
    public $description;
    public $category;
    public $aviable;
    public $discount_price = 0;
    private $discount;

    public function __construct(string $_img = null, string $_name, string $_size, float $_price, string $_description, Category $_category, bool $_aviable = false, float $_discount = 0, float $_discount_price = 0){
        $this->img = $_img;
        $this->name = $_name;
        $this->size = $_size;
        $this->price = $_price;
        $this->description = $_description;
        $this->category = $_category;
        $this->aviable = $_aviable;
        $this->discount_price = $_discount_price;

        // esecuzione del try-catch per generare errore in pagina non bloccante
        try {
            $this->setDiscount($_discount);
        } catch (Exception $e) {
            // Gestisci l'errore senza bloccare l'esecuzione
            echo "<h2>Errore: " . $e->getMessage() . "</h2>";
        }
    }

    public function getCategory() {
        return $this->category;
    }

    public function printPrice(){
        echo number_format($this->price,2,',','.');
    }
    public function printDiscountPrice(){
        echo number_format($this->discount_price,2,',','.');
    }

    public function getDiscount(){
        return $this->discount;
    }
    
    public function setDiscount($_discount) {
        if($_discount <= 0 || $_discount > 1){
            $this->discount_price = $this->price;
            throw new Exception('Nessuno sconto applicato');
        } else {
            $this->discount = $_discount;
            $this->discount_price = $this->price * (1 - $this->discount);
        }
    }
}
