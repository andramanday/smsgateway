<<<<<<< HEAD
<?php

include '../src/Playsms/Webservices.php';

error_reporting(E_ALL ^ E_NOTICE);

$ws = new Playsms\Webservices();

$ws->url = 'http://192.168.5.31/index.php?app=ws';
$ws->username = $_POST['user'];
$ws->password = $_POST['pass'];
$tipe = $_POST['tipe'];

echo "\ngetToken\n";
$ws->getToken();
print_r($ws->getData());

echo "\n";

if ($ws->getStatus()) {

	echo "Send SMS:\n";
	$ws->token = $ws->getData()->token;
	$ws->to = '0987654321,0987654322';
	$ws->msg = 'This is a test from webservices ' . time();
	$ws->sendSms();
	print_r($ws->getData());

} else {
	echo "Error code: " . $ws->getError() . "\n";
	echo "Error string: " . $ws->getErrorString() . "\n";
}

echo "\n";
=======
<?php

include '../src/Playsms/Webservices.php';

error_reporting(E_ALL ^ E_NOTICE);

$ws = new Playsms\Webservices();

$ws->url = 'http://192.168.5.31/index.php?app=ws';
$ws->username = $_POST['user'];
$ws->password = $_POST['pass'];
$tipe = $_POST['tipe'];

echo "\ngetToken\n";
$ws->getToken();
print_r($ws->getData());

echo "\n";

if ($ws->getStatus()) {

	echo "Send SMS:\n";
	$ws->token = $ws->getData()->token;
	$ws->to = '0987654321,0987654322';
	$ws->msg = 'This is a test from webservices ' . time();
	$ws->sendSms();
	print_r($ws->getData());

} else {
	echo "Error code: " . $ws->getError() . "\n";
	echo "Error string: " . $ws->getErrorString() . "\n";
}

echo "\n";
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
