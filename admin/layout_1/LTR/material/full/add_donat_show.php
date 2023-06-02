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
						
            
				<!-- /dashboard content -->
				<?php include_once($partials.'donat_parsial.php') ?>
			</div>
			<!-- /content area -->


			<?php include_once($partials.'footer.php') ?>


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
