<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=DTprojectsCopy', 'root', 'root');
} catch (PDOException $e) {
	exit('Database error.');
}


?>