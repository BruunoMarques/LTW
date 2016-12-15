<?php
//include_once('connection.php');


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


function getUserById($id){
    global $db;
    $stmt = $db->prepare('SELECT * FROM User WHERE idUser = ?');
    $stmt->execute(array($id));
 return $stmt->fetch();

}


function newUser($username,$firstname,$lastname,$password,$email){
    global $db;

    $addUser= $db->prepare('INSERT INTO User VALUES(NULL,?,?,?,?,?)');
    $addUser->execute([$username,$firstname,$lastname,$password,$email]);
    return $addUser->errorCode();
}

function getUserByEmail($email){
    global $db;
    $stmt = $db->prepare('SELECT * FROM User WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetch();
}

function getUserByUsername($username){
    global $db;
    $stmt = $db->prepare('SELECT * FROM User WHERE username = ?');
    $stmt->execute(array($username));
    return $stmt->fetch();
}

function getUserPassword($username){
    global $db;
    $stmt = $db->prepare('SELECT password FROM User WHERE username = ?');
    $stmt->execute(array($username));
    return $stmt->fetch();
}

function UserChangePass($username, $nPassword){
	global $db;
	
	$stmt = $db->prepare('UPDATE User SET password = ? WHERE username = ?');
	return $stmt->execute(array($nPassword,$username));
}

function UserChangeName($username, $nfirstName,$nlastName){
	global $db;
	
	$stmt = $db->prepare('UPDATE User SET firstname = ? WHERE username = ?');
	return $stmt->execute(array($nfirstName,$username));
	
	$stmt1 = $db->prepare('UPDATE User SET lastname = ? WHERE username = ?');
	return $stmt1->execute(array($nlastName,$username));
}

function UserChangeEmail($username, $nEmail){
	global $db;
	
	$stmt = $db->prepare('UPDATE User SET email = ? WHERE username = ?');
	return $stmt->execute(array($nEmail,$username));
}


?>