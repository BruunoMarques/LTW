<div id="register-page">
	<form id= "registerform" action="./" method="post">
		<h1>Register</h1>
		<ul>
			<li>
				<label for="firstname"></label>
		    	<input type="text" name="firstname" placeholder='Firstname' required>
				<div class="err" id="firstname_err"></div>
		  	</li>
		  	<li>
		    	<label for="lastname"></label>
		    	<input type="text" name="lastname" placeholder='Lastname' required>
				<div class="err" id="lastname_err"></div>
		  	</li>
		  	<li>
		   		<label for="username"></label>
		    	<input type="text" name="username" placeholder='Username' required>
				<div class="err" id="username_err"></div>
		 	</li>
		  	<li>
		    	<label for="password"></label>
		    	<input type="password" name="password" placeholder='Password'required>
				<div class="err" id="pwd_err"></div>
		  	</li>
		  	<li>
		    	<label for="confirm_password"></label>
		    	<input type="password" name="confirm_password" placeholder='Confirm password' required>
				<div class="err" id="confpwd_err"></div>
		  	</li>
		  	<li>
		    	<label for="email"></label>
		    	<input type="text" name="email" placeholder='Email' required>
				<div class="err" id="email_err"></div>
		  	</li>
		</ul>
		<input type="submit" id="register" value="Register">
	</form>
</div>