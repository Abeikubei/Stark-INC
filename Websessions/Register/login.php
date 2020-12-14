<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/registerstyle.css">
</head>
<body style="background-color: #000033;">
    <br>
	<div class="register-page">
        <div class="form">
        <form class="register_form" id="regform" action="loginprocess.php" method="POST" onsubmit="formvalidation()" novalidate="true">
            <h3 style="text-align: center; color: white;">LOGIN</h3>
             <div class="details">Email Address:</div>
             <input id="c_email" name="c_email" type="email" placeholder="example@website.com" required/>

             <div class="details">Password:</div>
             <input id="password" name="c_password" type="password" required/>
            <button type="submit" name="userlog" class="submit-btn">CONTINUE</button>
            <p class="message">Not Registered | <a href="register.php">Create An Account</a></p>
<script >
    function formvalidation(){
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


        if(document.getElementById('password').value == ""){
            alert('The password field cannot be empty')
            return false
        }

        return true
    }
</script>
</body>
</html>