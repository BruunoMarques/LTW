<?php
include_once('../project/resources/api/connection.php');


function getRestaurants(){
		global $db;
		$stmt = $db->prepare('SELECT * FROM Restaurant');
		try {
      $stmt->execute();
    } catch (PDOException $e) {
      return $e->getMessage();
    }
		$result = $stmt->fetchAll();
    return $result;
	}
	
	
function getRestaurantById(){
	global $db;
	$stmt = $db->prepare('SELECT * FROM Restaurant WHERE idRestaurant = :idRestaurant');
	$stmt->bindParam(':idRestaurant',$_POST['idRestaurant'],PDO::PARAM_INT);
	try {
      $stmt->execute();
    } catch (PDOException $e) {
      return $e->getMessage();
    }
	$result = $stmt->fetchAll();
	return $result;
}	
?>