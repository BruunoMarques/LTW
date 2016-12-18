<?php

defined('PUBLIC_PATH')
    or define('PUBLIC_PATH',dirname(__FILE__) . "/");

$config = array(
    "root" => PUBLIC_PATH,
    "index" => PUBLIC_PATH . "index.php",
    "urls" => array(
        "public_path" => PUBLIC_PATH,
	    "base_path" => dirname(PUBLIC_PATH)
    ),
    "paths" => array(
        "api" => "./api/",
        "sql" => "./sql_files/",
        "templates" => "./templates/",
        "images" => array(
            "content" => "images/content/",
            "layout" => "images/layout/"
        ),
        "scripts" =>  "./scripts/", 
        "css" => "css/"
    )
);

try
{
    $dbpath = $config["paths"]["sql"] . 'db.db';
    //echo $dbpath;
    $db = new PDO('sqlite:' . $dbpath);
}
catch(PDOException $e)
{
    die("Failed to connect to the database: " . $e->getMessage());
}

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>