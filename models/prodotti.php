<?php

class prodotti{
    public $name;
    public $price;
    public $image;
    public $category;


    public function __construct($image,$name,categoria $category, $price )
{
    $this->image = $image;
    $this->name = $name;
    $this->category = $category;
    $this->price = $price;
  
  
}

}
?>