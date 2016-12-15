<div class="restpage">

<?php

include_once($config["paths"]["api"]."restaurant.php");

$rest = getRestaurants();

foreach($rest as $r){
     $image_path =  $r['idRestaurant'] . ".jpg";
?>

<div id="total">
<div id="infores">


<img src="Imagens/RestImages/<?=$image_path?>" alt="restaurant_pics" width="200" height="200">

</div>
<div id="informations">
<?php    
echo '<h1>' . $r['name'] . '</h1>';
//echo '<ul>' . 'Informations:' . $r['inf'].'</ul>';
echo '<ul>' . 'Contacts: '. $r['phonenumber'] . '</ul>';
//echo '<ul>' . 'Average Cost:'. $r['averagecost'] . '</ul>';
//echo '<ul>' . 'Schedule:'. $r['schedule'] . '</ul>';
//echo '<ul>' . 'Adress:'. $r['adress'] . '</ul>';
//echo '<ul>' . 'Categories:'. $r['categories'] . '</ul>';

?>
</div>
</div>
<?php

}

?>




</div>