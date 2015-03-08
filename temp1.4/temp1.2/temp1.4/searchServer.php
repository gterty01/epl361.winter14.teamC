<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php

echo "diskola ta pragmata";
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

if ($_POST["search"]){
	$timi = $_POST['search'];
	if ($timi!="Αναζήτηση"){
		$querys ="SELECT `Code` FROM `PRODUCT` where `Name` LIKE '%$timi%'";
		$result=$conn->query($querys);
		
		$queryDes ="SELECT `Code` FROM `PRODUCT` where `Description` LIKE '%$timi%'";
		$resultDes=$conn->query($queryDes);

		$querySup ="SELECT `Code` FROM `PRODUCT`, `SUPPLIER` where  `CodeOfSupplier` = `SupplierNumber` AND `CompanyName` LIKE '%$timi%'";
		$resultSup=$conn->query($querySup);

		$queryCat="SELECT `Code`FROM `PRODUCT` , `CATEGORY`WHERE `CodeOfCategory` = `CodeCat`AND `NameCat` LIKE '%$timi%'";
		$resultCat=$conn->query($queryCat);

	}
}










?>
</body>

</html>
