<?php
//connect to controller 
require(dirname(__FILE__))."/../classescontrollers/Districts_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $District_Name = $_POST['District_Name'];
    $Region = $_POST['Region'];
    $Vehicle_ID = $_POST['Vehicle_ID'];
    $Vehicle_Number = $_POST['Vehicle_Number'];


        $insert_district = insert_districtfunc($District_Name
            ,$Region,$Vehicle_ID,$Vehicle_Number);
    
    if ($insert_district) {
        
        echo 'Successful';

         header('Location: ../ViewTables/ViewDistricts.php');
            }else{

                echo "Failed"; 
    }
    

        
}
// if (isset($_GET['DistrictID'])){
//     $District_ID = $_GET['DistrictID'];

//         $del_dis =  deletedistrict_func($District_ID);

    
//     if ($del_dis === true) {
        
//         header('Location: ../ViewTables/ViewDistricts.php');

//             }else{

//                 echo $del_dis; 
//     } 

// }  
?>        