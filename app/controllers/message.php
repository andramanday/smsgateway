<<<<<<< HEAD
<?php

class message extends Controller {

	public function index(){
		if (empty($_SESSION['session_login'])){
			$data['judul'] = 'login';
			$this->view('login/index', $data);
		}else{
		$data['title'] = 'message';
		$data['subtitle'] = 'inbox';
		$data['unread'] = $this->model('message_model')->getUnreadCount($_SESSION['session_login']['uid']);
		$data['schedule'] = $this->model('message_model')->getschedulecount($_SESSION['session_login']['uid']);
		$this->view('template/header', $data);
		$this->view('template/sidebar', $data);
		$this->view('message/inbox', $data);        
		$this->view('template/footer', $data);		
		}
	}

	public function outbox(){
		$data['title'] = 'message';
		$data['subtitle'] = 'sent';
		$data['unread'] = $this->model('message_model')->getUnreadCount($_SESSION['session_login']['uid']);
		$data['schedule'] = $this->model('message_model')->getschedulecount($_SESSION['session_login']['uid']);
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('message/outbox', $data);        
		$this->view('template/footer', $data);
	}

	public function schedule(){
		$data['title'] = 'message';
		$data['subtitle'] = 'schedule';
		$data['unread'] = $this->model('message_model')->getUnreadCount($_SESSION['session_login']['uid']);
		$data['schedule'] = $this->model('message_model')->getschedulecount($_SESSION['session_login']['uid']);
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('message/schedule', $data);        
		$this->view('template/footer', $data);
	}

	public function send(){
		include 'Webservices.php';

		error_reporting(E_ALL ^ E_NOTICE);

		$ws = new Playsms\Webservices();

		$ws->url = playsmsURL;
		$ws->username = playsmsUSER;
		$ws->password = playsmsPASS;

		echo "\ngetToken\n";
		$ws->getToken();
		print_r($ws->getData());

		echo "\n";

		if ($ws->getStatus()) {

			echo "Send SMS:\n";
			$ws->token = $ws->getData()->token;
			$ws->to = $_POST['p_num_text'];
			$ws->msg = $_POST['message'] . time();
			$ws->schedule = $_POST['sms_schedule'];
			$ws->sendSms();
			print_r($ws->getData());

		} else {
			echo "Error code: " . $ws->getError() . "\n";
			echo "Error string: " . $ws->getErrorString() . "\n";
		}
	}


	public function test(){
		
		echo "nomor :",$_POST['p_num_text'],"<br>";
		echo "Pesan :", $_POST['message'],"<br>";
		echo "senderid :", $_POST['sms_sender'],"<br>";
		echo "footer :", $_POST['sms_footer'],"<br>";
		echo "flash :", $_POST['msg_flash'],"<br>";
		echo "unicode :", $_POST['msg_unicode'],"<br>";
		echo "schedule :", $_POST['sms_schedule'],"<br>";
	}

	public function readmail(){
		$data['title'] = 'mailbox';
		//$data['nama'] = $this->model('User_model')->getUser();
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('mailbox/readmail', $data);        
		$this->view('template/footer', $data);
		//$this->view('home/index', $data);
		//$this->view('templates/footer');
	}
=======
<?php

class message extends Controller {

	public function index(){
		if (empty($_SESSION['session_login'])){
			$data['judul'] = 'login';
			$this->view('login/index', $data);
		}else{
		$data['title'] = 'message';
		$data['subtitle'] = 'inbox';
		$data['unread'] = $this->model('message_model')->getUnreadCount($_SESSION['session_login']['uid']);
		$data['schedule'] = $this->model('message_model')->getschedulecount($_SESSION['session_login']['uid']);
		$this->view('template/header', $data);
		$this->view('template/sidebar', $data);
		$this->view('message/inbox', $data);        
		$this->view('template/footer', $data);		
		}
	}

	public function outbox(){
		$data['title'] = 'message';
		$data['subtitle'] = 'sent';
		$data['unread'] = $this->model('message_model')->getUnreadCount($_SESSION['session_login']['uid']);
		$data['schedule'] = $this->model('message_model')->getschedulecount($_SESSION['session_login']['uid']);
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('message/outbox', $data);        
		$this->view('template/footer', $data);
	}

	public function schedule(){
		$data['title'] = 'message';
		$data['subtitle'] = 'schedule';
		$data['unread'] = $this->model('message_model')->getUnreadCount($_SESSION['session_login']['uid']);
		$data['schedule'] = $this->model('message_model')->getschedulecount($_SESSION['session_login']['uid']);
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('message/schedule', $data);        
		$this->view('template/footer', $data);
	}

	public function send(){
		include 'Webservices.php';

		error_reporting(E_ALL ^ E_NOTICE);

		$ws = new Playsms\Webservices();

		$ws->url = playsmsURL;
		$ws->username = playsmsUSER;
		$ws->password = playsmsPASS;

		echo "\ngetToken\n";
		$ws->getToken();
		print_r($ws->getData());

		echo "\n";

		if ($ws->getStatus()) {

			echo "Send SMS:\n";
			$ws->token = $ws->getData()->token;
			$ws->to = $_POST['p_num_text'];
			$ws->msg = $_POST['message'] . time();
			$ws->schedule = $_POST['sms_schedule'];
			$ws->sendSms();
			print_r($ws->getData());

		} else {
			echo "Error code: " . $ws->getError() . "\n";
			echo "Error string: " . $ws->getErrorString() . "\n";
		}
	}


	public function test(){
		
		echo "nomor :",$_POST['p_num_text'],"<br>";
		echo "Pesan :", $_POST['message'],"<br>";
		echo "senderid :", $_POST['sms_sender'],"<br>";
		echo "footer :", $_POST['sms_footer'],"<br>";
		echo "flash :", $_POST['msg_flash'],"<br>";
		echo "unicode :", $_POST['msg_unicode'],"<br>";
		echo "schedule :", $_POST['sms_schedule'],"<br>";
	}

	public function readmail(){
		$data['title'] = 'mailbox';
		//$data['nama'] = $this->model('User_model')->getUser();
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('mailbox/readmail', $data);        
		$this->view('template/footer', $data);
		//$this->view('home/index', $data);
		//$this->view('templates/footer');
	}
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}