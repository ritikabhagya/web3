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
		<div class="container">
			<?php include_once('main.php'); ?>
			<!-- <a href="index.php" id="logo">CMS</a> -->

			<ul>
				<?php foreach ($items as $item) { ?>
					<li>
						<a href="item.php?id=<?php echo $item['item_id']; ?>">
							<?php echo $item['item_title']; ?><br>
						</a>
					</li>
					
				<?php } ?>
			</ul>
			<!-- <br>
			<small><a href="admin">admin</a></small> -->

		</div>
	</body>
</html>