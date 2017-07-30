<?php
include_once("users.php");

if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['pass'])){
//$register=new users;
//extract($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
if(isset($_POST['submit'])) {
  $query = "INSERT INTO signup (name,email,pass)
      VALUES('$name','$email','$pass')";
	  if(mysqli_query($connect,$query)){
	        header('location:index.php?success=1');
    }
    else{
        header('location:register.php?success=0');
    }
}
}

  
?>