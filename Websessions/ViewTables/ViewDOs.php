<?php
require(dirname(__FILE__))."/../classescontrollers/DistrictO_controller.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <!-- Meta-Data -->
    <meta charset="utf-8">
    <!-- Syntax for responsiveness -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap module: -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        
        <!-- Body -->
        <body>
              <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <form class="form-inline" action="">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" name="Search" id="Search">
                  <button class="btn btn-success" type="submit">Search</button>
                </form>
              </nav>
          <!-- Tables to display the elements of the Admins database -->
          <div class="container">
           
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Season</th>
                  <th>Week</th>
                  <th>SeedFund Given To District</th>
                  <th>Cocoa Purchases Made</th>
                  <th>Cocoa Evacuated to Depot</th>
                  <th>Depot Evacuation Percentage(%)</th>
                  <th>Cocoa Evacuated to Port</th>
                  <th>Port Evacuation Percentage(%)</th>
                  <th>Driver's Name</th>
                  <th>Driver's Contact</th>
                  <th>Assistant Driver's Name</th>
                  <th>Assistant Driver's Contact</th>
                  <th>District Name</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- Connect to the database -->
                  <?php
                  if (isset($_GET['Search'])){
                        $Search = $_GET['Search'];
                        $districtops = searchdistrictopsfunc($Search);
                        foreach ($districtops as $districtop ) {
                          echo 
                          "<tr>
                            <td>".$districtop['Season']."</td>
                            <td>".$districtop['Week']."</td>
                            <td>".$districtop['SeedFund']."</td>
                            <td>".$districtop['Cocoa_Purchases']."</td>
                            <td>".$districtop['Cocoa_Evacuated_To_Depot']."</td>
                            <td>".$districtop['Evacuation_To_Depot_Percentage']."</td>
                            <td>".$districtop['Cocoa_Evacuated_To_Port']."</td>
                            <td>".$districtop['Evacuation_Percentage_To_Port']."</td>
                            <td>".$districtop['Driver_Name']."</td>
                            <td>".$districtop['Driver_Contact']."</td>
                            <td>".$districtop['Assist_Driver_Name']."</td>
                            <td>".$districtop['Assist_Driver_Contact']."</td>
                            <td>".$districtop['District_Name']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/DOaction.php?OperationID=".$districtop['OperationID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }
                      }
                  else{
                       $districtops = view_districtofunc();
                        foreach ($districtops as $districtop ) {
                          echo 
                          "<tr>
                            <td>".$districtop['Season']."</td>
                            <td>".$districtop['Week']."</td>
                            <td>".$districtop['SeedFund']."</td>
                            <td>".$districtop['Cocoa_Purchases']."</td>
                            <td>".$districtop['Cocoa_Evacuated_To_Depot']."</td>
                            <td>".$districtop['Evacuation_To_Depot_Percentage']."</td>
                            <td>".$districtop['Cocoa_Evacuated_To_Port']."</td>
                            <td>".$districtop['Evacuation_Percentage_To_Port']."</td>
                            <td>".$districtop['Driver_Name']."</td>
                            <td>".$districtop['Driver_Contact']."</td>
                            <td>".$districtop['Assist_Driver_Name']."</td>
                            <td>".$districtop['Assist_Driver_Contact']."</td>
                            <td>".$districtop['District_Name']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/DOaction.php?OperationID=".$districtop['OperationID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }

                  }
                  
                  ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>
