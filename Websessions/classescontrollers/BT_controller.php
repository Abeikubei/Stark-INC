<?php
//connect to BT class
require(dirname(__FILE__))."BT_class.php";

//insert bank_transaction function. 
function insert_bankfunc($a, $b, $c, $d,$e){
	$new_bank_object = new BT_class();
	$insert_bank = $new_bank_object->addbank_transaction($a, $b, $c, $d,$e);
	
	if ($insert_bank) {
		return $insert_bank;
	}
	return false;
}

//view all bank_transactions function
function view_bankfunc(){
	$ban_array = array();

	//create an instance of the bank_transaction class
	$bank_object = new BT_class();

	$b_records = $bank_object->viewbank_transaction();

	//check if the method worked
	if ($b_records) {
		//loop to see if there is more than one result
		while ($b_result = $bank_object->db_fetch()) {
			//Assign each result to the array
			$ban_array[] = $b_result;
		}
	}
	//return the array
	return $ban_array;
}

//view all bank_transactions function
function search_bankfunc($name){
	$ban_array = array();

	//create an instance of the bank_transaction class
	$bank_object = new BT_class();

	$b_records = $bank_object->searchbank_transaction($name);

	//check if the method worked
	if ($b_records) {
		//loop to see if there is more than one result
		while ($b_result = $bank_object->db_fetch()) {
			//Assign each result to the array
			$ban_array[] = $b_result;
		}
	}
	//return the array
	return $ban_array;
}



//view one bank_transaction function 
function view_bankfunction($pin){
	//Create an array variable
	$ban_array = array();

	//create an instance of the bank_transaction class
	$bank_object = new BT_class();

	//run the view one bank_transaction method
	$b_records = $bank_object->view_bank_transaction($pin);

	//check if the method worked
	if ($b_records) {
		//fetch the result
		$b_result = $bank_object->db_fetch();
		//assign to array
		$ban_array[] = $b_result;
	}
	return $ban_array;
}

//update bank transaction function
function update_bankfunc($a, $b, $c, $d,$e,$f){
	//create an instance of the BT class
	$bank_object = new BT_class();

	//run the update one BT method
	$updateban = $bank_object->updatebank_transaction($a, $b, $c, $d,$e,$f);

	//check if method worked
	if ($updateban) {
		return $updateban;
	}
	return false;
}

//delete bank transaction function
function deletebankfunc($a){
	//create an instance of the bank_transaction class
	$del_ban = new BT_class();
	
	//run the delete one bank_transaction method
	$deleteban = $del_ban->deletebank_transaction($a);

	//check if method worked
	if ($deleteban) {
	    //return query result
        return $deleteban;
	}
	return false;	
}


