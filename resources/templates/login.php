<div id="login-page">
	<form id= "loginform" action="<?php echo $config["paths"]["resources"]["api"]?>signin.php" method="post">
		<h1>Login</h1>
		<ul>
	    	<li>
	      		<label for="username"></label>
	      		<input type="text" name="username" placeholder='Username' required>
	    	</li>
	    	<li>
				<label for="password">
				<input type="password" name="password" placeholder='Password' required>
				<a href="./password_reset" class="label-link">Forgot password?</a></label>
			</li>
		</ul>
		<button type="submit" value="Login"> Login </button>
	</form>
</div>