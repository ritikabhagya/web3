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
				<div class="back"><a href="index.php">&larr; Projects</a></div>

				<h4>
					<?php echo $data['project_title']; ?>
				</h4>
				<h5><?php echo $data['student_name']; ?></h5>

				<p class="project-description"><?php echo $data['project_description']; ?></p>
				<?php 
					if (empty ($data['project_url_youtube'])) {
				?>
				<p><iframe src="//player.vimeo.com/video/<?php echo $data['project_url_vimeo']; ?>?byline=0&amp;color=ffffff" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>
				<?php } ?>
				<?php 
					if (empty ($data['project_url_vimeo'])) {
				?>
				<p><iframe width="800" height="450" src="//www.youtube.com/embed/<?php echo $data['project_url_youtube']; ?>" frameborder="0" allowfullscreen></iframe></p>
				<?php } ?>
			</div>
		</body>
	</html>

	<?php
} else {
	header('Location: index.php');
	exit();
}

?>

