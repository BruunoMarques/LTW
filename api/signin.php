<?php
include_once("connection.php");
include_once("user.php");

$username= trim($_POST["username"]);
$password = $_POST['password'];



$curruser = getUserByUsername($username);

$userpassword = getUserPassword($username)[0];

if( $curruser == null ){
	echo "usr inv";
} else {
	if (password_verify($password, $userpassword)){
		session_start();

		$currname = $curruser['firstname'];
		$currname .=" ";
		$currname .= $curruser['lastname'];
		
		$_SESSION['email'] = $curruser['email'];
		$_SESSION['name'] = $currname;
		$_SESSION['id'] = $curruser['idUser'];
					
		echo "success";
	} else {
		echo "pwd inv";
	}
} 



?>