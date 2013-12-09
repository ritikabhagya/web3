<?php

class Item{
	public function fetch_all(){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM items");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_data($item_id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM items WHERE item_id=?");
		$query->bindValue(1, $item_id);
		$query->execute();

		return $query->fetch();
	}
}

?>