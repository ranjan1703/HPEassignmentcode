<?php include_once 'users.php';

session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

if(isset($_POST['email'])&& isset($_POST['pass'])){

//check if form is submitted
if (isset($_POST['submit'])) {
$email = $_POST['email'];
   $pass = $_POST['pass'];
    $query = mysqli_query($connect, "SELECT * FROM signup WHERE email = '" . $email. "' and pass = '" . $pass . "'");

    if ($row = mysqli_fetch_array($query)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
}
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
                                     <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"s enctype="multipart/form-data">
                           
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
        Not Yet Registered? <a href="reg.php">Login Here</a>
        </div>
       </div>
    </div>


</body>
</html>