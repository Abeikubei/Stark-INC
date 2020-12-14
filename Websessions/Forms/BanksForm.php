<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a Bank Transaction</title>
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
        <h2>Add a Bank Transaction</h2>
        <form action="../actions/BanksAction.php" novalidate="true" method="post">
          <div class="form-group">
            <label for="Bank_Name">Bank Name:</label>
            <input type="name" class="form-control" id="Bank_Name" placeholder="Enter the name of the Bank" name="Bank_Name">
          </div>
           <div class="form-group">
            <label for="Location">Location of Bank:</label>
            <input type="name" class="form-control" id="TransactionL" placeholder="Enter the location of the Bank." name="Bank_Location">
          </div>
          <div class="form-group">
            <label for="Transaction">Transaction Date and Time:</label>
            <input type="datetime-local" class="form-control" id="Transaction_DOB" placeholder="Transaction Date and Time" name="TDOB">
          </div>
          <div class="form-group">
            <label for="Money Withdrawn">Amount of CTOR Recieved:</label>
            <input type="Number" class="form-control" id="Money" placeholder="Amount of Money Withdrawn" name="MoneyR">
          </div>
          <div class="form-group">
            <label for="Money Withdrawn">Amount of Money Withdrawn:</label>
            <input type="Number" class="form-control" id="Money" placeholder="Amount of Money Withdrawn" name="Money">
          </div>
         
          <button type="submit" name="usertui" class="btn btn-primary">Add Bank Transaction</button>
        </form>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>

</body>
</html>
