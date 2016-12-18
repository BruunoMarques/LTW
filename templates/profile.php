<div id="my_profile">

    <?php

        include_once($config["paths"]["api"]."restaurant.php");
        include_once($config["paths"]["api"]."review.php");
        include_once($config["paths"]["api"]."user.php");

        $id = $_GET['id'];
        $u =  getUserById($id)

    ?>

    <div id="user_informations">
        <a href="./?content=u_edit&id=<?=$id?>">
            <input type="Edit" value="Edit Profile!">
        </a>


    	<?php    
    		echo '<h1>' . $u['firstname'] . " " . $u['lastname'] . '</h1>';
		?>


    	<?php
    		echo '<h4>' . 'Username:  '. '</h4>';
    		echo '<ul>'. $u['username'] . '</ul>';
		
    		echo '<h4>' . 'Email: '. '</h4>';
    		echo '<ul>' . $u['email']. '</ul>';
		
    		echo '<h2>' . 'My Restaurants:  '. '</h2>';
		
    		echo '<h2>' . 'My Reviews:  '. '</h2>';
		
    		$rv = getUserReviewsById($id);
		
    		foreach($rv as $review){

    	?>
    	<form id="rev">
    		<?php
    		    $idR= $review['idRestaurant'];
    		    $restaurant = getRestaurantById($idR);
    		?>
    		<div class="div">
    			<?php
    				echo '<h4>' . 'Restaurant: '.'</h4>';
    				echo '<ul>' . $restaurant['name'] . '</ul>'; 
    			?>
    		</div>
    		<div class="div">
    			<?php
    				echo '<h4>' . 'Rating: '.'</h4>';
    				echo '<ul>' . $review['rating'] . '</ul>'; 
    			?>
    		</div>
		
    		<div class="div">
    			<?php
    				echo '<h4>' . 'Description: '.'</h4>';
    				echo '<ul>' . $review['info']  . '</ul>'; 
    			?>
    		</div>
		
    	</form>

		<?php
    		}
    	?>
</div>