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


echo "something here"

?>



</body>

</html>
