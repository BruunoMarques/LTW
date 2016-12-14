<?php
    try
    {
        $dbpath = $config["root"] . '/' . $config["paths"]["resources"]["sql"] . 'db.db';
        echo $dbpath;
        $db = new PDO('sqlite:' . $dbpath);
    }
    catch(PDOException $e)
    {
        die("Failed to connect to the database: " . $e->getMessage());
    }
?>