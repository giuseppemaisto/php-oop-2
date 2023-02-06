<?php

class Cibo extends prodotti{
    public $peso;
    public $ingredienti;

    public function __construct($immagine, $nome, $tipo, $prezzo, $ingredienti){
        parent::__construct($immagine, $nome, $tipo, $prezzo, $ingredienti);
     
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }

    public function getProduct(){
        return parent ::getProduct()."<p><strong>Descrizione: </strong>".$this->tipo."<br>"."<strong>Dimensione: </strong>".$this->peso."</p>";
     }
}



?>