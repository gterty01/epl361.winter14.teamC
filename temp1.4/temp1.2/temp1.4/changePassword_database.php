<?php

	session_start();
	$error_changePassword = "";
	$ok_changePassword = "";

	$servername = "localhost";
	$username = "cyfoodmuseum";
	$password = "9m8ESxZD";
	$dbname = "cyfoodmuseum";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	if (!$conn->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $conn->error);
    	die;
	}
	
	parse_url(file_get_contents("php://input"), $_POST);	

	$email = $_SESSION['login_user'];
	$oldPassword = $_POST['passwdOld'];
	$newPassword = $_POST['passwdNew'];
	
	$querys = "SELECT * FROM `USERS_FM` WHERE Email = '$email' AND Password = '$oldPassword'" ;
	$result=$conn->query($querys);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$mail = $row["Email"];
			$sql="UPDATE `USERS_FM` SET Password = '$newPassword' WHERE Email ='$mail'";
			
			if ($conn->query($sql) === TRUE){
				$ok_changePassword = "Επιτυχής αλλαγή κωδικού πρόσβασης!";
				$_SESSION['ok_changePassword'] = $ok_changePassword;
				$_SESSION['error_changePassword'] = " ";
				header("Location:changePassword.php");
				die;
			}
		}
	}else{
		$error_changePassword = "Ο προηγούμενος κωδικός πρόσβασης που έδωσες ήταν λανθασμένος!";
		$_SESSION['error_changePassword'] = $error_changePassword;
		$_SESSION['ok_changePassword'] = " ";
		header("Location:changePassword.php");
		die;
	}



?>
