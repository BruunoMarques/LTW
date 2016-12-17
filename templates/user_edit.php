<div id="user_edit">

<?php
  include_once($config["paths"]["api"]."user.php");
    
    $id = $_GET['id'];
    $u =  getUserById($id);
?>


<form id="edit">
<h1>My profile</h1>
    <ul>Firstname:
        <input type="text" name="firstname" value="<?=$u['firstname']?>">
    </ul>

    <ul>Lastname:
        <input type="text" name="lastName" value="<?=$u['lastname']?>">
    </ul>

    <ul>Email:
        <input type="text" name="Email" value="<?=$u['email']?>">
    </ul>

    <ul>Old password:
        <input type="text" name="Oldpassword">
    </ul>

    <ul>New password:
        <input type="text" name="Password" >
    </ul>

    <input type="submit" name="submit" value="" id="buttonSave">

</form>

</div>
