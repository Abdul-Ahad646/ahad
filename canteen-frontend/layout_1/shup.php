<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once($partials_frontend.'head.php') ?>


<title>CumpusCanteen/Shup</title>
   

</head>
<body>



    <?php include_once($partials_frontend.'nav_product.php') ?>

      <div class="container ">
        <div class="row mt-5">
            <div class="col-md-5 ">
                <img src="../global_assets/img/Chicken-Soup.jpg" alt="">
            </div>
            <div class="col-md-7">
                <p class="new text-center">NEW</p>
                <h2>Chicken-Soup</h2>
                <p>Product Code: CS1</p>
                <p class="price">TK 200/=</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <label for="">
                    Quantity:
                </label>
                <input type="text" value="1">
                <button type="button" class="btn btn-default cart">Add to cart</button>
            </div>
        </div>
      </div>
      <div class="container ">
        <div class="row mt-5">
            <div class="col-md-5 ">
                <img src="../global_assets/img/corn-soup.jpg" alt="">
            </div>
            <div class="col-md-7">
                <p class="new text-center">NEW</p>
                <h2>Corn Shup</h2>
                <p>Product Code: CC1</p>
                <p class="price">TK 300/=</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <label for="">
                    Quantity:
                </label>
                <input type="text" value="1">
                <button type="button" class="btn btn-default cart">Add to cart</button>
            </div>
        </div>
      </div>
      <div class="container ">
        <div class="ab row mt-5">
            <div class="col-md-5 ">
                <img src="../global_assets/img/Thai-Soup.jpg" alt="">
            </div>
            <div class="col-md-7">
                <p class="new text-center">NEW</p>
                <h2>Thai Soup</h2>
                <p>Product Code: TS1</p>
                <p class="price">TK 400/=</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <label for="">
                    Quantity:
                </label>
                <input type="text" value="1">
                <button type="button" class="btn btn-default cart">Add to cart</button>
            </div>
        </div>
      </div>

      <?php include_once($partials_frontend.'footer.php') ?>
</body>
</html>