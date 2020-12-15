<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Login.css">
</head>

<body>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- Form start -->
                <form class="form-container" id = "regform" action="../Register/registerprocess.php" onsubmit="return formValidation()" method="post" novalidate="true">
                    <div class="form-group">
                        <label for="fname">Admin Name:</label>
                        <input type="fname" class="form-control" id="c_name" placeholder="Enter First Name" name="c_name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="c_email" placeholder="Enter Email" name="c_email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>

                    <div class="form-group">
                        <label for ="cpwd">Confirm Password:</label>
                        <input id="confirm" name="confirm_pass" class="form-control" type="password" placeholder="Re-enter the above password">
                        <div id="password-error"></div>
                   </div>

                   <div class="form-group">
                    <label for ="Contact">Contact Number:</label>
                    <input id="c_contact" name="c_contact" class="form-control" type="text" placeholder="e.g. 0248952482" required>
                   </div>

                    <button type="submit" name="userreg" class="btn btn-success btn-block">Create Account</button>
                    <p class="message">Already Registered? | <a href="Login.php">Login</a></p>
            </form>
    <!-- Form End -->

         </div>
         <div class="col-md-4 col-sm-4 col-xs-12"></div>
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