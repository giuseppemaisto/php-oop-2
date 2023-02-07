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
        new cibo ("https://images.unsplash.com/photo-1658418171785-6effc7240676?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80","Royal Canin Mini Adult", $categories ['cane'], "43,99", "545gr",  "prosciuto, riso"),
        new cibo ("https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/agnello/fresco/3/800/26699_pla_almo_nature_holistic_adult_lamm_reis_medium_741_12kg_dog_3.jpg","Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso", $categories ['cane'],"44,49", "600 gr", "manzo, cereali"),
        new cibo ("https://www.amoreanimaleshop.it/wp-content/uploads/2021/02/Almo-Nature-Cat-Daily-Manzo-400.jpg","Almo Nature Cat Daily Lattina", $categories ['gatto'],"34,49", "400 gr", ["tonno", "pollo","prosciutto"]),
        new cibo ("https://www.pets-house.it/6903-large_default/tetra-guppy-fiocchi-100-ml.jpg","Mangime per Pesci Guppy in Fiocchi", $categories ['pesce'],"2,95", "30 gr", ["pesci", "alghe","sottoprodotti dei pesci"]),

        new accessori ("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610","Voilera Wilma in Legno",$categories ['uccello'],"184,89","M: L 83 x P 67 x H 153 cm","legno"),
        new accessori ("https://www.koi-franciacorta.it/pimages/TETRA-EASYCRYSTAL-FILTERPACK-CON-CARBONE-CONFEZIONE-DA-3-PEZZI-E-extra-big-5544-824.jpg","Cartucce Filtranti per Filtro EasyCrystal",$categories ['pesce'],"2,29","ND","materiale espanso "),
        new giochi ("https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg","Kong Classic",$categories ['cane'],"13,49","8,5 x 10cm","Galleggia e Rimbalza"),
        new giochi ("https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/8/800/42535_trixie_plueschmaus_weiss_hs_02_8.jpg","Topini di peluche Trixie",$categories ['gatto'],"4,99","8,5 x 10cm","Morbido con codina in corda"),
        ]
?>