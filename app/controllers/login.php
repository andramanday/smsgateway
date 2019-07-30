<<<<<<< HEAD
<?php

class Login extends Controller {

	public function index(){
		if(!empty($_SESSION['session_login'])){
			header('location: ' . BASEURL . 'message');
			exit;
		}else{
			$data['judul'] = 'login';
			$this->view('login/index', $data);
		}
		
	}

	public function checklogin(){

		$authenticationlogin= $data['nama'] = $this->model('login_model')->getLogin($_POST['user'], $_POST['pass']);

		if ($authenticationlogin[0] < 1){
			Flasher::setFlash('failed', 'id tidak falid', 'danger');
			header('location: ' . BASEURL . 'Login');
			exit;
		}else{
			foreach ($authenticationlogin[1] as $user ) :
				$_SESSION['session_login'] = [
					'user' => $_POST['user'],
					'password' => $_POST['pass'],
					'uid' => $user['uid']
				];
			endforeach;
			header('location: ' . BASEURL . 'message');
		}

	}
=======
<?php

class Login extends Controller {

	public function index(){
		if(!empty($_SESSION['session_login'])){
			header('location: ' . BASEURL . 'message');
			exit;
		}else{
			$data['judul'] = 'login';
			$this->view('login/index', $data);
		}
		
	}

	public function checklogin(){

		$authenticationlogin= $data['nama'] = $this->model('login_model')->getLogin($_POST['user'], $_POST['pass']);

		if ($authenticationlogin[0] < 1){
			Flasher::setFlash('failed', 'id tidak falid', 'danger');
			header('location: ' . BASEURL . 'Login');
			exit;
		}else{
			foreach ($authenticationlogin[1] as $user ) :
				$_SESSION['session_login'] = [
					'user' => $_POST['user'],
					'password' => $_POST['pass'],
					'uid' => $user['uid']
				];
			endforeach;
			header('location: ' . BASEURL . 'message');
		}

	}
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}