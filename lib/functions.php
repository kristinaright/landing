<?php
	$mysqli=false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "lendingpage");
		$mysqli -> query("SET NAMES 'utf8'");
	}
 //add bind
		function addEmail($email){
		global $mysqli;
		connectDB();
		$stmt = $mysqli->prepare("INSERT INTO `users` (`email`) VALUES (?)");
        $stmt->bind_param('s', $email);
		$success=$stmt->execute();
		closeDB(); 
		return $success;
	}
	
	function getAllUsers(){
		return getAll("users");
	}
	
	
	function getAll($table){
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `$table`");
		closeDB();
		return resultSetToArray($result_set);	
	}
		function searchMails($word) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` LIKE '%$word%'");
		closeDB();
		return resultSetToArray($result_set);
	}
	
	function resultSetToArray($result_set) {
		$array = array ();
		while(($row = $result_set->fetch_assoc()) != false)
		$array[] = $row;
		return $array;
	}
	
		function closeDB(){
		global $mysqli;
		$mysqli -> close();
	}
?>