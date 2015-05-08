<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Αποθήκευση στη Βάση</title>
</head>

<body>

<?php
	session_start();
	$error_slide = "";
	$ok_slide = "";

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
	print_r($_POST);
	$imgData = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
	
	$title = $_POST['title'];	
	$slide = $_SESSION['slide'];	
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check != false) {
    }else{
      	if ($imgData != ""){
    		$error_slide = "Η επεξεργασία δεν ολοκληρώθηκε επιτυχώς! Το αρχείο που δώσατε δεν είναι εικόνα" . $check["mime"] . ".";
        	$_SESSION['error_slide'] = $error_slide ;
       	 	$_SESSION['ok_slide'] = " ";
       	 	mysqli_close($conn);
			header("Location:addSlide_select.php");
			die;
		}
	}
	
    if ($imgData == ""){
		$querys = "SELECT * FROM `SLIDE` WHERE Code = '$slide'" ;
		$result=$conn->query($querys);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$imgData = $row['SlideImage'];
				$_SESSION['error_slide'] = " ";
				$sql="UPDATE `SLIDE` SET SlideTitle = '$title' WHERE Code='$slide'";
				$_SESSION['ok_slide'] = " ";
				if ($conn->query($sql) === TRUE){
					$ok_slide = "Η επεξεργασία του slide ολοκληρώθηκε επιτυχώς!";		
					$_SESSION['ok_slide'] = $ok_slide;
					mysqli_close($conn);
					header("Location:addSlide_select.php");
					die;
	 			}

			}
		}
	}	
  
	$_SESSION['error_slide'] = " ";
	$sql="UPDATE `SLIDE` SET SlideTitle = '$title', SlideImage = '$imgData' WHERE Code='$slide'";
	$_SESSION['ok_slide'] = " ";
	if ($conn->query($sql) === TRUE){
		$ok_slide = "Η επεξεργασία του slide ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_slide'] = $ok_slide;
		mysqli_close($conn);
		header("Location:addSlide_select.php");
		die;
	 }
	
	$error_slide = "Η επεξεργασία του slide δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_slide'] = $error_slide;
	mysqli_close($conn);
	header("Location:addSlide_select.php");
	die;

?>
</body>

</html>
