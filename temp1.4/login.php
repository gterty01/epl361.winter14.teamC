<html>
<head>
<title>Login</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "cyfoodmuseum";
$password = "9m8ESxZD";
$dbname = "cyfoodmuseum ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection faild";
}
echo "Connected successfully";


$email = $_POST['mail'];
print ($email);
$password = $_POST['password'];
print ($password);



//$sql = "SELECT * FROM 'USER_FM' WHERE Email = '" . $email . "' and Password = '" . $password "' ";
$sql ="SELECT * FROM `USER_FM` WHERE Email ='$email' AND Password ='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

    if ($count == 1){
         header("location:index.html"); /* Redirect the browser */
    }  
	else {
       echo "Λάθος email ή κωδικός! Προσπάθησε ξανά ";  
       //header('Location:login.php');

        }


exit();


?>

</body>
</html>
