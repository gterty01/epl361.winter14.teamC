<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Εμφάνιση Κατηγορίας</title>
</head>
<?php

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
	
	$CodeCategory = $_POST['category'];	
	$querys = "SELECT * FROM `CATEGORY` where CodeCat = '$CodeCategory' ";
	$result=$conn->query($querys);

	session_start();
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$_SESSION['category'] = $row["CodeCat"];
			$_SESSION['Cname'] = $row["NameCat"];
			$_SESSION['Description']= $row["DescriptionCat"];
			$_SESSION['SubCategory'] = $row['SubCategory'];
			$_SESSION['image'] = $row['imageCat'];
		}
	}
	$code = $_SESSION['SubCategory'];

	if ($code == 0){
		$_SESSION['iperkatigoria'] = "Δεν ανήκει σε κάποια υπερκατηγορία";
		header("Location:editCategory.php");
		die;
	}else{
		$querys = "SELECT * FROM `SUBCATEGORY` where Code = '$code' ";
		$result=$conn->query($querys);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$_SESSION['iperkatigoria'] = $row["Name"];
				header("Location:editCategory.php");
				die;
		}

	}

}
	

		
?>
<body>

</body>

</html>
