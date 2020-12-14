<?php

if (isset($_POST["csubmit"])) {
    $recipient="abeikubei123@gmail.com";
    $subject="subject";
    $sender=$_POST["cname"];
    $senderEmail=$_POST["cemail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!--Font-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

	<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

	<style>
.navbar-nav > .active > a {
		  color: #ff1a1a!important;   
		}
.nav-item > a:hover {
		  color: #ff1a1a!important;

		}

.navbar-nav{
			float: right;
		}
	</style>

	<title>Contact Us</title>

</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-dark" role="navigation">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		  			</button>
		  			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">

	    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      			<li class="nav-item">
	        			<a class="nav-link" href="../index.php">Home</span></a>
	      			</li>

	      		<li class="nav-item">
	        			<a class="nav-link" href="About.php">About</a>
	      			</li>

	      		<li class="nav-item">
	        			<a class="nav-link" href="contact-us.php">Contact Us</span></a>
	      			</li>

	     		</ul>

	     		 <ul class="navbar-nav">
					      <li class="nav-item">
					        <a class="nav-link" href="login.php">Login</a>
					      </li>
					  </ul>
	      </div>
	  </div>
	</nav>

	<!--Home-->

<br><br>
<h3 style="text-align: center; color: #e6005c">Get In Touch With Us!</h3>
 
	<!--Form-->
	<form method="post" action="contact-us.php">
		<div class="container" style="width: 70%">
		<div class="form-group">
	    <input class="form-control" name="cname" type="text" placeholder="Name" required>
	 	</div>

	 	<div class="form-group">
	    <input type="email" class="form-control" name="cemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email e.g. xyz@gmail.com" required>
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	 	</div>

	 	<div class="form-group">
	    <input class="form-control" name="cnum" type="text" placeholder="Phone Number e.g. 0244123456">
	 	</div>

	 	<div class="form-group">
    	<input class="form-control" name="subject" type="text" placeholder="Subject" required>
  		</div>

  		<div class="form-group">
	    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Message" required></textarea>
	 	</div>

	 	<button type="submit" name="csubmit" class="btn btn-primary">Send Message</button>
	 	</div>
	</form>

	<br><br>


<footer>
<div style="background-color:#404040; max-width: 100%; margin: 0 auto; height: 50px;"><br>
   <h6 style="text-align: center; color: white;">2020 © Copyright. Websters. All rights reserved.</h6>
  </div>

 </footer>


 <!--JQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>