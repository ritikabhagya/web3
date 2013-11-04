<!doctype html>
<html>
<body>

<?php
	$biodatas = array();
	$biodatas['Malika Khanna']=array(
		'ethnicity'=>'punjabi',
		'name'=>'Malika Khanna',
		'age'=>24
		);
	$biodatas['Chiragh Kirpalani']=array(
		'ethnicity'=>'sindhi',
		'name'=>'Chiragh Kirpalani',
		'age'=>27
		);

	echo $biodatas['Malika Khanna']['ethnicity']; ?><br><?php
	echo $biodatas['Malika Khanna']['name']; ?><br><?php
	echo $biodatas['Malika Khanna']['age']; ?><br><?php
	?>

	<?php

	header('Access-Control-Origin: *');
	header('Content-Type: application/json');
	echo json_encode($biodatas);

?>

</body>
</html>
