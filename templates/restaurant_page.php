<div class="oncerestpage">

<?php

include_once($config["paths"]["api"]."restaurant.php");

$id = 3;
$r =  getRestaurantById($id);

     $image_path =  $r['idRestaurant'] . ".jpg";
?>



<div id="r_informations">
<?php    
echo '<h1>' . $r['name'] . '</h1>';
?>

<div id="r_image">
<img src="Imagens/RestImages/<?=$image_path?>" alt="restaurant_pics" width="300" height="300">
</div>

<?php
echo '<ul>' . 'Informations: ' . $r['inf'].'</ul>';
echo '<ul>' . 'Contacts:  '. $r['phonenumber'] . '</ul>';
echo '<ul>' . 'Average Cost: '. $r['averagecost'] . '</ul>';
echo '<ul>' . 'Schedule: '. $r['schedule'] . '</ul>';
echo '<ul>' . 'Adress: '. $r['adress'] . '</ul>';
echo '<ul>' . 'Categories: '. $r['categories'] . '</ul>';
?>
</div>

<div id="review">
<form action="/html/tags/html_form_tag_action.cfm" method="post">
<div>
<textarea  cols='50' rows='5'name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
Your opinion is important for us... Please make a review 
</textarea>
</div>
<input type="submit" value="Submit">
</form>

</div>

</div>