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
	if (!$conn->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $conn->error);
    	die;
	}
	
	parse_url(file_get_contents("php://input"), $_POST);	

	$imgData = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
	
	$CodeProduct = $_SESSION['product'];	
	$ProductName = $_POST['name'];
	$Description = $_POST['description'];
	$Price = $_POST['price'];
	$Quantity = $_POST['quantity'];
	$Weight = $_POST['weight'];
	$CodeSupplier= $_POST['supplier'];
	$CodeCategory = $_POST['category'];
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check != false) {
    }else{
    	$error_add = "Το αρχείο που δώσατε δεν είναι εικόνα" . $check["mime"] . ".";
        $_SESSION['error_add'] = $error_add;
        $_SESSION['ok_add'] = " ";
		header("Location:addProduct_dropdown.php");
		die;
    }
    
	$_SESSION['product'] = $CodeProduct;
	$_SESSION['Pname'] = $ProductName;
	$_SESSION['price'] = $Price;
	$_SESSION['availability'] = $Quantity;
	$_SESSION['weight'] = $Weight;
	$_SESSION['category'] = $CodeCategory;
	$_SESSION['supplier'] = $CodeSupplier;
	$_SESSION['description'] = $Description;
	$_SESSION['image'] = $imgData;

	$_SESSION['error_edit'] = " ";
	$sql="UPDATE `PRODUCT` SET Name='$ProductName', Description ='$Description', Price = '$Price', CodeOfCategory = '$CodeCategory', CodeOfSupplier = '$CodeSupplier', Weight = '$Weight', Availability = '$Quantity', image = '$imgData' WHERE Code='$CodeProduct'";
	
	$_SESSION['ok_edit'] = " ";
	if ($conn->query($sql) === TRUE){
		$ok_edit = "Η επεξεργασία του προϊόντος ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_edit'] = $ok_edit;
		header("Location:editProduct_selectCategory.php");
		die;
	 }
	
	$error_edit = "Η επεξεργασία του προϊόντος δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_edit'] = $error_edit;
	header("Location:editProduct.php");
	die;

?>
</body>

</html>
