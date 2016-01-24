<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Επεξεργασία μη ολοκληρωμένων παραγγελιών</title>
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
						
	if (!$conn->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $conn->error);
    	die;
	}
	
	$code = $_POST['oloklirwsi'];
	
	if(isset($_POST['oloklirwsi'])){
		$code = $_POST['oloklirwsi'];	
		$_SESSION["code_order"] = $code;
		mysqli_close($conn);
		header("Location: manageOrdersSetCompletedJCC.php");
		die;
		
	}else{
	
		$code = $_POST['akirwthike'];
		$cancel = 1;
		$sql="UPDATE `ORDERS` SET Canceled = '$cancel' WHERE Code = '$code'";
		$result = $conn->query($sql);		
		mysqli_close($conn);
		header("Location: manageOrdersNotCompletedJCC.php");
		die;
	}


?>
</body>

</html>
