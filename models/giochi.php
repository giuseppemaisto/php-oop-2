<?php

class giochi extends prodotti{
    public $dimensioni; 
    public $caratteristiche;

    public function __construct($immagine, $nome, $tipo, $prezzo, $caratteristiche,$dimensioni){
        parent::__construct($immagine, $nome, $tipo, $prezzo,);
        
        $this->dimensioni = $dimensioni;
        $this->caratteristiche = $caratteristiche;
    }


}


?>