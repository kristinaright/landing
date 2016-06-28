<?php	
	require_once "lib/functions.php";
	//var m = email.match(/^[a-zA-Z0-9][.-_,][^\!@]{2,16}\@[a-zA-Z]{3,7}\.[a-zA-Z]{2,5}$/i);
	$email=(string)$_POST["email"];
	//$email=htmlspecialchars($_POST["email"]);
	$ok = (filter_var($email, FILTER_VALIDATE_EMAIL));
	if ($ok){
	$success = addEmail($email);
    if($success) echo "well";
	else echo "error";}
	else echo "bad";
?>