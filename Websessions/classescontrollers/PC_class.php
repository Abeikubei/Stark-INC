<?php
//connecting to DB
require(dirname(__FILE__))."/../Settings/db_class.php";

/**
*Purchasing clerk class for everything P.C related
*/
class clerk_class extends db_connection
{
	/**
	*adding new clerk (Name,Gender, DOB, contact,level_of_Education,ManagerID)
	*/
	public function addclerk($a, $b, $c, $d,$e,$f){
		//sql query
		$sql = "INSERT INTO purchasing_clerks(`Clerk_Name`,`Gender`,`DOB`,`Level_of_Education`,`Contact`,`ManagerID`) VALUES('$a', '$b', '$c', '$d','$e','$f')";
		//return executed query
		return $this->db_query($sql);
	}

	public function searchclerk($name){
		//sql query
		$sql = "SELECT * FROM purchasing_clerks, district_managers where purchasing_clerks.ManagerID = district_managers.ManagerID and Clerk_Name like '%$name%' or Manager_Name like '%$name%' ";
		//return executed query
		return $this->db_query($sql);
	}


	public function selectmanager(){
		$sql="SELECT * FROM district_managers";
		return $this->db_query($sql);
	}

	/**
	*view all clerk info 
	*/
	public function viewclerk(){
		//sql query
		$sql = "SELECT * FROM purchasing_clerks, district_managers where purchasing_clerks.ManagerID = district_managers.ManagerID";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view clerk by id
	*/
	public function view_clerk($pa){
		//sql query
		$sql = "SELECT * FROM purchasing_clerks WHERE ClerkID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update clerk info 
	*/
	public function updateclerk($a, $b, $c, $d,$e,$f,$g){
		//sql query 
		$sql = "UPDATE purchasing_clerks SET Name=$b,Gender=$c,DOB=$d,Contact=$e,Level_of_Education=$f,ManagerID=$g WHERE ClerkID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete clerk by id
	*/
	public function deleteclerk($a){
		// sql query
		$sql = "DELETE FROM purchasing_clerks WHERE ClerkID=$a";
		//return executed query
		return $this->db_query($sql);
	}

}

?>
