<?php
include_once($config["paths"]["resources"]["api"].'connection.php');


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


function addRestaurant($idOwner,$name,$inf,$phonenumber,$averagecost,$schedule,$adress,$categories){
	global $db;
	
	$addUser=$db->prepare('INSERT INTO User VALUES(NULL,?,?,?,?,?,?,?,?)');
	$addUser->execute([$username,$firstname,$lastname,$password,$email]);
	
    return $addUser->errorCode();
}	
?>