<?php
//connect to farmer class
require("Farmer_class.php");

//insert farmer function. 
function insert_farmerfunc($a, $b, $c, $d,$e,$f,$g){
	$new_farmer_object = new farmer_class();
	$insert_farmer = $new_farmer_object->addfarmer($a,$b,$c,$d,$e,$f,$g);
	
	if ($insert_farmer) {
		return $insert_farmer;
	}
	return false;
}

function searchfarmerfunc($name){
	$f_array = array();

	//create an instance of the district operation class
	$farmer_object = new farmer_class();

	$f_records = $farmer_object->searchfarmer($name);

	//check if the method worked
	if ($f_records) {
		//loop to see if there is more than one result
		while ($f_result = $farmer_object->db_fetch()) {
			//Assign each result to the array
			$f_array[] = $f_result;
		}
	}
	//return the array
	return $f_array;
}

//view all farmers function
function view_farmerfunc(){
	$far_array = array();

	//create an instance of the farmer class
	$farmer_object = new farmer_class();

	$f_records = $farmer_object->viewfarmer();

	//check if the method worked
	if ($f_records) {
		//loop to see if there is more than one result
		while ($f_result = $farmer_object->db_fetch()) {
			//Assign each result to the array
			$far_array[] = $f_result;
		}
	}
	//return the array
	return $far_array;
}

//view one farmer function 
function view_farmerfunction($pin){
	//Create an array variable
	$far_array = array();

	//create an instance of the farmer class
	$farmer_object = new farmer_class();

	//run the view one farmer method
	$f_records = $farmer_object->view_farmer($pin);

	//check if the method worked
	if ($f_records) {
		//fetch the result
		$f_result = $farmer_object->db_fetch();
		//assign to array
		$far_array[] = $f_result;
	}
	return $far_array;
}

//update farmer function
function update_farmerfunc($a, $b, $c, $d,$e,$f,$g,$h){
	//create an instance of the farmer class
	$farmer_object = new farmer_class();

	//run the update one farmer method
	$updatefar = $farmer_object->updatefarmer($a, $b, $c, $d,$e,$f,$g,$h);

	//check if method worked
	if ($updatefar) {
		return $updatefar;
	}
	return false;
}

//delete manager function
function deletefarmer_func($a){
	//create an instance of the farmer class
	$del_far = new farmer_class();
	
	//run the delete one farmer method
	$deletefar = $del_far->deletefarmer($a);

	//check if method worked
	if ($deletefar) {
	    //return query result
        return $deletefar;
	}
	return false;	
}


