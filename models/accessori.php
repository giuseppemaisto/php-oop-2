<?php

class accessori extends prodotti{
    public $dimensioni;
    public $materiale;
}

public function setDimensioni($dimensioni){
    $this->dimensioni = $dimensioni
}
public function getDimensioni(){
    return $this->dimensioni;
}

public function setmateriale($materiale){
    $this ->caratteristiche = $caratteristiche
}
public function getmateriale(){
    return $this->caratteristiche;
}
?>