<div class="restpage">

<?php

include_once($config["paths"]["resources"]["api"]."restaurant.php");

$r =  getRestaurantById('1');

     $image_path =  $r['idRestaurant'] . ".jpg";
?>

<div id="r_image">
<img src="resources/Imagens/RestImages/<?=$image_path?>" alt="restaurant_pics" width="200" height="200">
</div>

<div id="r_informations">
<?php    
echo '<h1>' . $r['name'] . '</h1>';
echo '<ul>' . 'Informations:' . $r['inf'].'</ul>';
echo '<ul>' . 'Contacts: '. $r['phonenumber'] . '</ul>';
echo '<ul>' . 'Average Cost:'. $r['averagecost'] . '</ul>';
echo '<ul>' . 'Schedule:'. $r['schedule'] . '</ul>';
echo '<ul>' . 'Adress:'. $r['adress'] . '</ul>';
echo '<ul>' . 'Categories:'. $r['categories'] . '</ul>';
?>
</div>

</div>
