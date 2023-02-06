<?php

class prodotti{
    public $immagine;
    public $nome;
    public $tipo;
    public $prezzo;


    public function __construct($immagine, $nome, $tipo, $prezzo)
{
    $this->immagine = $immagine;
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->prezzo = $prezzo;
}}
?>