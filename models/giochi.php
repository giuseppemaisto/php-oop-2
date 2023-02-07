<?php

class giochi extends prodotti{
    public $size; 
    public $features;
    

    public function __construct($image, $name, categoria $category, $price, $size,$features ){
        parent::__construct($image, $name, $category, $price);
        
        $this->size = $size;
        $this->features = $features;
    }


}


?>