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
	if ($_POST['mail'] && $_POST['password']){
	
	//$sql = "SELECT * FROM 'USER_FM' WHERE Email = '" . $email . "' and Password = '" . $password "' ";
	$sql ="SELECT * FROM `USER_FM` WHERE Email ='$email' AND Password ='$password'";
	$result=$conn->query($sql);
	
	   if($result->num_rows == 1)
		{
			$_SESSION['login_user']=$email;
	        header("location:index.html"); /* Redirect the browser */
	    }  
		else {
			$error = "Το email ή ο κωδικός που έδωσες είναι λάθος!";
			header("Location:login.html");
		}
	}
	else
	{
		$error = "Το email ή ο κωδικός που έδωσες είναι λάθος!";
		header("Location:login.html");
	}
	
	//exit();

?>
