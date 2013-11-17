<!DOCTYPE html>

<?php
	mysql_connect('localhost', 'root', 'bugzbunny19');
	mysql_select_db('Biodata');

	$username = $_POST['username'];
	$discussion = $_POST['discussion'];
	$gender = $_POST['gender'];

	$sql = "INSERT INTO discussion (username, discussion, gender) 
	VALUES ('$username', '$discussion', '$gender')";
	$result = mysql_query($sql);
?>

<html>
<head>
	<title>Discussions</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
</head>

	<body>
		<h1>Add a discussion question</h1>

		<div class="main">
			<form method="post" id="nl-form" class="nl-form" />

				I am a

				<select required name="gender">
					<option value="boy">Boy</option>
					<option value="girl">Girl</option>
					<option value="man">Man</option>
					<option value="woman" selected>Woman</option>
				</select>
				<br />

				and my name is
				<input type="text" name="username" placeholder="Sachin Tendulkar" required/>
				<br />

				Today I would like to talk about <input class="discussion" type="text" name="discussion" placeholder="why gay marriage should be made legal in India" required/>
				
				<div class="nl-submit-wrap">
					<button class="nl-submit" type="submit" value="Submit" name="submit"/>Submit</button>
				</div>

				<div class="nl-overlay"></div>
			</form>
			
			<p> <?php $query = mysql_query("SELECT username, discussion FROM discussion");
			
			while($row=mysql_fetch_array($query)){
			?> <div class="row"> Name: <?php echo $row['username']; ?><br>
			Discussion: <?php echo $row['discussion']; ?>
				<a href="#"><div class="join">Join discussion</div></a>
			</div><br>
			<?php 
			}
			?></p>

		</div>
	</body>
</html>

<?php mysql_close(); ?>