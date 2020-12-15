<?php
//connect to controller 
require(dirname(__FILE__))."/../classescontrollers/CT_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $CTransaction_Date_and_Time=$_POST['CTransactionDDT'];
    $Number_Of_CocoaBags=$_POST['Cocoa_Bags'];
    $Amount_of_Money_Paid=$_POST['Amount_of_Money_Paid'];
    $FarmerID=$_POST['FarmerID'];
    $ClerkID=$_POST['ClerkID'];

        $insert_district = insert_CTfunc($CTransaction_Date_and_Time,$Number_Of_CocoaBags,$Amount_of_Money_Paid,$FarmerID,$ClerkID);
    
    if ($insert_district) {
        
        echo 'Successful';

        header('location: ../ViewTables/ViewCTs.php');
            }else{

                echo "Failed"; 
    }
    

        
}

if (isset($_GET['CTransactionID'])){
    $CTransaction_ID = $_GET['CTransactionID'];

        $del_trans = deleteCT_func($CTransaction_ID);
    
    if ($del_trans) {
        
        header('Location: ../ViewTables/ViewCTs.php');

            }else{

                echo "Failed"; 
    } 

}  
?>        