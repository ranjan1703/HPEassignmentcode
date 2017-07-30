<?php

if(isset($_POST['formSubmit']))
{
  $varCountry = $_POST['formCountry'];
  $errorMessage = "";

  if(empty($varCountry))
  {
    $errorMessage = "<li>You forgot to select a country!</li>";
  }

  if($errorMessage != "")
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
  else
  {
    // note that both methods can't be demonstrated at the same time
    // comment out the method you don't want to demonstrate

    // method 1: switch
    $redir = "thank you";
    switch($varCountry)
    {
      case "US": $echo = "you selected"; break;
      case "UK": $echo = "you selected uk"; break;
      case "France": $echo = "you selected france"; break;
      case "Mexico": $echo = "Mexico.html"; break;
      case "Russia": $echo = "Russia.html"; break;
      case "Japan": $echo = "Japan.html"; break;
      default: echo("Error!"); exit(); break;
    }
    echo " $redir ";

    // header("Location: $redir");
    // end method 1

    // method 2: dynamic redirect
    //header("Location: " . $varCountry . ".html");
    // end method 2

    exit();
  }
}
?>




<html>
<head>selecting one from multiple value</head>
<body>
<label for='formCountries[]'>Select the countries that you have visited:</label><br>
<select multiple="multiple" name="formCountries[]">
    <option value="US">United States</option>
    <option value="UK">United Kingdom</option>
    <option value="France">France</option>
    <option value="Mexico">Mexico</option>
    <option value="Russia">Russia</option>
    <option value="Japan">Japan</option>
</select>
</body>
</html>
