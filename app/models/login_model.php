<<<<<<< HEAD
<?php

class login_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getLogin($username, $password){
        $query = $this->db->query("SELECT * FROM playsms_tblUser WHERE username='$username' AND password=md5('$password')");
		$this->db->execute();   
		     
        return [$this->db->rowCount(), $this->db->resultSet()];
	}

=======
<?php

class login_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getLogin($username, $password){
        $query = $this->db->query("SELECT * FROM playsms_tblUser WHERE username='$username' AND password=md5('$password')");
		$this->db->execute();   
		     
        return [$this->db->rowCount(), $this->db->resultSet()];
	}

>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}