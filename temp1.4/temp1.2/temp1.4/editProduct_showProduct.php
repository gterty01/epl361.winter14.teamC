<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Εμφάνιση Προϊόντος</title>
</head>
<?php

	$servername = "localhost";
	$username = "cyfoodmuseum";
	$password = "9m8ESxZD";
	$dbname = "cyfoodmuseum";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//@mysql_select_db($dbname) or die ("No database");
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	    echo "Connection faild";
	}
	echo "Connected successfully";
	parse_url(file_get_contents("php://input"), $_POST);
	print_r($_POST); 
	
	
	$CodeProduct = $_POST['product'];	

	$querys ="SELECT * FROM `PROTUCT` WHERE ";
	$result=$conn->query($querys);

		session_start();
	 	if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
 				if ($row["Code"]==$_POST['product']){
					$_SESSION['Pname'] = $row["Name"];
					$_SESSION['price']= $row["Price"];
					$_SESSION['availability'] = $row['Availability'];
					$_SESSION['weight'] = $row['Weight'];
					$_SESSION['category'] = $row['CodeOfCategory'];
					$_SESSION['supplier']= $row['CodeOfSupplier'];
					$_SESSION['description']=$row['Description'];
					
					header("Location: editProduct.php");
					die;

				}
			}
		}
		
?>
<body>

</body>

</html>
