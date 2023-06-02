
<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once($partials_frontend.'head.php') ?>
<title>CumpusCanteen/Home</title>
</head>
<body>

<?php include_once($partials_frontend.'nav.php') ?>

<?php
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
    $slides = json_decode($dataSlides);
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
   
   <?php
    $active = '';
    foreach($slides as $key=>$slide):
       if(0 == $key){
        $active = 'active';
       }else{
        $active = '';
       }
    ?> 
     <button type="button" 
              data-bs-target="#carouselExampleCaptions" 
              data-bs-slide-to="<?=$key?>" 
              class="<?=$active?>" 
              aria-current="true" 
              aria-label="Slide 1">
    </button>
    <?php
        endforeach
    ?>

  </div>
  <div class="carousel-inner">
   
   <?php

    foreach($slides as $key=>$slide):
        if(0 == $key){
            $active = 'active';
        }else{
            $active = '';
        }
   ?> 
    <div class="carousel-item <?=$active?>">
      <!-- <img src="<?php // $slide['src']?>" class="d-block w-100" alt="<?php //$slide['alt']?>">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php //$slide['title']?></h5>
        <p><?php //$slide['caption']?></p>
      </div> -->

    <img src="<?=$webroot."uploads/".$slide->src?>" class="d-block w-100" alt="<?=$slide->alt?>">
      <div class="carousel-caption d-none d-md-block">
        <h5><?=$slide->title?></h5>
        <p><?=$slide->caption?></p>
      </div>
    </div>
   
<?php
    endforeach
?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="../global_assets/img/about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide Best Quality <br> Services Ever</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                        <a href="#" class="btn btn-warning">Learn More</a>

                    </div>
                </div>
            </div>
        </div>
      </section>
    
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
                    <a href=".../layout_1/shup.php" class="btn bg-warning text-dark">See Product</a>
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
                    <a href=".../layout_1/nasos.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>
    
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src=".../global_assets/img/salad.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Salad</h3>
                    <a href=".../layout_1/salad.php" class="btn bg-warning text-dark">See Product</a>
                    
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
                    <a href=".../layout_1/rice.php" class="btn bg-warning text-dark">See Product</a>
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
                    <a href=".../layout_1/fruits.php" class="btn bg-warning text-dark">See Product</a>
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
                    <a href=".../layout_1/donat.php" class="btn bg-warning text-dark">See Product</a>
                  </div>
                </div>
              </div>      
          </div>
      </section>





      <section id="contact" class="contact section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Ipsum, sit officia? </p>
                </div>
            </div>
          </div>

          <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 pb-4 ">
              
              <form action="#" class="bg-light p-4.m-auto">
                <div class="row">

                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="text" class="form-control" required placeholder="Your Full Name">
                    </div>
                  </div>
  
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="email" class="form-control" required placeholder="Enter Your Email">
                    </div>
                  </div>
  
                  <div class="col-md-12">
                    <div class="mb-3">
                      <textarea rows="3" required class="form-control" placeholder="Your Text Here.."></textarea>
                    </div>
                  </div>
  
                  <button class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>
                </div>
              </form>
              
            </div>
          </div>

        </div>
      </section>

      <?php include_once($partials_frontend.'footer.php') ?>


    



</body>
</html>