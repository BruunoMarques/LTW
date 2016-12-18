<?php
	session_start();
	
	include_once("restaurant.php");
	include_once("review.php");
	include_once("user.php");

	$reviewtext = $_POST["comments"];
	$idRest = $_POST["restid"];
	$userid = $_SESSION['id'];

	var_dump($userid);
	var_dump($reviewtext);
	var_dump($restid);
	if($userid ==null){
	}
	else{
		//insertReview($idRest,$userid,$reviewtext,5);
	}


?>