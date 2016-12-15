<div id="login-page">
	<form id= "loginform" action="./" method="post">
		<h1>Login</h1>
		<ul>
	    	<li>
	      		<label for="username"></label>
	      		<input type="text" id="username" name="username" placeholder='Username' required>
				<div class="err" id="username_err"></div>
			</li>
	    	<li>
				<label for="password"></label>
				<input type="password" id="password" name="password" placeholder='Password' required>
				<a href="./password_reset" class="label-link">Forgot password?</a>
				<div class="err" id="password_err"></div>
			</li>
		</ul>
	<input type="submit" id="login" value="Login">	</form>
</div>