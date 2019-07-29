<?php

include 'Webservices.php';

error_reporting(E_ALL ^ E_NOTICE);

$ws = new Playsms\Webservices();

$ws->url = 'http://192.168.5.31/index.php?app=ws';
$ws->username = $_POST['user'];
$ws->password = $_POST['pass'];
$tipe = $_POST['tipe'];
//$ws->username = "andra";
//$ws->password = "gmt123";
//$tipe = "outgoing";

//echo "\ngetToken\n";
$ws->getToken();
//print_r($ws->getData());

echo "\n";

if ($ws->getStatus()) {

	$ws->token = $ws->getData()->token;
    
    if($tipe == "outgoing"){
        $ws->getOutgoing();
    }elseif($tipe == "outgoing"){
        $ws->getIncoming();
    }elseif($tipe == "outgoing"){
        $ws->getInbox();
    }elseif($tipe == "outgoing"){
        $ws->getSandbox();
    }
        $var =  $ws->getData();
        $var2 = $var->data[0]->pid;
        $total = count(($var->data));

        $Outgoing=array();
        for($i=0; $i < $total; $i++){
            $Outgoing['data'][]= array(
                $var->data[$i]->smslog_id,
                $var->data[$i]->src,
                $var->data[$i]->dst,
                $var->data[$i]->msg,
                $var->data[$i]->dt,
                $var->data[$i]->update,
                $var->data[$i]->status
            );
        }
        echo json_encode($Outgoing, JSON_PRETTY_PRINT);
    

	//echo "Outgoing SMS:\n";
	//$ws->getOutgoing();
    //print_r($ws->getData()) . "\n";

	//echo "Incoming SMS:\n";
	//$ws->getIncoming();
	//print_r($ws->getData()) . "\n";

	//echo "Inbox SMS:\n";
	//$ws->getInbox();
	//print_r($ws->getData()) . "\n";

	//echo "Sandbox SMS:\n";
	//$ws->getSandbox();
	//print_r($ws->getData()) . "\n";

} else {
	echo "Error code: " . $ws->getError() . "\n";
	echo "Error string: " . $ws->getErrorString() . "\n";
}

//echo "\n";
