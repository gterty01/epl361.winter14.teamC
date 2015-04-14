<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Διαγραφή Κατηγορίας</title>
</head>

<body>
<?php

	$error_remove_category = "";
	$ok_remove_category = "";

	session_start();
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
	parse_url(file_get_contents("php://input"), $_POST);	
	if (!$conn->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $conn->error);
    	die;
	}

    $Categories = $_POST['Category'];
    
    if(isset($_POST['Category'])) {
   		foreach ($Categories as $p){
    		echo $p."<br />";
    		$sql = "DELETE FROM `CATEGORY` WHERE CodeCat = '$p' ";
    		echo "<br />";
    		
    		if ($conn->query($sql) === TRUE) {
    			$ok_remove_category = "Επιτυχής διαγραφή των κατηγοριών!";
		 		$_SESSION['error_remove_category'] = " ";
		 		$_SESSION['ok_remove_category'] = $ok_remove_category;
		
    			
			} else {
    			$error_remove_category = "Δεν έγινε η διαγραφή των κατηγοριών! Ξαναπροσπαθήστε!";
		 		$_SESSION['error_remove_category'] = $error_remove_category;
		 		$_SESSION['ok_remove_category'] = " ";
		 		header("Location:removeCategory.php");
		 		die;
			}			
   		 }
    } // end brace for if(isset

    else {

    		$error_remove_category = "Δεν επέλεξες κατηγορία!";
		 	$_SESSION['error_remove_category'] = $error_remove_category;
		 	header("Location:removeCategory.php");

    }
 		header("Location:removeCategory.php");
		die;
?>
</body>

</html>
