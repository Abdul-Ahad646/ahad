<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once($partials_frontend.'head.php') ?>

<title>CumpusCanteen/Product</title>
    
</head>
<body>


    <?php include_once($partials_frontend.'nav.php') ?>

      <section id="productlist" class="productlist section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Product Category</h2>
                        <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Ipsum, sit officia? </p>


                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="../global_assets/img/corn.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Shup</h3>
                    <a href="shup.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>
    
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="../global_assets/img/nasos.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Nasos</h3>
                    <a href="nasos.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>
    
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="../global_assets/img/salad.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Salad</h3>
                    <a href="salad.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>
              
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="../global_assets/img/rice.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Rice</h3>
                    <a href="rice.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>
            
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="../global_assets/img/fruits.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Fruits</h3>
                    <a href="fruits.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="../global_assets/img/donat.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Donat</h3>
                    <a href="donat.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>      
          </div>
      </section>
      <?php include_once($partials_frontend.'footer.php') ?>

    
</body>
</html>