<?php
	session_start(); 
?>
<?php
	if (!(isset($_SESSION['login_user']))){
		header("Location: login.php");
		die;
	}
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
	$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$proionstoKalathi' ";
	$resultCheck=$conn->query($querysCheck);
	
	if($resultCheck->num_rows == 0){
		$querys ="INSERT INTO `cyfoodmuseum`.`USERACTIONFORCART` ( `UserCode`, `CodeOfProduct` ) VALUES ('$xristis','$proionstoKalathi');";
		$result=$conn->query($querys);
	}
	
	$_SESSION['alarmP']="true";
	mysqli_close($conn);
	printf("<script>location.href='prosfores.php'</script>");
	
?>
