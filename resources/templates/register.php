<form id= "form" action="../api/registeruser.php" method="post">
  <h1>Register</h1>
  <ul>
    <li>
      <label for="firstname">
        Firstname</label>
      <input type="text" name="firstname" required>
    </li>
    <li>
      <label for="lastname">
        Lastname</label>
      <input type="text" name="lastname" required>
    </li>
    <li>
      <label for="username">
        Username</label>
      <input type="text" name="username" required>
    </li>
    <li>
      <label for="password">
        Password</label>
      <input type="password" name="password" required>
    </li>
    <li>
      <label for="confirm_password">
        Confirm password</label>
      <input type="password" name="confirm_password" required>
    </li>
    <li>
      <label for="email">
        Email</label>
      <input type="text" name="email" required>
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