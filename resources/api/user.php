<?php
include_once('../project/resources/api/connection.php');


function getUsers(){
		global $db;
		$stmt = $db->prepare('SELECT * FROM User');
		try {
      $stmt->execute();
    } catch (PDOException $e) {
      return $e->getMessage();
    }
		$result = $stmt->fetchAll();
    return $result;
	}
	
	
function getUserById(){
	global $db;
	$stmt = $db->prepare('SELECT * FROM User WHERE idUser = :idUser');

	
	$stmt->bindValue(':idUser',$_POST['idUser'],PDO::PARAM_INT);
	try {
      $stmt->execute();
    } catch (PDOException $e) {
      return $e->getMessage();
    }
	$result = $stmt->fetch();
	return $result;
}


function newUser($username,$password,$email){
	global $db;
	
	$addUser=$db->prepare('INSERT INTO User VALUES(NULL,?,?,?)');
	$addUser->execute([$firstNamepassword,$email]);
	
    return $addUser->errorCode();
}	

function getUserInfo($email){
  global $db;
  $stmt = $db->prepare('SELECT * FROM User WHERE email = ?');
  $stmt->execute(array($email));
  return $stmt->fetch();
}

?>