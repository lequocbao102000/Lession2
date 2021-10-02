<?php
// URLConfig

$public_path = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$public_path .= "://".$_SERVER['HTTP_HOST'];
$public_path .= '/Lession2';

define ('BASE_URL',$public_path);

//DB
    const HOST="localhost";
    const USERNAME="root";
    const PASSWORD="";
    const DATABASE="lession2";

 
?>