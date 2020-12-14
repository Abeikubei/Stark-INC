<?php
//connect to contact class
require(dirname(__FILE__))."Districts_class.php";

//insert district function. 
function insert_districtfunc($a, $b, $c,$d){
	$new_district_object = new district_class();
	$insert_district = $new_district_object->adddistrict($a, $b, $c,$d);
	
	if ($insert_district) {
		return $insert_district;
	}
	return false;
}
function searchdistrictfunc($name){
	$dis_array = array();

	//create an instance of the manager class
	$district_object = new district_class();

	$d_records = $district_object->searchdistrict($name);

	//check if the method worked
	if ($d_records) {
		//loop to see if there is more than one result
		while ($d_result = $district_object->db_fetch()) {
			//Assign each result to the array
			$dis_array[] = $d_result;
		}
	}
	//return the array
	return $dis_array;
}
//view all managers function
function view_districtfunc(){
	$dis_array = array();

	//create an instance of the manager class
	$district_object = new district_class();

	$d_records = $district_object->viewdistrict();

	//check if the method worked
	if ($d_records) {
		//loop to see if there is more than one result
		while ($d_result = $district_object->db_fetch()) {
			//Assign each result to the array
			$dis_array[] = $d_result;
		}
	}
	//return the array
	return $dis_array;
}

//view one manager function 
function view_districtfunction($pin){
	//Create an array variable
	$dis_array = array();

	//create an instance of the manager class
	$district_object = new district_class();

	//run the view one manager method
	$d_records = $district_object->view_district($pin);

	//check if the method worked
	if ($d_records) {
		//fetch the result
		$d_result = $district_object->db_fetch();
		//assign to array
		$dis_array[] = $d_result;
	}
	return $dis_array;
}

//update manager function
function update_districtfunc($a, $b, $c, $d,$e){
	//create an instance of the manager class
	$district_object = new district_class();

	//run the update one manager method
	$updatedis = $district_object->updatedistrict($a, $b, $c, $d,$e);

	//check if method worked
	if ($updatedis) {
		return $updatedis;
	}
	return false;
}

//delete manager function
function deletedistrict_func($a){
	//create an instance of the manager class
	$del_dis = new district_class();
	
	//run the delete one manager method
	$deletedis = $del_dis->deletedistrict($a);

	//check if method worked
	if ($deletedis) {
	    //return query result
        return $deletedis;
	}
	return $del_dis->db->error;	
}


