<?php

class api extends Controller {

	public function APIcontact()
	{	
		$number=1;
		$data['contact'] = $this->model('api_model')->getContact();
		$products_arr=array();
		foreach ($data['contact'] as $contact ) :
			$products_arr['data'][]= array(
				$number,
				$contact['no'],
				$contact['nama'],
				$contact['alamat'],
				$contact['email']
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function APIgroup()
	{	
		$number=1;
		$data['contact'] = $this->model('api_model')->getGroup();
		$products_arr=array();
		foreach ($data['contact'] as $contact ) :
			$products_arr['data'][]= array(
				$number,
				$contact['group_id'],
				$contact['group_name'],
				$contact['group_des'],
				$contact['group_status']
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function APIinbox()
	{	
		$number=1;
		$data['contact'] = $this->model('api_model')->getInbox();
		$products_arr=array();
		foreach ($data['contact'] as $contact ) :
			if($contact['read_status'] == 0){
				$products_arr['data'][]= array(
					$number,
					"<p style='font-weight: bold'><a href='#'  data-toggle='modal' data-target='#myModal' data-id=".$contact['Id']." data-id2=".$contact['Pesan']." data-outlet=".$contact['Nomor'].">".$contact['Nomor']."</i></a></p>",
					"<p style='font-weight: bold'><b>".$contact['Pesan']."</b></p>",
					"<p style='font-weight: bold'><b>".$contact['Waktu']."</b></p>"
				);
			}else{
				$products_arr['data'][]= array(
					$number,
					"<a href='#'  data-toggle='modal' data-target='#myModal' data-id=".$contact['Id']." data-id2=".$contact['Pesan']." data-outlet=".$contact['Nomor'].">".$contact['Nomor']."</i></a>",
					$contact['Pesan'],
					$contact['Waktu']
				);
			}
			$number++;
			
			
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function APIsent()
	{	
		$number=1;
		$data['sent'] = $this->model('api_model')->getSent();
		$products_arr=array();
		foreach ($data['sent'] as $sent ) :
			$products_arr['data'][]= array(
				$number,
				$sent['Nomor'],
				$sent['Pesan'],
				$sent['Waktu']
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function APIread($id){
		$data['sent'] = $this->model('api_model')->getRead($id);
		foreach ($data['sent'] as $sent ) :
			$products_arr['datas'][]= array(
				'NO'=>$sent['in_sender'],
				'MSG'=>$sent['in_msg'],
				'WKT'=>$sent['in_datetime']
			);
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function UpdateInbox($id){
		$data['sent'] = $this->model('api_model')->UpdateInbox($id);
	}


	////----------------- new API ------------------///

	public function phonebook(){
		$number=1;
		$data['phonebook'] = $this->model('api_model')->getPhoneBook($_SESSION['session_login']['uid']);
		$products_arr=array();
		foreach ($data['phonebook'] as $phonebook ) :
			$products_arr['data'][]= array(
				$number,
				$phonebook['mobile'],
				$phonebook['name'],
				$phonebook['email'],
				$phonebook['tags'],
				$this->getGroup($phonebook['id']),
				"<div class='btn-group'>
                      <a href='#' data-toggle='modal' data-target='#modal-edit-contact' data-id=".$phonebook['id']." type='button' class='btn btn-default '><i class='fa fa-edit'></i></a>
                      <a href='#' data-toggle='modal' data-target='#modal-del-contact' data-id=".$phonebook['id']." type='button' class='btn btn-default '><i class='fa fa-trash'></i></a>
                </div>"
				
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function getGroup($id){
		$number=1;
		$data['group'] = $this->model('api_model')->getGroup($id);
		$isi_data = '';
		foreach ($data['group'] as $group ) :
			$isi_data = $isi_data."<p style='font-weight: bold'><a href='#'  data-toggle='modal' data-target='#modal-group' data-id=".$group['id']." data-outlet=".$group['name'].">".$group['code']."</i></a></p>";
		endforeach;

		return $isi_data;
	}

	public function phonebookgroup(){
		$number=1;
		$data['group'] = $this->model('api_model')->getPhoneBookGroup($_SESSION['session_login']['uid']);
		$products_arr=array();
		foreach ($data['group'] as $group ) :
			$products_arr['data'][]= array(
				$number,
				$group['name'],
				$group['code'],
				"<p style='font-weight: bold'><a href='#'  data-toggle='modal' data-target='#modal-group' data-id=".$group['id']." data-outlet=".$group['name'].">EDIT</a></p>"
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function inbox(){
		$number=1;
		$data['inbox'] = $this->model('api_model')->getInbox($_SESSION['session_login']['uid']);
		$products_arr=array();
		foreach ($data['inbox'] as $inbox ) :
			if($inbox['read_status']=="0"){
				$hasil = "<p style='font-weight: bold'><a href='#'  data-toggle='modal' data-target='#modal-read-message' data-id=".$inbox['in_id']." data-outlet=".$inbox['flag_deleted'].">".$inbox['in_sender']."<p>".$inbox['name']."</p></p>";
				$msg = "<p style='font-weight: bold'> ".$inbox['in_msg']." </p>";
				$dt = "<p style='font-weight: bold'> ".$inbox['in_datetime']." </p>";
			}else{
				$hasil = "<p><a href='#'  data-toggle='modal' data-target='#modal-read-message' data-id=".$inbox['in_id']." data-outlet=".$inbox['flag_deleted'].">".$inbox['in_sender']."<p>".$inbox['name']."</p></p>";
				$msg = "<p> ".$inbox['in_msg']." </p>";
				$dt = "<p> ".$inbox['in_datetime']." </p>";
			};
			$products_arr['data'][]= array(
				$number,
				$hasil,
				$msg,
				$dt,
				"<p style='font-weight: bold'><a href='#'  data-toggle='modal' data-target='#modal-reply-message' data-id=".$inbox['in_id']." data-outlet=".$inbox['flag_deleted']."><i class='fa fa-reply' title='reply'></i></a>
				<a href='#'  data-toggle='modal' data-target='#modal-del-Message' data-id=".$inbox['in_id']." data-outlet=".$inbox['flag_deleted']."><i class='fa fa-trash' title='delete'></i></a></p>"				
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function schedule(){
		$number=1;
		$data['schedule'] = $this->model('api_model')->getSchedule($_SESSION['session_login']['uid']);
		$products_arr=array();
		foreach ($data['schedule'] as $schedule ) :
			$products_arr['data'][]= array(
				$number,
				$schedule['datetime_scheduled'],
				$schedule['message'],
				$schedule['sms_count'],
				$schedule['footer'],
				"<p style='font-weight: bold'><a href='#'  data-toggle='modal' data-target='#modal-reply-message' data-id=".$schedule['id']." data-outlet=".$schedule['flag']."><i class='fa fa-reply' title='reply'></i></a>
				<a href='#'  data-toggle='modal' data-target='#modal-del-Message' data-id=".$schedule['id']." data-outlet=".$schedule['flag']."><i class='fa fa-trash' title='delete'></i></a></p>"				
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function outbox(){
		$number=1;
		$data['outbox'] = $this->model('api_model')->getOutbox($_SESSION['session_login']['uid']);
		$products_arr=array();
		foreach ($data['outbox'] as $outbox ) :
			if($outbox['p_status']==0){
				$status = "<p>".$outbox['p_msg']."</p><p style='text-align:right' class='bg bg-danger' title='Pending'>".$outbox['p_datetime']." </span><a class='col-md-1' href='#'  data-toggle='modal' data-target='#modal-forward-outbox' data-id=".$outbox['id']." data-outlet=".$outbox['p_dst']."><i class='fa fa-mail-forward' title='Forward'></i></a>
				<a class='col-md-1' href='#'  data-toggle='modal' data-target='#modal-resend-outbox' data-id=".$outbox['id']." data-outlet=".$outbox['p_dst']."><i class='fa fa-send-o' title='Resend'></i></a>
				<a class='col-md-1' href='#'  data-toggle='modal' data-target='#modal-del-outbox' data-id=".$outbox['id']." data-outlet=".$outbox['p_dst']."><i class='fa fa-trash' title='Delete'></i></a></p>";
			}else{
				$status = "<p>".$outbox['p_msg']."</p><p style='text-align:right' class='bg bg-info' title='Sent'>".$outbox['p_datetime']." </span><a class='col-md-1' href='#'  data-toggle='modal' data-target='#modal-forward-outbox' data-id=".$outbox['id']." data-outlet=".$outbox['p_dst']."><i class='fa fa-mail-forward' title='Forward'></i></a>
				<a class='col-md-1' href='#'  data-toggle='modal' data-target='#modal-resend-outbox' data-id=".$outbox['id']." data-outlet=".$outbox['p_dst']."><i class='fa fa-send-o' title='Resend'></i></a>
				<a class='col-md-1' href='#'  data-toggle='modal' data-target='#modal-del-outbox' data-id=".$outbox['id']." data-outlet=".$outbox['p_dst']."><i class='fa fa-trash' title='Delete'></i></div></a></p>";
			}	
			$products_arr['data'][]= array(
				$number,
				$outbox['p_dst'],
				$status
			);
			$number++;
		endforeach;
		echo json_encode($products_arr, JSON_PRETTY_PRINT);
	}

	public function getDataPhonebook($id){
		$data['sent'] = $this->model('api_model')->getDataPhonebook($id);

		$createJSON['datas'] = $data['sent'];
		
		echo json_encode($createJSON, JSON_PRETTY_PRINT);
	}

	public function getDataOutbox($id){
		$data['outbox'] = $this->model('api_model')->getDataOutbox($id);

		$createJSON['datas'] = $data['outbox'];
		
		echo json_encode($createJSON, JSON_PRETTY_PRINT);
	}


	public function comboGroup(){
		$data['group'] = $this->model('api_model')->getPhoneBookGroup($_SESSION['session_login']['uid']);
		$datas = "<option value='0'>--No Group--</option>";
		foreach ($data['group'] as $group ) :
			$datas = $datas."<option value=".$group['id'].">".$group['name']." - code : ".$group['code']."</option>";
		endforeach;
		echo $datas;
	}

	public function addcontact(){
		if(isset($_POST['pilihgroup'])){
			$group = $_POST['pilihgroup'];
		}else{
			$group = 0;
		}
		
		$add['result'] = $this->model('api_model')->saveContact($_SESSION['session_login']['uid'],$_POST['mobile'],$_POST['names'],$_POST['email'],$_POST['tag'],$group);

		//$data['group'] = $this->model('api_model')->getPhoneBookGroup($_SESSION['session_login']['uid']);
		//$datas = "<option value=''>--No Group--</option>";
		//foreach ($data['group'] as $group ) :
		//	$datas = $datas."<option value=".$group['id'].">".$group['name']." - code : ".$group['code']."</option>";
		//endforeach;
		//echo $datas;
	}

	public function delcontact(){
		if(isset($_POST['pid'])){
			$this->model('api_model')->delContact($_POST['pid']);
		};
	}

	public function deloutbox(){
		if(isset($_POST['idOutbox'])){
			$this->model('api_model')->deloutbox($_POST['idOutbox']);
		};
	}

	public function tests(){
		echo $_SESSION['session_login']['pass'];
	}
}
