<?php
//connect to contact class
require(dirname(__FILE__))."Admin_class.php";

//insert admin function. 
function insert_adminfunc($a, $b, $c, $d){
	$new_admin_object = new admin_class();
	$insert_admin = $new_admin_object->addadmin($a, $b, $c, $d);
	
	if ($insert_admin) {
		return $insert_admin;
	}
	return false;
}

//view all admin function
function view_adminfunc(){
	$ad_array = array();

	//create an instance of the customer class
	$admin_object = new admin_class();

	$a_records = $admin_object->viewadmin();

	//check if the method worked
	if ($a_records) {
		//loop to see if there is more than one result
		while ($a_result = $admin_object->db_fetch()) {
			//Assign each result to the array
			$ad_array[] = $a_result;
		}
	}
	//return the array
	return $ad_array;
}

//view one customer function 
function view_adminfunction($pin){
	//Create an array variable
	$ad_array = array();

	//create an instance of the customer class
	$admin_object = new admin_class();

	//run the view one customer method
	$a_records = $admin_object->viewadmin($pin);

	//check if the method worked
	if ($a_records) {
		//fetch the result
		$a_result = $admin_object->db_fetch();
		//assign to array
		$ad_array[] = $a_result;
	}
	return $ad_array;
}

//update customer function
function update_adminfunc($a, $b, $c, $d){
	//create an instance of the customer class
	$customer_object = new admin_class();

	//run the update one customer method
	$updatead = $admin_object->updateadmin($a, $b, $c, $d);

	//check if method worked
	if ($updatead) {
		return $updatead;
	}
	return false;
}

//delete customer function
function deleteadmin_func($a){
	//create an instance of the customer class
	$del_admin = new admin_class();
	
	//run the delete one customer method
	$deletead = $del_admin->deleteadmin($a);

	//check if method worked
	if ($deletead) {
	    //return query result
        return $deletead;
	}
	return false;	
}

//check to see if email already exists
function checkforcus_func($email){
    //create an instance 
    $admin_object = new admin_class();
    
    //return already existing email
    $adminemail = $admin_object->checkfor_admin($email);

    if($adminemail){
        $exemail = $admin_object->db_fetch();
        return $exemail;
    }
    return false;
}

function login_admin($email){
	$admin_object = new admin_class();
	$runquery = $admin_object->login_admin($email);

	if($runquery){
		$admininfo = array();
		$admininfo = $admin_object->db_fetch();

		if(empty($admininfo)){
			return false;
		}
		return $admininfo;
	}
}
?>
