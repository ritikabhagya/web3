<?php

session_start();

include_once('includes/connection.php');

	if (isset($_POST['name'], $_POST['title'])) {
		$name = $_POST['name'];
		$title = $_POST['title'];
		$url = $_POST['url'];
		$description = nl2br($_POST['description']);

		//Adding images
		// $image = addslashes(file_get_contents($_FILE['image']['tmp_name']));


		if (empty($name) or empty($url)) {
			$error = 'All fields are required!';
		} else {
			$query = $pdo->prepare('INSERT INTO projects (student_name, project_title, project_url, project_description) VALUES (?, ?, ?, ?)');

			$query->bindValue(1, $name);
			$query->bindValue(2, $title);
			$query->bindValue(3, $url);
			$query->bindValue(4, $description);

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
				<a href="index.php" id="logo">Main</a>

				<br>

				<h4>Add a new project</h4>

				<?php if (isset($error)) { ?>
					<small style="color:#dd0017;"><?php echo $error; ?></small>
					<br><br>

				<?php } ?>

				<form action="add.php" method="post" enctype="multipart/form-data" autocomplete="off">
					<input type="text" name="name" placeholder="Name" /><br><br>
					<input type="text" name="title" placeholder="Project title" /><br><br>
					<input type="text" name="url" placeholder="URL" /></textarea><br><br>
					<textarea rows="15" cols="50" placeholder="Description" name="description"></textarea><br><br>
					<input type="submit" value="Add Item" />
				</form>
				
			</div>
			<?php include_once('index.php'); ?>
		</body>
	</html>
