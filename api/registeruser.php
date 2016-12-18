<?php
include_once("connection.php");
include_once("user.php");


$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password =$_POST["password"];
$confirm_password = $_POST["confirm_password"];
$email = $_POST["email"];


if (strlen($username) < 20 && strlen($firstname) < 20 && strlen($lastname) < 20){
	
	if($password == $confirm_password && strlen($password) == strlen($confirm_password)){
		
		$pass = password_hash($password,PASSWORD_DEFAULT);
		
		if (getUserByUsername($username)){
			echo 'usr exists';
		} else{
			if (getUserByEmail($email)){
				echo 'email exists';
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

					echo 'success';
				}
			}
		}
	}
	else{
		echo 'pwd match';
	}
} else{
	echo 'params inv';
	return;
}

?>