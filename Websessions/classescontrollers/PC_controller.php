<?php
//connect to contact class
require("PC_class.php");

//insert clerk function. 
function insert_clerksfunc($a, $b, $c, $d,$e,$f){
	$new_clerk_object = new clerk_class();
	$insert_clerk = $new_clerk_object->addclerk($a, $b, $c, $d,$e,$f);
	
	if ($insert_clerk) {
		return $insert_clerk;
	}
	return false;
}
function select_manager(){
	$m_array = array();

	//create an instance of the district operation class
	$manager_object = new clerk_class();

	$m_records = $manager_object->selectmanager();

	//check if the method worked
	if ($m_records) {
		//loop to see if there is more than one result
		while ($m_result = $manager_object->db_fetch()) {
			//Assign each result to the array
			$m_array[] = $m_result;
		}
	}
	//return the array
	return $m_array;
}

function searchclerkfunc($name){
	$m_array = array();

	//create an instance of the district operation class
	$manager_object = new clerk_class();

	$m_records = $manager_object->searchclerk($name);

	//check if the method worked
	if ($m_records) {
		//loop to see if there is more than one result
		while ($m_result = $manager_object->db_fetch()) {
			//Assign each result to the array
			$m_array[] = $m_result;
		}
	}
	//return the array
	return $m_array;
}

//view all clerks function
function view_clerksfunc(){
	$cl_array = array();

	//create an instance of the clerk class
	$clerks_object = new clerk_class();

	$cl_records = $clerks_object->viewclerk();

	//check if the method worked
	if ($cl_records) {
		//loop to see if there is more than one result
		while ($cl_result = $clerks_object->db_fetch()) {
			//Assign each result to the array
			$cl_array[] = $cl_result;
		}
	}
	//return the array
	return $cl_array;
}

//view one clerk function 
function view_clerksfunction($pin){
	//Create an array variable
	$cl_array = array();

	//create an instance of the clerk class
	$clerk_object = new clerk_class();

	//run the view one clerk method
	$cl_records = $clerk_object->view_clerk($pin);

	//check if the method worked
	if ($cl_records) {
		//fetch the result
		$cl_result = $clerk_object->db_fetch();
		//assign to array
		$cl_array[] = $cl_result;
	}
	return $cl_array;
}

//update clerk function
function update_clerksfunc($a, $b, $c, $d,$e,$f,$g){
	//create an instance of the clerk class
	$clerk_object = new clerk_class();

	//run the update one clerk method
	$updatecl = $clerk_object->updateclerk($a, $b, $c, $d,$e,$f,$g);

	//check if method worked
	if ($updatecl) {
		return $updatecl;
	}
	return false;
}

//delete clerk function
function deleteclerks_func($a){
	//create an instance of the manager class
	$del_clerk = new clerk_class();
	
	//run the delete one manager method
	$deletecl = $del_clerk->deleteclerk($a);

	//check if method worked
	if ($deletecl) {
	    //return query result
        return $deletecl;
	}
	return false;	
}


