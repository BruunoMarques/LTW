<?php
include_once($config["paths"]["resources"]["api"]."user.php");

$username= trim($_POST["username"]);
$password = $_POST['password'];


$userpassword = getUserPassword($username)[0];


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
			
			
			$_SESSION['email'] = $curruser['email'];
			$_SESSION['name'] = $currname;
			$_SESSION['id'] = $curruser['idUser'];
					
			header("Location:index");
	}
	
	
} else {
	
	echo "Wrong Password";
}



?>