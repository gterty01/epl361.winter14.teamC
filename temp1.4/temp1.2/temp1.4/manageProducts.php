<html>

<head>
<title>ManageProducts</title>
</head>
<body>

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
print_r($_POST); 
//die;

/*$name2=($_POST['name']);
echo $name2;

	$email=$_POST['mail'];
	echo $email;
	
		echo "Here";*/


if($_POST["name"] && $_POST["surname"] && $_POST["mail"] && $_POST["passwd"] && $_POST['passwdCon'] && $_POST['birth'] && $_POST['city'] && $_POST['postalCode'] && $_POST['address1'])
{
	$querys ="SELECT * FROM `USERS_FM`";
	$result=$conn->query($querys);
	

	if($result->num_rows > 0)
	{
	while ($row = $result->fetch_assoc()){
		if ($row["Name"] == $_POST["name"]){
		
		}
	}
	else{
	
	echo "Paei na valei ta dedomena sti vasi";
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
	
	if ($_POST['filo']=="Ξ¦ΟΞ»ΞΏ"){
	 $filo = "null";
	}else{ $filo = $_POST['filo'];}
	
	if ($_POST['address2']=="Ξ”ΞΉΞµΟΞΈΟ…Ξ½ΟƒΞ· 2"){
	 $address2 = "null";
	}else{ $address2 = $_POST['address2'];}
	
	if ($_POST['country']=="Ξ”ΞΉΞ¬Ξ»ΞµΞΎΞµ Ο„Ξ· Ξ§ΟΟΞ± ΟƒΞΏΟ…"){
	 $country = "null";
	}else{ $country = $_POST['country'];}
	
	if ($_POST['poli']=="Ξ ΞµΟΞΉΞΏΟ‡Ξ®"){
	 $poli = "null";
	}else{ $poli = $_POST['poli'];}
	
	$phone1= $codeC1." ".$tel1;
	$phone2= $codeC2." ".$tel2;
	echo "Prin to insert";
	$thisdate = date("Y-m-d");
	echo $thisdate;
	//$sql="INSERT INTO `cyfoodmuseum`.`USERS_FM` (`Password`, `Name`, `Surname`, `Email`, `Birthday`, `Sex`, `Address1`, `Address2`, `City`, `PostalCode`, `HomeNumber`, `PhoneNumber`, `Country`, `DateOfAccountCreation`) VALUES ('123456','Evanthia','Tingiri', 'evtingiri@gmail.com', '1994-01-12', 'ΞΞ·Ξ»Ο…', 'ΞΞ±ΟΞΊΞΏΟ‚ Ξ”ΟΞ±ΞΊΞΏΟ‚', 'Ξ“ΟΞ·Ξ³ΞΏΟΞ· Ξ‘Ο…ΞΎΞµΞ½Ο„Ξ―ΞΏΟ…', 'Ξ›ΞµΟ…ΞΊΟ‰ΟƒΞΉΞ±', '2560', '0035799756303', '0035799756614', 'ΞΟΟ€ΟΞΏΟ‚', '2015-3-1');";

	$sql="INSERT INTO `cyfoodmuseum`.`USERS_FM` (`Password`, `Name`, `Surname`, `Email`, `Birthday`, `Sex`, `Address1`, `Address2`, `City`, `PostalCode`, `HomeNumber`, `PhoneNumber`, `Country`, `DateOfAccountCreation`) VALUES ('$passwd','$name','$surname', '$email', '$birth', '$filo', '$address1', '$address2', '$city', '$postalCode', '$phone2', '$phone1', '$country', '$thisdate');";
	
	$result=mysql_query($sql,$conn) or die("No insert");
	echo "<h1>you have registered sucessfully</h1>";
	
	echo "<a href='index.php'>go to login page</a>";
	}
	
}

?>

</body>

</html>
