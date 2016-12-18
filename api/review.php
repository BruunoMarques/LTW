<?php

function getReviews(){
    global $db;
    $rdb=$db->prepare('SELECT * FROM Review WHERE idRestaurant = :id');
    $rdb->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $rdb->execute();
    $reviews=$rdb->fetchAll();
    return $reviews;
}

 function getReviewsById($id){
    global $db;
    $rdb=$db->prepare('SELECT * FROM Review WHERE idRestaurant = ?');
 $rdb->execute(array($id));
    return $rdb->fetchAll();
}

function getUserReviewsById($id){
    global $db;
    $rdb=$db->prepare('SELECT * FROM Review WHERE idReviewer = ?');
 $rdb->execute(array($id));
    return $rdb->fetchAll();
}

function insertReview($id_restaurant,$id_user,$info,$rating){
    global $db;
    $insertReview=$db->prepare('INSERT INTO Review VALUES(NULL,?,?,?,?)');
    $insertReview->execute([$id_restaurant,$id_user,$info,$rating]);
    return $insertReview->errorCode();
}
?>