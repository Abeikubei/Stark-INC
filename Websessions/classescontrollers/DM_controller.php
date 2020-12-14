<?php
//connect to DM class
require(dirname(__FILE__))."DM_class.php";

//insert manager function. 
function insert_managerfunc($a, $b, $c,$d){
	$new_manager_object = new manager_class();
	$insert_manager = $new_manager_object->addmanager($a, $b, $c,$d);
	
	if ($insert_manager) {
		return $insert_manager;
	}
	return false;
}
function select_district(){
	$d_array = array();

	//create an instance of the district operation class
	$district_object = new manager_class();

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

function searchdistrictfunc($name){
	$d_array = array();

	//create an instance of the district operation class
	$district_object = new manager_class();

	$d_records = $district_object->searchdistrictm($name);

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
function view_managerfunc(){
	$man_array = array();

	//create an instance of the manager class
	$manager_object = new manager_class();

	$m_records = $manager_object->viewmanager();

	//check if the method worked
	if ($m_records) {
		//loop to see if there is more than one result
		while ($m_result = $manager_object->db_fetch()) {
			//Assign each result to the array
			$man_array[] = $m_result;
		}
	}
	//return the array
	return $man_array;
}

//view one manager function 
function view_managerfunction($pin){
	//Create an array variable
	$man_array = array();

	//create an instance of the manager class
	$manager_object = new manager_class();

	//run the view one manager method
	$m_records = $manager_object->view_manager($pin);

	//check if the method worked
	if ($m_records) {
		//fetch the result
		$m_result = $manager_object->db_fetch();
		//assign to array
		$man_array[] = $m_result;
	}
	return $man_array;
}

//update manager function
function update_managerfunc($a, $b, $c, $d,$e){
	//create an instance of the manager class
	$manager_object = new manager_class();

	//run the update one manager method
	$updateman = $manager_object->updatemanager($a, $b, $c, $d,$e);

	//check if method worked
	if ($updateman) {
		return $updateman;
	}
	return false;
}

//delete manager function
function deletemanager_func($a){
	//create an instance of the manager class
	$del_man = new manager_class();
	
	//run the delete one manager method
	$deleteman = $del_man->deletemanager($a);

	//check if method worked
	if ($deleteman) {
	    //return query result
        return $deleteman;
	}
	return false;	
}


