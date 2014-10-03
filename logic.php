<?php
 
$wordList = file('wordList.txt');
$wordCount = 0;
$symbols = array("@","%","+","!","#","$","^","?","(",")","{","}","[","]","~");
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

//Number of words
for ($i = 0; $i < $_POST["wordCount"]; $i++) 
	{
      $listOfWords = $password . " " . $wordList[rand(0, count($wordList) - 1)];  
	  $password = $listOfWords;
	}

//Uppercase
if(isset($_POST["addUpper"]))
	{
      $password = ucwords($listOfWords);
	}
//Adding a number
if(isset($_POST["addNumber"]))
	{
	shuffle($numbers);
	$password = $password . " " . $numbers[0];		
	}
else $numbers = '';   

//Adding a symbol
if(isset($_POST["addSymbol"]))
	{
	shuffle($symbols);
	$password = $password . " " . $symbols[0];
	}
else $symbols= '';

?>
