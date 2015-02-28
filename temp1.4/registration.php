<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration</title>
</head>

<body>

<?php

echo "diskola ta pragmata";
$servername = "localhost";
$username = "cyfoodmuseum";
$password = "9m8ESxZD";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connection faild";
}
echo "Connected successfully";
if($_POST["name"] && $_POST["surname"] && $_POST["mail"] && $_POST["passwd"] && $_POST['passwdCon'] && $_POST['birth'] && $_POST['city'] && $_POST['postalCode'] && $_POST['address1'])
{

$email=$_POST['mail'];

$query = mysql_query("SELECT * FROM USERS_FM WHERE Email='$email'");

if(mysql_num_rows($query) != 0)
{
echo "Username already exists";
}
else{
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
 $filo = "";
}else{ $filo = $_POST['filo']}

if ($_POST['address2']=="Διεύθυνση 2"){
 $address2 = "";
}else{ $address2 = $_POST['filo']}

if ($_POST['country']=="Διάλεξε τη Χώρα σου"){
 $country = "";
}else{ $country = $_POST['country']}

if ($_POST['poli']=="Περιοχή"){
 $poli = "";
}else{ $poli = $_POST['poli']}


$sql="insert into USERS_FM (name,email,password)values('$_GET[regname]','$_GET[regemail]','$_GET[regpass1]')";





}






}






?>



</body>

</html>
