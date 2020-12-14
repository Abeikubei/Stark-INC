<?php
ob_start();

session_start(); 

//name of the current page
$cur_file = $_SERVER['SCRIPT_NAME']; 

//check if user login
function check_login(){
	//if login session exits
	if (!isset($_SESSION['user_id'])) 
	{
		//redirect user to login page
    	header('Location: ../register/login.php');
	}
}

//check for permission 
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		$userperm = $_SESSION['user_role'];
		if ($userperm == 2) {
			//return role number
    		return 2;
		}else{
			return 1;
		}
	}
}

?>