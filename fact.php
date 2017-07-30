<html>
<head>
<title>factorial program</title>
</head>
<body>
  <h1>factorial program</h1>
<form action = " " method = "post">
enter your number :
<input type = "text" name = "num1"><br>
<input type = "submit" name ="btn" value = "show" onclick = "fact()">
</form>
<?php
if(isset($_POST['btn']))
{
$n = $_POST['num1'];
fact($n);
}
function fact($n)
{
$f=1;
for ($i=1; $i<=$n;$i++)
$f = $f * $i;
echo"factorial of this no :",$f;
}
?>
</body>
</html>
