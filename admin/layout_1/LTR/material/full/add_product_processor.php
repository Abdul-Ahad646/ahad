<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

// dd($uploads);

// sanitize

// validation


// image processing

// store : as json data to json file

// $id = 11;
// $uuid = 'asdfasdf';

//$src = $_POST['url'];
$filename = $_FILES['url']['name']; // if you want to keep the name as is
$filename = uniqid()."_".$_FILES['url']['name']; // if you want to keep the name as is
$target = $_FILES['url']['tmp_name'];
$destination = $uploads.$filename;

$src = null;
if(upload($target, $destination)){
    $src = $filename ;
}


$product_Name = $_POST['product_Name'];

$product_code = $_POST['product_code'];
$product_price = $_POST['product_price'];
$product_condition = $_POST['product_condition'];
$product_availability = $_POST['product_availability'];
$product_category = $_POST['product_category'];
$product = [
            
            'uuid'=>uniqid(),
            'src'=>$src,
            'product_name'=>$product_Name,
            'product_code'=>$product_code ,
            'price'=>$product_price,
            'product_condition'=> $product_condition,
            'avalibility'=>$product_availability,
            'product_category'=>$product_category
            
        ];


        $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'product.json');
        
$products= json_decode($dataSlides);
// $products = json_decode($dataSlides);
// finding unique ids

foreach($products as $aproduct){
    $ids[] = $aproduct->id;
}

sort($ids);
$lastIndex = count($ids)-1;
$highestId = $ids[$lastIndex];
$curentUniqueId = $highestId+1;

$products['id'] = $curentUniqueId ;

$products[] = (object) $product;
$data_slides = json_encode($products);



if(file_exists($datasource."product.json")){
    $result = file_put_contents($datasource."product.json",$data_slides);
    if($result){
        redirect("product.php");
    }
}else{
    echo "File not found";
}






// give appropriate message to user

