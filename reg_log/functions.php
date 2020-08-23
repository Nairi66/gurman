<?php
	function alert($text, $spec){
		echo "<div class='form-group col-sm-7 ' style='position: absolute; z-index: 9;'><div id='alert' class='col-sm-5 alert alert-".$spec."'>$text</div></div>";
	}

	function checkUser($user){
		include 'db.php';
		$query = "SELECT * FROM `users` WHERE `username` = '$user'";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result)>=1) {

		}else{
			return true;
		}
	}
	function insertUser($user, $pass){
		include 'db.php';
		$rand = rand(1000,10000);
		$query = "INSERT INTO users (username, password, spec_id) VALUES ('$user', '$pass', '$rand')";
		$result = mysqli_query($conn, $query);

		if(strlen($conn->error) == 0){
			alert('Դուք յաջողութեամբ գրանցուած եք։','success');
			header('location: login.php');

		}else{
			alert('Գրանցումը չի կատարուել, խնդրում ենք փորձել մի փոքր ուշ', 'danger');

		}
	}

	function register() {

		if (isset($_POST['reg'])){
			if (!empty($_POST['username']) && !empty($_POST['pswd1']) & !empty($_POST['pswd2'])) {

				if ($_POST['pswd1'] === $_POST['pswd2']) {
					include 'db.php';

					$username = $_POST['username'];
					$password = hash("sha256", $_POST['pswd1']);
					if (checkUser($username)) {
						insertUser($username, $password);
					}else{
						alert('Տուեալ մուտքանունը զբաղուած է։', 'danger');		
					}

				}else{
					// alert('Գաղտնաբառերը չեն համընկնում։','danger');

				}


			}else{

				// alert('Խնդրում ենք լրացնել բոլոր դաշտերը։', 'danger');

			}
		}
	}

	function login(){
		if (isset($_POST['login'])){
			if (!empty($_POST['log_user']) && !empty($_POST['log_pswd'])) {
				include 'db.php';

				$log_user = $_POST['log_user'];
				$log_pswd = hash("sha256", $_POST['log_pswd']);
				if (checkUser($log_user)) {
					alert('Տուեալ մուտքանունը բացակայում է համակարգում։', 'danger');	
				}else{
					$query = "SELECT * FROM `users` WHERE `password` = '$log_pswd'";
					$result = mysqli_query($conn, $query);
					if (mysqli_num_rows($result)>=1) {
						$_SESSION['username'] = $log_user;

						header('location: /barevtv');
						// echo "verjy mtar eli typo";
						// echo $_SESSION['username'];
						
					}else{
						alert('Սխալ մուտքանուն կամ գաղտնաբառ', 'danger');
					}
				}

			}else{

				// alert('Խնդրում ենք լրացնել բոլոր դաշտերը։', 'danger');

			}
		}
	}
	login();
	register();

?>
