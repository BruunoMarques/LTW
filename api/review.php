<?php
include_once($config["paths"]["resources"]["api"].'connection.php');



function getReviews(){
    global $db;
    $rdb=$db->prepare('SELECT * FROM Review WHERE id_restaurant = :id');
    $rdb->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $rdb->execute();
    $reviews=$rdb->fetchAll();
    return $reviews;
}

function getReviewsById($id){
    global $db;
    $rdb=$db->prepare('SELECT * FROM Review WHERE id_restaurant = ?');
    $reviews=$rdb->execute(array($id));
    return $reviews;
}

function insertReview($id_restaurant,$id_user,$info,$rating){
    global $db;
    $insertReview=$db->prepare('INSERT INTO Review VALUES(NULL,?,?,?,?)');
    $insertReview->execute([$id_restaurant,$id_user,$info,$rating]);
    return $insertReview->errorCode();
}
?>