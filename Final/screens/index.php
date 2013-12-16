<?php

include_once('includes/connection.php');
include_once('includes/item.php');




$item = new Item;
$items = $item->fetch_all();



	
?>

<html>
	<head>
		<title>D+T Projects</title>
		<link rel="stylesheet" href="css/main.css"/>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,300,500' rel='stylesheet' type='text/css'>

	</head>

	<body>
		<div class="project-container">
			<?php include_once('main.php'); ?>

			<div class="index-container">
				
			<ul>
				<?php foreach ($items as $item) { ?>
					<li>
						<div class="project">
							<a href="item.php?id=<?php echo $item['project_id']; ?>">
							<?php 
								if (empty ($item['project_url_vimeo'])) { ?>
							<img src="http://img.youtube.com/vi/<?php echo $item['project_url_youtube']; ?>/0.jpg">
							<?php } ?>

							<figcaption><?php echo $item['project_title']; ?><br><?php echo $item['student_name']; ?><br></figcaption>
						</a></div>
					</li>
					
				<?php } ?>
			</ul>
			</div>
		</div>
	</body>
</html>