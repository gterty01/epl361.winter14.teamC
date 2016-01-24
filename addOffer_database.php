<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Αποθήκευση στη Βάση την Προσφορά</title>
</head>

<body>

<?php
	session_start();
	$error_addOffer = "";
	$ok_addOffer = "";

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
	
	$CodeProduct = $_SESSION['Code'];
	$OldPrice = $_SESSION['price'];
	$NewPrice = $_POST['nea_timi'];
	
	$querys = "SELECT * FROM `OFFER` where CodeOfProduct = '$CodeProduct'";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		$error_addOffer = "Το προϊόν είναι ήδη σε προσφορα!";
		$_SESSION['error_addOffer'] = $error_addOffer;
		mysqli_close($conn);
		header("Location:addOffer.php");
		die;
	}

	$_SESSION['error_addOffer'] = " ";
	$sql="INSERT INTO `cyfoodmuseum`.`OFFER` (`CodeOfProduct`,`OldValue`,`NewPrice`) VALUES ('$CodeProduct', '$OldPrice', '$NewPrice');";
	$sql1="UPDATE `PRODUCT` SET Price = '$NewPrice' WHERE Code='$CodeProduct'";
	$result = $conn->query($sql);
	$_SESSION['ok_addOffer'] = " ";
	if ($conn->query($sql1) === TRUE){
		$ok_addOffer = "Η προσθήκη της προσφοράς ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_addOffer'] = $ok_addOffer;
		mysqli_close($conn);
		header("Location:addOffer_selectProduct.php");
		die;
	 }
	
	$error_addOffer = "Η προσθήκη της προσφοράς δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_addOffer'] = $error_addOffer;
	mysqli_close($conn);
	header("Location:addOffer.php");
	die;

?>
</body>

</html>
