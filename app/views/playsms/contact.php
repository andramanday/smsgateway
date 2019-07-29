<?php

include 'Webservices.php';

error_reporting(E_ALL ^ E_NOTICE);

$ws = new Playsms\Webservices();

$ws->url = 'http://192.168.5.31/index.php?app=ws';
$ws->username = 'andra';
$ws->password = 'gmt123';

//echo "\ngetToken\n";
echo "anda";
echo $ws->getToken();
//print_r($ws->getData());

echo "\n";

if ($ws->getStatus()) {

	$ws->token = $ws->getData()->token;
	$ws->keyword = 'an';
	$ws->count = 3;

	//echo "Contacts:\n";
	$ws->getPhonebookContacts();
	print_r($ws->getData()) . "\n";

	$var =  $ws->getData();
	$var2 = $var->data[0]->pid;
	$total = count(($var->data));

	//echo $var2;
	//echo $total;

	$products_arr=array();

	for($i=0; $i < $total; $i++){
		$products_arr['data'][]= array(
			$var->data[$i]->pid,
			$var->data[$i]->p_desc,
			$var->data[$i]->p_num,
			$var->data[$i]->email,
			$var->data[$i]->tags
		);
	}

	echo json_encode($products_arr, JSON_PRETTY_PRINT);

	echo "Groups:\n";
	$ws->getPhonebookGroups();
	print_r($ws->getData()) . "\n";

} else {
	echo "Error code: " . $ws->getError() . "\n";
	echo "Error string: " . $ws->getErrorString() . "\n";
}

echo "\n";
