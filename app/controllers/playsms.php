<?php

class playsms extends Controller {

	public function test(){
		echo playsmsURL;
		echo playsmsUSER;
		echo playsmsPASS;
	}
	
	public function index(){
		$this->view('playsms/index');
    }
    
    public function getCredit(){
		include 'Webservices.php';

		error_reporting(E_ALL ^ E_NOTICE);

		$ws = new Playsms\Webservices();

		$ws->url = playsmsURL;
		$ws->username = $_SESSION['session_login']['user'];
		$ws->password = $_SESSION['session_login']['password'];

		$ws->getToken();
		//print_r($ws->getData());


		if ($ws->getStatus()) {

			$ws->token = $ws->getData()->token;

			$ws->getCredit();
			if ($ws->getStatus()) {
				$credit = $ws->getData()->credit;
				echo $credit;
			} else {
				echo "Unable to check user credit\n";
			}

		} else {
			echo "Error code: " . $ws->getError() . "\n";
			echo "Error string: " . $ws->getErrorString() . "\n";
		}

	}


	public function phonebook_combo($keywords){

		include 'Webservices.php';

		error_reporting(E_ALL ^ E_NOTICE);

		$ws = new Playsms\Webservices();

		$ws->url = playsmsURL;
		$ws->username = $_SESSION['session_login']['user'];
		$ws->password = $_SESSION['session_login']['password'];

		$ws->getToken();


		if ($ws->getStatus()) {

			$ws->token = $ws->getData()->token;
			$ws->keyword = $keywords;
			$ws->count = 1000;

			if($keywords[0]=='@'){
				$ws->getPhonebookGroups();
			}else{
				$ws->getPhonebookContacts();
			}

			$products_arr=array();
			$var =  $ws->getData();
			if($var->data != null){
				$total = count(($var->data));
				for($i=0; $i < $total; $i++){
					if($keywords[0]=='@'){
						$products_arr[]= array(
							"id"=>'#'.$var->data[$i]->code,
							"text"=>$var->data[$i]->group_name ."(". $var->data[$i]->code.")"
						);
					}else{
						$products_arr[]= array(
							"id"=>$var->data[$i]->p_num,
							"text"=>$var->data[$i]->p_desc ."(". $var->data[$i]->p_num.")"
						);
					}					
				}
			}else{
				$products_arr[]= array(
					"id"=>$keywords,
					"text"=>$keywords
				);
			}
			

			echo json_encode($products_arr, JSON_PRETTY_PRINT);

			//echo "Groups:\n";
			//$ws->getPhonebookGroups();
			//print_r($ws->getData()) . "\n";

		} else {
			echo "Error code: " . $ws->getError() . "\n";
			echo "Error string: " . $ws->getErrorString() . "\n";
		}
	}

	public function sendSMS(){
		include 'Webservices.php';

		error_reporting(E_ALL ^ E_NOTICE);

		$ws = new Playsms\Webservices();

		$ws->url = playsmsURL;
		$ws->username = $_SESSION['session_login']['user'];
		$ws->password = $_SESSION['session_login']['password'];

		$nomor = $_POST['p_num_text'];
		$pesan = $_POST['message'];
		$senderid = $_POST['sms_sender'];
		$footer = $_POST['sms_footer'];
		//$flash = $_POST['msg_flash'];
		//$unicode = $_POST['msg_unicode'];
		$schedule = $_POST['sms_schedule'];

		//echo "\ngetToken\n";
		$ws->getToken();
		//print_r($ws->getData());

		//echo "\n";

		if ($ws->getStatus()) {

			//echo "Send SMS:\n";
			$ws->token = $ws->getData()->token;
			$ws->to = $nomor;
			$ws->msg = $pesan;
			$ws->footer = $footer;
			$ws->schedule = $schedule;
			$ws->sendSms();
			print_r($ws->getData());

			$var =  $ws->getData();
			$total = count(($var->data));

			Flasher::setFlash('success', 'Your message has been delivered to queue (queued:'.$total.' failed:0)', 'success');
			header('location: ' . BASEURL . 'message');
			exit;

		} else {
			echo "Error code: " . $ws->getError() . "\n";
			echo "Error string: " . $ws->getErrorString() . "\n";
		}
	}

}