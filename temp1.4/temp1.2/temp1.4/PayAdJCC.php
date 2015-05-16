<?php 
	session_start(); 
header('Cache-Control: max-age=900');
?>


<?php
$xristis;
if(isset($_SESSION['login_user'])){
	$xristis = $_SESSION['login_user'];
}else{
	$xristis = "Σύνδεση";
	header("Location: index.php");
	die;
}
if (!isset($_SESSION['arithmosproiontwn'])){
header("Location: index.php");
die;
}
if (($_SESSION['arithmosproiontwn']==0)){
header("Location: index.php");
die;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cy Food Museum Payment</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link href="Main.css" rel="stylesheet" type="text/css">

	<!-- jQuery and jQuery Mobile -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>

</head>
<body>
	<div class="gridContainer clearfix">
		
		<!-- NEW GUEST POPUP -->
		<div data-role="page" data-dialog="true" id="popup">
			<div data-role="header">
				<h1>Payment</h1>
			</div>

			<div data-role="main" class="ui-content">
			<!--?ad=<?php echo $_GET['ad'] ?>-->
				<form data-ajax="false" action="plirwmiJCC.php" method="post" enctype="multipart/form-data">
					<img src="../Media/JCCSmart.png" alt="JCCsmart.com"/>
					<p>
						In order to proceed with the payment, you have to submit &euro;<?php echo $_SESSION['sinoloplirwmis'];?> through JCCSmart and then 
						upload the receipt here(pdf file). Once the receipt is confirm, your advertisement can go live.<br>
						You can pay <a href="https://www.jccsmart.com/eBills/Invoice/Index/880" target="_blank">here</a>
					</p>
					<input name="receipt" type="file" required id="receipt" accept="application/pdf" >
					<a href="Ads.php" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b ui-icon-back ui-btn-icon-left">Cancel</a>
					<input type="submit" name="submit" data-inline="true" value="Submit Payment" data-theme="b">
				</form>
				
			</div>

			<div data-role="footer">
				<h1>Cy Food Museum</h1>
			</div>
		</div> 
		<!-- END OF NEW GUEST POPUP -->
		
	</div>
</body>
</html>