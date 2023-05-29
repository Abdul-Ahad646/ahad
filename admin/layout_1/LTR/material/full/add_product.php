<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

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
				                <h6 class="card-title">Create a product</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="add_product_processor.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
										<label>Product Category</label>
										<select class="form-select" name="product_category" required>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
									</div>
                                    <div class="form-group">
										<label>Product Code</label>
										<input name="product_code" type="text" class="form-control" placeholder="Title">
									</div><div class="form-group">
										<label>Product Name</label>
										<input name="product_Name" type="text" class="form-control" placeholder="Title">
									</div>
                                    <div class="form-group">
										<label>Product Price</label>
										<input name="product_price" type="text" class="form-control" placeholder="Title">
									</div>
                                    <div class="form-group">
										<label>Availability</label>
										<input name="product_availability" type="text" class="form-control" placeholder="Title">
									</div>
                                    <div class="form-group">
										<label>Condition</label>
										<input name="product_condition" type="text" class="form-control" placeholder="Title">
									</div>
									
                                    <div class="form-group">
										<label>Slider Image</label>
										<input type="file" name="url" class="form-control" placeholder="Choose a file">
										
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
