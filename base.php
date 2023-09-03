<?php
session_start();
date_default_timezone_set("Asia/Taipei");

include_once __DIR__ ."/controller/User.php";
// include_once __DIR__ ."/controller/Log.php";
include_once __DIR__ ."/controller/News.php";
include_once __DIR__ ."/controller/Que.php";
// // include_once __DIR__ ."/controller/Viewer.php";

$User = new User; 
// $Log = new Log ; 
$News = new News; 
$Que = new Que ; 
// $Viewer = new Viewer; 

function dd($arg){
    echo '<pre>';
    print_r($arg);
    echo '</pre>';
}

function to($url){
    header("location:".$url);
}
?>