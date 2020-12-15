<?php
//connect to CCT class
require("CCT_class.php");

//insert manager function. 
function insert_CCTfunc($a, $b, $c){
	$new_CCT_object = new CCT_class();
	$insert_CCT = $new_CCT_object->addCCT($a, $b, $c);
	
	if ($insert_CCT) {
		return $insert_CCT;
	}
	return $new_CCT_object->db->error;
}

function select_district(){
	$d_array = array();

	//create an instance of the district operation class
	$district_object = new CCT_class();

	$d_records = $district_object->selectdistrict();

	//check if the method worked
	if ($d_records) {
		//loop to see if there is more than one result
		while ($d_result = $district_object->db_fetch()) {
			//Assign each result to the array
			$d_array[] = $d_result;
		}
	}
	//return the array
	return $d_array;
}

function searchCCTfunc($name){
	$d_array = array();

	//create an instance of the district operation class
	$district_object = new CCT_class();

	$d_records = $district_object->searchCCT($name);

	//check if the method worked
	if ($d_records) {
		//loop to see if there is more than one result
		while ($d_result = $district_object->db_fetch()) {
			//Assign each result to the array
			$d_array[] = $d_result;
		}
	}
	//return the array
	return $d_array;
}

//view all managers function
function view_CCTfunc(){
	$CCT_array = array();

	//create an instance of the manager class
	$CCT_object = new CCT_class();

	$CCT_records = $CCT_object->viewCCT();

	//check if the method worked
	if ($CCT_records) {
		//loop to see if there is more than one result
		while ($CCT_result = $CCT_object->db_fetch()) {
			//Assign each result to the array
			$CCT_array[] = $CCT_result;
		}
	}
	//return the array
	return $CCT_array;
}

//view one manager function 
function view_CCTfunction($pin){
	//Create an array variable
	$CCT_array = array();

	//create an instance of the manager class
	$CCT_object = new CCT_class();

	//run the view one manager method
	$CCT_records = $CCT_object->view_CCT($pin);

	//check if the method worked
	if ($CCT_records) {
		//fetch the result
		$CCT_result = $CCT_object->db_fetch();
		//assign to array
		$CCT_array[] = $CCT_result;
	}
	return $CCT_array;
}

//update manager function
function update_CCTfunc($a, $b, $c, $d){
	//create an instance of the manager class
	$CCT_object = new CCT_class();

	//run the update one manager method
	$updateCCT = $CCT_object->updateCCT($a, $b, $c, $d);

	//check if method worked
	if ($updateCCT) {
		return $updateCCT;
	}
	return false;
}

//delete manager function
function deleteCCT_func($a){
	//create an instance of the manager class
	$del_CCT = new CCT_class();
	
	//run the delete one manager method
	$deleteCCT = $del_CCT->deleteCCT($a);

	//check if method worked
	if ($deleteCCT) {
	    //return query result
        return $deleteCCT;
	}
	return false;	
}


