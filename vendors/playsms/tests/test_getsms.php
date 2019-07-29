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
	$ws->count = 3;

	echo "Outgoing SMS:\n";
	$ws->getOutgoing();
	print_r($ws->getData()) . "\n";

	echo "Incoming SMS:\n";
	$ws->getIncoming();
	print_r($ws->getData()) . "\n";

	echo "Inbox SMS:\n";
	$ws->getInbox();
	print_r($ws->getData()) . "\n";

	echo "Sandbox SMS:\n";
	$ws->getSandbox();
	print_r($ws->getData()) . "\n";

} else {
	echo "Error code: " . $ws->getError() . "\n";
	echo "Error string: " . $ws->getErrorString() . "\n";
}

echo "\n";
