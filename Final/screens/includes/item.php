<?php

class Item{
	public function fetch_all(){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM projects");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_data($project_id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM projects WHERE project_id=?");
		$query->bindValue(1, $project_id);
		$query->execute();

		return $query->fetch();
	}
}

?>