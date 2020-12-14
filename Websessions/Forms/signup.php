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
                <form class="form-container" action="actions/RegisterAction.php" novalidate="true" method="post">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="fname" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="lname" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    <div>
                        <p>Already have an account?<a href="Login.php"> Login Here</a></p>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>

                </form>
    <!-- Form End -->

         </div>
         <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    
</div>

</body>

</html>