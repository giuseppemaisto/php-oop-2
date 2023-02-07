<?php

class accessori extends prodotti{
    public $size;
    public $material;

public function __construct($image, $name, categoria $category, $price, $size, $material)
{
    parent::__construct($image, $name, $category, $price);
   
    $this->size = $size;
    $this->material = $material;
}
}
