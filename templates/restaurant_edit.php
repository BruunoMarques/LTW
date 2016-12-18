<div id="restaurant_edit">

<?php
    include_once($config["paths"]["api"]."restaurant.php");

    $id = $_GET['id'];
    $r =  getRestaurantById($id);
	$restaurant = getRestaurantById($id);

    $image_path = $restaurant['idRestaurant'] . ".jpg";
?>

<div id="r_image">
<img src="Imagens/RestImages/<?=$image_path?>" alt="restaurant_pics" width="300" height="300">
</div>

<form id="edit_restaurant">
    <h2>Edit Restaurant informations</h2>

    <input type="hidden" name="id" id="restid" value="<?=$restaurant['idRestaurant']?>">

    <ul>Restaurant Name:
        <input type="text" name="name" id="restname" value="<?=$restaurant['name']?>">
    </ul>

    <ul>Informations:
        <input type="text" name="Informations" id="restinf" value="<?=$restaurant['inf']?>">
    </ul>

    <ul>Contacts:
        <input type="text" name="Contacts" id="restcontact" value="<?=$restaurant['phonenumber']?>">
    </ul>

    <ul>Average Cost:
        <input type="text" name="Average Cost" id="restavg" value="<?=$restaurant['averagecost']?>">
    </ul>

    <ul>Schedule:
        <input type="text" name="Schedule" id"restschedule" value="<?=$restaurant['schedule']?>">
    </ul>

    <ul>Adress:
        <input type="text" name="Adress" id="restadress" value="<?=$restaurant['adress']?>">
    </ul>

    <ul>Category:
        <input name="Categories" id="restcat" value="<?=$restaurant['categories']?>">
    </ul>

    <input type="submit" name="submit" value="Confirm changes" id="editrest">

</form>

</div>

