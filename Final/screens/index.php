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
	</head>

	<body>
		<div class="project-container">
			<?php include_once('main.php'); ?>

			<ul>
				<?php foreach ($items as $item) { ?>
					<li>
						<div class="project"><a href="item.php?id=<?php echo $item['project_id']; ?>">
							<?php echo $item['project_title']; ?><br>
							<?php echo $item['student_name']; ?><br>
						</a></div>
					</li>
					
				<?php } ?>
			</ul>

		</div>
	</body>
</html>