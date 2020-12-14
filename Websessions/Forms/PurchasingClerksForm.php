<?php
require(dirname(__FILE__))."../classescontrollers/PC_controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a Purchasing Clerk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
     *{
  color: #fff;
}
.bg {
  background:url("../images/Cocoa-powder-cocoa-beans.jpg") no-repeat;
  width: 100%;
  height: 100vh;
}
.form-container{
  align-content: center;
  border: 1px solid #fff;
  padding : 50px 60px;
  margin-top: 20vh;
  -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
  -moz-box-shadow:-1px 4px 26px 11px rgba(0,0,0,0.75);
  box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75); 
}

  </style>
</head>
<body>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <h2>Add a Purchasing Clerk</h2>
          <form action="../actions/PCAction.php" novalidate="true" method="post">
            <div class="form-group">
              <label for="Clerk_fname">Clerk Name:</label>
              <input type="name" class="form-control" id="Clerk_fname" placeholder="Enter the first name of the Purchasing Clerk" name="Clerk_Name">
            </div>
            <div class="form-group">
              <label for="PC's Gender">Purchasing Clerk's Gender:</label>
              <input type="text" class="form-control" id="Gender" placeholder="Male/Female" name="Gender">
            </div>
            <div class="form-group">
              <label for="Clerk_DOB">Clerk's Date Of Birth:</label>
              <input type="date" class="form-control" id="Clerk_DOB" placeholder="Clerk's Date Of Birth" name="DOB">
            </div>
            <select name="Education_Level" class="custom-select">
              <option selected>Education Level of Purchasing Clerk:</option>
              <option value="SSG">Secondary School Graduate</option>
              <option value="University">University</option>
              <option value="UGrad">University Graduate</option>
              <option value="Masters">Masters</option>
              <option value="MGrad">Masters Graduate</option>
              <option value="Diploma">Diploma(PhD)</option>
            </select>    
            <div class="form-group">
              <label for="Clerk_Contact">Clerk's Contact:</label>
              <input type="Number" class="form-control" id="Clerk_Contact" placeholder="Enter Clerk's Phone Number" name="Contact">
            </div>
            <label for="ManagerID">Name of District Manager:</label>
            <select name="ManagerID" class="custom-select">
              <?php

              $manager = select_manager();
              foreach($manager as $manager){
                echo "<option value='".$manager['ManagerID']."'>".$manager['Manager_Name']."</option>";
              }
                
                
                ?>

            </select>
            <p></p>
            <button type="submit" name="usertui" class="btn btn-primary">Add Purchasing Clerk</button>
          </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
  </div>
</body>
</html>
