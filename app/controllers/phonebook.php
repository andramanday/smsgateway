<?php

class phonebook extends Controller {

	public function index(){
		$data['title'] = 'phonebook';
		$data['subtitle'] = 'contact';
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('phonebook/contact', $data);        
		$this->view('template/footer', $data);
	}
	
	public function group(){
		$data['title'] = 'phonebook';
		$data['subtitle'] = 'group';
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('phonebook/group', $data);        
		$this->view('template/footer', $data);
	}
	
	public function import(){
		$data['title'] = 'phonebook';
		$data['subtitle'] = 'import';
		$this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('phonebook/import', $data);        
		$this->view('template/footer', $data);
	}
	
	public function importpb() {
		$gagal = 0;
		$berhasil = 0;
		$uid = $_SESSION['session_login']['uid'];
		if(isset($_POST["Import"])){
    
			$filename=$_FILES["file"]["tmp_name"];    
			 if($_FILES["file"]["size"] > 0)
			 {
				$file = fopen($filename, "r");
				while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
					//check nomor phonebook, jika tidak ada

					if($getData[0]!="Nama"){

						$data = $this->model('api_model')->checkMobile($_SESSION['session_login']['uid'], $getData[1]);

						if($data != 0 ){
							$gagal = $gagal+1;
						}else{
							//simpan kontak baru
							$berhasil = $berhasil+1;
							$data['simpan_kontak'] = $this->model('api_model')->InserImportpb($uid, $getData[0],$getData[1],$getData[2],$getData[4]);
							
							//check group
							if(!is_null($getData[3])){
								if( $this->model('api_model')->checkCodeGroup($uid, $getData[3]) > 0 ){
									$data['simpan_group'] = $this->model('api_model')->InsertGrouppb($uid, $getData[1],$getData[3]);
								}
							}
						}
					}
				}
				
				Flasher::setFlash('success', "Upload berhasil : $berhasil, Gagal : $gagal", 'success');
				header('location: ' . BASEURL . 'phonebook');
				exit;
			  
				fclose($file);  
			 }
		  }  
	}
	
	
	public function exportpb() {
     
			header('Content-Type: text/csv; charset=utf-8');  
			header('Content-Disposition: attachment; filename=data.csv');  
			$output = fopen("php://output", "w");  
			fputcsv($output, array('Nama', 'Ponsel', 'email', 'Tag'));  
			//$query = "SELECT * from employeeinfo ORDER BY emp_id DESC";  
			$data['phonebook'] = $this->model('api_model')->getPhoneBookexport($_SESSION['session_login']['uid']);
			foreach($data['phonebook'] as $phonebook):
				fputcsv($output, $phonebook); 
			endforeach;

			fclose($output);  
			//$result = mysqli_query($con, $query);  
			//while($row = mysqli_fetch_assoc($result))  
			//{  
				  
			//}  
	}

}