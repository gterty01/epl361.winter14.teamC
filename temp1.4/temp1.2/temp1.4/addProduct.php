<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>AddProduct</title>
</head>

<?php
	session_start();
	$error = "";
	$ok = "";
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
	
	$ProductName = $_POST['name'];
	$Description = $_POST['description'];
	$Price = $_POST['price'];
	$Quantity = $_POST['quantity'];
	$Weight = $_POST['weight'];
	$CodeSupplier= $_POST['supplier'];
	$thisdate = date("Y-m-d");
	$CodeCategory = $_POST['category'];

	$querys ="SELECT * FROM `PRODUCT`";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		 while($row = $result->fetch_assoc()) {
		 	if ($row["Name"]==$_POST['name']){
		 		$error = "Το προϊόν ήδη υπάρχει.";
		 		$_SESSION['error'] = $error;
		 		$_SESSION['ok'] = " ";
		 		header("Location:addProduct_dropdown.php");
				die;
			}
		}
	}
	$_SESSION['error'] = " ";
	$sql="INSERT INTO `cyfoodmuseum`.`PRODUCT` (`Name`, `Description`, `Price`, `CodeOfCategory`,  `EntryDate`, `CodeOfSupplier`, `Weight`, `Availability`) VALUES ('$ProductName', '$Description', '$Price', '$CodeCategory', '$thisdate', '$CodeSupplier', '$Weight', '$Quantity');";
	$_SESSION['ok'] = " ";
	if ($conn->query($sql) === TRUE){
		$ok = "Η προσθήκη του προϊόντος ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok'] = $ok;
		header("Location:addProduct_dropdown.php");
		die;
	 }
	
	$error = "Η προσθήκη του προϊόντος δεν ολοκληρώθηκε!";
	$_SESSION['error'] = $error;
	header("Location:addProduct_dropdown.php");
	die;
	
?>

<body>

</body>

</html>
