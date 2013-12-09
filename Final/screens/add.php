<?php

session_start();

include_once('includes/connection.php');

// if (isset($_SESSION['logged_in'])) {
	if (isset($_POST['title'], $_POST['description'])) {
		$title = $_POST['title'];
		$description = nl2br($_POST['description']);
		$price = $_POST['price'];

		//Adding images
		$image = addslashes(file_get_contents($_FILE['image']['tmp_name']));


		if (empty($title) or empty($description)) {
			$error = 'All fields are required!';
		} else {
			$query = $pdo->prepare('INSERT INTO items (item_title, item_description, item_price, item_image) VALUES (?, ?, ?, ?)');

			$query->bindValue(1, $title);
			$query->bindValue(2, $description);
			$query->bindValue(3, $price);
			$query->bindValue(4, $image);

			$query->execute();

			header('Location: index.php');
		}
	}
?>

	<html>
		<head>
			<title>Bakelove CMS</title>
			<link rel="stylesheet" href="../css/main.css"/>
		</head>

		<body>
			<div class="container">
				<a href="index.php" id="logo">Main</a>

				<br>

				<h4>Add Item</h4>

				<?php if (isset($error)) { ?>
					<small style="color:#dd0017;"><?php echo $error; ?></small>
					<br><br>

				<?php } ?>

				<form action="add.php" method="post" enctype="multipart/form-data" autocomplete="off">
					<input type="text" name="title" placeholder="Title" /><br><br>
					<input type="text" name="price" placeholder="Price" /><br><br>
					<textarea rows="15" cols="50" placeholder="Description" name="description"></textarea><br><br>
					<input type="file" name="image">
					<input type="submit" value="Add Item" />
				</form>
				
			</div>
			<?php include_once('index.php'); ?>
		</body>
	</html>

<?php
// } else {
// 	header('Location: index.php');
// }

?>