<?php

class logout extends Controller {

	public function index(){
		unset($_SESSION);
        session_destroy();

        header('location: ' . BASEURL);
		exit;
	}
}