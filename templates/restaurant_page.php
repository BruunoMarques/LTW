<div class="oncerestpage">

<?php

include_once($config["paths"]["api"]."restaurant.php");
include_once($config["paths"]["api"]."review.php");
include_once($config["paths"]["api"]."user.php");

$id = $_GET['id'];
$r =  getRestaurantById($id);


$image_path =  $r['idRestaurant'] . ".jpg";
?>



<div id="r_informations">
<a href="./?content=r_edit&id=<?=$id?>">
<input type="Edit" value="Edit Restaurant!">
</a>
<?php    
echo '<h1>' . $r['name'] . '</h1>';
?>

<div id="r_image">
<img src="Imagens/RestImages/<?=$image_path?>" alt="restaurant_pics" width="300" height="300">
</div>

<div id"i">
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
</div>
<div id="review">
<form id="revform"action="api/add_review.php" method="post">
<div>
<textarea  cols='60' rows='3'name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"
placeholder="Your opinion is important for us... Please leave a review">
</textarea>
</div>
<input type="hidden" name="restid" id="restid" value="<?php echo $id ?>" />
<button type="submit" name="id" value="Submit"> Submit </button>
</form>

</div>

<div id="reviews">
<h2> Reviews about this Restaurant: </h2>
<?php

$rv = getReviewsById($id);

if($rv == null){
	echo '<h3> No Reviews yet, be the first!! </h3>';
}
else {
	foreach($rv as $r){
     $idreviewer = $r['idReviewer'];
	 $user = getUserById($idreviewer);
     $name = $user['firstname'];
     $name .=" ";
     $name .= $user['lastname'];

echo'<h3>' . $name .'</h3>';
echo '<h4>' . 'Rating: '.'</h4>';
echo '<ul>' . $r['rating'] . '</ul>'; 
echo '<h4>' . 'Description: '.'</h4>';
echo '<ul>' . $r['info']  . '</ul>'; 
}



}
?>

</div>

</div>