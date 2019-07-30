<<<<<<< HEAD
<?php

class Main_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	//START INDEX//

	public function getProvinces(){
		$this->db->query('SELECT DISTINCT p.* FROM provinces p JOIN building_tbl b WHERE p.id=b.province_building');
		return $this->db->resultSet();
	}

	public function getCategoriesBuilding(){
		$this->db->query('SELECT * FROM categories_tbl WHERE type=1');
		return $this->db->resultSet();
	}

	//END INDEX//
//--------------------------------------------------------------------------------------------//
	//START REGENNCIES//

	public function getRegencies($prov_id){
		$this->db->query('SELECT * FROM regencies where province_id=:prov_id');
		$this->db->bind('prov_id', $prov_id);
		return $this->db->resultSet();
	}

	//END REGENCIES//
//--------------------------------------------------------------------------------------------//
	//START RESULT//

	public function getResult($data){
		$this->db->query('SELECT * FROM building_tbl WHERE province_building=:province AND city_building=:city ');
		$this->db->bind('province', $data['provinces']);
		$this->db->bind('city', $data['regencies']);
		return $this->db->resultSet();
	}

	public function getCount($data){
		$query = "SELECT * FROM building_tbl WHERE province_building=:province AND city_building=:city";

		$this->db->query($query);
		$this->db->bind('province', $data['provinces']);
		$this->db->bind('city', $data['regencies']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	//END RESULT//
//--------------------------------------------------------------------------------------------//
	//START DENAH//



	//END DENAH//

	public function getCategoriesStall(){
		$this->db->query('SELECT * FROM categories_tbl WHERE type=1');
		return $this->db->resultSet();
	}

	public function getFloors($id){
		$this->db->query('SELECT * FROM floor_tbl where id_building=:id');
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	public function getStall($id){
		$this->db->query('SELECT * FROM location_tbl where floorID=:id');
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	public function getStallCount($id){
		$this->db->query('SELECT * FROM location_tbl where floorID=:id');
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}
	
	

	

	public function getdistrict($reg_id){
		$this->db->query('SELECT * FROM districts where regency_id=:reg_id');
		$this->db->bind('reg_id', $reg_id);
		return $this->db->resultSet();
	}
	

	

	public function getStallFlor($building_id, $building_floor){
		$query = "SELECT * FROM stall_tbl WHERE id_building=:building_id AND floors_stall=:building_floor";
		$this->db->query($query);
		$this->db->bind('building_id', $building_id);
		$this->db->bind('building_floor', $building_floor);
		return $this->db->resultSet();
	}

	public function tambahDataMahasiswa($data){
		$query = "INSERT INTO stall_tbl VALUES(:stall_id, :building_id, '', :stall_path, '1','4','','')";

		$this->db->query($query);
		$this->db->bind('stall_id', $data['stall_id']);
		$this->db->bind('building_id', $data['building_id']);
		$this->db->bind('stall_path', $data['stall_path']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	
=======
<?php

class Main_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	//START INDEX//

	public function getProvinces(){
		$this->db->query('SELECT DISTINCT p.* FROM provinces p JOIN building_tbl b WHERE p.id=b.province_building');
		return $this->db->resultSet();
	}

	public function getCategoriesBuilding(){
		$this->db->query('SELECT * FROM categories_tbl WHERE type=1');
		return $this->db->resultSet();
	}

	//END INDEX//
//--------------------------------------------------------------------------------------------//
	//START REGENNCIES//

	public function getRegencies($prov_id){
		$this->db->query('SELECT * FROM regencies where province_id=:prov_id');
		$this->db->bind('prov_id', $prov_id);
		return $this->db->resultSet();
	}

	//END REGENCIES//
//--------------------------------------------------------------------------------------------//
	//START RESULT//

	public function getResult($data){
		$this->db->query('SELECT * FROM building_tbl WHERE province_building=:province AND city_building=:city ');
		$this->db->bind('province', $data['provinces']);
		$this->db->bind('city', $data['regencies']);
		return $this->db->resultSet();
	}

	public function getCount($data){
		$query = "SELECT * FROM building_tbl WHERE province_building=:province AND city_building=:city";

		$this->db->query($query);
		$this->db->bind('province', $data['provinces']);
		$this->db->bind('city', $data['regencies']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	//END RESULT//
//--------------------------------------------------------------------------------------------//
	//START DENAH//



	//END DENAH//

	public function getCategoriesStall(){
		$this->db->query('SELECT * FROM categories_tbl WHERE type=1');
		return $this->db->resultSet();
	}

	public function getFloors($id){
		$this->db->query('SELECT * FROM floor_tbl where id_building=:id');
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	public function getStall($id){
		$this->db->query('SELECT * FROM location_tbl where floorID=:id');
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	public function getStallCount($id){
		$this->db->query('SELECT * FROM location_tbl where floorID=:id');
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}
	
	

	

	public function getdistrict($reg_id){
		$this->db->query('SELECT * FROM districts where regency_id=:reg_id');
		$this->db->bind('reg_id', $reg_id);
		return $this->db->resultSet();
	}
	

	

	public function getStallFlor($building_id, $building_floor){
		$query = "SELECT * FROM stall_tbl WHERE id_building=:building_id AND floors_stall=:building_floor";
		$this->db->query($query);
		$this->db->bind('building_id', $building_id);
		$this->db->bind('building_floor', $building_floor);
		return $this->db->resultSet();
	}

	public function tambahDataMahasiswa($data){
		$query = "INSERT INTO stall_tbl VALUES(:stall_id, :building_id, '', :stall_path, '1','4','','')";

		$this->db->query($query);
		$this->db->bind('stall_id', $data['stall_id']);
		$this->db->bind('building_id', $data['building_id']);
		$this->db->bind('stall_path', $data['stall_path']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}