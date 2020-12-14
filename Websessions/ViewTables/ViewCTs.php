<?php
require(dirname(__FILE__))."../classescontrollers/CT_controller.php";

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
                  <th>Number of Cocoa Bags</th>
                  <th>Amount Paid</th>
                  <th>Farmer Name</th>
                  <th>Clerk Name</th>
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
                        $clts = search_clerkfunc($Search);
                        foreach ($clts as $clt ) {
                          echo 
                          "<tr>
                            <td>".$clt['CTransaction_Date_and_Time']."</td>
                            <td>".$clt['Number_Of_CocoaBags']."</td>
                            <td>".$clt['Amount_of_Money_Paid']."</td>
                            <td>".$clt['Farmer_Name']."</td>
                            <td>".$clt['Clerk_Name']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/CTransactionAction.php?CTransactionID=".$clt['CTransactionID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }
                      }
                  else{
                       $clts = select_clerkfunc();
                        foreach ($clts as $clt) {
                          echo 
                          "<tr>
                            <td>".$clt['CTransaction_Date_and_Time']."</td>
                            <td>".$clt['Number_Of_CocoaBags']."</td>
                            <td>".$clt['Amount_of_Money_Paid']."</td>
                            <td>".$clt['Farmer_Name']."</td>
                            <td>".$clt['Clerk_Name']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/CTransactionAction.php?CTransactionID=".$clt['CTransactionID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }

                  }
                  
                  ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>
