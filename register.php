<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>    
<link rel="stylesheet" style="text/css" href="css/bootstrap.css">
</head>
<body>
    
        <div class="col-sm-10" style="width: 400px; margin-left: 450px; margin-top: 45px;">                          
            <div class="jumbotron">
                 <div class="form-group" style="margin-top: -50px;">
                    <h2 style="margin-left: 140px;">
                        Sign Up
                    </h2>
                </div>
                <hr>
                <form class="form-horizontal" style="margin- left: 60px">
                   <div class="container">
		<div class="row">
			<div class=" co-md-offset-4 col-md-6">
           
	            <form action="action/register.php" method="post">
                
	                <div class="form-group input-group">                       
	                    <label for="first_name">First Name</label>
	                    <input class="form-control" type="text" style="width: 250px;" name="first_name" id="first_name" placeholder="First Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="last_name">Last Name</label>
	                    <input class="form-control" type="text" style="width: 250px;" name="last_name" id="last_name" placeholder="Last Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="username">Username</label>
	                    <input class="form-control" type="text" style="width: 250px;" name="username" id="username" placeholder="Username" required>
	                </div>
	                <div class="form-group">
	                    <label for="password">Password</label>
	                    <input class="form-control" type="password" style="width: 250px;"  name="password" id="password" placeholder="Password" required>
	                </div>
                     <div class="form-group">
	                    <label for="confirm password">Confirm Password</label>
	                    <input class="form-control" type="confirm password" style="width: 250px;"  name="password" id="password" placeholder="Password" required>
	                </div>
                    
	                <div class="text-center" style="margin-left:75px;">
	                	<button type="submit" name="register" class="btn btn-success">Submit</button>
	                	<a href="login.html" style="margin-left:20px;">Back</a>
	                </div>
	            </form>
        	</div>
                 
    </div>

                    </div>
                    
                    
                
                    
                
                    
<script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>