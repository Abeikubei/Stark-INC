<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a Farmer</title>
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
        <h2>Add a Farmer</h2>
          <form action="../actions/FarmersAction.php" novalidate="true" method="post">
            <div class="form-group">
              <label for="Farmer_fname">Farmer Name:</label>
              <input type="text" class="form-control" id="Famer_fname" placeholder="Enter the first name of the farmer" name="Farmer_Name">
            </div>
            <div class="form-group">
              <label for="Farmer's Gender">Farmer's Gender:</label>
              <input type="text" class="form-control" id="Gender" placeholder="Male/Female" name="Gender">
            </div>
            <div class="form-group">
              <label for="Farmer_DOB">Farmer's Date Of Birth:</label>
              <input type="date" class="form-control" id="Farmer_DOB" placeholder="Farmer's Date Of Birth" name="DOB">
            </div>
            <div class="form-group">
              <label for="Farmer_Contact">Farmer's Contact:</label>
              <input type="Number" class="form-control" id="Driver_Contact" placeholder="Enter Farmer's Phone Number" name="Contact">
            </div>
             <div class="form-group">
              <label for="Farmer_FRN">Farmer's Family Relative's Name:</label>
              <input type="name" class="form-control" id="Family_Relation" placeholder="Enter a Trusted Relative's Name" name="Family_Relative_Name">
            </div>
             <div class="form-group">
              <label for="Farmer_FRC">Farmer Relative's Contact:</label>
              <input type="Number" class="form-control" id="Family_Relation" placeholder="Enter Relative's Number" name="Family_Relative_Contact">
            </div>
             <div class="form-group">
              <label for="Farmer's Residence">Farmer's Residence:</label>
              <input type="text" class="form-control" id="Famer_Residence" placeholder="Enter the Residence of the Farmer" name="Residence">
            </div>
            <button type="submit" name ="usertui" class="btn btn-primary">Add Farmer</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
