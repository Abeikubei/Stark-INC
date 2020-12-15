<?php
//connect to controller 
require(dirname(__FILE__))."/../classescontrollers/DistrictO_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $Season = $_POST['Season'];
    $Week = $_POST['Week'];
    $SeedFund= $_POST['SeedFund'];
    $Cocoa_Purchases= $_POST['Cocoa_Purchases'];
    $Cocoa_Evacuated_To_Depot= $_POST['Cocoa_Evacuated_To_Depot'];
    $Evacuation_To_Depot_Percentage =($Cocoa_Evacuated_To_Depot/$Cocoa_Purchases)*100; 
    $Cocoa_Evacuated_To_Port= $_POST['Cocoa_Evacuated_To_Port'];
    $Evacuation_Percentage_To_Port = ($Cocoa_Evacuated_To_Port/$Cocoa_Evacuated_To_Depot)*100; 
    $Driver_Name= $_POST['Driver_Name'];
    $Driver_Contact= $_POST['Driver_Contact'];
    $Assist_Driver_Name= $_POST['ADriver_Name'];
    $Assist_Driver_Contact= $_POST['ADriver_Contact'];
    $DistrictID=$_POST['DistrictID'];
        $insert_district = insert_districtofunc( $Season,$Week,$SeedFund,$Cocoa_Purchases,$Cocoa_Evacuated_To_Depot,$Evacuation_To_Depot_Percentage,$Cocoa_Evacuated_To_Port,$Evacuation_Percentage_To_Port,$Driver_Name,$Driver_Contact,$Assist_Driver_Name,$Assist_Driver_Contact,$DistrictID);
    
    if ($insert_district) {
        
        echo 'Successful';

         header('Location: ../ViewTables/ViewDOs.php');
            }else{

                echo "Failed"; 
    }
    

        
}
if (isset($_GET['OperationID'])){
    $Opera_ID = $_GET['OperationID'];

        $del_op = deletedistricto_func($Opera_ID);
    
    if ($del_op) {
        
        header('Location: ../ViewTables/ViewDOs.php');

            }else{

                echo "Failed"; 
    } 

}  
?>        