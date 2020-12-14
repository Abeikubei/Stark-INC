<?php
//connect to controller 
require(dirname(__FILE__))."../classescontrollers/PC_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $Clerk_Name = $_POST['Clerk_Name'];
    $Gender=$_POST['Gender'];
    $DOB = $_POST['DOB'];
    $Level = $_POST['Education_Level'];
    $Contact = $_POST['Contact'];
    $ManagerID = $_POST['ManagerID'];



        $insert_clerk = insert_clerksfunc($Clerk_Name,$Gender,$DOB,$Level,$Contact,$ManagerID);
    
    if ($insert_clerk) {
        
        echo 'Successful';

        header('location:');
            }else{

                echo "Failed"; 
    }
    

        
}
if (isset($_GET['ClerkID'])){
    $Clerk_ID = $_GET['ClerkID'];

        $del_cl = deleteclerks_func($Clerk_ID);
    
    if ($del_cl) {
        
        header('Location: ../ViewTables/ViewDOs.php');

            }else{

                echo "Failed"; 
    } 

}  
?>        