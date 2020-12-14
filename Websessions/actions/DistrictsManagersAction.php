<?php
//connect to controller 
require(dirname(__FILE__))."../classescontrollers/DM_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $Manager_Name = $_POST['Manager_Name'];
    $DOB = $_POST['DOB'];
    $Contact = $_POST['Contact'];
    $DistrictID = $_POST['DistrictID'];


        $insert_manager = insert_managerfunc($Manager_Name,$DOB,$Contact,$DistrictID);
    
    if ($insert_manager) {
        
        echo 'Successful';

        header('location:');
            }else{

                echo "Failed"; 
    }
    

        
}

if (isset($_GET['ManagerID'])){
    $Manager_ID = $_GET['ManagerID'];

        $del_man = deletemanager_func($Manager_ID);
    
    if ($del_man) {
        
        header('Location: ../ViewTables/ViewDMs.php');

            }else{

                echo "Failed"; 
    } 

}  
?>        