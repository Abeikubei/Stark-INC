<?php
//connecting to DB
require(dirname(__FILE__))."/../Settings/db_class.php";

/**
*Manager class for everything manager related
*/
class BT_class extends db_connection
{
	/**
	*adding new bank Transaction (Bank_Name,Location,Transaction Details,Amount of CTOR recieved, Amount of Money Withdrawn)
	*/
	public function addbank_transaction($a, $b, $c, $d,$e){
		//sql query
		$sql = "INSERT INTO bank_transactions(`Bank_Name`,`Location`,`Transaction_Date_and_Time`,`Amount_of_CTOR_recieved`,`Amount_of_Money_Withdrawn`) VALUES('$a', '$b', '$c', '$d',$e)";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view all Bank Transaction info 
	*/
	public function viewbank_transaction(){
		//sql query
		$sql = "SELECT * FROM bank_transactions";
		//return executed query
		return $this->db_query($sql);
	}

	public function searchbank_transaction($name){
		//sql query
		$sql = "SELECT * FROM bank_transactions where Bank_Name like '%$name%' or Location like '%$name%' ";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view Bank Transaction by id
	*/
	public function view_bank_transaction($pa){
		//sql query
		$sql = "SELECT * FROM bank_transactions WHERE BankID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update Bank Transaction info 
	*/
	public function updatebank_transaction($a, $b, $c, $d,$e,$f){
		//sql query 
		$sql = "UPDATE bank_transactions SET Bank_Name=$b,Location=$c,Transaction_Date_and_Time=$d,Amount_of_CTOR_recieved=$e,Amount_of_Money_Withdrawn_in_cedis=$f WHERE ManagerID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete Bank Transaction by id
	*/
	public function deletebank_transaction($a){
		// sql query
		$sql = "delete from bank_transactions where BankID='$a'";
		//return executed query
		return $this->db_query($sql);
	}
}
?>
