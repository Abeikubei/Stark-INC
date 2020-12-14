<?php
require("../classescontrollers/Admin_Controller.php");
session_start();
//store all errors
$errors = array();

//check if button was clicked
if (isset($_POST['userlog'])){

	$uemail = $_POST['Email'];
    $upassword = $_POST['Password'];

 	$getinfo = array();
    $getinfo = login_admin($uemail);

	// check if the data has been received in the database 
   	if ($getinfo){
		//encrypt password
		$upassword = md5($upassword);
		//compare user input to db
		if ($getinfo['Password']==$upassword){
			session_start();
			$_SESSION['AdminID']=$getinfo['AdminID'];
			$_SESSION['Role']=$getinfo['Role'];

			//redirect to dashboard page
			header('location: ../Forms/Dashboard.php');
		}
   		else{echo 'Email/Password is incorrect';}
	}
	else{echo 'Email/Password is incorrect';}
}
?>
