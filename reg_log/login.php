<?php
	include 'functions.php';
	include 'db.php';

if (!isset($_SESSION['username'])) {
		// header('location: login.php');
	}else{ 
		header('location: /gurman');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Գուրման Վանաձոր | Մուտք</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
</head>
<body>
	<?php include_once '../assets/header.php'; ?>
	<center><h2><b>Գուրման Վանաձոր | Մուտք</b></h2></center>

	<div class="container">
		<form method="post">
		  <div class="form-group col-sm-7" style="opacity: 0; cursor: context-menu;">
		    <label for="username">Username*</label>
		    <input type="text" placeholder="Մուտքանուն" name="log_user" class="form-control" id="username">
		  </div>
		  <div class="form-group col-sm-7">
		    <label for="username">Username*</label>
		    <input type="text" placeholder="Մուտքանուն" name="log_user" class="form-control" id="username">
		  </div>
		  <div class="form-group first col-sm-7">
		    <label for="pswd1">Password*</label>
		    <input type="password" placeholder="Գաղտնաբառ" name="log_pswd" id="pswd1" class="form-control">
		  </div>
		  <hr>
		  <div class="form-group col-sm-7" id="stat">
		  	
		  </div>	
		<div class="form-group col-sm-7" id="last">
		    <input type="submit" name="login" id="sub" class="col-sm-4 btn btn-success" value="Submit"></input>
		</div>
	</form>

		<!-- <script type="text/javascript">
		// $("#sub").prop('disabled', true);
		// $inpShow = setTimeout(function (){
			$('input').on('input', function(){
		   		if ($('#username').val().length > 0) {
					$(".first").show(500);
					if ($('#pswd1').val().length > 7) {
						$(".second").show(500);
					}else{
						$(".second").hide(500);
					}
				}else{
					$(".first").hide(500);
				}
				
		    });
		    $('input').on('input', function(){
		    	if ($('#username').val().length > 0 && $('#pswd1').val().length > 0) {
		    		func_alert('', '')
		    	}else{
		    		func_alert('Խնդրում ենք լրացնել բոլոր դաշտերը։', 'danger')
		    	}
		    })	
		   
		   function func_alert($text, $spec){
		   		$('#stat').html("<div id='alert' class='col-sm-5 alert alert-" + $spec + "'>" + $text + "</div>")
		   }
		// },1000)
	</script> -->
</body>
</html>