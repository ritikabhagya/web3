<?php

include_once('includes/connection.php');
include_once('includes/item.php');

$item = new Item;

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$data = $item->fetch_data($id);

	?>

	<html>
		<head>
			<title>D+T Projects</title>
			<link rel="stylesheet" href="css/main.css"/>
		</head>

		<body>
			<div class="container">
				<a href="index.php">&larr; Back</a>

				<h4>
					<?php echo $data['student_name']; ?>
				</h4>
				<h5><?php echo $data['project_title']; ?></h5>

				<p><?php echo $data['project_url']; ?></p>

				<p><?php echo $data['project_description']; ?></p>

				
			</div>
		</body>
	</html>

	<?php
} else {
	header('Location: index.php');
	exit();
}

?>