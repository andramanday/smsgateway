<<<<<<< HEAD
<?php

class user_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getUserProfile($uid){
		$this->db->query("SELECT * FROM playsms_tblUser where uid='$uid'");
		return $this->db->resultSet();
	}

	public function getCountry(){
		$this->db->query("SELECT * FROM playsms_tblCountry");
		return $this->db->resultSet();
	}

}
=======
<?php

class user_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getUserProfile($uid){
		$this->db->query("SELECT * FROM playsms_tblUser where uid='$uid'");
		return $this->db->resultSet();
	}

	public function getCountry(){
		$this->db->query("SELECT * FROM playsms_tblCountry");
		return $this->db->resultSet();
	}

}
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
