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
			<title>Bakelove CMS</title>
			<link rel="stylesheet" href="css/main.css"/>
		</head>

		<body>
			<div class="container">
				<a href="index.php" id="logo">CMS</a>

				<h4>
					<?php echo $data['item_title']; ?>
				</h4>
				<h5><?php echo $data['item_price']; ?></h5>

				<p><?php echo $data['item_description']; ?></p>
				<div><img src="data:image/jpg;base64,<?php echo $data['item_image']; ?>"/> </div>

				<a href="index.php">&larr; Back</a>
			</div>
		</body>
	</html>

	<?php
} else {
	header('Location: index.php');
	exit();
}

?>