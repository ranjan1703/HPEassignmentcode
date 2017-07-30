<html>
<body>
<h2>Armstrong Number </h2>
  <h3>example 371,407 are armstrong number<h3>
	<form action="" method="post">
		<input type="text" name="number" />
		<input type="submit" />
	</form>
</body>
</html>

<?php

	if( $_POST )
	{
		$number = $_POST[ 'number' ];
    $temp = $number;
		$sum  = 0;


		while( $temp != 0 )
		{
			$rem 		= $temp % 10;
			$sum 		= $sum + ( $rem * $rem * $rem );
			$temp 		= $temp / 10;
		}


		if( $number == $sum )
		{
			echo "Armstrong Number";
		}else
		{
			echo "Not an Armstrong Number";
		}
	}

?>
