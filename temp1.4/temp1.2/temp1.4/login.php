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

$conn = mysql_connect($servername, $username, $password) or die ( "Could not connect: " . mysql_error() );
$database = mysql_select_db($dbname, $conn) or die ("Could not select database: " . mysql_error() );

$email = $_POST['email'];
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
