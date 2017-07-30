<?php
include_once("register.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top:10px">
        <div class="col-sm-12">
<div class="panel panel-success">
    <div class="panel-heading">Welcome To Infopedia</div>
    <div class="panel-body">Please Login Or Register</div>
</div>
        </div>
    </div>

<div class="container">
    <div class="row">
    
</div>
              <div class="col-sm-6">
                         <div class="panel panel-success">

                             <div class="panel-heading"><i class="fa fa-user-plus" aria-hidden="true"></i><h4>Sign-Up</h4></div>
                                 <div class="panel-body">
                                     <form role="form" method="POST" action="register.php" enctype="multipart/form-data">
                           <div class="form-group">
                               <label for="email">Name:</label>
                               <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name">
                          
						   </div>
                           <div class="form-group">
                               <label for="email">Email:</label>
                               
							   <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            
						   </div>
						   
                           <div class="form-group">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
                    
					</div>


                    <button type="submit" name="submit" class="btn btn-default">submit</button>
                </form>
            </div>
        </div>
		<div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
        </div>
       </div>
    </div>


</body>
</html>