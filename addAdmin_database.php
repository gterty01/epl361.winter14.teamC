<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Προσθήκη Διαχειριστή στη Βάση</title>
</head>


<?php

	session_start();
	$error_addΑdmin= "";
	$ok_addΑdmin= "";

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

	$admin = $_POST['email'];
	$Password = $_POST['passwdNew'];
	
	$querys ="SELECT * FROM `ADMINS`";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
		 	if ($row["Email"] == $admin){
		 		$error_addΑdmin= "Το email υπάρχει ήδη!";
		 		$_SESSION['error_addΑdmin'] = $error_addΑdmin;
		 		$_SESSION['ok_addΑdmin'] = " ";
				mysqli_close($conn);		 		
				header("Location:addAdmin.php");
				die;
			}
		}
	}

	$querys ="SELECT * FROM `USERS_FM`";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
		 	if ($row["Email"] == $admin){
		 		$error_addΑdmin= "Το email υπάρχει ήδη!";
		 		$_SESSION['error_addΑdmin'] = $error_addΑdmin;
		 		$_SESSION['ok_addΑdmin'] = " ";
				mysqli_close($conn);		 		
				header("Location:addAdmin.php");
				die;
			}
		}
	}

	$encrypted=md5($Password);

	$_SESSION['error_addΑdmin'] = " ";
	$sql="INSERT INTO `cyfoodmuseum`.`ADMINS` (`Password`, `Email`) VALUES ('$encrypted', '$admin');";
	$_SESSION['ok_addΑdmin'] = " ";
	
	if ($conn->query($sql) === TRUE){
		$ok_addΑdmin= "Η προσθήκη του διαχειριστή ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_addΑdmin'] = $ok_addΑdmin;
		mysqli_close($conn);
		header("Location:addAdmin.php");
		die;
	 }
	
	$error_addΑdmin= "Η προσθήκη του διαχειριστή δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_addΑdmin'] = $error_addΑdmin;
	mysqli_close($conn);
	header("Location:addAdmin.php");
	die;


?>
<body>

</body>

</html>
