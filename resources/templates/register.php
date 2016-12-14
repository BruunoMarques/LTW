<div id="register-page">
<form id= "registerform" action="../api/registeruser.php" method="post">
  <h1>Register</h1>
  <ul>
    <li>
      <label for="firstname"></label>
      <input type="text" name="firstname" placeholder='Firstname' required>
    </li>
    <li>
      <label for="lastname"></label>
      <input type="text" name="lastname" placeholder='Lastname' required>
    </li>
    <li>
      <label for="username"></label>
      <input type="text" name="username" placeholder='Username' required>
    </li>
    <li>
      <label for="password"></label>
      <input type="password" name="password" placeholder='Password'required>
    </li>
    <li>
      <label for="confirm_password"></label>
      <input type="password" name="confirm_password" placeholder='Confirm password' required>
    </li>
    <li>
      <label for="email"></label>
      <input type="text" name="email" placeholder='Email' required>
    </li>
  </ul>
  <!--<label for "reviewer">
    Reviewer</label>
<input type="radio" name="type" value="reviewer">
<label for "owner">
    Owner</label>
<input type="radio" name="type" value="owner">-->
  <input type="submit" value="Register">
</form>

</div>