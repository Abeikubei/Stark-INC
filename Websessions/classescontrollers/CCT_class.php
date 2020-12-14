<?php
//connecting to DB
require(dirname(__FILE__))."../Settings/db_class.php";

/**
*cct class for everything company cocoa Transactions related
*/
class CCT_class extends db_connection
{
	/**
	*adding new transaction (name, DOB, contact number and SeedFund)
	*/
	public function addCCT($a, $b, $c){
		//sql query
		$sql = "INSERT INTO Company_Cocoa_Transactions(`Transaction_Date_and_Time`,`Category_Of_Cocoa`,`Port`) VALUES('$a', '$b', '$c')";
		//return executed query
		return $this->db_query($sql);
	}

    public function selectdistrict(){
		$sql = "SELECT * FROM districts";
		return $this->db_query($sql);
	}

	public function searchCCT($name){
		//sql query
		$sql = "SELECT * FROM Company_Cocoa_Transactions where Category_Of_Cocoa like '%$name%' or Port like '%$name%' ";
		//return executed query
		return $this->db_query($sql);
	}


	/**
	*view all manager info 
	*/
	public function viewCCT(){
		//sql query
		$sql = "SELECT * FROM Company_Cocoa_Transactions";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view manager by id
	*/
	public function view_CCT($pa){
		//sql query
		$sql = "SELECT * FROM Company_Cocoa_Transactions WHERE TransactionID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update manager info 
	*/
	public function updateCCT($a, $b, $c, $d){
		//sql query 
		$sql = "UPDATE Company_Cocoa_Transactions SET Transaction_Date_and_Time=$b,Category_Of_Cocoa=$c,Port=$d WHERE TransactionID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete manager by id
	*/
	public function deleteCCT($a){
		// sql query
		$sql = "DELETE FROM Company_Cocoa_Transactions WHERE TransactionID=$a";
		//return executed query
		return $this->db_query($sql);
	}
}
?>
