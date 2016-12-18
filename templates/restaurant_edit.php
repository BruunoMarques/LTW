<div id="restaurant_edit">

<?php
  include_once($config["paths"]["api"]."restaurant.php");
    
    $id = $_GET['id'];
    $r =  getRestaurantById($id);
	$restaurant = getRestaurantById($id);

    $image_path =  $restaurant['idRestaurant'] . ".jpg";
?>

<div id="r_image">
<img src="Imagens/RestImages/<?=$image_path?>" alt="restaurant_pics" width="300" height="300">
</div>

<form id="edit" method="post" onsubmit="restcheck()">
<h2>Edit Restaurant informations</h2>
    <ul>Restaurant Name:
        <input type="text" name="name" id="name" value="<?=$restaurant['name']?>">
    </ul>

    <ul>Informations:
        <input type="text" name="Informations" id="inf" value="<?=$restaurant['inf']?>">
    </ul>

    <ul>Contacts:
        <input type="text" name="Contacts" id="contact" value="<?=$restaurant['phonenumber']?>">
    </ul>

    <ul>Average Cost:
        <input type="text" name="Average Cost" id="avg" value="<?=$restaurant['averagecost']?>">
    </ul>

    <ul>Schedule:
        <input type="text" name="Schedule" id"schedule" value="<?=$restaurant['schedule']?>">
    </ul>

    <ul>Adress:
        <input type="text" name="Adress" id="adress" value="<?=$restaurant['adress']?>">
    </ul>

    <ul>Category:
        <input name="Categories" id="cat" value="<?=$restaurant['categories']?>">
    </ul>


    <input type="submit" name="submit" value="" id="buttonSave">

</form>

</div>

<?php

function restcheck(){

$name = $_POST['name'];
$inf = $_POST['inf'];
$contacts = $_POST['contact'];
$avg = $_POST['avg'];
$schedule = $_POST['schedule'];
$adress = $_POST['adress'];
$category = $_POST['cat'];

updateRestaurant($name,$inf,$contacts,$avg,$schedule,$adress,$category);


}
?>

