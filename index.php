<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basics</title>
</head>
<style>
	ul{
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		gap: 2rem;
	}
	li{
		list-style: none;
		padding: 1rem ;
		width: fit-content;
		border-radius: 20px;
		color: white;
		font-family: 'Roboto',sans-serif;
			font-size: 1rem;
		font-weight: 500;
		background: #45edac;
	}
	a{
		text-decoration: none;
		color: #23adc3;
	}
	li:hover {
		background: #563eda;
		
	}
	li:hover >a{
		color: #fff;
	}

	.gt{
		padding: 1rem;
		background:#45edac ;
		border-radius: 20px;

	}
	.gt:hover{
		color: #fff;
	}
	</style>
<body>
	<h2>Click Any link to go to the respectful sections You Want</h2>
	<ul>
		<li><a href="array.php">Simple Array and Printouts</a></li>
		<li><a href="functions.php">Simple Fucnctions</a></li>

		<li><a href="forloop.php">Simple For Loops</a></li>

		<li><a href="dowhileloop.php">Simple DO while</a></li>
		<li><a href="string.php">Simple String Manipulation</a></li>
       <li><a href="date-time.php">Simple Date & Time Manipulation</a></li>



		<li><a href="whileloop.php">Simple While Loops</a></li>

		<li><a href="ifElsestatement.php">Simple If Statements</a></li>

		<li><a href="switchstatement.php" >Simple Switch Statement</a></li>

	</ul>
	<h1>Hello world</h1><br>
	<p>HEllo  body</p>

	<!-- PHP -->
	<?php 

	echo'Hello';

	 ?>

	 <!-- PHP -->
	 <?php
	 echo "</br>";
	 $name = 'Kelvin';
	 echo $name;
	 $age = 20;
	 $YOB = 2022 - $age;
	 //Single qoute concatenation
	 echo '<h1>My name is: '.$name.' I am '.$age.' My Year of Birth is '.$YOB.'</h1>';
	 echo "</br>";
	 //Double qoute concatenation/Interpolation

	 echo "<h1>My name is: $name I am $age My Year of Birth is $YOB</h1>";

 
	 ?>
	 <a class="gt" target="blank" href="https://heroku.com">Heroku web app</a>
</body>
</html>