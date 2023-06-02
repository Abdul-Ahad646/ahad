<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once($partials_frontend.'head.php') ?>

<title>CumpusCanteen/Nasos</title>
    

</head>
<body>



    <?php include_once($partials_frontend.'nav_product.php') ?>
    <?php
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'nasos.json');
    $products = json_decode($dataSlides);
?>

  </div>
  
   
   <?php

    foreach($products as $key=>$product):
        if(0 == $key){
            $active = 'active';
        }else{
            $active = '';
        }
   ?> 

        <div class="container col-lg-7 ">
        <div class="row mt-5">
            <div class="col-md-5 ">
            <img src="<?=$webroot."uploads/".$product->src?>" alt="<?=$product->alt?>">
            </div>
            <div class="col-md-7">
                <p class="new text-center" ><?=$product->product_condition?></p>
                
                <h2><?=$product->product_name?></h2>
                <p><?=$product->product_code?></p>
                <p class="price"><?=$product->price?></p>
                <p><?=$product->avalibility?></p>
                <p><b>Condition: </b><?=$product->product_condition?> </p>
                <label for="">
                    Quantity:
                </label>
                <input type="text" value="1">
                <button type="button" class="btn btn-default cart">Add to cart</button>
            </div>
        </div>
      </div>
      </div>
    </div>
   
<?php
    endforeach
?>
<?php include_once($partials_frontend.'footer.php') ?>
 