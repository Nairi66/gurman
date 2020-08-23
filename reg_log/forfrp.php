<?php
	include_once('../session.php');
 	$servername = "sql108.epizy.com";
	$username = "epiz_26524475";
	$password = "PfKbD1AlsNyHlS";
	$dbname = "epiz_26524475_455";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn) {
    
  }else {
    die("Unable to connect to DB");
  }
?>
