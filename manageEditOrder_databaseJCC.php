
<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
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
		echo "Connection faild";
	}
	
	$date = $_POST['date'];
  	$code = $_SESSION["code_order"];
	$complete = 1;
	$sql="UPDATE `ORDERS` SET Completed = '$complete', DateSent = '$date' WHERE Code = '$code'";
	$result = $conn->query($sql);
	mysqli_close($conn);
	header("Location: manageOrdersNotCompletedJCC.php");
	die;
?>

</body>

</html>
