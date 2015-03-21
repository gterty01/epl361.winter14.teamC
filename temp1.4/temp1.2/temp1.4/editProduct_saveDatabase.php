<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Αποθήκευση στη Βάση</title>
</head>

<body>

<?php
	session_start();
	$error_edit = "";
	$ok_edit = "";

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
	
	$CodeProduct = $_POST['product'];	
	$ProductName = $_POST['name'];
	$Description = $_POST['description'];
	$Price = $_POST['price'];
	$Quantity = $_POST['quantity'];
	$Weight = $_POST['weight'];
	$CodeSupplier= $_POST['supplier'];
	$CodeCategory = $_POST['category'];

	$_SESSION['product'] = $CodeProduct;
	$_SESSION['Pname'] = $ProductName;
	$_SESSION['price'] = $Price;
	$_SESSION['availability'] = $Quantity;
	$_SESSION['weight'] = $Weight;
	$_SESSION['category'] = $CodeCategory;
	$_SESSION['supplier'] = $CodeSupplier;
	$_SESSION['description'] = $Description;

	$_SESSION['error_edit'] = " ";
	$sql="UPDATE PRODUCT SET Name='$ProductName', Description ='$Description', Price = '$Price', CodeOfCategory = '$CodeCategory', CodeOfSupplier = '$CodeSupplier', Weight = '$Weight', Availability = '$Quantity' WHERE Code='$CodeProduct';";
	$_SESSION['ok_edit'] = " ";
	if ($conn->query($sql) === TRUE){
		$ok_edit = "Η επεξεργασία του προϊόντος ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_edit'] = $ok_edit;
		header("Location:editProduct.php");
		die;
	 }
	
	$error_edit = "Η επεξεργασία του προϊόντος δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_edit'] = $error_edit;
	header("Location:editProduct.php");
	die;

?>
</body>

</html>
