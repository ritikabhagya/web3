<?php

session_start();

include_once('includes/connection.php');
include_once('includes/item.php');

$item = new Item;

	if(isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = $pdo->prepare('DELETE FROM projects WHERE project_id = ?');
		$query->bindValue(1, $id);
		$query->execute();

		header('Location: delete.php');

		
	}

	$items = $item->fetch_all();
	?>

	<html>
		<head>
			<title>D+T Projects</title>
			<link rel="stylesheet" href="../css/main.css"/>
		</head>

		<body>
			<div class="container">
				<a href="index.php" id="logo"><div id="cancel"></div></a>

				<br>

				<h4>Select a Project to Delete:</h4>

				<form class="options" action="delete.php" method="get">
					<select onchange="this.form.submit();" name="id">
						<option selected="selected">Select</option>
						<?php foreach ($items as $item) { ?>
							<option value="<?php echo $item['project_id']; ?>">
								<?php echo $item['student_name'], ': ', $item['project_title'] ?>
							</option>
						<?php } ?>

					</select>
				</form>
			</div>
			<?php include_once('index.php'); ?>
		</body>
	</html>