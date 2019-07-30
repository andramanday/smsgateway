<<<<<<< HEAD
<?php

class message_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getUnreadCount($uid){
		$this->db->query("SELECT s.*, p.name FROM playsms_tblSMSInbox s JOIN playsms_featurePhonebook p ON s.in_sender=CONCAT(REPLACE(LEFT(p.mobile,1), '0', '+62'),SUBSTRING(p.mobile, 2, CHAR_LENGTH(p.mobile))) AND p.uid='$uid' AND s.in_uid='3' AND s.in_msg<>'Delivered' AND s.in_msg<>'Failed' AND read_status=0 order by in_datetime desc");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getschedulecount($uid){
		$this->db->query("SELECT * FROM playsms_tblSMSOutgoing_queue  WHERE uid='$uid' AND flag='3'");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getReadmsg($id){
		$this->db->query("SELECT Pesan FROM inbox where Id='$id'");
		$this->db->execute();
		$result = $this->db->resultSet();

		foreach ($result as $result) :
			return $result['Pesan'];
		endforeach;
	}
	
=======
<?php

class message_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getUnreadCount($uid){
		$this->db->query("SELECT s.*, p.name FROM playsms_tblSMSInbox s JOIN playsms_featurePhonebook p ON s.in_sender=CONCAT(REPLACE(LEFT(p.mobile,1), '0', '+62'),SUBSTRING(p.mobile, 2, CHAR_LENGTH(p.mobile))) AND p.uid='$uid' AND s.in_uid='3' AND s.in_msg<>'Delivered' AND s.in_msg<>'Failed' AND read_status=0 order by in_datetime desc");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getschedulecount($uid){
		$this->db->query("SELECT * FROM playsms_tblSMSOutgoing_queue  WHERE uid='$uid' AND flag='3'");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getReadmsg($id){
		$this->db->query("SELECT Pesan FROM inbox where Id='$id'");
		$this->db->execute();
		$result = $this->db->resultSet();

		foreach ($result as $result) :
			return $result['Pesan'];
		endforeach;
	}
	
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}