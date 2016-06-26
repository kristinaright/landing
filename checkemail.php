<?php	
	$email=htmlspecialchars($_POST["email"]);
	$success = addEmail($email);
    if($success) echo "well";
	else echo "error";
	

?>