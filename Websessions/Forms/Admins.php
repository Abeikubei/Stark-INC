<?php
require("Database/Database_Credentials.php");

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
          <!-- Form for searching -->
          <form action="">
            <input type="text" class="form-control" id="Search" placeholder="Search" name="Search">
            <button type="submit" class="btn btn-success">Search</button>
          </form>
          <!-- Tables to display the elements of the Admins database -->
          <div class="container">
            <h2>Striped Rows</h2>
            <p>The .table-striped class adds zebra-stripes to a table:</p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- Connect to the database -->
                  <?php
      
                 // Create connection
                  $conn = mysqli_connect($servername, $username, $password,$dbname);
                  // we are checking if there is a get parameter called search
                  if (isset($_GET['Search'])){
                    $Search = $_GET['Search'];
                    //select query 
                      $query = "select * from admins where First_Name like '%$Search%' or Last_Name like '%$Search%' or Email like '%$Search%' ";
                      //Execute the query
                      $result = mysqli_query($conn, $query);
                      //Number of rows is greater than 0 and while loop to display all the rows
                      if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>
                            <td>".$row['First_Name']."</td>
                            <td>".$row['Last_Name']."</td>
                            <td>".$row['Email']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='actions/DeleteAdminAction.php?User_ID=".$row['User_ID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                        } 
                      } 
                      else {
                            echo "0 results";
                          }
                  
                  }
                  else{
                        //select query 
                      $query = 'select * from admins';
                      //Execute the query
                      $result = mysqli_query($conn, $query);
                      //Number of rows is greater than 0 and while loop to display all the rows
                      if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>
                            <td>".$row['First_Name']."</td>
                            <td>".$row['Last_Name']."</td>
                            <td>".$row['Email']."</td>
                            <td><a href='#' class='btn btn-success'>Update</a></td>
                            <td><a href='actions/DeleteAdminAction.php?User_ID=".$row['User_ID']."' class='btn btn-danger'>Delete</a></td>
                          </tr>";
                        } 
                      } 
                      else {
                            echo "0 results";
                          }

                  }
                  
                  ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>
