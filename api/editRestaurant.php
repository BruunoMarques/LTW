<?php

include_once("connection.php");
include_once("restaurant.php");

$id = $_POST["id"];
$name = $_POST["name"];
$info = $_POST["info"];
$contact = $_POST["contact"];
$avg = $_POST["avg"];
$schedule = $_POST["schedule"];
$address = $_POST["address"];
$categories = $_POST["categories"];

updateRestaurant($id,$name,$info,$contact,$avg,$schedule,$address,$categories);
echo "success";

?>