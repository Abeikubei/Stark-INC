<?php
//connect to controller 
require(dirname(__FILE__))."../classescontrollers/CCT_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $Transaction= $_POST['CDOB'];
    $Category = $_POST['cocoaca'];
    $Port = $_POST['Port'];


        $insert_CCT = insert_CCTfunc($Transaction,$Category,$Port);
    
    if ($insert_CCT) {
        
        echo 'Successful';

        header('location: ../ViewTables/ViewCCTs.php');
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