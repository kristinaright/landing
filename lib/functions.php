<?php
	$mysqli=false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "lendingpage");
		$mysqli -> query("SET NAMES 'utf8'");
	}

		function addEmail($email){
		global $mysqli;
		connectDB();
		$success=$mysqli->query("INSERT INTO `users` (`email`) VALUES ('$email')");
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