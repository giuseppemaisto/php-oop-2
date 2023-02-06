<?php
include __DIR__.'/database.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP-OOP-2</title>
</head>
<body>
    <div class="container">
      <h1>i nosttri prodotti</h1>
      <div class="row">

      <?php foreach ($arrayCibo as $item) {?>
        <div class="card col-3 m-5 object-fit">
            <img src="<?php echo $item->immagine;?>" alt="">
            <h2><?php echo $item->nome?></h2>
            <p><?php echo $item->tipo?></p>
            <p><?php echo $item->prezzo?></p>
            <p><?php echo $item->peso?></p>
            <p><?php echo $item->ingredienti?></p>
        </div>
        <?php } ?>

        <?php foreach ($arrayAccessori as $item) {?>
        <div class="card col-3 m-5 object-fit">
            <img src="<?php echo $item->immagine;?>" alt="">
            <h2><?php echo $item->nome?></h2>
            <p><?php echo $item->tipo?></p>
            <p><?php echo $item->prezzo?></p>
            <p><?php echo $item->dimensioni?></p>
            <p><?php echo $item->materiale?></p>
        </div>
        <?php } ?>

        <?php foreach ($arrayGiochi as $item) {?>
        <div class="card col-3 m-5 object-fit">
            <img src="<?php echo $item->immagine;?>" alt="">
            <h2><?php echo $item->nome?></h2>
            <p><?php echo $item->tipo?></p>
            <p><?php echo $item->prezzo?></p>
            <p><?php echo $item->dimensioni?></p>
            <p><?php echo $item->caratteristiche?></p>
        </div>
        <?php } ?>
      </div>
    </div>
</body>
</html>