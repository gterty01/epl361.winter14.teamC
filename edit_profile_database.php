<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Αποθήκευση στη Βάση</title>
</head>

<body>

<?php
	session_start();
	$error_edit_profile = "";
	$ok_edit_profile = "";

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
		
	$Name = $_POST['name'];	
	$Surname = $_POST['surname'];
	$Birth = $_POST['birth'];
	$Sex = $_POST['filo'];
	$PostalCode = $_POST['postalCode'];
	$Address1 = $_POST['address1'];
	$Address2 =$_POST['address2'];
	$Country= $_POST['country'];
	$City =  $_POST['city'];
	$PhoneNumber =$_POST['tel1'];
	$HomeNumber = $_POST['tel2'];
    $email = $_SESSION['login_user'];

	if ((preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['name']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['surname']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['city']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['postalCode']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['birth']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>\.\?\\\]/', $_POST['address1']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>\.\?\\\]/', $_POST['address2']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['poli']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['codeC1']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['codeC2']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel1']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel2']))){
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['name']))){
			$_SESSION['onoma'] = $_POST["name"];
		}
			
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['surname']))){
			$_SESSION['epitheto']= $_POST['surname'];
		}
			
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['birth']))){
			$_SESSION['birth'] = $_POST['birth'];
		}
			
		$_SESSION['filo']=$_POST['filo'];
			
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['postalCode']))){
			$_SESSION['tk'] = $_POST['postalCode'];
		}
			
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['address1']))){
			$_SESSION['d1']= $_POST['address1'];
		}
								
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['address2']))){
			$_SESSION['d2']=$_POST['address2'];
		}
		
		$_SESSION['xwra']=$_POST['country'];
			
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['city']))){
			$_SESSION['poli'] = $_POST['city'];
		}

		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel1']))){
			$_SESSION['tel1']=$_POST['tel1'];
		}
		if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel2']))){
			$_SESSION['tel2']=$_POST['tel2'];
		}

	 	header("Location: edit_profile.php?item=1");
	 	die;
	}	
	
	$_SESSION['onoma'] = $Name;
	$_SESSION['epitheto'] = $Surname;
	$_SESSION['birth'] = $Birth;
	$_SESSION['filo'] = $Sex;
	$_SESSION['tel1'] = $PhoneNumber;
	$_SESSION['tel2'] = $HomeNumber;
	$_SESSION['d1'] = $Address1;
	$_SESSION['d2'] = $Address2;
	$_SESSION['tk'] = $PostalCode;
	$_SESSION['xwra'] = $Country;
	$_SESSION['poli'] = $City;


	$_SESSION['error_edit_profile'] = " ";
	$sql="UPDATE `USERS_FM` SET Name='$Name', Surname ='$Surname', Birthday = '$Birth', Sex = '$Sex', Address1 = '$Address1', Address2 = '$Address2', City = '$City', Country = '$Country', PostalCode = '$PostalCode', HomeNumber = '$HomeNumber', PhoneNumber = '$PhoneNumber' WHERE Email='$email'";
	
	$_SESSION['ok_edit_profile'] = " ";
	if ($conn->query($sql) === TRUE){
		$ok_edit_profile = "Η επεξεργασία των στοιχείων ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_edit_profile'] = $ok_edit_profile;
		mysqli_close($conn);
		header("Location:profile.php");
		die;
	 }
	$error_edit_profile = "Η επεξεργασία των στοιχειων δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_edit_profile'] = $error_edit_profile;
	mysqli_close($conn);
	header("Location:profile.php");
	die;

?>
</body>

</html>
