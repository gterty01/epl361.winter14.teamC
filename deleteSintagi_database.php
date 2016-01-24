<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Διαγραφή Συνταγής</title>
</head>

<body>
<?php

	session_start();
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
	$code = $_POST['akirwthike'];

    $sql = "DELETE FROM `SINTAGI` WHERE Code = '$code' ";

    if ($conn->query($sql) === TRUE) {
    	mysqli_close($conn);
		header("Location:deleteSintagi.php");
    }
    
    mysqli_close($conn);
	header("Location:deleteSintagi.php");

?>
</body>

</html>
