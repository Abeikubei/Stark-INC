<?php
require(dirname(__FILE__))."/../classescontrollers/DM_controller.php";

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
                <a style="color:white" href="../Forms/Dashboard.php">Return to The Dashboard</a>
              </nav>
          <!-- Tables to display the elements of the Admins database -->
          <div class="container">
           
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Manager Name</th>
                  <th>Date Of Birth</th>
                  <th>Contact</th>
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
                        $managers = searchdistrictfunc($Search);
                        foreach ($managers as $manager ) {
                          echo 
                          "<tr>
                            <td>".$manager['Manager_Name']."</td>
                            <td>".$manager['DOB']."</td>
                            <td>".$manager['Contact']."</td>
                            <td>".$manager['District_Name']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/DistrictsManagersAction.php?ManagerID=".$manager['ManagerID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";                          }
                      }
                  else{
                       $managers = view_managerfunc();
                        foreach ($managers as $manager ) {
                          echo 
                          "<tr>
                            <td>".$manager['Manager_Name']."</td>
                            <td>".$manager['DOB']."</td>
                            <td>".$manager['Contact']."</td>
                            <td>".$manager['District_Name']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/DistrictsManagersAction.php?ManagerID=".$manager['ManagerID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }

                  }
                  
                  ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>
