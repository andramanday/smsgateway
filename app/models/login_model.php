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

}