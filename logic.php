<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>


<?php
 
$wordList = file('wordList.txt');
$wordCount = 0;
$symbols = array("@","%","+","!","#","$","^","?","(",")","{","}","[","]","~");
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

//Number of words
for ($i = 0; $i < $_POST["wordCount"]; $i++) 
	{
      $password = $password . " " . $wordList[rand(0, count($wordList) - 1)];
      
    }

//Uppercase
if(isset($_POST["addUpper"]))
	{
	foreach ($password as $wordList => $word) 
		{
			$password[$wordList] = ucfirst($word);
		}
	}

//Choosing random number
if(isset($_POST["addNumber"]))
	{
	shuffle($numbers);
	$password = $password . " " . $numbers[0];		
	}
else $numbers = '';   

//Choosing random symbol
if(isset($_POST["addSymbol"]))
	{
	shuffle($symbols);
	$password = $password . " " . $symbols[0];
	}
else $symbols= '';

?>