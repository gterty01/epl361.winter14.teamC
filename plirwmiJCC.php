<?php 
	session_start(); 
header('Cache-Control: max-age=900');?>


<?php
$xristis;
if(isset($_SESSION['login_user']))
{
$xristis = $_SESSION['login_user'];
}
else
{
$xristis = "Σύνδεση";
header("Location: login.php");
die;
}

if(!(isset($_SESSION['arithmosproiontwn']))){
header("Location: index.php");
die;

}


?>



<!DOCTYPE HTML>
<html>
<head>
<title>Ολοκλήρωση Παραγγελίας</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>

<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}



</script>
    	
 <style type="text/css">
.auto-style1 {
	width: 90%;
	-moz-transition: all .2s linear;
	-webkit-transition: all .2s linear;
	-o-transition: all .2s linear;
	-ms-transition: all .2s linear;
	margin: 0 auto;
}
.auto-style2 {
	color: #FFFFFF;
}



 </style>

</head>

<body>


<?php
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
parse_url(file_get_contents("php://input"), $_POST);
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
} else {
    //printf("Current character set: %s\n", $conn->character_set_name());
}//die;
$xristis=$_SESSION['login_user'];
$antikeimena=$_SESSION['arithmosproiontwn'];
$address=$_SESSION['addressSent'];
$postalCode=$_SESSION['postalSent'];
$city=$_SESSION['citySent'];
$country=$_SESSION['country'];
$name=$_SESSION['nameSent'];
$surn=$_SESSION['surnSent'];
$num=0; 
$sinolikovaros=0;
while($num<$antikeimena){

	$varos=$_SESSION["varosAntikeimenou$num"];

	$sinolikovaros=$sinolikovaros+$varos;

		
	$num=$num+1;
}
$sinolo=$_SESSION['sinoloplirwmis'];
$thisdate = date("Y-m-d");
$rec="";
$antikat="ΟΧΙ";
$sql="INSERT INTO `cyfoodmuseum`.`ORDERS` (`userEmail`, `DateCreated`, `Price`, `Completed`, `Canceled`, `Weight`, `AddressSent`, `citySent`, `postalSent`, `countrySent`, `receipts`, `antikataboli`) VALUES ('$xristis','$thisdate','$sinolo','0', '0', '$sinolikovaros', '$address', '$city', '$postalCode',  '$country', '$rec', '$antikat');";
$conn->query($sql);
$erwtima = "SELECT * FROM `ORDERS` WHERE `userEmail`='$xristis' AND `postalSent`='$postalCode'  AND  `citySent`='$city'AND `Price`=$sinolo AND `countrySent`='$country' AND `AddressSent`='$address' AND `Completed`='0' AND `Canceled`='0' AND `Weight`='$sinolikovaros' AND `DateCreated`='$thisdate' AND `antikataboli`='$antikat'";
$result=$conn->query($erwtima);

$max=-1;
$numrows=$result->num_rows;
if($result->num_rows > 0){
	while ($line = $result->fetch_assoc()){
		$code=$line['Code'];
		if ($code>$max){
			$max=$code;
		}
	}
}
//$max;
 $thisdir = getcwd();
 $folder=$thisdir."/Receipts";
	//$folder = 
	if (!file_exists($folder)) {
	$old = umask(0); 
		if(!mkdir($folder, 0777, true)){
		    echo "ERROR: Fail to create the folder..."; 
		 die;
		} 
		umask($old); 
	}
	
	// Transfer Receipt
	if (isset($_FILES['receipt']) && $_FILES['receipt']['size']>0){
		$name = $_FILES['receipt']['name'];
		$temp = $_FILES['receipt']['tmp_name'];
		$type = $_FILES['receipt']['type'];
		$size = $_FILES['receipt']['size'];
		// Check Type
		if ($type == "application/pdf"){
			// Check Size
			if ($size <= 1000000){
				// Upload File
				$targetname=$folder."/Receipt$max.pdf";
				move_uploaded_file($temp,$folder."/Receipt$max.pdf");
				chmod($targetname, 0444);
				$sql="UPDATE  `cyfoodmuseum`.`ORDERS` SET `receipts`='$targetname'  WHERE `userEmail`='$xristis' AND `Code`='$max' AND `postalSent`='$postalCode'  AND  `citySent`='$city'AND `Price`='$sinolo' AND `countrySent`='$country' AND `AddressSent`='$address' AND `Completed`='0' AND `Canceled`='0' AND `Weight`='$sinolikovaros' AND `DateCreated`='$thisdate' ";
				if (!mysqli_query($conn,$sql)){
					$_SESSION['Error'] = "Unable to upload receipt!";
					header('location:kalathiProionta.php');
					die;
				}
			}else{
				$_SESSION['Error'] = "Receipt's size is too big!";
				header('location:kalathiProionta.php');
				die;
			}
		}else{
			$_SESSION['Error'] = "The receipt must be a .pdf format!";
				header('location:kalathiProionta.php');
				die;
		}
	}
	//mysqli_close($con);

























$num=0;
while($num<$antikeimena){
$kodikos=$_SESSION["kodikos$num"];
$posotita=$_SESSION["posotita$num"];
$er="INSERT INTO `cyfoodmuseum`.`SERIESOFORDERS` (`CodeOfOrder`, `CodeOfProduct`, `Quantity`) VALUES ('$max','$kodikos','$posotita');";

$avail="SELECT * FROM `PRODUCT` WHERE `Code`='$kodikos'";
	if ($conn->query($er) === TRUE){
		$kalathi="DELETE FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' and `CodeOfProduct`='$kodikos' ;";
		$conn->query($kalathi);
		$resultavail=$conn->query($avail);
		 $line = $resultavail->fetch_assoc();

		 $diathesima=$line['Availability'];
		 $neadiathesima=$diathesima-$posotita;									
		$allagi = "UPDATE `PRODUCT` SET `Availability`='$neadiathesima' WHERE `Code`='$kodikos';";
		 $conn->query($allagi);												
		 echo $conn->error;
		 
	}else{
	echo "Δεν πραγματοποιήθηκε η παραγγελία, επαναλάβετε τη διαδικασία";
	
	}
	$num=$num+1;
}
$to=$xristis;
$message = "Σας ενημερώνουμε ότι η παραγγελία σας και τα απαραίτητα στοιχεία πληρωμής έχουν καταχωρηθεί στο σύστημά μας. \r\n Αν υπάρξει κάποιο πρόβλημα με τα στοιχεία πληρωμής σας, θα σας ειδοποιήσουμε άμεσα με email. \r\n Ευχαριστούμε CyFoodMuseum.";
$subject = 'Παραγγελία από CyFoodMuseum';
//$message = wordwrap($msg, 70, "\r\n");
//mail($to, $subject, $message);
if(@mail($to, $subject, $message))
{

	$valueofmail=perfetto;
}else{
  echo "Mail Not Sent";
}
?>
   <div class="header-top">
	   <div class="wrap"> 
			<div class="header-top-left">
			    				    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Νόμισμα :</option>
							<option value="1">€ Ευρώ</option>
						</select>
   				    </div>
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
				
				<?php 
				if(isset($_SESSION['login_user'])){
					$xristis=$_SESSION['login_user'];
					echo "<li class='active'><a href='profile.php'>$xristis</a></li> |";
					echo "<li><a href='kalathiProionta.php'>Καλάθι/Αγορά</a></li> |";
					echo "<li><a href='showOrdersOfUser.php'>Παραγγελίες</a></li> |";
					echo "<li><a href='profile.php'>Προφίλ</a></li> |";
					echo "<li><a href='logout.php'>Αποσύνδεση</a></li>";

				}else{
				if(isset($_SESSION['login_admin'])){
					echo "<li><a href='logout.php'>Αποσύνδεση</a></li>";

				}else{
					echo "<li><a href='login.php'>Σύνδεση</a></li> |";
					echo "<li><a href='register.php'>Εγγραφή</a></li>";
				}

				}				
				
				?>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap" style="width: 98%">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php">
					<img src="images/trofima.jpg"></a>
				</div>
				<div class="menu">
			</div>
		</div>
	   <div class="header-bottom-right" style="width: 34%">
         <div class="search">	
            <form id='anazitisi' method="POST" action="searchServer.php" accept-charset="UTF-8"> <!--method='post'-->
  
				<input type="text" name="search" id="search" class="auto-style4" value="Αναζήτηση" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Αναζήτηση';}" style="width: 159px">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				
				<div id="response"> </div>
				</form>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
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
								if (!$conn->set_charset("utf8")) {
								    printf("Error loading character set utf8: %s\n", $conn->error);
								} else {
								    //printf("Current character set: %s\n", $conn->character_set_name());
								}//die;

			if(isset($_SESSION['login_user'])){
			    $xristis=$_SESSION['login_user'];
			
				$posotitakalathi="SELECT * FROM `USERACTIONFORCART` where `UserCode`='$xristis'";
				$queryCart=$conn->query($posotitakalathi);
				if($queryCart->num_rows > 0){
				echo "<li><a class='active-icon c2' href='kalathiProionta.php'> </a>";
				echo "<ul class='sub-icon1 list'>";
				echo 	"<li><h3>$queryCart->num_rows Προϊόντα</h3><a href=''></a></li>";
				echo	"<li><p>Δες τα προϊόντα στο καλάθι σου και κάνε τις Αγορές σου!<a href=''></a></p></li>";
				echo "</ul>";
				echo "</li>";
				}else{
				echo "<li><a class='active-icon c2' href='checkout.php'> </a>";
				echo  	"<ul class='sub-icon1 list'>";
				echo 		"<li><h3>Αδειο Καλαθι</h3><a href=''></a></li>";
				echo		"<li><p>Δεν υπάρχουν προϊόντα στο καλάθι σου<a href=''></a></p></li>";
				echo 	"</ul>";
				echo 	"</li>";
				}
			}else{
			
				echo "<li><a class='active-icon c2' href=''> </a>";
				echo "<ul class='sub-icon1 list'>";
				echo 	"<li><h3>Συνδεθείτε</h3><a href=''></a></li>";
				echo 	"<li><p>Γίνεται μέλος στο καταστημά μας, προσθέστε προϊόντα στο καλάθι σας και κάνετε τις αγορές σας!<a href=''></a></p></li>";
				echo "</ul>";
				echo "</li>";

			
			
			
			}
			
		?>			
		</ul>
		<?php
			if(isset($_SESSION['login_user'])){

				$xristis=$_SESSION['login_user'];
			
				$posotitakalathi="SELECT * FROM `USERACTIONFORCART` where `UserCode`='$xristis'";
				$queryCart=$conn->query($posotitakalathi);
				if($queryCart->num_rows > 0){
				echo "<ul class='last'><li><a href='kalathiProionta.php'>ΚΑΛΑΘΙ($queryCart->num_rows)</a></li></ul>";		
				}else{
				echo "<ul class='last'><li><a href='checkout.php'>ΚΑΛΑΘΙ(0)</a></li></ul>";						
				}		   
		}else{
			echo "<ul class='last'><li><a href=''>ΚΑΛΑΘΙ</a></li></ul>";						

		}	    
	    ?>

	  </div>
    </div>
     <div class="clear"></div>
	            <ul class="megamenu skyblue"  >
			<li class="active grid"><a href="index.php">ΑΡΧΙΚΗ</a></li>
			<li><a class="color4" href="#">ΤΡΟΦΙΜΑ</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Κατηγορίες Τροφίμων</h4>
								<ul>
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
								if (!$conn->set_charset("utf8")) {
								    printf("Error loading character set utf8: %s\n", $conn->error);
								} else {
								    //printf("Current character set: %s\n", $conn->character_set_name());
								}//die;
									$queryCat="SELECT * FROM `CATEGORY` WHERE `SubCategory`='1';";
									$trofima=$conn->query($queryCat);
									if ($trofima->num_rows>0){
										while($row = $trofima->fetch_assoc()) {
											$category=$row['CodeCat'];
											$onomasia=$row['NameCat'];
											echo '<li><a href="categorySearch.php?cat='.urlencode($category).'">'.$onomasia.'</a></li>';

										
										}
									}
								
								
								
								?>
								</ul>	
							</div>							
						</div>
					  </div>
					</div>
				</li>				
				<li><a class="color6" href="#">ΥΛΙΚΑ</a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<h4>Υλικά</h4>
								<ul>
								<?php
								$queryCatY="SELECT * FROM `CATEGORY` WHERE `SubCategory`='2';";
									$ilika=$conn->query($queryCatY);
									if ($ilika->num_rows>0){
										while($row2 = $ilika->fetch_assoc()) {
											$category=$row2['CodeCat'];
											$onomasia=$row2['NameCat'];
											echo '<li><a href="categorySearch.php?cat='.urlencode($category).'">'.$onomasia.'</a></li>';

										
										}
									}								
								?>
								</ul>	
							</div>							
						</div>
					</div>
				</li>
				
				<?php
				$katigories="SELECT * FROM `CATEGORY` WHERE `SubCategory`='3';";
				$all=$conn->query($katigories);
				if ($all->num_rows>0){
					while($row3 = $all->fetch_assoc()) {
						$category=$row3['CodeCat'];
						$onomasia=$row3['NameCat'];
						//echo '<li><a href="categorySearch.php?cat='.urlencode($category).'">"$onomasia"</a></li>';
						echo  '<li><a class="color7" href="categorySearch.php?cat='.urlencode($category).'">'.$onomasia.'</a></li>';				
					}
				}			
				
				
				
				?>
				
				<li><a class="color7" href="prosfores.php">Προσφορες</a></li>
				<li><a class="color7" href="estiatoria.php">εστιατορια</a></li>
				<li><a class="color7" href="sintages.php">Συνταγες</a></li>

				<!--<li><a class="color7" href="other.html">ΣΥΝΤΑΓΕΣ</a></li>
				<li><a class="color7" href="other.html">ΕΣΤΙΑΤΟΡΙΑ</a></li>
				<li><a class="color7" href="other.html">ΒΙΒΛΙΑ</a></li>-->
			</ul>
			<?php
			if (isset($_SESSION['login_admin'])){
			echo "<ul class='megamenu skyblue' >";
echo		"<li><a class='color4' href='#'>ΡΥΘΜΙΣΕΙΣ</a>";
echo				"<div class='megapanel'>";
echo					"<div class='row'>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυμίσεις Προϊόντων</h4>";
echo								"<ul>";
echo									"<li><a href='addProduct_dropdown.php'>Προσθήκη Προϊόντος</a></li>";
echo									"<li><a href='removeProduct.php'>Διαγραφή Προϊόντος</a></li>";
echo									"<li><a href='editProduct_selectCategory.php'>Επεξεργασία Προϊόντος</a></li>";
echo								"</ul>";	
echo							"</div>";							
echo					  "</div>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυμίσεις Μελών</h4>";
echo								"<ul>";
echo									"<li><a href='manageUsers.php'>Προβολή και Διαγραφή Μέλους</a></li>";
echo								"</ul>";	
echo							"</div>";							
echo						"</div>";
echo						"</div>";
echo						"<div class='row'>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυμίσεις Κατηγοριών</h4>";
echo								"<ul>";
echo									"<li><a href='addCategory.php'>Προσθήκη Κατηγορίας</a></li>";
echo									"<li><a href='removeCategory.php'>Διαγραφή Κατηγορίας</a></li>";
echo									"<li><a href='editCategory_selectCategory.php'>Επεξεργασία Κατηγορίας</a></li>";
echo								"</ul>";
echo							"</div>";							
echo					  "</div>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυμίσεις Παραγγελιών</h4>";
echo								"<ul>";
echo									"<li><a href='manageOrdersNotCompleted.php'>Επεξεργασία Παραγγελιών που δεν έχουν ολοκληρωθεί</a></li>";
echo									"<li><a href='manageOrdersCompletedOrCanceled.php'>Προβολή Ολοκληρωμένων/Ακυρωμένων Παραγγελιών</a></li>";
echo								"</ul>";	
echo						"</div>";
echo					 "</div>";
echo					 "</div>";
echo					  "<div class='row'>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυμίσεις Προμηθευτών</h4>";
echo								"<ul>";
echo									"<li><a href='addSupplier.php'>Προσθήκη Προμηθευτή</a></li>";
echo									"<li><a href='removeSupplier.php'>Διαγραφή Προμηθευτή</a></li>";
echo									"<li><a href='editSupplier_selectSupplier.php'>Επεξεργασία Προμηθευτή</a></li>";
echo								"</ul>";	
echo							"</div>";							
echo						"</div>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυμίσεις Κουπονιών</h4>";
echo								"<ul>";
echo									"<li><a href='addCoupon.php'>Προσθήκη Κουπονιού</a></li>";
echo									"<li><a href='deleteCoupon_select.php'>Διαγραφή Κουπονιού με δυνατότητα προβολής</a></li>";
echo								"</ul>";	
echo						"</div>";
echo					 "</div>";

echo					"</div>";
echo					"<div class='row'>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυμίσεις Προσφορών</h4>";
echo								"<ul>";
echo									"<li><a href='addOffer_selectProduct.php'>Προσθήκη Προσφοράς</a></li>";
echo									"<li><a href='removeOffer_selectProduct.php'>Αφαίρεση Προσφοράς - Επαναφορά Αρχικής Τιμής</a></li>";
echo								"</ul>";
echo							"</div>";						
echo						"</div>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Προσθήκη Συνταγών</h4>";
echo								"<ul>";
echo									"<li><a href='addSintagi.php'>Προσθήκη Συνταγών</a></li>";
echo									"<li><a href='deleteSintagi.php'>Διαγραφή Συνταγής</a></li>";
echo								"</ul>";	
echo						"</div>";
echo					  "</div>";

echo					"</div>";
echo					"<div class='row'>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Διάφορα</h4>";
echo								"<ul>";
echo									"<li><a href='addAdmin.php'>Προσθήκη Διαχειριστή</a></li>";
echo									"<li><a href='changePasswordAdmin.php'>Αλλαγή Κωδικού Πρόσβασης</a></li>";
echo									"<li><a href='addSlide_select.php'>Προσθήκη φωτογραφιών για Slide αρχικής</a></li>";
									
echo								"</ul>";	
echo							"</div>	";						
echo						"</div>";
echo					"</div>";

echo					"</div>";
echo				"</li>	";
echo			"</ul>";
			
			
			
			}
			?>
     <div class="clear"></div>
     <br>

     </div>
	</div>




	<br>
	<h4 class="title" style="margin-left:50px;">η παραγγελια σασ ολοκληρωθηκε</h4>
	<br>
	<div class="wrap" id="anafora">
	<h4 class="title">Αναφορα:</h4>
	<h5 class="title" >Διεύθυνση αποστολής</h5>
		<div class="clear"></div>
				<p class="m_text2"><?php echo $_SESSION['addressSent']; ?></p>
				<p class="m_text2"><?php echo $_SESSION['postalSent']; ?> <?php echo $_SESSION['citySent']; ?></p>
				<p class="m_text2"><?php echo $_SESSION['countrySent']; ?></p>
				<p class="m_text2"><?php echo $_SESSION['nameSent']; ?> <?php echo $_SESSION['surnSent']; ?></p>
				<br>
    	  
    	  <div class="clear"></div>

	<br>
    	    <h4 class="title">Προϊοντα</h4>
    	    <div class="clear"></div>
    		<table>
    		<thead>
		      <tr>
		        <th class="txt-lt" style="width: 266px; height: 19px">Όνομα</th>
		        <th class="txt-lt" style="width: 291px; height: 19px">Ποσότητα</th>
		        <th class="txt-lt" style="width: 291px; height: 19px">Ποσό</th>
		      </tr>
		    </thead>
    	    <tbody>
			<?php
    	    		$antikeimena=$_SESSION['arithmosproiontwn'];
    	    		$address=$_SESSION['addressSent'];
					$postalCode=$_SESSION['postalSent'];
					$city=$_SESSION['citySent'];
					$country=$_SESSION['countrySent'];
					$name=$_SESSION['nameSent'];
					$surn=$_SESSION['surnSent'];
					$num=0; 
    	    		$sinolo=0;
    	    		while($num<$antikeimena){
    	    		$proionOnoma=$_SESSION["onoma$num"];
					$kodikosproion=$_SESSION["kodikos$num"];
					$price=$_SESSION["timi$num"];
					$varos=$_SESSION["varos$num"];
					$posotita=$_SESSION["posotita$num"];
					$poso=$_SESSION["poso$num"];	
					echo "<tr>";
    	    		echo "<td><p class='m_text2'>$proionOnoma</p></td>";
    	    		echo "<td><p class='m_text2'>$posotita</p></td>";
    	    		echo "<td><p class='m_text2'>$poso</p></td>";
					echo "</tr>";
					$sinolo=$sinolo+$poso;
    	    	
    	    		$num=$num+1;
    	    		}	
    	    	?>
    	    	 <tr>
    	    	  <td><br></td>
			 	</tr>
      	    	<tr>
				 <th class="txt-lt" style="width: 266px; height: 19px">Σύνολο</th>
				 <td><h1 class="remove" style="width: 266px; height: 19px">€<?php echo $sinolo?></h1></td>
								
    	    	</tr>
    	    	
    	       </tbody>		
			</table>
			<div class='clear'></div>
			<br>
			<br>
	    	<h4 class='title'>πληρωσατε συνολικα:&nbsp;&nbsp; €<?php echo $sinolo?></h4>
			
	</div>
		<br>
		<div class="wrap">
		<button type="button" onclick="printDiv('anafora')" class="grey" value="ΕΚΤΥΠΩΣΗ ΑΝΑΦΟΡΑΣ">ΕΚΤΥΠΩΣΗ ΑΝΑΦΟΡΑΣ</button>
		<br>
		<br>
		<br><br>
		</div>
		

<div class="footer">
		<div class="footer-middle">
			<div class="wrap">   
		   <div class="section group example">
			 <div class="col_1_of_f_1 span_1_of_f_1" >
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">
				    <h2>ΠΛΗΡΟΦΟΡΙΕς</h2>
						<ul class="f-list1">
						    <li><a href="about.php">Ποιοι Είμαστε</a></li>
				           <!-- <li><a href="terms.html">Όροι Χρήσης</a></li>-->
				            <li><a href="delivery.php">Τρόποι Πληρωμής και Παραγγελιών</a></li>
			
				         </ul>
				     				 				<div class="clear"></div>
				 </div>
				</div>
				</div>
				<div class="col_1_of_f_1 span_1_of_f_1">
				<div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">

				   <h2>ΕΠΙΚΟΙΝΩΝΙΑ</h2>
						<div class="company_address">
					                <p>Εικονικό Μουσείο Κυπριακών Τροφίμων και Διατροφής</p>
							   		<p>Κύπρος</p>
							   		<p>Κινητό Τηλέφωνο: 99 05 98 20</p>
					   				<p>Fax: 22 77 06 76</p>
					 	 			<p style="" >Email: <span>cyfoodmuseum@gmail.com</span></p>
					   		<!--style="height: 24px"-->
					   </div>
				</div>
				</div>
				</div>
				</div>
				
				<div class="clear"></div>

		    </div>
		   <div class="clear"></div>
		   		   <div class="clear"></div>
		   <div class="clear"></div>
			<br>
		  <div class="auto-style1">
		  <img src="images/3.png" width="58"><span class="auto-style2">Καλέστε 
					μας στο: 99 05 98 20     </span>
			<a href="https://www.facebook.com/pages/Cyprus-Food-Virtual-Museum/104034939677867?fref=ts" target="_blank"><img src="images/find_us_facebook_logo.gif" class="auto-style2" height="57" width="143"></a>
			</div>
		</div>
					
					<div class="footer-bottom">
					<div class="wrap">
				<div class="f-list2">
				 <ul>
				            <li>Copyright: CyFoodMuseum Team, CS-ucy</li>
				 </ul>
			    </div>
			    <div class="clear"></div>
			    </div>
		      </div>
	     	
	     	 </div>

</body>
</html>
