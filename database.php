<?php 
    include __DIR__ . '/models/prodotti.php';
    include __DIR__ . '/models/cibo.php';
    include __DIR__ . '/models/giochi.php';
    include __DIR__ . '/models/accessori.php';

    // Cibo
    $royal_canin = new cibo('Royal Canin','47.62 Euro', 'cane','https://m.media-amazon.com/images/I/61mmOAWbpWL._AC_SY450_.jpg','Crocchette','3kg');
    $royal_gattin = new cibo('Royal Gattin','38.96 Euro', 'gatto','https://m.media-amazon.com/images/I/51Dtb9qk02L._AC_SY679_.jpg','Crocchette','3kg');
    $vermi_uccelli = new cibo('EWL','32.95 Euro', 'uccello','https://m.media-amazon.com/images/I/81RsK97o2DL._AC_SX466_.jpg','Vermi essicati','2kg');
    $mangime_pesci = new cibo ('Haquoss Marine Gran Gourmet','6.70 Euro', 'pesce','https://m.media-amazon.com/images/I/61mFNEJsUNS._AC_SX466_.jpg','Granulato','80g');


    //giochi
    $nobby = new giochi('Nobby','3.71 Euro', 'cane','https://m.media-amazon.com/images/I/31MgbJi75aL._AC_SX450_.jpg','Pollo in lattice per far divertire il tuo cane','Large 47 cm');
    $piuma = new giochi('Asta con Piuma','4.99 Euro', 'gatto','https://m.media-amazon.com/images/I/318bQViJpML._AC_SY450_.jpg','Asta con Piuma in cima, agitala per non far ingrassare il tuo gatto','25 x 1 x 1 cm');
    $pietypet = new giochi('Asta con Piuma','4.99 Euro', 'gatto','https://m.media-amazon.com/images/I/318bQViJpML._AC_SY450_.jpg','Asta con Piuma in cima, agitala per non far ingrassare il tuo gatto','25 x 1 x 1 cm');

    //accessori 

    $groot = new accessori('SLOCME Thinking Groot','16.99 Euro', 'pesce','https://m.media-amazon.com/images/I/71cGkHnA4NL._AC_SY355_.jpg','10P x 11L x 13H','Resina');
    $castello = new accessori('FEANDREA','49.99 Euro', 'gatto','https://m.media-amazon.com/images/I/71Q3RaQPr+L._AC_SX466_.jpg','30L x 3l x 118H','Pannello di Truciolato, Peluche, Sisal');
    
    $prodotti = [
        $royal_canin,
        $royal_gattin,
        $vermi_uccelli,
        $mangime_pesci,
        $nobby,
        $piuma,
        $pietypet,
        $groot,
        $castello,
]

?>