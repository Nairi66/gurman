<?php
	
	function alert($text, $spec){
		echo "<div class='form-group col-sm-7 ' style='position: absolute; z-index: 9;'><div id='alert' class='col-sm-5 alert alert-".$spec."'>$text</div></div>";
	}

	function checkFoods($title){
		include '../reg_log/db.php';
		
		$query = "SELECT * FROM `foods` WHERE `name` = '$title'";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result)>=1) {

		}else{
			return true;
		}
	}

	

	function insertFoods($title, $desc, $filename, $price){
		include '../reg_log/db.php';
		$query = "INSERT INTO foods (food_id, name, descript, filename, price, date_added) VALUES ('','$title', '$desc', '$filename', '$price', NOW())";
		$result = mysqli_query($conn, $query);

		if(strlen($conn->error) == 0){
			alert('Սնունդը հաջողությամբ վերբեռնված է։','success');
			return true;
		}else{
			alert('Վերբեռնելու ընթացքում տեղի է ունեցել սխալ, խնրում ենք նորից փորձել։', 'danger');

		}
	}

	//Insert FIlm
	function Insert() {

		if (isset($_POST['login'])){
			if (!empty($_POST['title']) && !empty($_POST['desc']) && !empty($_POST['price'])) {
				include '../reg_log/db.php';


				$name = $_FILES['file']['name'];
				$tmp_name = $_FILES['file']['tmp_name'];
				//from POST
				$title = $_POST['title'];
				$desc = $_POST['desc'];
				$price = $_POST['price'];
				$dest = '../img/inserted_foods/'.$name;
				if (checkFoods($title)) {
					insertFoods($title, $desc, $name, $price);
					move_uploaded_file($tmp_name, $dest);
					return true;
				}else{
					// alert('Տվյալ ֆիլմը արդեն կա բազայում։', 'danger');		
					echo 'fuck';
				}

			}else{

				// alert('Խնդրում ենք լրացնել բոլոր դաշտերը։', 'danger');

			}
		}
	}
	if (Insert()) {
		// header('location: admin-panel.php');
	}
