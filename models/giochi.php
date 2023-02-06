<?php

class giochi extends Prodotti{
    public $dimensioni; 
    public $caratteristiche;
}

public function setDimensioni($dimensioni){
    $this->dimensioni = $dimensioni
}
public function getDimensioni(){
    return $this->dimensioni;
}

public function setCaratteristiche($caratteristiche){
    $this ->caratteristiche = $caratteristiche
}
public function getCaratteristiche(){
    return $this->caratteristiche;
}
?>