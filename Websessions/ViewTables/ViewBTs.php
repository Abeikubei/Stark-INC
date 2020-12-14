<?php
require(dirname(__FILE__))."../classescontrollers/BT_controller.php";

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
                  <th>Bank Name</th>
                  <th>Location</th>
                  <th>Date & Time</th>
                  <th>Amount Received</th>
                  <th>Amount Withdrawn</th>
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
                        $districts = search_bankfunc($Search);
                        foreach ($districts as $bank ) {
                          echo 
                          "<tr>
                            <td>".$bank['Bank_Name']."</td>
                            <td>".$bank['Location']."</td>
                            <td>".$bank['Transaction_Date_and_Time']."</td>
                            <td>".$bank['Amount_of_CTOR_recieved']."</td>
                            <td>".$bank['Amount_of_Money_Withdrawn']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/BanksAction.php?BankID=".$bank['BankID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }
                      }
                  else{
                       $districts = view_bankfunc();
                        foreach ($districts as $bank ) {
                          echo 
                          "<tr>
                            <td>".$bank['Bank_Name']."</td>
                            <td>".$bank['Location']."</td>
                            <td>".$bank['Transaction_Date_and_Time']."</td>
                            <td>".$bank['Amount_of_CTOR_recieved']."</td>
                            <td>".$bank['Amount_of_Money_Withdrawn']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='../actions/BanksAction.php?BankID=".$bank['BankID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                          }

                  }
                  
                  ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>
