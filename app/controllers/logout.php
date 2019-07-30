<<<<<<< HEAD
<?php

class logout extends Controller {

	public function index(){
		unset($_SESSION);
        session_destroy();

        header('location: ' . BASEURL);
		exit;
	}
=======
<?php

class logout extends Controller {

	public function index(){
		unset($_SESSION);
        session_destroy();

        header('location: ' . BASEURL);
		exit;
	}
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}