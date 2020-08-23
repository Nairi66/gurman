<?php 
	// include_once '../session.php';
	include '../reg_log/db.php';
	echo $_SESSION['username'];
	if ($_SESSION['username'] == 'MfUBYcujmGxV3duM') {
		
	}else {
		header('location: /gurman');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: /barevtv/reg_log/login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Գուրման Վանաձոր | Գլխավոր</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
	<?php include_once '../assets/header.php'; ?>
	<h1 style="opacity: 0; cursor: context-menu; margin-bottom: 10%">Եսիմ</h1>
	<div class="reg_log_out">
			<div class="reg_log" style="display: block">
			    <li class="nav-item">
			       <a href="#newFood" class="btn btn-outline-success my-2 my-sm-0" type="submit">Նոր Սնունդ</a> 
			    </li>
			    <li class="nav-item">
			    	<a href="#orders" class="btn btn-outline-success my-2 my-sm-0" type="submit">Պատվերներ</a> 
			    </li>
		    </div>
		</div>
	<center>
		<h1>Insert Նոր սնունդ</h1>
	</center>
	<center>
		<form method="post" id="newFood" action="insert_foods.php" enctype="multipart/form-data"> 
		  <div class="form-group col-sm-7">
		    <label for="title">Ընտրեք Վերնագիր։ </label>
		    <input type="text" placeholder="Վերնագիր" name="title" class="form-control" id="title">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Նկարագրություն։ </label>
		    <input type="text" placeholder="Կարճ նկարագրություն" name="desc" id="desc" class="form-control">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="price">Գինը։ </label>
		    <input type="number" placeholder="Գինը" name="price" id="price" class="form-control">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Նկարը։ </label>
		    <input type="file" name="file" id="upload" class="form-control">
		  </div>
		   

		<div class="form-group col-sm-7" id="last">
		    <input type="submit" name="login" id="sub" class="col-sm-4 btn btn-success" value="Submit"></input>
		</div>
		  <hr>

	</form>
	</center>
	<center id='orders' class='container'>
		<table id="live_data">
		  <!-- <tr>
		    <th>Order Id</th>
		    <th>Client Username</th>
		    <th>Phonde Number</th>
		    <th>Products</th>
		    <th>Total Amount</th>
		    <th></th>
		  </tr> -->
		  	<?php

		 //  	$query = "SELECT * FROM `orders`";
			// $result = mysqli_query($conn, $query);
			//   if ($result->num_rows > 0) {
			// 	    while($row = $result->fetch_assoc()) {
			// 	    	echo "<tr>";
			// 	    	echo '<td><b>'.$row['order_id'].'</b></td>';
			// 	    	echo '<td data-id1="'.$row["order_id"].'">'.$row['cl_username'].'</td>';
			// 	    	echo '<td data-id2="'.$row["order_id"].'"><b>'.$row['phone_number'].'</b></td>';
			// 	    	echo '<td data-id3="'.$row["order_id"].'">'.str_replace(', ','</br>', $row['products']).'</td>';
			// 	    	echo '<td data-id4="'.$row["order_id"].'"><b>'.$row['total_amount'].'</b></td>';
			// 	    	echo '<td><button type="button" name="delete_btn" data-id5="'.$row["order_id"].'" class="btn btn-xs btn-success btn_delete">Արդեն Առաքված է</button></td>  ';
			// 	    	echo "</tr>";
			// 	    }
			// 	}

		  	?>
		</table>
	</center>
	<!-- <h1>Insert Serials or Anime</h1>
	<center>
		<form method="post" action="insert_serials.php" enctype="multipart/form-data"> 
		  <div class="form-group col-sm-7">
		    <label for="title">Ընտրեք Վերնագիր։ </label>
		    <input type="text" placeholder="Վերնագիր" name="title" class="form-control" id="title">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Նկարագրություն։ </label>
		    <input type="text" placeholder="Կարճ նկարագրություն" name="desc" id="desc" class="form-control">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="desc">Վերբեռնվող ֆայլը։ </label>
		    <input type="file" name="file" id="upload" class="form-control">
		  </div>
		  <hr>
		<div class="form-group col-sm-7" id="last">
		    <input type="submit" name="login" id="sub" class="col-sm-4 btn btn-success" value="Submit"></input>
		</div> -->
	</form>
	</center>

    <script src="../js/main.js"></script>
    <script>
	$(document).ready(function(){ 
    	$('#scrollup').on('click', function(){
		var body = $("html, body");
		body.stop().animate({scrollTop:0}, 800, 'swing');
	})
    	function fetch_data()  
		    {  
		        $.ajax({  
		            url:"select.php",  
		            method:"POST",  
		            success:function(data){  
						$('#live_data').html(data);  
		            }  
		        });  
		    }
		    fetch_data();
		    setInterval(function(){
		        fetch_data();
		    }, 2000)
		$(document).on('click', '.btn_delete', function(){  
			
			if(confirm("Are you sure you want to delete this?"))  
        {  
        	var id = $(this).data("id5");
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();
                }  
            });  
        }  
		})
	})

    </script>
</body>
</html>