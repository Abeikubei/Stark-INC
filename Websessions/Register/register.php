<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../css/registerstyle.css">
</head>
<body style="background-color: #000033;">
    <div class="container-fluid">
	<div class="register-page">
        <div class="form">
        <h3 style="text-align: center; color: white;">REGISTER</h3>
        <form class="register_form" id="regform" action="registerprocess.php" method="POST" onsubmit="return formValidation()" novalidate="true">
            <div id="form-errors"></div>
            <div class="details"> Name:</div>
             <input id="c_name" name="Admin_Name" type="text" placeholder="Full Name" required/>

             <div class="details">Email Address:</div>
             <input id="c_email" name="Email" type="email" placeholder="example@website.com" required/>

             <div class="details">Password:</div>
             <input id="password" name="Password" type="password" placeholder="Make sure it's at least 8 characters">
             <div id="length-error"></div>

             <div class="details">Confirm Password:</div>
             <input id="confirm" name="confirm_pass" type="password" placeholder="Re-enter the above password">
             <div id="password-error"></div>

             <div class="details">Contact Number:</div>
             <input id="c_contact" name="Contact" type="text" placeholder="e.g. 0248492482" required>

            <button type="submit" name="userreg" class="submit-btn">Create Account</button>
            <p class="message">Already Registered? | <a href="login.php">Login</a></p>
            <script src="../js/validation.js"></script>
        </form>
        </div>
    </div>
</div>

<script>
    function formValidation(){
        // alphabets
        var regex = /^[a-zA-Z]+$/;

        if(regex.test(document.getElementById('c_name').value) == false){
            alert("Name must be in alphabets only");
            document.getElementById('c_name').focus();
            return false;
        }
        if(document.getElementById('c_name').value == ""){
            alert("Name Field cannot be left empty");
            document.getElementById('c_name').focus();
          return false;
        }

        // phone number
        var regex = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
        if(regex.test(document.getElementById('c_contact').value) == false){
            alert("This is not a valid phone number");
            document.getElementById('c_contact').focus()
            return false;
        }
        if(document.getElementById('c_contact').value == ""){
            alert("Contact Field cannot be left empty");
            document.getElementById('c_contact').focus();
          return false;
        }

        // email
        var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
        if(regex.test(document.getElementById('c_email').value) == false){
            alert("This is not a valid Email");
            document.getElementById('c_contact').focus()
            return false;
        }
        if(document.getElementById('c_email').value == ""){
            alert("Email Field cannot be left empty");
            document.getElementById('c_contact').focus();
          return false;
        }

        // check if passwords match
        if(document.getElementById('password').value != document.getElementById('confirm').value){
            alert('The passwords must match')
            return false
        }

        if(document.getElementById('password').value == "" || document.getElementById('confirm').value==""){
            alert('The password field cannot be empty')
            return false
        }

        return true
    }

</script>
</body>
</html>
