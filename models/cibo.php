<?php

class Cibo extends prodotti{
    public $peso;
    public $ingredienti;

    public function __construct($nome,$prezzo, $tipo,$immagine , $ingredienti,$peso){
        parent::__construct( $nome, $tipo, $prezzo,$immagine,);
     
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }

  
}



?>