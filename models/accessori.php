<?php

class accessori extends prodotti{
    public $dimensioni;
    public $materiale;

public function __construct($immagine, $nome, $tipo, $prezzo, $dimensioni, $materiale)
{
    parent::__construct($immagine, $nome, $tipo, $prezzo);
   
    $this->dimensioni = $dimensioni;
    $this->materiale = $materiale;
}
}
