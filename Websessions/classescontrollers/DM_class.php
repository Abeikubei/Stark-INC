<?php
//connecting to DB
require(dirname(__FILE__))."/../Settings/db_class.php";

/**
*Manager class for everything manager related
*/
class manager_class extends db_connection
{
	/**
	*adding new manager (name, DOB, contact number and SeedFund)
	*/
	public function addmanager($a, $b, $c,$d){
		//sql query
		$sql = "INSERT INTO district_managers (`Manager_Name`,`DOB`,`Contact`,`DistrictID`) VALUES('$a', '$b', '$c','$d')";
		//return executed query
		return $this->db_query($sql);
	}

	public function searchdistrictm($name){
		//sql query
		$sql = "SELECT * FROM district_managers,districts where district_managers.DistrictID = districts.DistrictID and Manager_Name like '%$name%' or District_Name like '%$name%' ";
		//return executed query
		return $this->db_query($sql);
	}
    public function selectdistrict(){
		$sql = "SELECT * FROM districts";
		return $this->db_query($sql);
	}
	/**
	*view all manager info 
	*/
	public function viewmanager(){
		//sql query
		$sql = "SELECT * FROM district_managers,districts where district_managers.DistrictID = districts.DistrictID";
		//return executed query
		return $this->db_query($sql);
	}
	/**
	*view manager by id
	*/
	public function view_manager($pa){
		//sql query
		$sql = "SELECT * FROM district_managers WHERE ManagerID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update manager info 
	*/
	public function updatemanager($a, $b, $c, $d,$e){
		//sql query 
		$sql = "UPDATE district_managers SET Manager_Name=$b,DOB=$c,Contact=$d,DistrictID=$e WHERE ManagerID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete manager by id
	*/
	public function deletemanager($a){
		// sql query
		$sql = "DELETE FROM district_managers WHERE ManagerID=$a";
		//return executed query
		return $this->db_query($sql);
	}
}
?>
