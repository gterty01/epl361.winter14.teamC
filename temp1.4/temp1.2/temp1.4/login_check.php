<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Login</title>
</head>

<body>

<?php
 	
 	session_start();
	$error = '';
	$servername = "localhost";
	$username = "cyfoodmuseum";
	$password = "9m8ESxZD";
	$dbname = "cyfoodmuseum";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	    echo "Connection faild";
	}
	echo "Connected successfully";

	parse_url(file_get_contents("php://input"), $_POST);
	print_r($_POST); 
	
	$email = $_POST['mail'];
	print ($email);
	$password = $_POST['password'];
	print ($password);
	
	$sql ="SELECT * FROM `USERS_FM` WHERE Email ='$email'";
	$result=$conn->query($sql);
	
	if ($result->num_rows == 1){

	}
	else{
			$error = "Δώσατε μη έγκυρο email!";
			$_SESSION['error']=$error;
			header("Location:login_error.php");
			die;
		}

	$sql1 ="SELECT * FROM `USERS_FM` WHERE Email ='$email' AND Password ='$password'";
	$result1=$conn->query($sql1);
	
	if($result1->num_rows == 1)
		{
			$_SESSION['login_user']=$email;
	        header("location:login_index.php"); /* Redirect the browser */
	    }  
		else {
		
			$error = "Δώσατε μη έγκυρο κωδικό πρόσβασης!";
			$_SESSION['error']=$error;
			header("Location:login_error.php");
		}

?>

</body>

</html>

