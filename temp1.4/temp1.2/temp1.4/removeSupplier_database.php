<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Διαγραφή Προμηθευτή</title>
</head>

<body>
<?php

	$error_remove_supplier = "";
	$ok_remove_supplier = "";

	session_start();
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

    $suppliers = $_POST['Supplier'];
    
    if(isset($_POST['Supplier'])) {
   		foreach ($suppliers as $p){
    		echo $p."<br />";
    		$sql = "DELETE FROM `SUPPLIER` WHERE SupplierNumber = '$p' ";
    		echo "<br />";
    		
    		if ($conn->query($sql) === TRUE) {
    			$ok_remove_supplier = "Επιτυχής διαγραφή των προμηθευτών!";
		 		$_SESSION['error_supplier'] = " ";
		 		$_SESSION['ok_remove_supplier'] = $ok_remove_supplier;
		
    			
			} else {
    			$error_remove_supplier = "Δεν έγινε η διαγρφή του προμηθευτή! Ξαναπροσπαθήστε!";
		 		$_SESSION['error_remove_supplier'] = $error_remove_supplier;
		 		$_SESSION['ok_remove_supplier'] = " ";
		 		header("Location:removeSupplier.php");
		 		die;
			}			
   		 }
    } // end brace for if(isset

    else {

    		$error_remove = "Δεν επέλεξες προμηθευτή!";
		 	$_SESSION['error_remove_supplier'] = $error_remove_suppler;
		 	header("Location:removeSupplier.php");

    }
 		header("Location:removeSupplier.php");
		die;
?>
</body>

</html>
