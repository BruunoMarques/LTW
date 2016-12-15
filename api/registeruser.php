<?php

include_once($config["paths"]["api"]."user.php");


$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password =$_POST["password"];
$confirm_password = $_POST["confirm_password"];
$email = $_POST["email"];


if (strlen($username) < 20 && strlen($firstname) < 20 && strlen($lastname) < 20){
	
	if($password == $confirm_password && strlen($password) == strlen($confirm_password)){
		
		$pass = password_hash($_POST["password"],PASSWORD_DEFAULT);
		
		if (getUserByEmail($email)){
			echo'Email already registered';
		}
		else{
				if (newUser($username,$firstname,$lastname,$pass,$email) == 0){
					session_start();
					$currentUser = getUserByEmail($email);
					
					$currname = $currentUser['firstname'];
					$currname .=" ";
					$currname .= $currentUser['lastname'];
					
					$_SESSION['email'] = $email;
					$_SESSION['name'] = $currname;
					$_SESSION['id'] = $currentUser['idUser'];
					
				//	header()
				}
		}
	}
	else{
		echo 'Passwords do not match';
	}
	
}

else{
	echo 'Invalid account parameters, please refill fields';
	return;
}
	var_dump(getUsers());
?>