<?php

session_start();

include_once('includes/connection.php');

	if (isset($_POST['name'], $_POST['title'])) {
		$name = $_POST['name'];
		$title = $_POST['title'];
		$vimeo = $_POST['vimeo'];
		$youtube = $_POST['youtube'];
		$description = nl2br($_POST['description']);

		//Adding images
		// $image = addslashes(file_get_contents($_FILE['image']['tmp_name']));


		if (empty($name) or empty($title) or empty($vimeo) && empty($youtube)) {
			$error = 'All fields are required!';
		} else {
			$query = $pdo->prepare('INSERT INTO projects (student_name, project_title, project_url_vimeo, project_url_youtube, project_description) VALUES (?, ?, ?, ?, ?)');

			$query->bindValue(1, $name);
			$query->bindValue(2, $title);
			$query->bindValue(3, $vimeo);
			$query->bindValue(4, $youtube);
			$query->bindValue(5, $description);

			$query->execute();

			header('Location: index.php');
		}
	}
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
				<div class="form">

				<h4>Add a new project</h4>

				<?php if (isset($error)) { ?>
					<small style="color:#dd0017;"><?php echo $error; ?></small>
					<br><br>

				<?php } ?>

				
					<form action="add.php" method="post" enctype="multipart/form-data" autocomplete="off">
						<input class="form" type="text" name="name" placeholder="Name" /><br><br>
						<input class="form" type="text" name="title" placeholder="Project title" /><br><br>
						<input class="video" type="text" name="vimeo" placeholder="Vimeo ID (example: 81335477)" /> OR
						<input class="video" type="text" name="youtube" placeholder="Youtube ID (example: sgwhG6qjbcY)" /><br><br>
						<textarea class="description" placeholder="Description" name="description"></textarea><br><br>
						<input class="submit" type="submit" value="Add Item" />
					</form>
				</div>
				
			</div>
			<?php include_once('index.php'); ?>
		</body>
	</html>
