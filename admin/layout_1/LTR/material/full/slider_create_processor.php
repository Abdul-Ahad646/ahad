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


$alt = $_POST['alt'];
$title = $_POST['title'];
$caption = $_POST['caption'];

$slide = [
            
            'uuid'=>uniqid(),
            'src'=>$src,
            'alt'=>$alt,
            'title'=>$title,
            'caption'=>$caption
        ];


$dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
$slides = json_decode($dataSlides);
// finding unique ids
foreach($slides as $aslide){
    $ids[] = $aslide->id;
}

sort($ids);
$lastIndex = count($ids)-1;
$highestId = $ids[$lastIndex];
$curentUniqueId = $highestId+1;

$slide['id'] = $curentUniqueId ;

$slides[] = (object) $slide;
$data_slides = json_encode($slides);



if(file_exists($datasource."slideritems.json")){
    $result = file_put_contents($datasource."slideritems.json",$data_slides);
    if($result){
        redirect("slider_index.php");
    }
}else{
    echo "File not found";
}






// give appropriate message to user

