<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
   /** collect the intended ID */
   $id = $_GET['id'];
    
     /** communicate with datasource and get data for that id */
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
    $slides = json_decode($dataSlides);
    
    $slide = null;
    foreach($slides as $aslide){
        if($aslide->id == $id){
            $slide = $aslide;
            break;
        }
    }
	
    
    
     d($slide);
    // $slideIndex = $_GET['slideIndex'];
    // $slide = $slides[$slideIndex];

    /**
     * @TODO
     * handle edge case
     * security: untrust user input
     */
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once($partials.'head.php') ?>

<body>

<?php include_once($partials.'nav.php') ?>


	<!-- Page content -->
	<div class="page-content">

	<?php include_once($partials.'sidebar.php') ?>



		<!-- Main content -->
		<div class="content-wrapper">


		<?php include_once($partials.'pageHeader.php') ?>


			<!-- Content area -->
			<div class="content">

			<?php //include_once($partials.'chart.php') ?>



				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-12">
                    <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Edit Slide Information</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="slider_edit_processor.php" method="post" enctype="multipart/form-data" >
										<input name="id" type="text" class="form-control"  value="<?=$aslide->id?>" />
										<input name="uuid" type="text" class="form-control"  value="<?=$aslide->uuid?>" />


									<div class="form-group">
										<label>Title</label>
										<input name="title" type="text" class="form-control" placeholder="Eugene Kopyov" value="<?=$aslide->title?>" />
									</div>

									<div class="form-group">
										<label>Caption</label>
										<input name="caption" type="text" class="form-control" placeholder="Your strong password" value="<?=$aslide->caption?>" />
									</div>

									<div class="form-group">
										<label>Alt</label>
										<input name="alt" type="text" class="form-control" placeholder="alt" value="<?=$aslide->alt?>" />
									</div>

                                    <div class="form-group">
										
										<label>Slider Image</label>
										<input type="file" name="url" class="form-control" placeholder="Choose a file" value="<?=$aslide->src?>" />
									</div>
									
									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn btn-light legitRipple">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3 legitRipple">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


			<?php include_once($partials.'footer.php') ?>


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
