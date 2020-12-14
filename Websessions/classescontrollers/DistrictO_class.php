<?php
//connecting to DB
require(dirname(__FILE__))."/../Settings/db_class.php";

/**
*District operation class for everything district operation related
*/
class district_operation_class extends db_connection
{
	/**
	*adding new district operation
	*/
	public function adddistricto($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m){
		//sql query
		$sql = "INSERT INTO district_operations (`Season`,`Week`,`SeedFund`,`Cocoa_Purchases`,`Cocoa_Evacuated_To_Depot`,`Evacuation_To_Depot_Percentage`,`Cocoa_Evacuated_To_Port`,`Evacuation_Percentage_To_Port`,`Driver_Name`,`Driver_Contact`,`Assist_Driver_Name`,`Assist_Driver_Contact`,`DistrictID`) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
		//return executed query
		return $this->db_query($sql);
	}

	public function selectdistrict(){
		$sql = "SELECT * FROM districts";
		return $this->db_query($sql);
	}
	public function searchdistrictops($name){
		//sql query
		$sql = "SELECT * FROM districts,district_operations where district.DistrictID = district_operations.DistrictID and District_Name like '%$name%' or Driver_Name like '%$name%' or Assist_Driver_Name like '%$name%'";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view all district operation info 
	*/
	public function viewdistricto(){
		//sql query
		$sql = "SELECT * FROM districts,district_operations where districts.DistrictID = district_operations.DistrictID";
		//return executed query
		return $this->db_query($sql);
	}


	/**
	*view district operation by id
	*/
	public function view_districto($pa){
		//sql query
		$sql = "SELECT * FROM district_operations WHERE OperationID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update district operation info 
	*/
	public function updatedistricto($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n){
		//sql query 
		$sql = "UPDATE district_operations SET Season=$b,Week=$c,SeedFund=$d,Cocoa_Purchases=$e,Cocoa_Evacuated_To_Depot=$f,Evacuation_To_Depot_Percentage(%)=$g,Cocoa_Evacuated_To_Port=$h,Evacuation_Percentage_To_Port(%)=$i,Driver_Name=$j,Driver_Contact=$k,Assist_Driver_Name=$l,Assist_Driver_Contact=$m,DistrictID=$n WHERE OperationID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete district operation by id
	*/
	public function deletedistricto($a){
		// sql query
		$sql = "DELETE FROM district_operations WHERE OperationID=$a";
		//return executed query
		return $this->db_query($sql);
	}
}
?>
