<?php
 try
   {
    $db = new PDO('sqlite:' . $config["root"] . '/' . $config["paths"]["resources"]["sql"] . 'db.db');
 }
 catch(PDOException $e)
 {
  die("Failed to connect to the database: " . $e->getMessage());
 }
?>