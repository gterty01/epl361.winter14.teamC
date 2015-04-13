<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Διαγραφή Προϊόντος</title>
</head>

<body>
<?php

	$error_remove = "";
	$ok_remove = "";

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

    $products = $_POST['Product'];
    if(isset($_POST['Product'])) {
   		foreach ($products as $p){
    		echo $p."<br />";
    		$sql = "DELETE FROM `PRODUCT` WHERE Code = '$p' ";
    		echo "<br />";

    		if ($conn->query($sql) === TRUE) {
    			$ok_remove = "Επιτυχής διαγραφή του προϊόντος!";
				$_SESSION['error'] = " ";
				$_SESSION['ok_remove'] = $ok_remove;

			} else {
    			$error_remove = "Δεν έγινε η διαγρφή του προϊόντος! Ξαναπροσπαθήστε!";
		 		$_SESSION['error_remove'] = $error_remove;
		 		$_SESSION['ok_remove'] = " ";
		 		header("Location:removeProduct.php");
		 		die;
			}			
   		 }
    } // end brace for if(isset

    else {

    		$error_remove = "Δεν επέλεξες προϊόν!";
		 	$_SESSION['error_remove'] = $error_remove;
		 	header("Location:removeProduct.php");

    }
    
	header("Location:removeProduct.php");
	die;

?>
</body>

</html>
