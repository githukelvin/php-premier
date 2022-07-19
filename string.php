<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STRING MANUPILATION</title>
</head>
<body>
	<h1>LEARNING STRING MANUPILATION</h1>


	<?php 

	//Concatenation of strings
	$name = "Students Who came late";
	$name1 = "Students in class";
	$perName = "kelvin githu";
 	echo $name . " , are ".$name1 . " 4East";
	echo '</br>';


//String TRANSFORMATION
	echo 'Uppercase first letter ' .ucfirst($perName) .'<br/>';
	//string transformation to lowercase 
	echo 'Uppercase first letter of each word ' .ucwords($perName) .'<br/>';
	// string transformation to uppercase
	echo "Uppercase : " .strtoupper($perName).'<br/>';
	//string transformation to lower case
	echo "Uppercase : " .strtolower('KELVIN MAINA').'<br/>';

//STRING REPEATATION
	echo "Repeat String " . str_repeat('Kelvin',2) ."<br>";
	//substrings
	echo "Get substring: ". substr($perName, 5,10) .'<br>';
	//nesting  code function 
	echo "Get substring: ". strtoupper(substr($perName, 5,10)). '<br/>';

   //string position 

	echo "Get position of a string on a string :" . strpos('eagle', 'l') . '<br/>';
	//returns 3


	//Find string in a string

	echo strchr('nissan','s');

	//find  how  a string is  we  use strlen

	$bird ='vulture';

	echo "number of string is " . strlen($bird) .'<br>';

	//trim to remove  spaces  in left or right  of a string
	echo "Use of the function trim: " . 'A'. ' B C D '.'E'.'<br>' ;
	//trim() remove whitespaces in both sides
	echo "Use of the function trim: " . 'A'. trim(' B C D ').'E'.'<br>' ;
//ltrim()  remove whitespace to the left
	echo "Use of the lfunction trim: " . 'A'.ltrim( ' B C D ').'E'.'<br>' ;
//rtrim() remove whitespace to the right
	echo "Use of the function rtrim: " . 'A'.rtrim( ' B C D ').'E'.'<br>' ;
//str_replace()  replaces string it accepts three inputs 1.string to be replaced or search 2.string to replace 3.variable name or subject

	echo "USE OF STR_REPLACE: " .str_replace('vulture', 'hawk', $bird);

	










?>
</body>
</html>