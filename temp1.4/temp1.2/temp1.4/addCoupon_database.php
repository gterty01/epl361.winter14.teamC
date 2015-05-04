<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>AddCoupon</title>
</head>

<?php
	session_start();
	$error_addCoupon = "";
	$ok_addCoupon = "";
	
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
	
	
	$imgData = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
	$Name = $_POST['name'];
	$address = $_POST['address'];
	$til = $_POST['til'];
	$title = $_POST['title'];
	$description = $_POST['description'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	$thisdate = date("Y-m-d");

	if($check != false) {
    }else{
    	if ($imgData != ""){
	    	$error_addCoupon  = "Το αρχείο που δώσατε δεν είναι εικόνα" . $check["mime"] . ".";
	        $_SESSION['error_addCoupon '] = $error_addCoupon;
	        $_SESSION['ok_addCoupon'] = " ";
			header("Location:addCoupon.php");
			die;
		}
    }

	$_SESSION['error_addCoupon'] = " ";
	$sql="INSERT INTO `cyfoodmuseum`.`COUPON`(`Title`, `RestaurantName`, `RestaurantAddress`, `RestaurantTil`, `Description`, `Date`, `Image`) VALUES ('$title', '$Name', '$address', '$til', '$description', '$thisdate', '$imgData' );";
	$_SESSION['ok_addCoupon'] = " ";
	
	if ($conn->query($sql) === TRUE){
		$ok_addCoupon = "Η προσθήκη του κουπονιού ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_addCoupon'] = $ok_addCoupon;
		header("Location:addCoupon.php");
		die;
	 }
	
	$error_addCoupon = "Η προσθήκη του κουπονιού δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_addCoupon'] = $error_addCoupon;
	header("Location:addCoupon.php");
	die;
?>

<body>

</body>

</html>
