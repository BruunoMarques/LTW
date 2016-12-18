<!DOCTYPE html>
<html>

<head>
  	<meta charset="UTF-8">
	<title>Ratatouille</title>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo $config["paths"]["scripts"]?>login.js"></script>
	<script src="<?php echo $config["paths"]["scripts"]?>register.js"></script>
	<script src="<?php echo $config["paths"]["scripts"]?>editRestaurant.js"></script>
</head>

<body>
    <header>
	</header>
	<nav>
		<div id="linksbar">
			<div id="general">
    			<ul>
    	  			<li> <a href="./">Home</a></li>
    	  			<li> <a href="./?content=restaurants">Restaurants</a></li>
    	  			<li> <a href="./?content=about">About</a> </li>
    			</ul>
    		</div>
			<div id="userbar">
				<ul>
					<?php
    	    			if (isset($_SESSION['id'])){
					?>
							<li> Welcome <a href="./?content=profile&id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['name']?></a>! </li>
							<li> <a href="./?content=profile">Profile</a></li>
							<li> <a href="">Logout</a></li>
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
		</div>
	</nav>
