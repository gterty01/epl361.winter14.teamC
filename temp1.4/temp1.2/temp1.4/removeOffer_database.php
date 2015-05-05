<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Διαγραφή Προσφοράς</title>
</head>

<body>
<?php

	$error_removeOffer = "";
	$ok_removeOffer = "";

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
//print_r($_POST);
	$Code = $_SESSION['Code'];
    if($_POST['iperkatigoria']=="parousatimi") {
   		$sql = "DELETE FROM `OFFER` WHERE CodeOfProduct = '$Code' ";
		$result=$conn->query($sql);
    } 
    else {
	    if($_POST['iperkatigoria']=="paliatimi") {
	 		$querys = "SELECT * FROM `OFFER` where CodeOfProduct = '$Code' ";
			$result=$conn->query($querys);
		   	if($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					$oldPrice = $row["OldValue"];
				}
			}
			
			$sql1="UPDATE `PRODUCT` SET Price = '$oldPrice' WHERE Code ='$Code'";
			$result=$conn->query($sql1);

	   		$sql= "DELETE FROM `OFFER` WHERE CodeOfProduct = '$Code' ";
			$result=$conn->query($sql);
	    
	    
	    }
}	    
  		 if ($conn->query($sql) === TRUE) {
    		$ok_removeOffer = "Επιτυχής διαγραφή της προσφοράς!";
			$_SESSION['error_removeOffer'] = " ";
			$_SESSION['ok_removeOffer'] = $ok_removeOffer;
		 	header("Location:removeOffer_selectProduct.php");

		} else {
    		$error_removeOffer = "Δεν έγινε η διαγρφή της προσφοράς! Ξαναπροσπαθήστε!";
	 		$_SESSION['error_removeOffer'] = $error_removeOffer;
			$_SESSION['ok_removeOffer'] = " ";
		 	header("Location:removeOffer.php");
			die;
		}	
    
	die;

?>
</body>

</html>

