<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Προσθήκη Προμηθευτή</title>
</head>

<?php
	session_start();
	$error_add_supplier = "";
	$ok_add_supplier = "";
	$servername = "localhost";
	$username = "cyfoodmuseum";
	$password = "9m8ESxZD";
	$dbname = "cyfoodmuseum";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	parse_url(file_get_contents("php://input"), $_POST);
	if (!$conn->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $conn->error);
    	die;
	}	

	$SupplierName = $_POST['name'];
	$tilefwno = $_POST['til'];
	$Address1 = $_POST['d1'];
	$City = $_POST['city'];
	$PostalCode = $_POST['tk'];
	$Email= $_POST['email'];

	if ($_POST['fax']=="Φαξ"){
	 $fax = "";
	}else{ $fax = $_POST['fax'];}
	
	if ($_POST['d2']=="Διεύθυνση 2"){
	 $Address2 = "";
	}else{ $Address2 = $_POST['d2'];}

	if ($_POST['site']=="Ιστοσελίδα"){
	 $Site = "";
	}else{ $Site = $_POST['site'];}


	$querys ="SELECT * FROM `SUPPLIER`";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		 while($row = $result->fetch_assoc()) {
		 	if ($row["CompanyName"] == $SupplierName){
		 		$error_add_supplier = "O προμηθευτής υπάρχει ήδη!";
		 		$_SESSION['error_add_supplier'] = $error_add_supplier;
		 		$_SESSION['ok_add_supplier'] = " ";
		 		header("Location:addSupplier.php");
				die;
			}
		}
	}
	$_SESSION['error_add_supplier'] = " ";
	$sql="INSERT INTO `cyfoodmuseum`.`SUPPLIER` (`CompanyName`, `Address1`, `Address2`,  `City`, `PostalCode`, `TelephoneNumber`, `Email`, `Site`, `Fax`) VALUES ('$SupplierName', '$Address1', '$Address2', '$City', '$PostalCode', '$tilefwno', '$Email', '$Site', '$fax' );";
	$_SESSION['ok_add_supplier'] = " ";
	

	if ($conn->query($sql) === TRUE){
		$ok_add_supplier = "Η προσθήκη του προϊόντος ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_add_supplier'] = $ok_add_supplier;
		header("Location:addSupplier.php");
		die;
	 }
	
	$error_add_supplier = "Η προσθήκη του προϊόντος δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_add_supplier'] = $error_add_supplier;
	header("Location:addSupplier.php");
	die;
?>

<body>

</body>

</html>
