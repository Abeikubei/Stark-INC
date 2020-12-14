<?php
//connecting to DB
require(dirname(__FILE__))."/../Settings/db_class.php";

/**
*District class for everything district related
*/
class district_class extends db_connection
{
	/**
	*adding new district (name, Region and Vehicle_Number)
	*/
	public function adddistrict($a, $b, $c,$d){
		//sql query
		$sql = "INSERT INTO districts (`District_Name`,`Region`,`VehicleID`,`Vehicle_Number`) VALUES('$a', '$b', '$c','$d')";
		//return executed query
		return $this->db_query($sql);
	}

    public function searchdistrict($name){
		//sql query
		$sql = "SELECT * FROM districts where District_Name like '%$name%'";
		//return executed query
		return $this->db_query($sql);
	}
	
	/**
	*view all manager info 
	*/
	public function viewdistrict(){
		//sql query
		$sql = "SELECT * FROM districts";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view manager by id
	*/
	public function view_district($pa){
		//sql query
		$sql = "SELECT * FROM districts WHERE DistrictID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update manager info 
	*/
	public function updatedistrict($a, $b, $c, $d,$e){
		//sql query 
		$sql = "UPDATE districts SET District_Name=$b,Region=$c,VehicleID=$d,Vehicle_Number=$e WHERE DistrictID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete manager by id
	*/
	public function deletedistrict($a){
		// sql query
		$sql = "DELETE FROM districts WHERE DistrictID= '$a'";
		//return executed query
		return $this->db_query($sql);
	}
}

?>
