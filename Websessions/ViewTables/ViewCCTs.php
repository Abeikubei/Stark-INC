<?php
require(dirname(__FILE__))."../classescontrollers/CCT_controller.php";

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
                  <th>Transaction Date and Time</th>
                  <th>Category of Cocoa</th>
                  <th>Port</th>
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
                        $Cocoas = searchCCTfunc($Search);
                        foreach ($Cocoas as $Cocoa ) {
                          echo 
                          "<tr>
                            <td>".$Cocoa['Transaction_Date_and_Time']."</td>
                            <td>".$Cocoa['Category_Of_Cocoa']."</td>
                            <td>".$Cocoa['Port']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/Entity_Transacts.php?TransactionID=".$Cocoa['TransactionID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }
                      }
                  else{
                       $Coacas = view_CCTfunc();
                        foreach ($Coacas as $Cocoa ) {
                          echo 
                          "<tr>
                            <td>".$Cocoa['Transaction_Date_and_Time']."</td>
                            <td>".$Cocoa['Category_Of_Cocoa']."</td>
                            <td>".$Cocoa['Port']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/Entity_Transacts.php_?TransactionID=".$Cocoa['TransactionID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }

                  }
                  
                  ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>
