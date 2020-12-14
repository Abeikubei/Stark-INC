<?php
require(dirname(__FILE__)).'/../classescontrollers/DM_controller.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a District Manager</title>
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
  justify-content: center;
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
          <h2>Add a District Manager</h2>
          <form action="../actions/DistrictsManagersAction.php" novalidate="true" method="post">
            <div class="form-group">
              <label for="Manager_fname">District Manager's Name:</label>
              <input type="name" class="form-control" id="Manager_fname" placeholder="Enter the first name of the District Manager" name="Manager_Name">
            </div>
            <div class="form-group">
              <label for="Manager_DOB">Manager's Date Of Birth:</label>
              <input type="date" class="form-control" id="Manager_DOB" placeholder="Manager's Date Of Birth" name="DOB">
            </div>
            <div class="form-group">
              <label for="Manager_Contact">Manager's Contact:</label>
              <input type="Number" class="form-control" id="Manager_Contact" placeholder="Enter Manager's Phone Number" name="Contact">
            </div>
            <label for="DistrictID">Name of District:</label>
            <select name="DistrictID" class="custom-select">
              <option selected>District Name</option>
              <?php

              $districts = select_district();
              foreach($districts as $district){
                echo "<option value='".$district['DistrictID']."'>".$district['District_Name']."</option>";
              }
                
                
                ?>

            </select>
            <p></p>
            <button type="submit" name="usertui" class="btn btn-primary">Add District Manager</button>
          </form>
        </div>
      </div>
    </div>

</body>
</html>
