<?php
	include_once("connection.php");
	include_once("restaurant.php");
	include_once("compareRestaurants.php");
	
	$currName = htmlspecialchars($_GET['searchval']);
	if($currName == null) $currName = "";
	$currName = strtolower($currName);
	$rests = getRestaurants();
	$return = kmpRestaurants($currName,$rests);
	echo json_encode($return);
?>