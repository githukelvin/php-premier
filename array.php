<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP-ARRAYS</title>
</head>
<body>
	<h1>LEARNING ARRAYS</h1>
	<?php 

	//Only one datatype  array Homogenous array
	$numbers = array(1,2,3,4,5,6,7,8,9,10,4324,32,341,45,54,65,64,65,343);
	echo $numbers[5];

	echo "<p>$numbers[3]</p>";
	$size =count($numbers);

	echo "<p>Array count is : $size</p>";

	for($count= 0; $count < $size; $count++){
		echo "<p>$numbers[$count]</p>";
	}


	?>

</body>
</html>