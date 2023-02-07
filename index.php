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
        <?php foreach($products as $product) { ?>
            <div class="col-sm-4">
                <div class="card">
                    <img src="<?php echo $product->image; ?>" class="img-fluid" >
                    <h4><?php echo $product->name?></h4>
                    <p>
                        prezzo: <?php echo $product->price; ?>
                    </p>

                    <p>
                        <?php if(isset($product->weight)){
                            echo $product->weight;
                        }

                        if(isset($product->ingredients)){
                            foreach($product-> ingredients as $ingredient){
                                $string.=$ingredient. " ";
                            };
                        }
                        if(isset($product->material)){
                            echo $product->material;
                        }
                        if(isset($product->size)){
                            echo $product->size;
                        }
                        if(isset($product->features)){
                            echo $product->features;
                        }
                         ?>   
                        
                    </p>
                </div>

            </div>
        <?php } ?>
    </div>
   </div>
     
</body>
</html>