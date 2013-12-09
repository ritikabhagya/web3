<?php

session_start();

include_once('includes/connection.php');
include_once('includes/item.php');

$item = new Item;

// if (isset($_SESSION['logged_in'])) {
	if(isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = $pdo->prepare('DELETE FROM items WHERE item_id = ?');
		$query->bindValue(1, $id);
		$query->execute();

		header('Location: delete.php');
	}

	$items = $item->fetch_all();
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

				<h4>Select an Item to Delete:</h4>

				<form action="delete.php" method="get">
					<select onchange="this.form.submit();" name="id">
						<?php foreach ($items as $item) { ?>
							<option value="<?php echo $item['item_id']; ?>">
								<?php echo $item['item_title']; ?>
							</option>
						<?php } ?>

					</select>
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