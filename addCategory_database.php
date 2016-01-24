<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Προσθήκη κατηγορίας στη Βάση</title>
</head>

<?php
	session_start();
	$error_add_category = "";
	$ok_add_category = "";
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
	$CategoryName = $_POST['name'];
	$iperkatigoria = $_POST['iperkatigoria'];
	if ($_POST['description']=="Περιγραφή Κατηγορίας"){
		$Description = "";
	}else{$Description = $_POST['description'];}

    echo $iperkatigoria; 
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check != false) {
    }else{
    	if ($imgData != ""){
	    	$error_add_category = "Το αρχείο που δώσατε δεν είναι εικόνα" . $check["mime"] . ".";
	        $_SESSION['error_add_category'] = $error_add_category;
	        $_SESSION['ok_add_category'] = " ";
			mysqli_close($conn);
			header("Location:addCategory.php");
			die;
		}
    }
    
	$querys ="SELECT * FROM `CATEGORY`";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		 while($row = $result->fetch_assoc()) {
		 	if ($row["NameCat"]==$_POST['name']){
		 		$error_add_category = "Η κατηγορία υπάρχει ήδη!";
		 		$_SESSION['error_add_category'] = $error_add_category;
		 		$_SESSION['ok_add_category'] = " ";
		 		mysqli_close($conn);
		 		header("Location:addCategory.php");
				die;
			}
		}
	}
	
	$_SESSION['error_add_category'] = " ";
	$sql="INSERT INTO `cyfoodmuseum`.`CATEGORY`(`NameCat`, `DescriptionCat`, `SubCategory`, `imageCat`) VALUES ('$CategoryName', '$Description', '$iperkatigoria', '$imgData' );";
	$_SESSION['ok_add_category'] = " ";
	
	if ($conn->query($sql) === TRUE){
		$ok_add_category = "Η προσθήκη της κατηγορίας ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_add_category'] = $ok_add_category;
		mysqli_close($conn);
		header("Location:addCategory.php");
		die;
	 }
	
	$error_add_category = "Η προσθήκη της κατηγορίας δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_add_category'] = $error_add_category;
	mysqli_close($conn);
	header("Location:addCategory.php");
	die;
?>

<body>

</body>

</html>
