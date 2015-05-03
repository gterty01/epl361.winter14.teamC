<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Αποθήκευση στη Βάση</title>
</head>

<body>

<?php
	session_start();
	$error_edit_category = "";
	$ok_edit_category = "";

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
	
	if (!$conn->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $conn->error);
    	die;
	}
	
	parse_url(file_get_contents("php://input"), $_POST);	

	$imgData = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
	
	$code = $_SESSION['category'];	
	$CategoryName = $_POST['name'];
	$Description = $_POST['description'];
	$SubCategory = $_POST['iperkatigoria'];

	
	if ($SubCategory == 0){
		$querys = "SELECT * FROM `CATEGORY` WHERE CodeCat = $code" ;
		$result=$conn->query($querys);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$SubCategory = $row['SubCategory'];
			}
		}
	}
     
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check != false) {
    }else{
      	if ($imgData != ""){
    		$error_edit_category = "Το αρχείο που δώσατε δεν είναι εικόνα" . $check["mime"] . ".";
        	$_SESSION['error_edit_category'] = $error_edit_category;
       	 	$_SESSION['ok_edit_category'] = " ";
			header("Location:editCategory.php");
			die;
		}
	}
        if ($imgData == ""){
		$querys = "SELECT * FROM `CATEGORY` WHERE CodeCat = $code" ;
		$result=$conn->query($querys);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$imgData = $_POST['imageCat'];
				$_SESSION['error_edit_category'] = " ";
				$sql="UPDATE `CATEGORY` SET NameCat ='$CategoryName', DescriptionCat ='$Description', SubCategory = '$SubCategory' WHERE CodeCat='$code'";
				$_SESSION['ok_edit_category'] = " ";
				if ($conn->query($sql) === TRUE){
					$ok_edit_category = "Η επεξεργασία της κατηγορίας ολοκληρώθηκε επιτυχώς!";		
					$_SESSION['ok_edit_category'] = $ok_edit_category;
					header("Location:editCategory_selectCategory.php");
					die;
				 }

			}
		}
	}	

	$_SESSION['category'] = $row["CodeCat"];
	$_SESSION['Cname'] = $row["CatName"];
	$_SESSION['Description']= $row["DescriptionCat"];
	$_SESSION['SubCategory'] = $row['SubCategory'];
	$_SESSION['image'] = $row['imageCat'];

	$_SESSION['error_edit_category'] = " ";
	$sql="UPDATE `CATEGORY` SET NameCat ='$CategoryName', DescriptionCat ='$Description', SubCategory = '$SubCategory', imageCat = '$imgData' WHERE CodeCat='$code'";
	$_SESSION['ok_edit_category'] = " ";
	if ($conn->query($sql) === TRUE){
		$ok_edit_category = "Η επεξεργασία της κατηγορίας ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_edit_category'] = $ok_edit_category;
		header("Location:editCategory_selectCategory.php");
		die;
	 }
	
	$error_edit_category = "Η επεξεργασία της κατηγορίας δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_edit_category'] = $error_edit_category;
	header("Location:editCategory.php");
	die;

?>
</body>

</html>
