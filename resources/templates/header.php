<!DOCTYPE html>
<html>

<head>
  	<meta charset="UTF-8">
  	<title>Home page</title>
</head>

<body>
    <header>
    	<!--
    	<div id="fast search">
    	  <input type="text" name="search" placeholder="Search restaurant..">
    	  <select>
    	    <option disabled selected value> -- select an option -- </option>
    	    <option value="owner">Owner</option>
    	    <option value="restaurant">Restaurant</option>
    	    <option value="reviewer">Reviewer</option>
    	  </select>
    	  <button type="button">Search</button>
    	</div>
    	-->
    	<div class="logs">
    		<ul>
    	  		<li> <a href="./">Home</a></li>
    	  		<li> <a href="">Restaurants</a></li>
    	  		<li> <a href="">Top 5 Restaurants</a></li>
    	  		<li> <a href="">About</a> </li>
    	  		<?php
    	    		if (isset($_SESSION['id'])){
				?>
						<li> <a href="./?content=profile">Profile</a></li>
				<?php
    	    		} else {
				?>
						<li> <a href="./?content=login">Login</a></li>
    	  				<li> <a href="./?content=register">Register</a></li>
				<?php
    	    		}
    	 		?>
    	  		
    		</ul>
    	</div>
	</header>
