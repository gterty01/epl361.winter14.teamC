<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>AddProduct</title>
</head>

<?php

	$servername = "localhost";
	$username = "cyfoodmuseum";
	$password = "9m8ESxZD";
	$dbname = "cyfoodmuseum";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	    echo "Connection faild";
	}
	echo "Connected successfully";

	parse_url(file_get_contents("php://input"), $_POST);
	print_r($_POST); 
	
	$ProductName = $_POST['name'];
	print ($ProductName);
	$Description = $_POST['description'];
	print ($Description);
	$Price = $_POST['price'];
	print ($Price);
	$Quantity = $_POST['quantity'];
	print ($Quantity );
	$Weight = $_POST['weight'];
	print ($Weight);
	$Supplier = $_POST['supplier'];
	print ($Supplier);
	$thisdate = date("Y-m-d");
	echo $thisdate;
	$Category = $_POST['category'];

	$var = "no"
	$sql ="SELECT * FROM `CATEGORY` WHERE NameCat ='$Category'";
	$result=$conn->query($sql);
	if($result->num_rows > 0){
	 	while($row = $result->fetch_assoc()) {
	 		 if ($row["NameCat"]== $_POST['category']){
	 		 	$CodeCategory = $row["CodeCat"];
				print ($CodeCategory);
				$var = "yes"
	 		 }
	 	}	 	
	 }	
	 	
	 if ($var=="no"){		 	
	 	$sql1="INSERT INTO `cyfoodmuseum`.`CATEGORY` (`Name`) VALUES ('$Category');";
	 	
		$sql2 ="SELECT * FROM `CATEGORY` WHERE NameCat ='$Category'";
		$result1=$conn->query($sql2);
		if($result1->num_rows > 0){
		 	while($row = $result1->fetch_assoc()) {
		 		 if ($row["NameCat"]== $_POST['category']){
		 		 	$CodeCategory = $row["CodeCat"];
					print ($CodeCategory);
		 		 }
		 	}	 	
		 }
	 }

	$var1 = "no"
	$sql3 ="SELECT * FROM `SUPPLIER` WHERE CompanyName ='$Supplier'";
	$result2=$conn->query($sql3);
	if($result2->num_rows > 0){
	 	while($row = $result2->fetch_assoc()) {
	 		 if ($row["CompanyName"]== $_POST['supplier']){
	 		 	$CodeSupplier = $row["SupplierNumber"];
				print ($CodeSupplier);
				$var = "yes"
	 		 }
	 	}	 	
	 }	

	if ($var1 == "no"){
		$error = "Δεν υπάρχει ο προμηθευτής που εισάγατε στην ΒΔ";
		die;
	}


	$sql="INSERT INTO `cyfoodmuseum`.`PRODUCT` (`Name`, `Description`, `Price`, `Category`,  `EntryPrice`, `CodeOfSupplier`, `Weight`, `Availability`) VALUES ('$ProductName', '$Description', '$Price', '$CodeCategory', '$thisdate', '$CodeSupplier', '$Weight', '$Quantity');";

	 		
?>


	

<body>

</body>

</html>
