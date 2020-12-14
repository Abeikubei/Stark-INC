<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
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
             <form class="register_form" id="regform" action="../Register/loginprocess.php" method="POST" onsubmit="formvalidation()" novalidate="true">
                <h3>Login Page</h3>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
                    </div>
                    <button type="submit" name="userlog" class="btn btn-success btn-block">Submit</button>
                </form>
                    </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    
</div>
<!-- Javascript Validation -->
<script >
        function formvalidation(){
            // email
            var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
            if(regex.test(document.getElementById('Email').value) == false){
                alert("This is not a valid Email");
                document.getElementById('c_contact').focus()
                return false;
            }
            if(document.getElementById('Email').value == ""){
                alert("Email Field cannot be left empty");
                document.getElementById('c_contact').focus();
              return false;
            }


            if(document.getElementById('Password').value == ""){
                alert('The password field cannot be empty')
                return false
            }

            return true
        }
</script>

</body>

</html>