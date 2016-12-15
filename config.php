<?php

/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
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
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>