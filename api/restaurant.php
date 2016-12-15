<?php
include_once($config["paths"]["api"]."connection.php");

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
	
	
function getRestaurantById($id){
	global $db;
	$stmt = $db->prepare('SELECT * FROM Restaurant WHERE idRestaurant = ?');
	$stmt->execute(array($id));
	return $stmt->fetch();
}	


function addRestaurant($idOwner,$name,$inf,$phonenumber,$averagecost,$schedule,$adress,$categories){
	global $db;
	
	$addUser=$db->prepare('INSERT INTO User VALUES(NULL,?,?,?,?,?,?,?,?)');
	$addUser->execute([$username,$firstname,$lastname,$password,$email]);
	
    return $addUser->errorCode();
}


function removeRestaurant($id){
		global $db;
		$rdb = $db->prepare('DELETE FROM Restaurant WHERE idRestaurant = ?');
		return $rdb->execute(array($id));
    }


function changeRestaurantName($id, $newName){
      global $db;
      $stmt = $db->prepare('UPDATE Restaurant SET name = ? WHERE idRestaurant = ?');
      return $stmt->execute(array($newName, $id));
    }

 function changeRestaurantInfo($id,$newInfo){
      global $db;
      $stmt = $db->prepare('UPDATE restaurant SET info = ? WHERE idRestaurant = ?');
      return $stmt->execute(array($newInfo, $id));
    }
	
function changeRestaurantAdress($id, $adress){
      global $db;
      $stmt = $db->prepare('UPDATE restaurant SET address = ? WHERE idRestaurant = ?');
      $stmt->execute(array($adress, $id));
    }

	
function changeRestaurantCategories($id,$newCat){
      global $db;
      $stmt = $db->prepare('UPDATE restaurant SET categories = ? WHERE id = ?');
      return $stmt->execute(array($newCat, $id));
    }
	
	
function changeRestaurantPhone($id, $newPhoneNumber){
      global $db;
      $stmt = $db->prepare('UPDATE restaurant SET phonenumber = ? WHERE idRestaurant = ?');
      return $stmt->execute(array($newPhoneNumber, $id));
    }
	
	
function changeRestaurantSchedule($id, $newSchedule){
      global $db;
      $stmt = $db->prepare('UPDATE restaurant SET schedule = ? WHERE idRestaurant = ?');
      return $stmt->execute(array($newSchedule, $id));
    }

	
?>