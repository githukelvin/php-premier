<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switch Statement</title>
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
	<h1>Learning Switch Statements PhP</h1>


	 <?php

	 $grade ='M';

	 switch ($grade) {
	 	case 'A':
	 		// code...
	 		echo "<p style='background-color:darkgreen'>You Are An Amaueter</p>";
	 		break;
	 	case 'B':
	 	 	echo "<p style='background-color:green'>You Are Awesome</p>";
	 	 	break;
	 	case 'C':
	 		// code...
	 		echo "<p style='background-color:lightgreen'>Pull UP Bro";
	 		break;
	 	default:
	 		// code...
	 		echo "<p style='background-color:red'>Failed....";
	 		break;
	 }



	?>
	

</body>
</html>