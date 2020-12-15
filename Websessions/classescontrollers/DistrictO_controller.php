<?php
//connect to contact class
require("DistrictO_class.php");

//insert a district operation function. 
function insert_districtofunc($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m){
	$new_districto_object = new district_operation_class();
	$insert_districto = $new_districto_object->adddistricto($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m);
	
	if ($insert_districto) {
		return $insert_districto;
	}
	return false;
}

function select_district(){
	$d_array = array();

	//create an instance of the district operation class
	$district_object = new district_operation_class();

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

function searchdistrictopsfunc($name){
	$d_array = array();

	//create an instance of the district operation class
	$district_object = new district_operation_class();

	$d_records = $district_object->searchdistrictops($name);

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

//view all district operations function
function view_districtofunc(){
	$do_array = array();

	//create an instance of the district operation class
	$districto_object = new district_operation_class();

	$do_records = $districto_object->viewdistricto();

	//check if the method worked
	if ($do_records) {
		//loop to see if there is more than one result
		while ($do_result = $districto_object->db_fetch()) {
			//Assign each result to the array
			$do_array[] = $do_result;
		}
	}
	//return the array
	return $do_array;
}

//view one district operation  function 
function view_districtofunction($pin){
	//Create an array variable
	$do_array = array();

	//create an instance of the district operation class
	$districto_object = new district_operation_class();

	//run the view one district operation method
	$do_records = $districto_object->view_districto($pin);

	//check if the method worked
	if ($do_records) {
		//fetch the result
		$do_result = $districto_object->db_fetch();
		//assign to array
		$do_array[] = $do_result;
	}
	return $do_array;
}

//update district operation function
function update_districtofunc($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n){
	//create an instance of the district operation class
	$districto_object = new district_operation_class();

	//run the update one district operation method
	$updatedo = $districto_object->updateadmin($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n);

	//check if method worked
	if ($updatedo) {
		return $updatedo;
	}
	return false;
}

//delete district operation function
function deletedistricto_func($a){
	//create an instance of the district operation class
	$del_districto = new district_operation_class();
	
	//run the delete one district operation method
	$deletedo = $del_districto->deletedistricto($a);

	//check if method worked
	if ($deletedo) {
	    //return query result
        return $deletedo;
	}
	return false;	
}

?>
