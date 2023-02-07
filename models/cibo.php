<?php

class Cibo extends prodotti{
    public $weight;
    public $ingredients;

    public function __construct($name,$price, categoria  $category,$image , $ingredients,$weight){
        parent::__construct( $name, $category, $price,);
     
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

  
}



?>