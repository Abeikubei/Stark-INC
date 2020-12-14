<?php
//connecting to DB
require(dirname(__FILE__))."/../Settings/db_class.php";

/**
*Farmer class for everything customer related
*/
class farmer_class extends db_connection
{
	/**
	*adding new farmer (name,Gender,DOB, contact number and Residence)
	*/
	public function addfarmer($a,$b,$c,$d,$e,$f,$g){
		//sql query
		$sql = "INSERT INTO farmers (`Farmer_Name`,`Gender`,`DOB`,`Contact`,`Family_Relative_Name`,`Family_Relative_Contact`,`Residence`) VALUES('$a', '$b', '$c', '$d','$e','$f','$g')";
		//return executed query
		return $this->db_query($sql);
	}
	public function searchfarmer($name){
		//sql query
		$sql = "SELECT * FROM farmers where Farmer_Name like '%$name%' or Residence like '%$name%' or Family_Relative_Name like '%$name%' ";
		//return executed query
		return $this->db_query($sql);
	}
	/**
	*view all farmer info 
	*/
	public function viewfarmer(){
		//sql query
		$sql = "SELECT * FROM farmers";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view farmer by id
	*/
	public function view_farmer($pa){
		//sql query
		$sql = "SELECT * FROM farmers WHERE FarmerID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update farmer info 
	*/
	public function updatefarmer($a, $b, $c, $d,$e,$f,$g,$h){
		//sql query 
		$sql = "UPDATE farmers SET Farmer_Name=$b,Gender=$c,DOB=$d,Contact=$e,Family_Relative_Name=$f,Family_Relative_Contact=$g,Residence=$h WHERE FarmerID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete farmer by id
	*/
	public function deletefarmer($a){
		// sql query
		$sql = "DELETE FROM farmers WHERE FarmerID=$a";
		//return executed query
		return $this->db_query($sql);
	}

}
?>
