<?php  
	$connect = mysqli_connect("localhost", "root", "", "gurman");
	$sql = "DELETE FROM orders WHERE order_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  else{
		echo 'no delete';
	}
 ?>