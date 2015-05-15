<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration</title>
</head>

<body>
<?php 
 	session_start();
?>
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
	
	if (!$conn->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $conn->error);
	} else {
	   // printf("Current character set: %s\n", $conn->character_set_name());
	}//die;
		
	if($_POST["name"] && $_POST["surname"] && $_POST["mail"] && $_POST["passwd"] && $_POST['passwdCon'] && $_POST['birth'] && $_POST['city'] && $_POST['postalCode'] && $_POST['address1'])
	{
		$querys ="SELECT * FROM `USERS_FM`";
		$result=$conn->query($querys);
		
		$var="no";
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
			 	if ($row["Email"]==$_POST['mail']){
			 			 		
			 		$_SESSION['onoma'] = $_POST["name"];
					$_SESSION['epitheto']= $_POST['surname'];
					
					$_SESSION['gen'] = $_POST['birth'];
					$_SESSION['city'] = $_POST['city'];
					$_SESSION['tk'] = $_POST['postalCode'];
					$_SESSION['d1']= $_POST['address1'];
					
					$_SESSION['filo']=$_POST['filo'];
					$_SESSION['d2']=$_POST['address2'];
					$_SESSION['xwra']=$_POST['country'];
					$_SESSION['poli']=$_POST['poli'];
					$_SESSION['codeC1']=$_POST['codeC1'];
					$_SESSION['codeC2']=$_POST['codeC2'];
					$_SESSION['tel1']=$_POST['tel1'];
					$_SESSION['tel2']=$_POST['tel2'];
					mysqli_close($conn);
			 		header("Location: register2.php?item=0");
			 		die;
			 		$var="yes";
			 	}
		    }
		}
		
		$admins ="SELECT * FROM `ADMINS`";
		$result_admins = $conn->query($admins);
			
		if($result_admins->num_rows > 0){
			while($rowAdmins = $result_admins->fetch_assoc()) {
			 	if ($rowAdmins["Email"]==$_POST['mail']){
			 			 		
			 		$_SESSION['onoma'] = $_POST["name"];
					$_SESSION['epitheto']= $_POST['surname'];
					
					$_SESSION['gen'] = $_POST['birth'];
					$_SESSION['city'] = $_POST['city'];
					$_SESSION['tk'] = $_POST['postalCode'];
					$_SESSION['d1']= $_POST['address1'];
					
					$_SESSION['filo']=$_POST['filo'];
					$_SESSION['d2']=$_POST['address2'];
					$_SESSION['xwra']=$_POST['country'];
					$_SESSION['poli']=$_POST['poli'];
					$_SESSION['codeC1']=$_POST['codeC1'];
					$_SESSION['codeC2']=$_POST['codeC2'];
					$_SESSION['tel1']=$_POST['tel1'];
					$_SESSION['tel2']=$_POST['tel2'];
					mysqli_close($conn);
			 		header("Location: register2.php?item=0");
			 		die;
			 	}
		    }
		}

		if($_POST["captcha_input"] != $_SESSION["captcha_code"]){
					$_SESSION['onoma'] = $_POST["name"];
					$_SESSION['epitheto']= $_POST['surname'];
					
					$_SESSION['gen'] = $_POST['birth'];
					$_SESSION['city'] = $_POST['city'];
					$_SESSION['tk'] = $_POST['postalCode'];
					$_SESSION['d1']= $_POST['address1'];
					
					$_SESSION['filo']=$_POST['filo'];
					$_SESSION['d2']=$_POST['address2'];
					$_SESSION['xwra']=$_POST['country'];
					$_SESSION['poli']=$_POST['poli'];
					$_SESSION['codeC1']=$_POST['codeC1'];
					$_SESSION['codeC2']=$_POST['codeC2'];
					$_SESSION['tel1']=$_POST['tel1'];
					$_SESSION['tel2']=$_POST['tel2'];

			mysqli_close($conn);
			header("Location: register2.php?item=1");
			die;		
		}
		if ((preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['name']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['surname']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['city']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['postalCode']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['birth']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['address1']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['address2']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['poli']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['codeC1']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['codeC2']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel1']))||(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel2']))){
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['name']))){
					$_SESSION['onoma'] = $_POST["name"];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['surname']))){
					$_SESSION['epitheto']= $_POST['surname'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['birth']))){
					$_SESSION['gen'] = $_POST['birth'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['city']))){
					$_SESSION['city'] = $_POST['city'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['postalCode']))){
					$_SESSION['tk'] = $_POST['postalCode'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['address1']))){
					$_SESSION['d1']= $_POST['address1'];
					}
					
					$_SESSION['filo']=$_POST['filo'];
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['address2']))){
					$_SESSION['d2']=$_POST['address2'];
					}
					$_SESSION['xwra']=$_POST['country'];
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['poli']))){
					$_SESSION['poli']=$_POST['poli'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['codeC1']))){
					$_SESSION['codeC1']=$_POST['codeC1'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['codeC2']))){
					$_SESSION['codeC2']=$_POST['codeC2'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel1']))){
					$_SESSION['tel1']=$_POST['tel1'];
					}
					if (!(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['tel2']))){
					$_SESSION['tel2']=$_POST['tel2'];
					}

		 	header("Location: register2.php?item=2");
		 	die;
		
		}
		
		if ($var=="no"){
		
			$email = $_POST['mail'];
			$name = $_POST["name"];
			$surname = $_POST['surname'];
			$passwd = $_POST['passwd'];
			$passwdCon = $_POST['passwdCon'];
			$birth = $_POST['birth'];
			$city = $_POST['city'];
			$postalCode = $_POST['postalCode'];
			$address1 = $_POST['address1'];
			
			$filo=$_POST['filo'];
			$address2=$_POST['address2'];
			$country=$_POST['country'];
			$perioxi=$_POST['poli'];
			$codeCi=$_POST['codeC1'];
			$codeC2=$_POST['codeC2'];
			$tel1=$_POST['tel1'];
			$tel2=$_POST['tel2'];
			
			if ($_POST['filo']=="Φύλο"){
				$filo = "null";
			}else{ $filo = $_POST['filo'];}
			
			if ($_POST['address2']=="Διεύθυνση 2"){
				$address2 = "";
			}else{ $address2 = $_POST['address2'];}
			
			if ($_POST['country']=="Διάλεξε τη Χώρα σου"){
				$country = "null";
			}else{ $country = $_POST['country'];}
			
			if ($_POST['poli']=="Περιοχή"){
				$poli = "null";
			}else{ $poli = $_POST['poli'];}
				
			$phone1= $codeC1." ".$tel1;
			$phone2= $codeC2." ".$tel2;
			
			$thisdate = date("Y-m-d");
		
			$encrypted=md5($passwd);

			$sql="INSERT INTO `cyfoodmuseum`.`USERS_FM` (`Password`, `Name`, `Surname`, `Email`, `Birthday`, `Sex`, `Address1`, `Address2`, `City`, `PostalCode`, `HomeNumber`, `PhoneNumber`, `Country`, `DateOfAccountCreation`) VALUES ('$encrypted','$name','$surname', '$email', '$birth', '$filo', '$address1', '$address2', '$city', '$postalCode', '$phone2', '$phone1', '$country', '$thisdate');";
			if ($conn->query($sql) === TRUE){
				echo "new record created";
				$_SESSION['email'] = $email;
				mysqli_close($conn);
				header("Location: sendEmail.php");
				die;
			} else{
				echo "Error: " . $sql . "<br>" . $conn->error;
				mysqli_close($conn);
				header("Location: register.php");
				alarm("Παρακαλούμε να επαναλάβετε την εγγραφή σας λόγω προβλήματος που δημιουργήθηκε με τη Βάση Δεδομένων");
			}

			echo "<h1>you have registered sucessfully</h1>";
			mysqli_close($conn);
			echo "<a href='index.php'>go to login page</a>";
		}
		
	}
	
?>

</body>

</html>
