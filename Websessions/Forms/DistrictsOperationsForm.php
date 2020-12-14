<?php
require(dirname(__FILE__))."../classescontrollers/DistrictO_controller.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a District</title>
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
  background:url("../images/62772_food_cocoa_bean.jpg") no-repeat;
  width: 100%;
  height: 100%;
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
        <h2>Add a District Operation</h2>
          <form action="../actions/DOaction.php" novalidate="true" method="post">
            <label for = "Season">Cocoa Season:</label>
            <select name="Season" class="custom-select">
              <option value="Main Season">Main Season</option>
              <option value="Light Season">Light Season</option>
            </select>   
            <div class="form-group">
              <label for="Week">Week:</label>
              <input type="Number" class="form-control" id="Week" placeholder="Cocoa Week" name="Week">
            </div>
            <div class="form-group">
              <label for="SeedFund">SeedFund Given To District:</label>
              <input type="Number" class="form-control" id="SeedFund" placeholder="SeedFund" name="SeedFund">
            </div>
            <div class="form-group">
              <label for="Cocoa_Purchases">Cocoa Purchases Made:</label>
              <input type="Number" class="form-control" id="Cocoa_Purchases" placeholder="Cocoa Purchases" name="Cocoa_Purchases">
            </div>
            <div class="form-group">
              <label for="Cocoa_Evacuated_To_Depot">Cocoa Evacuated to Depot:</label>
              <input type="Number" class="form-control" id="Cocoa_Evacuated_To_Depot" placeholder="Cocoa_Evacuated_To_Depot" name="Cocoa_Evacuated_To_Depot">
            </div>
            <div class="form-group">
              <label for="Cocoa_Evacuated_To_Port">Cocoa Evacuated to Port:</label>
              <input type="Number" class="form-control" id="Cocoa_Evacuated_To_Port" placeholder="" name="Cocoa_Evacuated_To_Port">
            </div>
            <div class="form-group">
              <label for="District_Name">Driver's Name:</label>
              <input type="name" class="form-control" id="Driver_Name" placeholder="Driver Name" name="Driver_Name">
            </div>
            <div class="form-group">
              <label for="District_Name">Driver's Contact:</label>
              <input type="Number" class="form-control" id="Driver_Contact" placeholder="Driver's Contact" name="Driver_Contact">
            </div>
            <div class="form-group">
              <label for="District_Name">Assist Driver's Name:</label>
              <input type="name" class="form-control" id="Driver_Name" placeholder="Driver Name" name="ADriver_Name">
            </div>
            <div class="form-group">
              <label for="District_Name">Assist Driver's Contact:</label>
              <input type="Number" class="form-control" id="Driver_Contact" placeholder="Driver's Contact" name="ADriver_Contact">
            </div>
            <label for="DistrictID">Name of District:</label>
            <select name="DistrictID" class="custom-select">
              <?php

              $districts = select_district();
              foreach($districts as $district){
                echo "<option value='".$district['DistrictID']."'>".$district['District_Name']."</option>";
              }
                
                
                ?>

            </select>
            <p></p>
            <button type="submit" name = "usertui" class="btn btn-primary">Add Operations</button>
          </form>
        </div>
      </div>
    </div>

</body>
</html>
