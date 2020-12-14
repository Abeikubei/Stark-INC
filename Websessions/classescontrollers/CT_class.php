<?php
//connecting to DB
require(dirname(__FILE__))."../Settings/db_class.php";

/**
*Manager class for everything manager related
*/
class CT_class extends db_connection
{
	/**
	*adding new manager (name, DOB, contact number and SeedFund)
	*/
	public function addCT($a, $b, $c,$d,$e){
		//sql query
		$sql = "INSERT INTO clerk_transactions(`CTransaction_Date_and_Time`,`Number_Of_CocoaBags`,`Amount_of_Money_Paid`,`FarmerID`,`ClerkID`) VALUES('$a', '$b', '$c','$d','$e')";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view all manager info 
	*/
	public function select_farmer(){
		//sql query
		$sql = "SELECT * FROM farmers";
		//return executed query
		return $this->db_query($sql);
	}
	
	public function searchclerk_transaction($name){
		//sql query
		$sql = "SELECT * FROM clerk_transactions, farmers, purchasing_clerks where clerk_transactions.FarmerID = farmers.FarmerID and clerk_transactions.ClerkID = purchasing_clerks.ClerkID and farmers.Farmer_Name like '%$name%' or purchasing_clerks.Clerk_Name like '%$name%' ";
		//return executed query
		return $this->db_query($sql);
	}


	public function select_clerk(){
		//sql query
		$sql = "SELECT * FROM clerk_transactions, farmers, purchasing_clerks where clerk_transactions.FarmerID = farmers.FarmerID and clerk_transactions.ClerkID = purchasing_clerks.ClerkID";
		//return executed query
		return $this->db_query($sql);
	}
	public function viewCT(){
		//sql query
		$sql = "SELECT * FROM clerk_transactions";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view manager by id
	*/
	public function view_CT($pa){
		//sql query
		$sql = "SELECT * FROM clerk_transactions WHERE CTransactionID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update manager info 
	*/
	public function updateCT($a, $b, $c, $d,$e,$f){
		//sql query 
		$sql = "UPDATE clerk_transactions SET CTransaction_Date_and_Time=$b,Number_Of_CocoaBags=$c,Amount_of_Money_Paid=$d,FarmerID=$e,ClerkID=$f,WHERE CTransactionID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete manager by id
	*/
	public function deleteCT($a){
		// sql query
		$sql = "DELETE FROM clerk_transactions WHERE CTransactionID=$a";
		//return executed query
		return $this->db_query($sql);
	}
}
?>
