<?php
require(dirname(__FILE__))."../Database/Database_Credentials.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// Checking to see if "request method" is post.
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	//Get First name
	$ID = $_GET['User_ID'];

	// Checking if inputs are empty
	if (empty($ID)) {
	    echo "Please fill out all Inputs.";
	}
	else {
	    $sql = "DELETE FROM admins WHERE User_ID = '$ID'";

		if ($conn->query($sql) === TRUE) {
			//move to login.php
			header('Location: ../Admins.php');
		}
  		else {
  			echo "Error: " . $sql . "<br>" . $conn->error;
  		}
  		$conn->close();;
  	}
}

?>