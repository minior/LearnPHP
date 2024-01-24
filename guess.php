<!DOCTYPE html>
<html>
<head>
	<title> Guessing Game by Jerel Koh - a2b7c2ae </title>
</head>
<body>
	<h1> How's Your Luck? </h1>
<p>
<?php
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < 81 ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > 81 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
</p>
</body>
</html>
  