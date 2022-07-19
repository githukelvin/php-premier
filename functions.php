<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FUNCTIONS</title>
</head>
<body>
<h1>Learning PHP Functions</h1>


<?php 
//Defining a function

function message(){
	echo "NICE PERSON" ."<br>";
}
//calling function

message();


//function with parameters

function addition($a,$b){
	$add = $a+$b;
	echo $add ."<br>";
}
$int =90;
addition('40',90);
addition('0',90);
addition(40,930);
addition($int,950);
addition(4,10);
echo addition(3,3);  

function product($num,$num1){
	$prod = $num1*$num;

	return $prod;
}

$return_value = product(10,2);

echo $return_value ."<br>";
echo product(3,10);
?>
</body>
</html>