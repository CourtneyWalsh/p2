<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />

	<title>Courtney Walsh Password Generator</title>
	<link rel="stylesheet" href="styles.css">
	<?php require "logic.php" ?>

</head>

<body>
	<div class="password">
	<?=$password?>
	</div>

	<div class="container">
	<form method="POST">
		<label for="wordCount">How many words would you like your password to be? (Max 9) </label>
		<input type="text" name="wordCount" id="wordCount"> <br>
		
		<label for="addUpper">Would your words to start with an uppercase letter? </label>
		<input type="checkbox" id="addUpper" name="addUpper" value="addUpper"> <br>
		
		<label for="addNumber">Would you like a number added?</label>
		<input type="checkbox" id="addNumber" name="addNumber" value="addNumber"><br>		
		<label for="addSymbol">How about a symbol? </label>
		<input type="checkbox" id="addSymbol" name="addSymbol" value="addSymbol"><br>
		<input type="submit" class="button" value="Order Up!">
	</form>
	</div>
</body>
</html>