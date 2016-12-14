<?php
include_once($config["paths"]["resources"]["api"]."user.php");
include_once($config["paths"]["resources"]["api"]."connection.php");

$username= trim($_POST["username"]);
$password = $_POST['password'];


$userpassword = getUserPassword($username)[0];
var_dump($password);
var_dump($userpassword);


if (password_verify($password, $userpassword)){

	
	$curruser = getUserByUsername($username);
	
	if( $curruser == null ){
		echo "User doesnt exist";
	}
	else{
		
		session_start();
		
			$currname = $curruser['firstname'];
			$currname .=" ";
			$currname .= $curruser['lastname'];
			
			var_dump($currname);
			$_SESSION['email'] = $curruser['email'];
			$_SESSION['name'] = $currname;
			$_SESSION['id'] = $curruser['idUser'];
					
			header("index.php");
	}
	
	
} else {
	
	echo "Wrong Password";
}



?>