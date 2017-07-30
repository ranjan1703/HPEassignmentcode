<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="mydb";
$connect=mysqli_connect($hostname,$username,$password,$dbname);
if(!$connect){
    echo "CONNECTION ERROR";
}
else{
    echo "CONNECTION SUCCESSFULLY ESTABLISHED";
}
?>
