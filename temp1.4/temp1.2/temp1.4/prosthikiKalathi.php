<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php 
session_start(); 
?>

<?php
parse_url(file_get_contents("php://input"), $_POST);




$servername = "localhost";
$username = "cyfoodmuseum";
$password = "9m8ESxZD";
$dbname = "cyfoodmuseum";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection faild";
}

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
} else {
    //printf("Current character set: %s\n", $conn->character_set_name());
}//die;
$proionstoKalathi=$_POST['idproiontos'];
$xristis=$_SESSION['login_user'];
echo $xristis;
$querysCheck ="SELECT FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$proionstoKalathi' ";
$resultCheck=$conn->query($querysCheck);

if($resultCheck->num_rows == 0){
$querys ="INSERT INTO `cyfoodmuseum`.`USERACTIONFORCART` ( `UserCode`, `CodeOfProduct` ) VALUES ('$xristis','$proionstoKalathi');";
$result=$conn->query($querys);
}


?>
 
</body>

</html>
