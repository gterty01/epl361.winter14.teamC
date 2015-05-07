<?php
	session_start(); 
?>
<?php
if (!(isset($_SESSION['login_user']))){
header("Location: login.php");
die;


}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Προσθήκη στο Καλάθι</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all"/>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <script type="text/javascript" src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript" src="js/jquery.easydropdown.js"></script>
<script type="text/javascript">
	function doesExist(){

	alert('Το προϊόν που επιλέξατε υπάρχει ήδη στο καλάθι σας!');
	return false;
	}
</script>

 	
<script type='text/javascript'>
//alert('Προστέθηκε στο καλάθι σας!');

function show_alert(){
    alert('Προστέθηκε στο καλάθι σας!');
  }
  
  
</script>

	
	
<style type="text/css">
.auto-style1 {
	color: #FFFFFF;
}
.auto-style2 {
	margin-top: 0px;
}
.auto-style4 {
	margin-left: 0;
}
.auto-style8 {
	color:black;
}
</style>
</head>

<body style="color: #FFFFFF; " onload="show_alert();">
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
		
<span class="auto-style8">
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
$_POST['search']=$_POST['timianazitisi'];
?>

 
<?php 
	$array = array();

 if ($_POST["search"]){
	$timi = $_POST['search'];
	if ($timi!="Αναζήτηση"){
		$querys ="SELECT DISTINCT `Code` , `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT`, `SUPPLIER` , `CATEGORY` where `CodeOfCategory` = `CodeCat` AND `CodeOfSupplier` = `SupplierNumber` AND `Availability`>0 AND (MATCH(`Name`) AGAINST('$timi' WITH QUERY EXPANSION) OR `Name` LIKE '%$timi%') UNION SELECT DISTINCT `Code` , `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT` , `SUPPLIER` , `CATEGORY` where `CodeOfCategory` = `CodeCat` AND `CodeOfSupplier` = `SupplierNumber` AND (MATCH(`Description`) AGAINST('$timi' WITH QUERY EXPANSION) OR `Description` LIKE '%$timi%') UNION SELECT DISTINCT `Code` , `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT`, `SUPPLIER` , `CATEGORY` where  `CodeOfCategory` = `CodeCat` AND `CodeOfSupplier` = `SupplierNumber` AND (MATCH(`CompanyName`) AGAINST('$timi' WITH QUERY EXPANSION) OR `CompanyName` LIKE '%$timi%') UNION SELECT DISTINCT `Code`, `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT` , `CATEGORY` , `SUPPLIER` WHERE `CodeOfCategory` = `CodeCat` AND `SupplierNumber` = `CodeOfSupplier` AND (MATCH(`NameCat`) AGAINST('%$timi%' WITH QUERY EXPANSION))";
		$result=$conn->query($querys);
		
		//$querys2 ="SELECT `Code` , `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT`, `SUPPLIER` , `CATEGORY` where `CodeOfCategory` = `CodeCat` AND `CodeOfSupplier` = `SupplierNumber` AND `Name` LIKE '%$timi%'";
		$arithmos = $result->num_rows;
		
		$queryDes ="SELECT DISTINCT `Code` , `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT` , `SUPPLIER` , `CATEGORY` where `CodeOfCategory` = `CodeCat`AND `Availability`>0 AND `CodeOfSupplier` = `SupplierNumber` AND (MATCH(`Description`) AGAINST('$timi' WITH QUERY EXPANSION) OR `Description` LIKE '%$timi%')";
		$resultDes=$conn->query($queryDes);		
		$querySup ="SELECT DISTINCT `Code` , `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT`, `SUPPLIER` , `CATEGORY` where  `CodeOfCategory` = `CodeCat` AND `Availability`>0 AND `CodeOfSupplier` = `SupplierNumber` AND (MATCH(`CompanyName`) AGAINST('$timi' WITH QUERY EXPANSION) OR `CompanyName` LIKE '%$timi%')";
		$resultSup=$conn->query($querySup);
		$queryCat="SELECT DISTINCT `Code`, `Name` , `Description` , `Price` , `NameCat` , `Weight` , `Availability` , `image` ,  `CompanyName` FROM `PRODUCT` , `CATEGORY` , `SUPPLIER` WHERE `CodeOfCategory` = `CodeCat` AND `Availability`>0 AND `SupplierNumber` = `CodeOfSupplier` AND (MATCH(`NameCat`) AGAINST('%$timi%' WITH QUERY EXPANSION))";
		$resultCat=$conn->query($queryCat);
		
		$counter=0;
	}
}

if($result->num_rows > 0){
	

	echo "<div class='wrap'>";
	echo 	"<div class='section group'>";
	echo	 "<div class='cont span_2_of_3'>";
 	echo 		  	"<h2 class='head'>Αποτελεσματα Αναζητησης</h2>";
	echo "<br>";
	while($row = $result->fetch_assoc()) {
		if ($counter == 0){
	  		echo "<div class='top-box'>";
		 } 
	 				
	 $diathesimotita= $row['Availability'];
	 if ($diathesimotita>0){
	 					$arrlength = count($array);
					$Pcode = $row["Code"];
					$no = "SELECT CodeOfSupplier FROM `PRODUCT` where Code = '$Pcode'";
					$no_r = $conn->query($no);
				
					if($no_r->num_rows > 0){
						while($line = $no_r->fetch_assoc()){
							$currentCode = $line["CodeOfSupplier"];
						}
					}
				
					$count = 0;
					for($x = 0; $x < $arrlength; $x++) {
						$querys2 = "SELECT * FROM `PRODUCT` where Code = '$array[$x]'";
						$result2 = $conn->query($querys2);
						if($result2->num_rows > 0){
							while($line2 = $result2->fetch_assoc()){
								if ($line2["CodeOfSupplier"] == $currentCode){
									$count = 1;
								}
							}
						}
					}	
					
					if ($count == 0){
						array_push($array,$row["Code"]);	 
					}


	 echo "<div class='col_1_of_3 span_1_of_3'>" ;
	 $productCode=$row['Code'];
	//echo '<a href="view_exp.php?compna='.urlencode($compname).'">'.$compname.'</a>';
	 echo 	  	 '<a href="single.php?item='.urlencode($productCode).'">';
	 // echo 	  	 "<a href='single.html'>";
	
	 echo 			 "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
	 echo 		 					"<div class='product_image'>";
	 
	// echo "<img src='Image/".$row['image']."' alt='' width='270' height='250' />";
	 echo '<img  src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="270" height="250"/>';
	 echo 				"</div>";
     echo         "<div class='price'>";
	 echo 		   "<div class='cart-left'>";
	 echo 					"<p class='title'>";
	 echo $row['NameCat']; echo " - " ;
	 echo $row['Name'] ;
	 echo "</p>";
	 echo 							"<div class='price1'>";
	 echo 							  "<span class='actual'>";
	 echo $row['Price'];
	 echo "</span>";
	 echo 							"</div>";
 	echo 						"</div>";
 	$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
	$resultCheck=$conn->query($querysCheck);
	if($resultCheck->num_rows == 0){
	//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
  		
			
  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiKalathi.php'  accept-charset='UTF-8'>"; 
	echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
	}
  	else{
  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
  	}
 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
	echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
	echo					"</form>";
 	
	 
	//echo 						"<div> <a href='checkout.html' class='cart-right'></a> </div>";
	echo 						"<div class='clear'></div>";
	echo 					 "</div>"	;			
	echo                    "</div>";
	echo                    "</a>";
	//echo "</form>";
	echo 				"</div>";
	 
	 $counter = $counter+1;
	 
	 
	 if ($counter == 3){
	  	echo "<div class='clear'></div>";
		echo "</div>";
		$counter = 0;
	  
	  }
	  }
	 }
}
    
	 //$counter=apotelesmata($resultDes, $counter);
 	 //$counter=apotelesmata($resultSup, $counter);
	 //$counter=apotelesmata($resultCat, $counter);
 		
 		if ($counter != 3){
	  	echo "<div class='clear'></div>";
		echo "</div>";
	 	
	  	}



		echo "</div>";


		echo "</div>";
		
	if($result->num_rows > 0){

		echo	"<div class='rsidebar span_1_of_left'>";
		
        echo           "<section class='sky-form'>";
		echo			"<h4>Τιμή</h4>";
	//	echo				"<div class='row row1 scroll-pane'>";
		echo					"<form class='col col-4' id='select_price' method='post' accept-charset='utf-8'>";
		echo						'<label class="checkbox"><input id ="datepicker" type="radio" name = "price" value="5" onchange="window.location.href= \'searchPrice.php?Value =5&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €5,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="10" onchange="window.location.href = \'searchPrice.php?Value =10&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €10,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="15" onchange="window.location.href = \'searchPrice.php?Value =15&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €15,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="20" onchange="window.location.href = \'searchPrice.php?Value =20&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €20,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="25" onchange="window.location.href = \'searchPrice.php?Value =25&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €25,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="50" onchange="window.location.href = \'searchPrice.php?Value =50&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €50,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="75" onchange="window.location.href = \'searchPrice.php?Value =75&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €75,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="100" onchange="window.location.href = \'searchPrice.php?Value =100&& Search ='.urlencode($timi).'\'" ><i></i>€1,00 - €100,00</label>';
		echo						'<label class="checkbox"><input type="radio" name = "price" value="101" onchange="window.location.href = \'searchPrice.php?Value =101&& Search ='.urlencode($timi).'\'" ><i></i>€100+</label>';
		echo					"</form>";
		//echo				"</div>";
		echo        "</section>";

		
		echo		"<section  class='sky-form'>";
		echo			"<h4>Μαρκα</h4>";
		//echo				"<div class='row row1 scroll-pane'>";
		echo					"<div class='col col-4'>";
	
	

		$arrlength = count($array);
		for($x = 0; $x < $arrlength; $x++) {
		   	//echo $array[$x];
			$querys = "SELECT * FROM `PRODUCT`,`SUPPLIER` where Code = '$array[$x]' AND CodeOfSupplier = SupplierNumber";
			$result = $conn->query($querys);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$number = $row["SupplierNumber"];
					echo '<label class="checkbox"><input type="radio" name = "Sup[]" value="' . $row['SupplierNumber'] .'" onchange="window.location.href= \'searchSupplier.php?Value ='.urlencode($number).'&& Search ='.urlencode($timi).'\'" ><i></i> ';
					echo $row["CompanyName"];  
					echo "</label>";

				}
			}
		}		
		
		//echo					"</div>";
		echo				"</div>";
		echo       "</section>";
		echo	"<div>";
		echo "</div>";


}




		echo "</div>";

	    echo "<div class='clear'></div>";
		echo "</div>";
 		echo "</div>";
 ?>
</span>



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
		  <img src="images/3.png" width="58"><span class="auto-style1">Καλέστε 
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
 
 
