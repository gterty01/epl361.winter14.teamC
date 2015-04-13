<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Αποθήκευση στη Βάση</title>
</head>

<body>

<?php
	session_start();
	$error_edit_supplier = "";
	$ok_edit_supplier = "";

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
	
	$CodeSupplier = $_SESSION['supplier'];	
	$name = $_POST['name'];
	$til = $_POST['til'];
	$fax = $_POST['fax'];
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	$city = $_POST['city'];
	$tk = $_POST['tk'];
	$site = $_POST['site'];
	$email = $_POST['email'];
	
	$_SESSION['supplier'] = $CodeSupplier;
	$_SESSION['Sname'] = $name;
	$_SESSION['til'] = $til;
	$_SESSION['a1'] = $d1;
	$_SESSION['a2'] = $d2;
	$_SESSION['city'] = $city;
	$_SESSION['tk'] = $tk;
	$_SESSION['email'] = $email;
	$_SESSION['site'] = $site;
	$_SESSION['fax'] = $fax;

	$_SESSION['error_edit_supplier'] = " ";
	$sql="UPDATE `SUPPLIER` SET CompanyName='$name', Address1='$d1', Address2 = '$d2', City= '$city', PostalCode = '$tk', TelephoneNumber= '$til', email = '$email', site = '$site', fax = '$fax' WHERE SupplierNumber='$CodeSupplier'";
	
	$_SESSION['ok_edit_supplier'] = " ";
	if ($conn->query($sql) === TRUE){
		$ok_edit_supplier = "Η επεξεργασία του προμηθευτή ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_edit_supplier'] = $ok_edit_supplier;
		header("Location:editSupplier.php");
		die;
	 }
	
	$error_edit_supplier = "Η επεξεργασία του προμηθευτή δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_edit_supplier'] = $error_edit_supplier;
	header("Location:editSupplier.php");
	die;

?>
</body>

</html>
