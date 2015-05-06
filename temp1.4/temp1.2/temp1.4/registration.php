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

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
} else {
   // printf("Current character set: %s\n", $conn->character_set_name());
}//die;

/*$name2=($_POST['name']);
echo $name2;

	$email=$_POST['mail'];
	echo $email;
	
		echo "Here";*/

if($_POST["name"] && $_POST["surname"] && $_POST["mail"] && $_POST["passwd"] && $_POST['passwdCon'] && $_POST['birth'] && $_POST['city'] && $_POST['postalCode'] && $_POST['address1'])
{
	echo "Here";
	$querys ="SELECT * FROM `USERS_FM`";
	$result=$conn->query($querys);
	
		echo "Here";
	$var="no";

	if($result->num_rows > 0)
	{
	 while($row = $result->fetch_assoc()) {
	 
	 	if ($row["Email"]==$_POST['mail']){
	 		echo "Username already exists";
	 		
	 		
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

	 		header("Location: register2.php?item=0");
			
	 		$var="yes";
	 	}
    }
	}
		if($_POST["captcha_input"] != $_SESSION["captcha_code"]){
				header("Location: register2.php?item=1");
				die();		
	
		}
	
	if ($var=="no"){
	
	echo "Paei na valei ta dedomena sti vasi";
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
	echo "Prin to insert";
	$thisdate = date("Y-m-d");
	echo $thisdate;
	//$sql="INSERT INTO `cyfoodmuseum`.`USERS_FM` (`Password`, `Name`, `Surname`, `Email`, `Birthday`, `Sex`, `Address1`, `Address2`, `City`, `PostalCode`, `HomeNumber`, `PhoneNumber`, `Country`, `DateOfAccountCreation`) VALUES ('123456','Evanthia','Tingiri', 'evtingiri@gmail.com', '1994-01-12', 'Θηλυ', 'Μαρκος Δρακος', 'Γρηγορη Αυξεντίου', 'Λευκωσια', '2560', '0035799756303', '0035799756614', 'Κύπρος', '2015-3-1');";

	$encrypted=md5($passwd);
	//$sql="INSERT INTO `cyfoodmuseum`.`USERS_FM` (`Password`, `Name`, `Surname`, `Email`, `Birthday`, `Sex`, `Address1`, `Address2`, `City`, `PostalCode`, `HomeNumber`, `PhoneNumber`, `Country`, `DateOfAccountCreation`) VALUES ('$passwd','$name','$surname', '$email', '$birth', '$filo', '$address1', '$address2', '$city', '$postalCode', '$phone2', '$phone1', '$country', '$thisdate');";
	$sql="INSERT INTO `cyfoodmuseum`.`USERS_FM` (`Password`, `Name`, `Surname`, `Email`, `Birthday`, `Sex`, `Address1`, `Address2`, `City`, `PostalCode`, `HomeNumber`, `PhoneNumber`, `Country`, `DateOfAccountCreation`) VALUES ('$encrypted','$name','$surname', '$email', '$birth', '$filo', '$address1', '$address2', '$city', '$postalCode', '$phone2', '$phone1', '$country', '$thisdate');";
	if ($conn->query($sql) === TRUE){
		echo "new record created";
		$_SESSION['email'] = $email;
		header("Location: sendEmail.php");
		die;

	} else{
		echo "Error: " . $sql . "<br>" . $conn->error;
		header("Location: register.html");
		alarm("Παρακαλούμε να επαναλάβετε την εγγραφή σας λόγω προβλήματος που δημιουργήθηκε με τη Βάση Δεδομένων");

	}
	
	
	echo "<h1>you have registered sucessfully</h1>";
	echo "<a href='index.php'>go to login page</a>";
	}
	
}

?>

</body>

</html>
