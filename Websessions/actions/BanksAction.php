<?php
//connect to controller 
require(dirname(__FILE__))."../classescontrollers/BT_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $Bank_Name = $_POST['Bank_Name'];
    $Location =$_POST['Bank_Location'];
    $Transaction_Date_and_Time=$_POST['TDOB'];
    $Amount_of_CTOR_recieved=$_POST['MoneyR'];
    $Amount_of_Money_Withdrawn=$_POST['Money'];

        $insert_bank = insert_bankfunc($Bank_Name,$Location,$Transaction_Date_and_Time,$Amount_of_CTOR_recieved,$Amount_of_Money_Withdrawn);
    
    if ($insert_bank) {
        
        header('Location: ../ViewTables/ViewBTs.php');

            }else{

                echo "Failed"; 
    }
    

        
}
if (isset($_GET['BankID'])){
    $Bank_ID = $_GET['BankID'];

        $del_bank = deletebankfunc($Bank_ID);
    
    if ($del_bank) {
        
        header('Location: ../ViewTables/ViewBTs.php');

            }else{

                echo "Failed"; 
    } 

}        
?>        