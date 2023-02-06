<?php

class giochi extends Prodotti{
    public $dimensioni; 
    public $caratteristiche;

    public function __construct($immagine, $nome, $tipo, $prezzo, $caratteristiche,$dimensioni){
        parent::__construct($immagine, $nome, $tipo, $prezzo, $caratteristiche, $dimensioni);
        
        $this->dimensioni = $dimensioni;
        $this->caratteristiche = $caratteristiche;
    }

    public function getProduct(){
        return parent ::getProduct()."<p><strong>Descrizione: </strong>".$this->caratteristiche."<br>"."<strong>Dimensione: </strong>".$this->dimensione."</p>";
     }
}


?>