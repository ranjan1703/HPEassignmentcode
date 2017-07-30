
<html>
<head>
	<title>PHP form select box using switch</title>

<style>
label,a
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px;
}

</style>
</head>

<body>
<?php
	if(isset($_POST['formSubmit']))
	{
		$varCity = $_POST['formCity'];
		$errorMessage = "";

		if(empty($varCity))
		{
			$errorMessage = "<li>You forgot to select a city!</li>";
		}

		if($errorMessage != "")
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		}
		else
		{



			$redir = "kolkata.html";
			switch($varCity)
			{
				case "kolkata": $redir = "kolkata.html"; break;
				case "delhi": $redir = "delhi.html"; break;
				case "bangalore": $redir = "bangalore.html"; break;
				case "mumbai": $redir = "mumbai.html"; break;
				case "chennai": $redir = "chennai.html"; break;
				case "patna": $redir = "patna.html"; break;
				default: echo("Error!"); exit(); break;
			}
			echo " redirecting to: $redir ";



			exit();
		}
	}
?>
<h1>PHP form select box using switch</h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='formCity'>Select your city of residence</label><br>
	<select name="formCity">
		<option value="">Select a city...</option>
		<option value="kolkata">Kolkata</option>
		<option value="delhi">delhi</option>
		<option value="bangalore">bangalore</option>
		<option value="mumbai">mumbai</option>
		<option value="chennai">chennai</option>
		<option value="patna">patna</option>
	</select>
	<input type="submit" name="formSubmit" value="Submit" />
</form>

</body>
</html>
