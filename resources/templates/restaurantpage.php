<div class="restpage">

<?php

include_once($config["paths"]["resources"]["api"]."restaurant.php");

$rest = getRestaurants();

foreach($rest as $r){

     echo '<h1>' . $r['name'] . '</h1>';
        echo '<h2>' . $r['inf'] . '</h2>';
        echo '<h2>' . $r['phonenumber'] . '</h2>';
        echo '<h2>' . $r['averagecost'] . '</h2>';
        echo '<h2>' . $r['schedule'] . '</h2>';
        echo '<h2>' . $r['adress'] . '</h2>';
        echo '<h2>' . $r['categories'] . '</h2>';
}


?>

</div>