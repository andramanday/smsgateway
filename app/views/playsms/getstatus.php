<?php

include 'Webservices.php';

error_reporting(E_ALL ^ E_NOTICE);

$ws = new Playsms\Webservices();

$ws->url = 'http://192.168.5.31/index.php?app=ws';
//$ws->username = $_POST['user'];
//$ws->password = $_POST['pass'];
//$tipe = $_POST['tipe'];
$ws->username = "andra";
$ws->password = "gmt123";

//echo "\ngetToken\n";
$ws->getToken();
//print_r($ws->getData());

//echo "\n";

$products_arr=array();
$products_arr['data'][]= array(
    $ws->getStatus();
);

echo json_encode($products_arr, JSON_PRETTY_PRINT);