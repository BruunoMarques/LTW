<form id= "loginform" action="<?php echo $config["paths"]["resources"]["api"]?>signin.php" method="post">
  <h1>Login</h1>
  <ul>
    <li>
      <label for="username">
        Username</label>
      <input type="text" name="username" required>
    </li>
    <li>
      <label for="password">
        Password
        <a href="./password_reset" class="label-link">Forgot password?</a></label>
      <input type="password" name="password" required>
    </li>
  </ul>
  <button type="submit" value="Login"> Login </button>
</form>