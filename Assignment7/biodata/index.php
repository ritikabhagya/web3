<!DOCTYPE html>

<?php
	mysql_connect('localhost', 'root', 'root');
	mysql_select_db('Biodata');

	$username = $_POST['username'];
	$age = $_POST['age'];
	$ethnicity = $_POST['ethnicity'];
	$gender = $_POST['gender'];

	$sql = "INSERT INTO form (username, age, ethnicity, gender) 
	VALUES ('$username', '$age', '$ethnicity', '$gender')";
	$result = mysql_query($sql);

	
	
?>

<html>
	<body>
		<h1>Create your Biodata</h1>

		<form method="post" />
			<p>Username: <input type="text" name="username" /></p>
			<p>Age: <input type="text" name="age" /></p>
			<p>Ethnicity: <input type="text" name="ethnicity" /></p>
			<p>Gender: <input type="text" name="gender" /></p>
			<input type="submit" value="Submit" />
		</form>
		<p> <?php $query = mysql_query("SELECT username, age, ethnicity, gender FROM form");
	while($row=mysql_fetch_array($query)){
		echo $row['username'];?><br>
		<?php echo $row['age']; ?><br><br>
	<?php 
	}
	?></p>
	</body>
</html>

<?php mysql_close(); ?>