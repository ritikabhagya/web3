<?php

session_start();

include_once('includes/connection.php');

	?>

	<html>
		<head>
			<title>D+T Projects</title>
			<link rel="stylesheet" href="../css/main.css"/>
			<link href='http://fonts.googleapis.com/css?family=Raleway:700,300,500' rel='stylesheet' type='text/css'>
		</head>

		<body>
			<div class="container">
				<div class="logo"><img src="img/DTlogo.png"></div>
				<ol class="menu">
					<li><div class="add"><a href="add.php">Add your project</a></div></li>
					<li><div class="add"><a href="delete.php">Delete projects</a></div></li>
					<li><div class="add"><a href="delete.php">Project showcase</a></div></li>
				</ol>
			</div>
		</body>
	</html>


	