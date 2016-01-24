<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Προσθήκη Συνταγής στη Βάση</title>
</head>

<?php
	session_start();
	$error_addSintagi = "";
	$ok_addSintagi = "";
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
	$title = $_POST['title'];
	$ilika = $_POST['ilika'];
	$Description = $_POST['description'];
	    
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check != false) {
    }else{
    	if ($imgData != ""){
	    	$error_addSintagi = "Το αρχείο που δώσατε δεν είναι εικόνα" . $check["mime"] . ".";
	        $_SESSION['error_addSintagi'] = $error_addSintagi;
	        $_SESSION['ok_addSintagi'] = " ";
	        mysqli_close($conn);
			header("Location:addSintagi.php");
			die;
		}
    }
 
	$querys ="SELECT * FROM `SINTAGI`";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		 while($row = $result->fetch_assoc()) {
		 	if ($row["Title"] == $title){
		 		$error_addSintagi = "Ο τίτλος της συνταγής υπάρχει ήδη!";
		 		$_SESSION['error_addSintagi'] = $error_addSintagi;
		 		$_SESSION['title'] = $title;
				$_SESSION['ilika'] = $ilika;
				$_SESSION['Description'] = $Description;
		 		$_SESSION['ok_addSintagi'] = " ";
		 		mysqli_close($conn);
				header("Location:addSintagi.php");
				die;
			}
		}
	}
   
	$_SESSION['error_addSintagi'] = " ";
	$sql="INSERT INTO `cyfoodmuseum`.`SINTAGI` (`Title`, `Ilika`, `Description`,  `Image`) VALUES ('$title', '$ilika', '$Description', '$imgData');";
	$lines = "UPDATE `SINTAGI` SET `Ilika` = REPLACE(`Ilika`, '\r\n', '<br>')";
	$lines2 = "UPDATE `SINTAGI` SET `Ilika` = REPLACE(`Ilika`, '\n', '<br>')";
	$lines3 = "UPDATE `SINTAGI` SET `Description` = REPLACE(`Description`, '\r\n', '<br>')";
	$lines4 = "UPDATE `SINTAGI` SET `Description` = REPLACE(`Description`, '\n', '<br>')";

	$_SESSION['title'] = "";
	$_SESSION['ilika'] = "";
	$_SESSION['Description'] = "";


	$_SESSION['ok_addSintagi'] = " ";

	if ($conn->query($sql) === TRUE){
		$ok_addSintagi = "Η προσθήκη της συνταγής ολοκληρώθηκε επιτυχώς!";		
		$_SESSION['ok_addSintagi'] = $ok_addSintagi;
		mysqli_close($conn);
		header("Location:addSintagi.php");
		$conn->query($lines);
		$conn->query($lines2);
		$conn->query($lines3);
		$conn->query($lines4);
		die;
	 }
	
	$error_addSintagi = "Η προσθήκη της συνταγής δεν ολοκληρώθηκε επιτυχώς!";
	$_SESSION['error_addSintagi'] = $error_addSintagi;
	mysqli_close($conn);
	header("Location:addSintagi.php");
	die;
?>

<body>

</body>

</html>
