<html>
<head><title>Table</title></head>
<body>
<form action="" method="POST">
<center><input type="text" name="number" size="20" > </center>    <br>
<center><input type="submit" name="table" value="get table"> </center>
</form>
</body>
</html>

<?php
$num=$_POST['number'];
if($num<=20)
{
  for ($i=1; $i<=10; $i++)
  {
    $mul=$num*$i;
    echo "<center>$mul </center><br>";
   }
}
  else
  {
  echo "<center>envalid entry</center>";
   }


?>
