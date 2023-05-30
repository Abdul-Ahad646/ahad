<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'donat.json');
    $products = json_decode($dataSlides);
   

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
						
            <!-- Bordered table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Product</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
					 
					
						 
					<a href="add_donat.php">Add Product</a>
					<a href="slider_download_pdf.php">Download PDF</a>
					<!-- <a href="slider_download_xl.php">Download xl</a> -->
					
					  
						 | Trash (Delete | Restore) | Download XL | Download PDF | Print View
						  
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Product Code</th>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Price</th>
                                    <th>Condition</th>
									<th>Availability</th>
                                    <th>Product category</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>

<?php

    foreach($products as $key=>$product):
        // if(0 == $key){
        //  $active = 'active';
        // }else{
        //  $active = '';
        // }
		
     ?> 


								<tr>
									<td title="<?=$product->uuid?>"><?=++$key?></td>
									<td style="word-wrap: break-word; width: 150px;"><?=$product->product_code?></td>
									<td><img src="<?=$webroot."uploads/".$product->src?>" style="width:100px;height:100px"></td>
									<td><?=$product->product_name?></td>
									<td><?=$product->price?></td>
                                    <td><?=$product->product_condition?></td>
                                    <td><?=$product->avalibility?></td>
                                    <td><?=$product->product_category?></td>
									<td> 
									<!-- <a href="slider_show.php?slideIndex=<?=$key-1?>">Show</a>   -->
										<a href="slider_show.php?id=<?=$product->id?>">Show</a>  
										<a href="add_product.php">Add Product</a>
										| <a href="slider_edit.php?id=<?=$product->id?>">Edit</a> 
										<form method="post" action="slider_delete.php?>">
											<input type="hidden" name="id" value="<?=$product->id?>">
										<button class="btn" onclick= "return confirm(' are you sure')">Delete</button>
										</form>
										
										
									| Activate/InActive | Copy</td>
								</tr>
<?php
 endforeach
?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /bordered table -->



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
