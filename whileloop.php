<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WHILE-STATEMENTS</title>
</head>
<body>
<h1>WHile Loop</h1>
<?php 
$grade = 0;

///Infite loop
/*while($grade < 10 ){

	echo "<p>I AM ELSE THAN 10!</p>";

}
*/

while ($grade <10) {
	// code...
	echo "<p>I AM ELSE THAN 10!</p>";
	$grade++;
}

echo "loop exited";

?>
</body>
</html>