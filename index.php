<?php    
    // load up your config file
    require_once("resources/config.php");

	require_once($config["paths"]["resources"]["templates"]. "header.php"); 
     
    switch($_GET["content"]){
        case "register":
			require_once($config["paths"]["resources"]["templates"]. "register.php"); 
            break;
		case "login":
			require_once($config["paths"]["resources"]["templates"]. "login.php"); 
            break;
		case "profile":
			require_once($config["paths"]["resources"]["templates"]. "profile.php");
			break;
<<<<<<< HEAD
       case "restaurants":
            require_once($config["paths"]["resources"]["templates"]. "restaurantpage.php");
            break;
=======
		case "restaurants":
			require_once($config["paths"]["resources"]["templates"]. "restaurantpage.php");
			break;
>>>>>>> origin/master
        default:
			require_once($config["paths"]["resources"]["templates"]. "home.php");
            break;
    }
    require_once($config["paths"]["resources"]["templates"]. "footer.php"); 
?>

<style>
<?php 
include 'style.css'; 
?>
</style>