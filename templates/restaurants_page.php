<div class="restpage">

<a href="./?content=new_rest">
<input id="n_r" type="New Restaurant" value="New Restaurant!">
</a>

<?php

include_once($config["paths"]["api"]."restaurant.php");

$rest = getRestaurants();

foreach($rest as $r){
     $image_path =  $r['idRestaurant'] . ".jpg";
     $id =$r['idRestaurant'];
?>

<div id="total">

<div id="infores">


<a href="./?content=restaurant&id=<?=$id?>">
<img src="Imagens/RestImages/<?=$image_path?>" alt="restaurant_pics" width="250" height="250">
</a>

</div>
<div id="informations">
<?php    
echo '<h1>' . $r['name'] . '</h1>';
//echo '<ul>' . 'Informations:' . $r['inf'].'</ul>';
echo '<ul>' . 'Contact: '. $r['phonenumber'] . '</ul>';
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