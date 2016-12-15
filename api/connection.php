<?php
    try
    {
        $dbpath = '../sql_files/db.db';
        //echo $dbpath;
        $db = new PDO('sqlite:' . $dbpath);
    }
    catch(PDOException $e)
    {
        die("Failed to connect to the database: " . $e->getMessage());
    }
?>