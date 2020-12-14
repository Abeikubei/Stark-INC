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
        <h2>Add a District</h2>
        <form action="../actions/DistrictsAction.php" novalidate="true" method="post">
          <div class="form-group">
            <label for="District_Name">District Name:</label>
            <input type="text" class="form-control" id="District_Name" placeholder="District_Name" name="District_Name">
          </div>
          <div class="form-group">
            <label for="District_Name">Region Of District:</label>
            <input type="text" class="form-control" id="Region" placeholder="District Region" name="Region">
          </div>
          <div class="form-group">
            <label for="Vehicle_Number">VehicleID:</label>
            <input type="text" class="form-control" id="Vehicle_ID" placeholder="Enter Vehicle Number" name="Vehicle_ID">
          </div>
          <div class="form-group">
            <label for="Vehicle_Number">Vehicle Registration Number:</label>
            <input type="text" class="form-control" id="Vehicle_Number" placeholder="Enter Vehicle Number" name="Vehicle_Number">
          </div>
          <button type="submit" name = "usertui" class="btn btn-primary">Add District</button>
        </form>
      </div>
    </div>
  </div>

<!-- display here -->


</body>
</html>
