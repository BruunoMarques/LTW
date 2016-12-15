<div class="oncerestpage">

<?php

include_once($config["paths"]["api"]."restaurant.php");
include_once($config["paths"]["api"]."review.php");

$id = $_GET['id'];

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
echo '<h4>' . 'Informations: '. '</h4>';
echo '<ul>' . $r['inf']. '</ul>';

echo '<h4>' . 'Contacts:  '. '</h4>';
echo '<ul>'. $r['phonenumber'] . '</ul>';

echo '<h4>' . 'Average Cost: '. '</h4>';
echo '<ul>'. $r['averagecost'] . '</ul>';

echo '<h4>' . 'Schedule: '.'</h4>';
echo '<ul>'. $r['schedule'] . '</ul>';

echo '<h4>' . 'Adress: '.'</h4>';
echo '<ul>'. $r['adress'] . '</ul>';

echo '<h4>' . 'Categories: '. '</h4>';
echo '<ul>'. $r['categories'] . '</ul>';
?>
</div>

<div id="review">
<form action="/html/tags/html_form_tag_action.cfm" method="post">
<div>
<textarea  cols='60' rows='3'name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"
placeholder="Your opinion is important for us... Please leave a review">
</textarea>
</div>
<input type="submit" value="Submit">
</form>

</div>

<div id="reviews">
<h3> Reviews about this Restaurant: </h3>
<?php
$rv = getReviewsById($id);

foreach($rv as $r){
    

echo '<h4>' . 'Rating: '.'</h4>';
echo '<ul>' . $r['rating'] . '</ul>'; 
echo '<h4>' . 'Description: '.'</h4>';
echo '<ul>' . $r['info']  . '</ul>'; 

}
?>

</div>

</div>