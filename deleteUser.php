<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Διαγραφή Χρήστη</title>
</head>

<body>
<?php

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
	print_r($_POST);
	$email = $_POST['diagrapsou'];

	$sql= "DELETE FROM `USERS_FM` WHERE Email = '$email' ";
	 if ($conn->query($sql) === TRUE) {
	 echo "true";
}
	$result=$conn->query($sql);
	mysqli_close($conn);
	header("Location:manageUsers.php");
	die;

?>
</body>

</html>
