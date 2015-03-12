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
	print_r($_POST); 
	
	$ProductName = $_POST['name'];
	print ($ProductName);
	$Description = $_POST['description'];
	print ($Description);
	$Price = $_POST['price'];
	print ($Price);
	$Quantity = $_POST['quantity'];
	print ($Quantity );
	$Weight = $_POST['weight'];
	print ($Weight);
	$CodeSupplier= $_POST['supplier'];
	print ($CodeSupplier);
	$thisdate = date("Y-m-d");
	echo $thisdate;
	$CodeCategory = $_POST['category'];
	print ($CodeCategory);

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
?>

<body>

</body>

</html>
