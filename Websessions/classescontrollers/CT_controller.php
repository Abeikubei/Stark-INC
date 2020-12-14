<?php
//connect to the CT  class
require(dirname(__FILE__))."CT_class.php";

//insert manager function. 
function insert_CTfunc($a, $b, $c,$d,$e){
	$new_CT_object = new CT_class();
	$insert_CT = $new_CT_object->addCT($a, $b, $c,$d,$e);
	
	if ($insert_CT) {
		return $insert_CT;
	}
	return false;
}
function select_farmerfunc(){
	$farmer_array = array();

	//create an instance of the CT class
	$farmer_object = new CT_class();

	$farmer_records = $farmer_object->select_farmer();

	//check if the method worked
	if ($farmer_records) {
		//loop to see if there is more than one result
		while ($farmer_result = $farmer_object->db_fetch()) {
			//Assign each result to the array
			$farmer_array[] = $farmer_result;
		}
	}
	//return the array
	return $farmer_array;
}


function select_clerkfunc(){
	$clerk_array = array();

	//create an instance of the CT class
	$clerk_object = new CT_class();

	$clerk_records = $clerk_object->select_clerk();

	//check if the method worked
	if ($clerk_records) {
		//loop to see if there is more than one result
		while ($clerk_result = $clerk_object->db_fetch()) {
			//Assign each result to the array
			$clerk_array[] = $clerk_result;
		}
	}
	//return the array
	return $clerk_array;
}

function search_clerkfunc($name){
	$clerk_array = array();

	//create an instance of the CT class
	$clerk_object = new CT_class();

	$clerk_records = $clerk_object->searchclerk_transaction($name);

	//check if the method worked
	if ($clerk_records) {
		//loop to see if there is more than one result
		while ($clerk_result = $clerk_object->db_fetch()) {
			//Assign each result to the array
			$clerk_array[] = $clerk_result;
		}
	}
	//return the array
	return $clerk_array;
}

//view all CTs function
function view_CTfunc(){
	$CT_array = array();

	//create an instance of the CT class
	$CT_object = new CT_class();

	$CT_records = $CT_object->viewCT();

	//check if the method worked
	if ($CT_records) {
		//loop to see if there is more than one result
		while ($CT_result = $CT_object->db_fetch()) {
			//Assign each result to the array
			$CT_array[] = $CT_result;
		}
	}
	//return the array
	return $CT_array;
}

//view one manager function 
function view_CTfunction($pin){
	//Create an array variable
	$CT_array = array();

	//create an instance of the manager class
	$CT_object = new CT_class();

	//run the view one CT method
	$CT_records = $CT_object->view_CT($pin);

	//check if the method worked
	if ($CT_records) {
		//fetch the result
		$CT_result = $CT_object->db_fetch();
		//assign to array
		$CT_array[] = $CT_result;
	}
	return $CT_array;
}

//update CT function
function update_CTfunc($a, $b, $c, $d,$e,$f){
	//create an instance of the CT class
	$CT_object = new CT_class();

	//run the update one CT method
	$updateCT = $CT_object->updateCT($a, $b, $c, $d,$e,$f);

	//check if method worked
	if ($updateCT) {
		return $updateCT;
	}
	return false;
}

//delete manager function
function deleteCT_func($a){
	//create an instance of the CT class
	$del_CT = new CT_class();
	
	//run the delete one CT method
	$deleteCT = $del_CT->deleteCT($a);

	//check if method worked
	if ($deleteCT) {
	    //return query result
        return $deleteCT;
	}
	return false;	
}


