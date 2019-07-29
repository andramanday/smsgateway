<?php

include '../src/Playsms/Webservices.php';

error_reporting(E_ALL ^ E_NOTICE);

$ws = new Playsms\Webservices();

$ws->url = 'http://192.168.5.31/index.php?app=ws';
$ws->username = 'andra';
$ws->password = 'gmt123';

echo "\ngetToken\n";
$ws->getToken();
print_r($ws->getData());

echo "\n";

if ($ws->getStatus()) {

	$ws->token = $ws->getData()->token;

	echo "Credit\n\n";
	$ws->getCredit();
	if ($ws->getStatus()) {
		$credit = $ws->getData()->credit;
		echo "Remaining credit for user " . $ws->username . ": " . $credit . "\n";
	} else {
		echo "Unable to check user credit\n";
	}

} else {
	echo "Error code: " . $ws->getError() . "\n";
	echo "Error string: " . $ws->getErrorString() . "\n";
}

echo "\n";
