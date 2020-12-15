<?php
//connect to controller 
require(dirname(__FILE__))."/../classescontrollers/Admin_Controller.php";

$errors = array();

// //check if button was clicked
if (isset($_POST['userreg'])){
   
    //grab user form data
    $uname = $_POST['c_name'];
    $uemail = $_POST['c_email'];
    $upassword = $_POST['password'];
    $confpassword = $_POST['confirm_pass'];
    $ucontact = $_POST['c_contact'];
        
//     //check for length of values and display error messages 
//     if(strlen($uname) > 100){
//         array_push($errors, "Name should not exceed 100 characters");
//     }
        
//     if(strlen($uemail) > 100){
//         array_push($errors, "Email should not exceed 50 characters");
//     }
        
//     if(strlen($ucontact) > 15){
//         array_push($errors, "Contact number should not exceed 15 characters");
//     }

//     if(strlen($upassword) < 8){
//         array_push($errors, "Password should be at least 8 characters");
//     }

//     //check if password and confirm password are equal
//     if ($confpassword!=$upassword){
//         array_push($errors, "Passwords don't match");
//     }

    //check if email already exists
    // $exemail = checkforcus_func($uemail);
    // if(!empty($exemail)){
    //     array_push($errors, "This email already exists.");
    // }
 
//     //Encrypt password before adding, encrypt contact number before adding and add successfully add new customer if no error are found.  
    if (count($errors)==0){
        $upassword = md5($upassword);
        $ucontact = md5($ucontact);
        $insert_customer = insert_adminfunc($uname, $uemail, $upassword, $ucontact);
    
        if ($insert_customer) {
            echo 'Successful';
            header('location:../Forms/Login.php');
        }
        else{echo "Failed";}
    
    }
    else{
        foreach ($errors as $error){
        echo $error."<br>";
        }
    }
 }
?>        
