<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<!doctype html>
<html lang="en">
  <head>
  <?php include_once($partials_frontend.'head.php') ?>
  <title>CumpusCanteen/Registration</title>
    

  </head>
  <body>
  

  <?php include_once($partials_frontend.'nav.php') ?>


   <section class="form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="../global_assets/img/login.jpg" class="" alt="" width="100%" height="100%">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">Campus Canteen</h1>
                <h4>Make your account</h4>
                <form action="">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Enter your name" class="form-control my-2 p-2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" placeholder="Email-Address" class="form-control my-2 p-2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Address" class="form-control my-2 p-2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Enter password" class="form-control my-2 p-2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Confirm password" class="form-control my-2 p-2">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                            <button type="button" class="btn1 mt-3 mb-5">Registration</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </section>
   <?php include_once($partials_frontend.'footer.php') ?>
 
</body>
</html>