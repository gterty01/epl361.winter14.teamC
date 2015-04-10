

<?php 
	session_start(); 
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Profile_Database</title>
</head>

<body>

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

$xristis;
if(isset($_SESSION['login_user'])){
	$xristis = $_SESSION['login_user'];
}else{
	$xristis = "Σύνδεση";
	//header("Location: login.html");
	echo "oxiiiii";
	die;
}

query1 = "SELECT * FROM `USERS_FM` WHERE Email = '$xristis'";

$result = $conn->query($query1);

while($row = $result->fetch_assoc()) {
	$_SESSION['onoma'] = $row['Name'];	
	$_SESSION['epitheto'] = $row['Surname'];	
	$_SESSION['email'] = $row['Email'];	
	$_SESSION['birth'] = $row['Birthday'];	
	$_SESSION['filo'] = $row['Sex'];	
	$_SESSION['d1'] = $row['Address1'];	
	$_SESSION['d2'] = $row['Address2'];	
	$_SESSION['poli'] = $row['City'];	
	$_SESSION['tk'] = $row['PostalCode'];	
	$_SESSION['tel2'] = $row['HomeNumber'];	
	$_SESSION['tel1'] = $row['PhoneNumber'];	
	$_SESSION['xwra'] = $row['Country'];	
	echo "all good";
}	
echo "not good";


?>
</body>

</html>
