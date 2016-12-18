<?php
	session_start();
	
	include_once("connection.php");
	include_once("review.php");

	$reviewtext = $_POST["comments"];
	$restid = $_POST["restid"];
	$userid = $_SESSION['id'];
	$rating = $_POST["rating"];

	if($userid ==null){
	}
	else{
		echo "success";
		insertReview($restid,$userid,$reviewtext,$rating);
	}


?>