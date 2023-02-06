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
        <div class="row">
            <div class="col-12 m-5">
                <?php foreach($prodotti as $item) { ?>
                    <div class="card">
                        <img src="<?php echo $item->$immagine;
                        ?>" class="card-img-top">

                        <div class="card-body">
                            <h4 class="title"><?php echo $item->name?></h4>

                            <p><?php echo "categoria: ".$item->categoria."<br>"."prezzo: ".$item->prezzo;?></p>

                            <p class="card-text"><?php if($item->caratteristiche){
                                echo $item->caratteristiche;
                            }
                            else{
                                echo $item->peso;
                            };
                            ?>
                                </p>
                        </div>
                    </div>
                <?php }?>
                
            </div>
        </div>
    </div>
</body>
</html>