<?php

class Cibo extends prodotti{
    public $weight;
    public $ingredients;

    public function __construct($image,$name,categoria  $category, $price,$weight, $ingredients){
        parent::__construct($image, $name, $category, $price);
     
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

  
}



?>