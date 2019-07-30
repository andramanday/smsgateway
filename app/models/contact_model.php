<<<<<<< HEAD
<?php

class contact_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getContact(){
		$this->db->query("SELECT * FROM tbl_contact");
		return $this->db->resultSet();
	}

	public function getGroup(){
		$this->db->query("SELECT * FROM tbl_group");
		return $this->db->resultSet();
	}

=======
<?php

class contact_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getContact(){
		$this->db->query("SELECT * FROM tbl_contact");
		return $this->db->resultSet();
	}

	public function getGroup(){
		$this->db->query("SELECT * FROM tbl_group");
		return $this->db->resultSet();
	}

>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}