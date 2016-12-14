<?php

include_once("../api/user.php");


$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password =$_POST["password"];
$confirm_password = $_POST["confirm_password"];
$email = $_POST["email"];


if (strlen($username < 20) && strlen($firstname < 20) && strlen($lastname < 20)){
	
	if($password == $confirm_password){
		$pass = hash('sha256', $_POST["password"]);
		if (getUserInfo($email)){
			echo'Email already registered';
		}
		else{
				newUser($username,$firstname,$lastname,$pass,$email);
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