
<?php
//connect to controller 
require(dirname(__FILE__))."/../classescontrollers/Farmer_controller.php";

$nameerror = array();

//check if button was clicked
if (isset($_POST['usertui'])){
   
    //grab user form data
    $Farmer_Name = $_POST['Farmer_Name'];
	$Gender = $_POST['Gender'];
	$FDOB = $_POST['DOB'];
	$Contact = $_POST['Contact'];
	$Family_Relative_Name = $_POST['Family_Relative_Name'];
	$Family_Relative_Contact = $_POST['Family_Relative_Contact'];
	$Residence = $_POST['Residence'];




        $insert_farmer = insert_farmerfunc($Farmer_Name,$Gender,$FDOB,$Contact,$Family_Relative_Name,$Family_Relative_Contact,$Residence);
    
    if ($insert_farmer) {
        
        echo 'Successful';

        header('location:');
            }else{

                echo "Failed"; 
    }
    

        
}
if (isset($_GET['FarmerID'])){
    $Farm_ID = $_GET['FarmerID'];

        $del_f = deletefarmer_func($Farm_ID);
    
    if ($del_f) {
        
        header('Location: ../ViewTables/ViewFarmers.php');

            }else{

                echo "Failed"; 
    } 

}  
?>        