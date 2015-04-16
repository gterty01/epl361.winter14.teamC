<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Ανάκτηση Κωδικού Πρόσβασης</title>
</head>

<body>


<?php

	$error_pass = "";
	$ok_pass = "";
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
			
	parse_url(file_get_contents("php://input"), $_POST);
	if (!$conn->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $conn->error);
	    die;
	}				
	
	$email = $_POST['mail'];	
	
	$querys = "SELECT * FROM `USERS_FM` where Email = '$email' ";
	$result = $conn->query($querys);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$Password = $row["Password"];
			$to = $email;
			echo $to;
			$message = "Ο κωδικός πρόσβασης σας είναι:  $Password. \r\n \r\nΕυχαριστούμε, CyFoodMuseum.";
			$subject = 'Ανάκτηση Κωδικού Πρόσβασης CyFoodMuseum';
			//$message = wordwrap($msg, 70, "\r\n");
			//mail($to, $subject, $message);
			if(@mail($to, $subject, $message)){
	 			 echo "Mail Sent Successfully";
			}else{
	  			echo "Mail Not Sent";
			}
			$ok_pass = "Ο κωδικός πρόσβασης σας, σας έχει αποσταλεί με email!";
			$_SESSION['ok_pass'] = $ok_pass;
			$_SESSION['error_pass'] = " ";
			header("Location: forgotPassword.php");
			die;
		}
	}else{
		$error_pass = "Το email που δώσατε δεν είναι έγκυρο!";
		$_SESSION['error_pass'] = $error_pass;
		$_SESSION['ok_pass'] = " ";
		header("Location: forgotPassword.php");
		die;
	}

	
	
?>
</body>

</html>
	

