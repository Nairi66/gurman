<?php
	include_once('../session.php');
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gurman";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	  if ($conn) {
	    
	  }else {
	    die("Unable to connect to DB");
	  }
	?>
