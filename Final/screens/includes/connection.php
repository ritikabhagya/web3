<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=DTprojects', 'root', 'root');
} catch (PDOException $e) {
	exit('Database error.');
}


?>