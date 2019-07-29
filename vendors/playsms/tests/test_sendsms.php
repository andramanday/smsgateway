<?php

$nomor = '#0012';
$pesan = 'test doang';
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

	echo "Send SMS:\n";
	$ws->token = $ws->getData()->token;
	$ws->to = $nomor;
	$ws->msg = $pesan . time();
	$ws->schedule = '2019-07-11 17:05';
	$ws->sendSms();
	print_r($ws->getData());

} else {
	echo "Error code: " . $ws->getError() . "\n";
	echo "Error string: " . $ws->getErrorString() . "\n";
}

echo "\n";
