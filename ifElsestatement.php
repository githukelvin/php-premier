<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IF-ELSE CONTROL STATEMENT</title>
</head>
<style type="text/css">
	p{
		padding: 1rem;
		width: fit-content;
		border-radius: 20px;
		color: white;
		font-family: 'Roboto',sans-serif;
		font-size: 1rem;
		font-weight: 500;
	}
</style>
<body>
<h1>Learning IF ELSE statement PHP</h1>
<?php
  
  $grade = 65;

  if($grade >= 70){
  	echo "<p style='background-color:green;' '>Student Has Passed with : $grade % </p>";
  }
  else if($grade >=50 && $grade <70){
  	echo "<p style='background-color:lightgreen;' >Student Has Passed with Average marks of : $grade % ";
  }
  else{
  	echo "<p style='background-color:red;' >Student Has Failed</p>";
  }

?>

</body>
</html>