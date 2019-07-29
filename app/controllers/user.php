<?php

class user extends Controller {

	public function index(){
		$data['title'] = 'user';
		$data['data'] = $this->model('user_model')->getUserProfile($_SESSION['session_login']['uid']);
		$data['country'] = $this->model('user_model')->getCountry();
		$this->view('template/header', $data);
		$this->view('template/sidebar', $data);
		$this->view('user/profile', $data);        
		$this->view('template/footer', $data);		
	}

	public function UpdateUser(){
		if(isset($_POST['submit'])){
			if (isset ($_FILES['new_image'])){

				$file = $_FILES['new_image']['name'];
				$a = pathinfo($file);

				$basename = $_SESSION['session_login']['uid'];
				$filename = $a['filename'];
				$extension = $a['extension'];

				$path = $_SERVER['DOCUMENT_ROOT'].'/styles/data/profile/'; # set upload directory
				$dest = $path.$basename;

				if(file_exists($dest))
				{
					$b = count(glob($path.$filename.'*.'.$extension))+1; # all matches + 1
					for($i = 1; $i < $b; $i++)
					{
						if(!file_exists($path.$filename.$i.'.'.$extension))
						{
							unlink('DIRNAME'.DIRECTORY_SEPARATOR.$dest.'.'.$extension); //delete it
							//move_uploaded_file($_FILES['new_image']['tmp_name'],$path.$filename.$i.'.'.$extension);
							move_uploaded_file($_FILES['new_image']['tmp_name'],$dest.'.'.$extension);

							list($width, $height) = getimagesize($dest.'.'.$extension) ;
		
							$modwidth = 150;
			
							$diff = $width / $modwidth;
			
							$modheight = $height / $diff;
							$tn = imagecreatetruecolor($modwidth, $modheight) ;
							$image = imagecreatefromjpeg($dest.'.'.$extension) ;
							imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
			
							imagejpeg($tn, $dest.'.'.$extension, 100) ;
						}
					}
				}
				else
				{
					move_uploaded_file($_FILES['new_image']['tmp_name'],$dest.'.'.$extension);

					list($width, $height) = getimagesize($dest.'.'.$extension) ;
  
					$modwidth = 150;
	
					$diff = $width / $modwidth;
	
					$modheight = $height / $diff;
					$tn = imagecreatetruecolor($modwidth, $modheight) ;
					$image = imagecreatefromjpeg($dest.'.'.$extension) ;
					imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
	
					imagejpeg($tn, $dest.'.'.$extension, 100) ;
				}
  
			}

			//$this->model('user_model')->updateUser($_SESSION['session_login']['uid']);

		  }
	}
}