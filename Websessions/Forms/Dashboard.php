<!DOCTYPE html>
<html lang="en">
<body style="background-color: white">
<head>
	<title>Welcome to Adinkafo Commodities</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
  <meta property="og:image" content="adikanfo_logo_tran_bg.png" style="width: 10px">
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Dashboard.css">
<style>
  a{
    color: white
  }
  .bg{
  background: url("../images/fd5390e195888328d5d17a5e4f46d08f.jpg") no-repeat center fixed;
  background-size: cover;
}
.footer {
   position:move;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
}
</style>
</head>


<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="../images/adikanfo_logo_tran_bg.png" alt="logo" style="width:60px;">
  </a>

 <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="Logout.php" id="navbardrop" data-toggle="dropdown">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Logout.php">Log Out</a>
      </div>
    </li>
    </ul>
  </div>
</nav>

<!-- Tables -->
<div class="container-fluid bg text-dark text-center" style="padding-top:100px;padding-bottom:100px">
<div class="row">
  <div class="col-lg-4 col-md-4 col-md-12">
<div class="card-deck">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="../images/1000px-Districts_of_the_Eastern_Region_(2012).svg.png" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
       <div class="row">
        <div class="col-6">
      <a href="DistrictsForm.php" class="btn btn-danger stretched-link">Add a District</a></div>
      <div class="col-6">
      <a href="../ViewTables/ViewDistricts.php" class="btn btn-primary stretched-link">View / Edit</a></div>
    </div>
    </div>  
  </div>
</div>
</div>
 <div class="col-lg-4 col-md-4 col-md-12">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="../images/8images.jpg" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
       <div class="row">
        <div class="col-6">
      <a href="DistrictsOperationsForm.php" class="btn btn-danger stretched-link">Add a District Operation</a></div>
      <div class="col-6">
      <a href="../ViewTables/ViewDOs.php" class="btn btn-primary stretched-link">View / Edit</a></div>
    </div>
    </div>  
  </div>
</div>
<div class="col-lg-4 col-md-4 col-md-12">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="../images/Case-Study-District-Manager-min.png" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
       <div class="row">
        <div class="col-6">
      <a href="DistrictsManagersForm.php" class="btn btn-danger stretched-link">Add a District Manager</a></div>
      <div class="col-6">
      <a href="../ViewTables/ViewDMs.php" class="btn btn-primary stretched-link">View / Edit</a></div>
    </div>
    </div>  
  </div>
</div>
 <div class="col-lg-4 col-md-4 col-md-12">
  <div class="card">
    <img class="card-img-top" src="../images/story_cocoa-farmers-band-together-for-profits-1.jpg" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
       <div class="row">
        <div class="col-6">
      <a href="Farmers.php" class="btn btn-danger stretched-link">Add a Farmer</a></div>
      <div class="col-6">
      <a href="../ViewTables/ViewFarmers.php" class="btn btn-primary stretched-link">View / Edit</a></div>
    </div>
    </div>  
  </div>
</div>
 <div class="col-lg-4 col-md-4 col-md-12">
  <div class="card">
    <img class="card-img-top" src="../images/abocfa-group-pic.png" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
       <div class="row">
        <div class="col-6">
      <a href="PurchasingClerksForm.php" class="btn btn-danger stretched-link">Add a Purchasing Clerk</a></div>
      <div class="col-6">
      <a href="../ViewTables/ViewPCs.php" class="btn btn-primary stretched-link">View / Edit</a></div>
    </div>
    </div>  
  </div>
</div>
 <div class="col-lg-4 col-md-4 col-md-12">
  <div class="card">
    <img class="card-img-top" src="../images/Preview responsible supply chain.jpg" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
        <div class="row">
        <div class="col-6">
      <a href="Ct.php" class="btn btn-danger stretched-link">Add a Clerk Transaction</a></div>
      <div class="col-6">
      <a href="../ViewTables/ViewCTs.php" class="btn btn-primary stretched-link">View / Edit</a></div>
    </div>
    </div>  
  </div>
</div>
 <div class="col-lg-4 col-md-4 col-md-12">
  <div class="card" >
    <img class="card-img-top" src="../images/CAMION(4).jpg" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
       <div class="row">
        <div class="col-6">
      <a href="Company_Cocoa_Transactions_Forms.php" class="btn btn-danger stretched-link">Add a Cocoa Company Transaction</a></div>
       <div class="col-6">
      <a href="../ViewTables/ViewCCTs.php" class="btn btn-primary stretched-link">View / Edit</a></div>
    </div>
    </div>  
  </div>
</div>
 <div class="col-lg-4 col-md-4 col-md-12">
  <div class="card" >
    <img class="card-img-top" src="../images/Africa-Studio_254682907-1400x621.jpg" alt="Card image" style="width:100%; height:280px;">
    <div class="card-body" style="text-align: center;">
      <div class="row">
        <div class="col-6">
      <a href="BanksForm.php" id="addbt" class="btn btn-danger stretched-link">Add a Bank Transaction</a></div>
      <div class="col-6">
      <a href="../ViewTables/ViewBTs.php" id="viewbt" class="btn btn-primary stretched-link">View/Edit</a></div>
    </div>
    </div>  
  </div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="page-footer font-small bg-light text- pt-4">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Adikanfo Commodities Ltd
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>