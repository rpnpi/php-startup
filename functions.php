<?php 

	function fetchAllTasks($pdo){

		$statement = $pdo->prepare('select * from todos');
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS,'Task');

	}

	function dd($value){
		
		echo "<pre>";
		var_dump($value);
		echo "</pre>";

	}
 ?>