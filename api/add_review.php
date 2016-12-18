<?php
	session_start();
	
	include_once("restaurant.php");
	include_once("review.php");
	include_once("user.php");

	$reviewtext = $_POST["comments"];
	$restid = $_POST["restid"];
	$userid = $_SESSION['id'];
	$rating = $_POST["rating"];

	echo $userid;
	echo $reviewtext;
	echo $restid;
	echo $rating;

	if($userid ==null){
	}
	else{
		echo "success";
		insertReview($restid,$userid,$reviewtext,$rating);
	}


?>