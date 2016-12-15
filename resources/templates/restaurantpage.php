<div class="restpage">

<?php

include_once($config["paths"]["resources"]["api"]."restaurant.php");

$rest = getRestaurants();

foreach($rest as $r){
echo '<div id="principal-info">';       
echo '<h1>' . $r['name'] . '</h1>';
echo '<ul>' . 'Informations:' . $r['inf'].'</ul>';
echo '<ul>' . 'Phone Number:'. $r['phonenumber'] . '</ul>';
echo '<ul>' . 'Average Cost:'. $r['averagecost'] . '</ul>';
echo '<ul>' . 'Schedule:'. $r['schedule'] . '</ul>';
echo '<ul>' . 'Adress:'. $r['adress'] . '</ul>';
echo '<ul>' . 'Categories:'. $r['categories'] . '</ul>';
echo '</div>';
$image_path = "../Imagens/Owners/" . $restaurant_id . "/";

echo '<img src="' . $image_path '" alt="restaurant_pics">'

echo '<button type="submit">More info</button>';

}


?>

</div>

$image_path = "../database/images/" . $restaurant_id . "/";