<?php

class template extends Controller {
	public function index(){
		$data['judul'] = 'template';
		//$data['nama'] = $this->model('User_model')->getUser();
		//$this->view('templates/header', $data);
		$this->view('template/index', $data);
		//$this->view('templates/footer');
	}
}