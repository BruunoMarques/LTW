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

<form id="edit">
<h2>Edit Restaurant informations</h2>
    <ul>Restaurant Name:
        <input type="text" name="name" value="<?=$restaurant['name']?>">
    </ul>

    <ul>Informations:
        <input type="text" name="Informations" value="<?=$restaurant['inf']?>">
    </ul>

    <ul>Contacts:
        <input type="text" name="Contacts" value="<?=$restaurant['phonenumber']?>">
    </ul>

    <ul>Average Cost:
        <input type="text" name="Average Cost" value="<?=$restaurant['averagecost']?>">
    </ul>

    <ul>Schedule:
        <input type="text" name="Schedule" value="<?=$restaurant['schedule']?>">
    </ul>

    <ul>Adress:
        <input type="text" name="Adress" value="<?=$restaurant['adress']?>">
    </ul>

    <ul>Category:
        <input name="Categories" value="<?=$restaurant['categories']?>">
    </ul>


    <input type="submit" name="submit" value="Save" id="buttonSave">

</form>

</div>
