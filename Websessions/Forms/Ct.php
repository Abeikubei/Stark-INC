<?php
require(dirname(__FILE__)).'/../classescontrollers/CT_controller.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a Clerk Transaction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style >
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
        <h2>Add a Clerk Transaction</h2>
        <form action="../actions/CTransactionAction.php" novalidate="true" method="post">
          <div class="form-group">
            <label for="Transaction">Clerk Transaction Date and Time:</label>
            <input type="datetime-local" class="form-control" id="CTransactionDDT" placeholder="Transaction Date and Time" name="CTransactionDDT">
          </div>
          <div class="form-group">
            <label for="Cocoa Bags">Amount of Cocoa Bags Obtained:</label>
            <input type="Number" class="form-control" id="Cocoa_Bags" placeholder="Amount of Cocoa Bags" name="Cocoa_Bags">
          </div>
          <div class="form-group">
            <label for="Cocoa Bags">Amount of Money Paid:</label>
            <input type="Number" class="form-control" id="Money_paid" placeholder="Amount of Cocoa Bags" name="Amount_of_Money_Paid">
          </div>
          <label for="FarmerID">Farmer Involved:</label>  
          <select name="FarmerID" class="custom-select"> 
          <?php

              $farmers = select_farmerfunc();
              foreach($farmers as $farmer){
                echo "<option value='".$farmer['FarmerID']."'>".$farmer['Farmer_Name']."</option>";
              }
                
                
                ?>   
          </select>
          <!-- Same select options for Clerks -->
          <label for="ClerkID">Clerk Involved:</label>  
          <select name="ClerkID" class="custom-select" placeholder="Clerk Involved in Transaction">
            <?php

              $clerks = select_clerkfunc();
              foreach($clerks as $clerk){
                echo "<option value='".$clerk['ClerkID']."'>".$clerk['Clerk_Name']."</option>";
              }
                
                
                ?>
          </select>
    <br><br>
    <button type="submit" name ="usertui" class="btn btn-primary">Add Clerk Transaction</button>
  </form>
</div>
</div>
</div>

</body>
</html>
