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


			<div class="itemcontainer">
				<div class="add"><a href="index.php">&larr; Projects</a></div>

				<h4 class="itemheading">
					<?php echo $data['project_title']; ?> by <?php echo $data['student_name']; ?>
				</h4>

				<p class="project-description"><?php echo $data['project_description']; ?></p>

				<?php 
					if (empty ($data['project_url_youtube'])) {
				?>
				<div class="videowrapper">
					<iframe src="//player.vimeo.com/video/<?php echo $data['project_url_vimeo']; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<?php } ?>
				<?php 
					if (empty ($data['project_url_vimeo'])) {
				?>
				<div class="videowrapper">
					<iframe width="800" height="450" src="//www.youtube.com/embed/<?php echo $data['project_url_youtube']; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
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

