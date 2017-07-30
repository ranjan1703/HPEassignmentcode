<html>
<body>
<h3> To check given number is Odd or Even PHP</h3>
	<form action="" method="post">
		<label>Enter a number</label><input type="text" name="number" />
		<input type="submit" />
	</form>
</body>
</html>
<?php

	if($_POST){

		$number = $_POST['number'];

		//check if the enter value is a number or throw an error
		if (!(is_numeric($number) && is_int(0+$number))){
			echo "<p style='color:red;'>Error: Please enter an Integer</p>";
			die();
		}


		//divide the entered number by 2
		//if the reminder is 0 then the number is even otherwise the number is odd
		if(($number % 2) == 0){
			echo "You entered an Even number";
		}else{
			echo "You entered an Odd number";
		}
	}

?>
