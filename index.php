<?php    
    // load up your config file
    require_once("config.php");

	require_once($config["paths"]["templates"]. "header.php");

	if (!isset($_GET["content"])){
		require_once($config["paths"]["templates"]. "home.php");
	} else {
		switch($_GET["content"]){
        	case "register":
				require_once($config["paths"]["templates"]. "register.php"); 
            	break;
			case "login":
				require_once($config["paths"]["templates"]. "login.php"); 
        	    break;
			case "profile":
				require_once($config["paths"]["templates"]. "profile.php");
				break;
       		case "restaurants":
        	    require_once($config["paths"]["templates"]. "restaurants_page.php");
        	    break;
        	default:
				require_once($config["paths"]["templates"]. "home.php");
        	    break;
    	}
	}

    require_once($config["paths"]["templates"]. "footer.php"); 
?>

<style>
<?php 
include 'style.css'; 
?>
</style>