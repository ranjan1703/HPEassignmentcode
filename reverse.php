<html>
<body>
<h2>reverse string </h2>
  <h3><h3>
	<form action="" method="post">
		<input type="text" name="number" />
		<input type="submit" />
	</form>
</body>
</html>
<?php
//ini_set('xdebug.max_nesting_level', 256);
$num=$_POST['number'];
function reverse_string($str1)
{
 $num = strlen($str1);
 if($num == 1)
   {
    return $str1;
   }
 else
   {
   $num--;
   return reverse_string(substr($str1,1, $num)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string($num)."\n");

?>
