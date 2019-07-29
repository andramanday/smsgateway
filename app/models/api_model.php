<?php

class api_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getContact(){
		$this->db->query("SELECT * FROM tbl_contact");
		return $this->db->resultSet();
	}

	public function getSent(){
		$this->db->query("SELECT * FROM outbox where Status='1'");
		return $this->db->resultSet();
	}

	public function getRead($id){
		$this->db->query("SELECT * FROM playsms_tblSMSInbox where in_id='$id'");
		return $this->db->resultSet();
	}

	public function UpdateInbox($id){
		$this->db->query("UPDATE playsms_tblSMSInbox SET read_status='1' WHERE in_id='$id'");
		return $this->db->resultSet();
	}

	///------- new api--------//

	public function getPhoneBook($id){
		$this->db->query("SELECT * FROM  playsms_featurePhonebook WHERE uid='$id'");

		return $this->db->resultSet();
	}

	public function InserImportpb($uid,$name,$mobile,$email,$tags){
		$this->db->query("INSERT into playsms_featurePhonebook (uid,name,mobile,email,tags) values ('$uid','$name','$mobile','$email','$tags')");

		return $this->db->resultSet();
	}

	public function checkMobile($uid,$mobile){
		$this->db->query("SELECT * FROM playsms_featurePhonebook WHERE uid='$uid' AND mobile='$mobile'");
		$this->db->execute();

		echo $mobile,"<br>";


		return $this->db->rowCount();
	}

	public function checkCodeGroup($uid,$code){
		$this->db->query("SELECT * FROM playsms_featurePhonebook_group WHERE uid='$uid' AND code='$code')");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function InsertGrouppb($uid,$mobile,$code){
		
		//check id contact yang baru di save
		$uid = '';
		$this->db->query("SELECT * FROM  playsms_featurePhonebook WHERE uid='$uid' AND mobile='$mobile'");
		$data['data'] = $this->db->resultSet();
		foreach ($data['data'] as $isi ) :
			$uid = $isi['id'];
		endforeach;

		$gid = '';
		$this->db->query("SELECT * FROM  playsms_featurePhonebook_group WHERE uid='$uid' AND code='$code'");
		$data['data'] = $this->db->resultSet();
		foreach ($data['data'] as $isi ) :
			$gid = $isi['id'];
		endforeach;

		//insert table join playsms_featurePhonebook_group_contacts
		$query = "INSERT INTO playsms_featurePhonebook_group_contacts (gpid,pid) VALUES ('$gid','$uid')";
		$this->db->query($query);
		$this->db->execute();

	}
	

	public function getPhoneBookexport($id){
		$this->db->query("SELECT name,mobile,email,tags FROM  playsms_featurePhonebook WHERE uid='$id'");

		return $this->db->resultSet();
	}

	public function getGroup($id){
		$this->db->query("SELECT g.* 
		FROM 
			playsms_featurePhonebook p, playsms_featurePhonebook_group_contacts j, playsms_featurePhonebook_group g
		WHERE 
			p.id=j.pid AND j.gpid=g.id  AND p.id='$id'");

		return $this->db->resultSet();
	}

	public function getPhoneBookGroup($id){
		$this->db->query("SELECT * FROM  playsms_featurePhonebook_group WHERE uid='$id'");

		return $this->db->resultSet();
	}

	public function getInbox($id){
		$this->db->query("SELECT s.*, p.name FROM playsms_tblSMSInbox s JOIN playsms_featurePhonebook p ON s.in_sender=CONCAT(REPLACE(LEFT(p.mobile,1), '0', '+62'),SUBSTRING(p.mobile, 2, CHAR_LENGTH(p.mobile))) AND p.uid='$id' AND s.in_uid='3' AND s.in_msg<>'Delivered' AND s.in_msg<>'Failed' order by in_datetime desc");
		return $this->db->resultSet();
	}

	public function getSchedule($id){
		$this->db->query("SELECT * FROM playsms_tblSMSOutgoing_queue WHERE uid='$id' AND flag='3' order by datetime_scheduled desc");
		return $this->db->resultSet();
	}

	public function getOutbox($id){
		$this->db->query("SELECT * FROM gatewaysms.playsms_tblSMSOutgoing where uid='$id' order by p_datetime desc");
		return $this->db->resultSet();
	}

	public function getDataPhonebook($id){
		$this->db->query("SELECT * FROM  playsms_featurePhonebook WHERE id='$id'");

		return $this->db->resultSet();
	}

	public function getDataOutbox($id){
		$this->db->query("SELECT * FROM  playsms_tblSMSOutgoing WHERE id='$id'");

		return $this->db->resultSet();
	}

	public function saveContact($uid, $no, $name, $email, $tag, $group){
		//check nomor mobile sudah ada atau belum
		$query = "SELECT * FROM playsms_featurePhonebook WHERE mobile=:mobile";
		$this->db->query($query);
		$this->db->bind('mobile', $no);
		$this->db->execute();

		if($this->db->rowCount()!=0){
			Flasher::setFlash('failed', 'mobile number '.$no.' already', 'danger');
			header('location: ' . BASEURL . 'phonebook');
			exit();
		}else{
			$query = "INSERT INTO playsms_featurePhonebook (uid,mobile,name,email,tags) VALUES ('$uid','$no','$name','$email','$tag')";
			$this->db->query($query);
			$this->db->execute();
		};

		//check id contact yang baru di save
		$id = '';
		$this->db->query("SELECT * FROM  playsms_featurePhonebook WHERE mobile='$no'");
		$data['data'] = $this->db->resultSet();
		foreach ($data['data'] as $isi ) :
			$id = $isi['id'];
		endforeach;

		//insert table join playsms_featurePhonebook_group_contacts
		$query = "INSERT INTO playsms_featurePhonebook_group_contacts (gpid,pid) VALUES ('$group','$id')";
		$this->db->query($query);
		$this->db->execute();

		//pesan berhasil save contact baru
		Flasher::setFlash('Succes', 'mobile number '.$no.' add', 'success');
		header('location: ' . BASEURL . 'phonebook');
		exit();


	}

	public function delContact($id){
		//delete table join playsms_featurePhonebook_group_contacts
		$query = "DELETE FROM playsms_featurePhonebook WHERE id='$id'";
		$this->db->query($query);
		$this->db->execute();

		//delete table join playsms_featurePhonebook_group_contacts
		$query = "INSERT INTO playsms_featurePhonebook_group_contacts  WHERE pid='$id'";
		$this->db->query($query);
		$this->db->execute();

		Flasher::setFlash('Succes', 'mobile number deleted', 'success');
		header('location: ' . BASEURL . 'phonebook');
		exit();

	}

	public function deloutbox($id){
		//delete table playsms_tblSMSOutgoing
		$query = "DELETE FROM playsms_tblSMSOutgoing WHERE id='$id'";
		$this->db->query($query);
		$this->db->execute();

		Flasher::setFlash('Succes', 'mobile number deleted', 'success');
		header('location: ' . BASEURL . 'message/outbox');
		exit();

	}

}
