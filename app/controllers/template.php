<<<<<<< HEAD
<?php

class template extends Controller {
	public function index(){
		$data['judul'] = 'template';
		//$data['nama'] = $this->model('User_model')->getUser();
		//$this->view('templates/header', $data);
		$this->view('template/index', $data);
		//$this->view('templates/footer');
	}
=======
<?php

class template extends Controller {
	public function index(){
		$data['judul'] = 'template';
		//$data['nama'] = $this->model('User_model')->getUser();
		//$this->view('templates/header', $data);
		$this->view('template/index', $data);
		//$this->view('templates/footer');
	}
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}