<?php
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR."autoload.php");
function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}
function redirect($url){
    header("location:$url");
}
function upload($target, $destination){
    move_uploaded_file($target, $destination);
    return true;
}
function set_session($key, $val){
    $_SESSION[$key] = $val;
}

function get_session($key){

    if(array_key_exists($key, $_SESSION) && !empty($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return null;
}

function flush_session($key){
    $value = get_session($key);
    $_SESSION[$key]='';
    return $value; 
}
$webroot = "http://campus_canteen.test".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partials = $docroot.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR . 'partials'. DIRECTORY_SEPARATOR;
$partials_frontend = $docroot.DIRECTORY_SEPARATOR.'canteen-frontend'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$datasource = $docroot.DIRECTORY_SEPARATOR."datasource".DIRECTORY_SEPARATOR;
$uploads = $docroot.DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR;
