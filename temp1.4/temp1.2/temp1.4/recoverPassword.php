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
			$newPass= mt_rand(10000000, 99999999);
			$encry=md5($newPass);
			$to = $email;
			$queryChange = "UPDATE `USERS_FM` SET `Password`='$encry' WHERE `Email` = '$email';";
			$conn->query($queryChange);
			$message = "Συνδεθείτε στο λογαριασμό σας με τον κωδικό:  $newPass. \r\n Έπειτα μπορείτε να αλλάξετε τον κωδικό αυτό και να καταχωρήσετε κάποιον της επιθυμίας σας. \r\n \r\nΕυχαριστούμε, CyFoodMuseum.";
			$subject = 'Ανάκτηση Κωδικού Πρόσβασης CyFoodMuseum';
			if(@mail($to, $subject, $message)){
	 			 echo "Mail Sent Successfully";
			}else{
	  			echo "Mail Not Sent";
			}
			
			$ok_pass = "Ο κωδικός πρόσβασης σας, σας έχει αποσταλεί με email!";
			$_SESSION['ok_pass'] = $ok_pass;
			$_SESSION['error_pass'] = " ";
			mysqli_close($conn);
			header("Location: forgotPassword.php");
			die;
		}
	}
	
	$querys_admin = "SELECT * FROM `ADMINS` where Email = '$email' ";
	$result = $conn->query($querys_admin);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$Password = $row["Password"];
			$newPass= mt_rand(10000000, 99999999);
			$encry=md5($newPass);
			$to = $email;
			$queryChange = "UPDATE `ADMINS` SET `Password`='$encry' WHERE `Email` = '$email';";
			$conn->query($queryChange);
			$message = "Συνδεθείτε στο λογαριασμό σας με τον κωδικό:  $newPass. \r\n Έπειτα μπορείτε να αλλάξετε τον κωδικό αυτό και να καταχωρήσετε κάποιον της επιθυμίας σας. \r\n \r\nΕυχαριστούμε, CyFoodMuseum.";
			$subject = 'Ανάκτηση Κωδικού Πρόσβασης CyFoodMuseum';
			if(@mail($to, $subject, $message)){
	 			 echo "Mail Sent Successfully";
			}else{
	  			echo "Mail Not Sent";
			}
			$ok_pass = "Ο κωδικός πρόσβασης σας, σας έχει αποσταλεί με email!";
			$_SESSION['ok_pass'] = $ok_pass;
			$_SESSION['error_pass'] = " ";
			mysqli_close($conn);
			header("Location: forgotPassword.php");
			die;
		}
	}

	$error_pass = "Το email που δώσατε δεν είναι έγκυρο!";
	$_SESSION['error_pass'] = $error_pass;
	$_SESSION['ok_pass'] = " ";
	mysqli_close($conn);
	header("Location: forgotPassword.php");
	die;

	
?>
</body>

</html>
	

