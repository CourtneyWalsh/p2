

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
	<br>
    Password on a Platter is a password generator, which creates a random xkcd password for user. A xkcd password has four words and is generated based on the xkcrd comic. My generator offers the users the ability to choose different aspects of their desired password much like you would a meal at a restaurant. Choices include the number of words in their password, and whether or not they would these words in upper or lower case, a symbol, and/or a number.
</body>
</html>
