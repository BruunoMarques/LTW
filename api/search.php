<?php
	include("restaurant.php");
	include("compareRestaurants.php");
	
	$currName = htmlspecialchars($_GET['searchval']);
	if($currName == null) $currName = "";
	$currName = strtolower($currName);
	$rests = getRestaurants();
	$return = kmpRestaurants($currName,$rests);
	echo json_encode($return);
?>