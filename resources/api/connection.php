<?php
	define('PUBLIC_PATH',dirname(realpath(__FILE__)) . "/");
	define('BASE_PATH',dirname(PUBLIC_PATH));
  try
  {
      $db = new PDO('sqlite:' . BASE_PATH . '/sql_files/db.db');
  }
  catch(PDOException $e)
  {
      die("Failed to connect to the database: " . $e->getMessage());
  }
?>