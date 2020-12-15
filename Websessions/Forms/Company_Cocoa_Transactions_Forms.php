<?php
require(dirname(__FILE__))."/../classescontrollers/CCT_controller.php";

if(isset($_GET['update'])){
  $id = $_GET['update'];
  $x =  view_CCTfunction($_GET['update']);
  $date = $x[0]['Transaction_Date_and_Time'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a Cocoa Transaction</title>
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
          <h2>Add a Cocoa Transaction</h2>
          <form action="../actions/Entity_Transacts.php" novalidate="true" method="post">
            <div class="form-group">
              <label for="Transaction">Transaction Date and Time:</label>
              <input type="datetime-local" class="form-control" id="Company_Transaction" placeholder="Transaction Date and Time" name="CDOB" value="<?php echo (isset($date))? $date : '';?>">
            </div>
            <div class="form-group">
              <label for="Money Withdrawn">Category of Cocoa:</label>
              <select name="cocoaca" class="custom-select">
              <option value="Small">Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>   
            </div>
            <div>
              <label for="Port">Port:</label>
              <select name="Port" class="custom-select">
              <option value="Takoradi Port">Takoradi Port</option>
              <option value="Tema Port">Tema Port</option>
              <option value="Kaase Port">Kaase Port</option>
            </select>   
            </div>
            <input type="hidden" name="id" value="<?php echo (isset($id))? $id : '';?>">
            <button type="submit" name="<?php echo (isset($id))? 'update' : 'usertui';?>" class="btn btn-primary">Add Cocoa Transaction</button>
          </form>
        </div>
      </div>
    </div>

</body>
</html>
