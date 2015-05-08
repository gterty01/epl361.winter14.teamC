<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Εμφάνιση Προμηθευτή</title>
</head>
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
	
	$CodeSupplier = $_POST['supplier'];	
	$querys = "SELECT * FROM `SUPPLIER` where SupplierNumber = '$CodeSupplier' ";
	$result=$conn->query($querys);

	session_start();
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$_SESSION['supplier'] = $row["SupplierNumber"];
			$_SESSION['Sname'] = $row["CompanyName"];
			$_SESSION['a1']= $row["Address1"];
			$_SESSION['a2'] = $row['Address2'];
			$_SESSION['city'] = $row['City'];
			$_SESSION['tk'] = $row['PostalCode'];
			$_SESSION['til']= $row['TelephoneNumber'];
			$_SESSION['email'] = $row['Email'];
			$_SESSION['site'] = $row['Site'];
			$_SESSION['fax'] = $row['Fax'];

			mysqli_close($conn);
			header("Location:editSupplier.php");
			die;

		}
	}


	

		
?>
<body>

</body>

</html>
