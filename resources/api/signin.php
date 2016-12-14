<?php

include_once("../api/user.php");
include_once("../api/connection.php");

$username= trim($_POST["username"]);
$password = $_POST["password"];


$userpassword = getUserPassword($username)[0];
var_dump($userpassword);

if (password_verify($password, $userpassword)){
	
	
	$curruser = getUserByUsername();
	
	if( $curruser != null ){
		
		session_start();	
		
			$currname = $currentUser['firstname'];
			$currname .=" ";
			$currname .= $currentUser['lastname'];
			
			$_SESSION['email'] = $curruser['email'];
			$_SESSION['name'] = $currname;
			$_SESSION['id'] = $currentUser['idUser'];
					
		//cenas
	}
	
	
}

else {
	echo "User doesnt exist";
}



?>