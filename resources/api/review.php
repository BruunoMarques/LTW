<?php
include_once('../project/resources/api/connection.php');



function getReviews(){
    global $db;
    $rdb=$db->prepare('SELECT * FROM Review WHERE id_restaurant = :id');
    $rdb->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $rdb->execute();
    $reviews=$rdb->fetchAll();
    return $reviews;
}
function getReviewsById(){
    global $db;
    $rdb=$db->prepare('SELECT * FROM Review WHERE id_restaurant = :id');
    $rdb->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
    $rdb->execute();
    $reviews=$rdb->fetchAll();
    return $reviews;
}
function insertReview($id_restaurant,$id_user,$info,$rating){
    global $db;
    $insertReview=$db->prepare('INSERT INTO Review VALUES(NULL,?,?,?,?)');
    $insertReview->execute([$id_restaurant,$id_user,$info,$rating]);
    return $insertReview->errorCode();
}
?>