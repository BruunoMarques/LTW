<?php
include_once('../api/connection.php');


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
    $result = $stmt->fetchAll();
    return $result;
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


?>