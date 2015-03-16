<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
    $products = $_POST['Product'];
    if(isset($_POST['Product'])) {
    	echo "You chose the following color(s): <br>";
   		foreach ($products as $p){
    		echo $p."<br />";
   		 }
    } // end brace for if(isset

    else {

	    echo "You did not choose a color.";

    }

?>
</body>

</html>
