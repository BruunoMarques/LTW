<?php
	include("searchAlgorithms.php");
	
	
	function kmpRestaurants($currname,$rests){
		$return = array();
		if($currname ==" ") {
			$return = " ... ";
		}
	
	$size = strlen($currname);
	
	foreach($rests as $row){
		$checked = false;
		$name = strtolower($row['name']);
		if(kmp_function($currname,$name)){
			$checked = true;
		}
		else{
			$distance = distance($row['name'],$currname);
			if($distance <5 ) $checked = true;
		}
		if($checked){
			$return = doReturn($return,$row['name'],$row['idRestaurant']);
		}
	}
	
	return $return;
}
	
	function doReturn($return, $name, $id){
		array_push($return,$name);
		array_push($return,$id);
		
		return $return;
	}
		
	
?>