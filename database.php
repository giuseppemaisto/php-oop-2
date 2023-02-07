<?php 
    include __DIR__.'/models/categoria.php';
    include __DIR__.'/models/prodotti.php';
    include __DIR__.'/models/cibo.php';
    include __DIR__.'/models/giochi.php';
    include __DIR__.'/models/accessori.php';


    //creo array categorie
    $categories = [
        'cane' => new categoria ('cane', '<i class="fa-solid fa-dog"></i>'),
        'gatto' => new categoria ('gatto', '<i class="fa-solid fa-cat"></i>'),
        'uccello' => new categoria ('uccello', '<i class="fa-solid fa-dove"></i>'),
        'pesce' => new categoria ('pesce', '<i class="fa-solid fa-fish"></i>'),
    ];

    $products = [
        new cibo ('Royal Canin mini adult', 35.99, $categories ['cane'],'https://m.media-amazon.com/images/I/61mmOAWbpWL._AC_SY450_.jpg', 'pollo', 400 ),
        new cibo ('Royal Canin mini adult', 35.99, $categories ['cane'],'https://m.media-amazon.com/images/I/61mmOAWbpWL._AC_SY450_.jpg', 'pollo', 400 ),
        new cibo ('Royal Canin mini adult', 35.99, $categories ['cane'],'https://m.media-amazon.com/images/I/61mmOAWbpWL._AC_SY450_.jpg', 'pollo', 400 ),
        new accessori ('https://m.media-amazon.com/images/I/71cGkHnA4NL._AC_SY355_.jpg','SLOCME Thinking Groot', $categories ['pesce'],'16.99 Euro','10P x 11L x 13H','resina'),
        new accessori ('https://m.media-amazon.com/images/I/71cGkHnA4NL._AC_SY355_.jpg','SLOCME Thinking Groot', $categories ['pesce'],'16.99 Euro','10P x 11L x 13H','resina'),
        new giochi ('https://m.media-amazon.com/images/I/71cGkHnA4NL._AC_SY355_.jpg','SLOCME Thinking Groot', $categories ['pesce'],'16.99 Euro','10P x 11L x 13H','resina'),
        ]
?>