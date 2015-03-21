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
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	parse_url(file_get_contents("php://input"), $_POST);	
	
	$CodeProduct = $_POST['product'];	
	$querys ="SELECT * FROM `PRODUCT` WHERE Code = '$CodeProduct'";
	$result=$conn->query($querys);

	session_start();
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$_SESSION['product'] = $row["Code"];
			$_SESSION['Pname'] = $row["Name"];
			$_SESSION['price']= $row["Price"];
			$_SESSION['availability'] = $row['Availability'];
			$_SESSION['weight'] = $row['Weight'];
			$_SESSION['category'] = $row['CodeOfCategory'];
			$_SESSION['supplier']= $row['CodeOfSupplier'];
			$_SESSION['description']=$row['Description'];
			
			$CatCode = $row['CodeOfCategory'];
			$querys1 ="SELECT * FROM `CATEGORY` WHERE CodeCat = '$CatCode'";
			$result1=$conn->query($querys1);
			while($row1 = $result1->fetch_assoc()) {

				$_SESSION['CName'] = $row1['NameCat'];	
			}
				
			$SupplierCode = $row['CodeOfSupplier'];
			$querys2 ="SELECT * FROM `SUPPLIER` WHERE SupplierNumber = '$SupplierCode'";
			$result2=$conn->query($querys2);
			while($row2 = $result2->fetch_assoc()) {

				$_SESSION['SName'] = $row2['CompanyName'];	
			}	

			header("Location:editProduct.php");
			die;

		}
	}


	

		
?>
<body>

</body>

</html>
