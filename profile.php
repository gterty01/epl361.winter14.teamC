<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php session_start(); ?>

<?php
$xristis;
if(isset($_SESSION['login_user'])){
	$xristis = $_SESSION['login_user'];
}
else{
	$xristis = "Σύνδεση";
	header("Location: index.php");
	die;
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Προβολή προφίλ</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="dreamcodes/tables2/css/tsc_tables2.css" />
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<style type="text/css">
.tablewrapper{width: 95%; overflow-y: hidden; overflow-x: auto; 
 background-color:white;  height: auto; padding: 5px;}

.auto-style1 {
	width: 90%;
	-moz-transition: all .2s linear;
	-webkit-transition: all .2s linear;
	-o-transition: all .2s linear;
	-ms-transition: all .2s linear;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 0;
}
.auto-style2 {
	color: #FFFFFF;
}

	table {
		color:#333;
		font-family:Helvetica,Arial,sans-serif;
		width:100%;
		border-spacing:1px;
		border-collapse:separate;
		padding:0 3px;
x

	}
	
	td, th {
		width: 200px;
		height: 50px;
		transition:all .3s;
		text-align:left;
		vertical-align:middle;
	}

	th {
		background:grey;
		font-weight:700;
		color : white;
	}
	
	td {
		background:white;
	}
p{
	color:#777;
	font-size:0.85em;
	line-height: 1.8em;
	vertical-align:middle;

}	
h{
	/*font-weight: bold;*/
	color : #008000;
	
}
	</style>
</head>

<body style="color: #FFFFFF; ">
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
          
	<div class="clear"><br><br><br></div>
	<div class="clear"></div>
</div>
	   
<?php

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

if (!$conn->set_charset("utf8")) {
   	printf("Error loading character set utf8: %s\n", $conn->error);
    die;
}

$query1 = "SELECT * FROM `USERS_FM` WHERE Email = '$xristis'";

$result = $conn->query($query1);

while($row = $result->fetch_assoc()) {
	$_SESSION['onoma'] = $row['Name'];	
	$_SESSION['epitheto'] = $row['Surname'];	
	$_SESSION['email'] = $row['Email'];	
	$_SESSION['birth'] = $row['Birthday'];	
	$_SESSION['filo'] = $row['Sex'];	
	$_SESSION['d1'] = $row['Address1'];	
	$_SESSION['d2'] = $row['Address2'];	
	$_SESSION['poli'] = $row['City'];	
	$_SESSION['tk'] = $row['PostalCode'];	
	$_SESSION['tel2'] = $row['HomeNumber'];	
	$_SESSION['tel1'] = $row['PhoneNumber'];	
	$_SESSION['xwra'] = $row['Country'];
		
}	

?>
	<div class="wrap">
	<h4 class="title">Τα Στοιχεια του λογαριασμου σας</h4>
 <form id='editProfile' method="POST" action="edit_profile.php" accept-charset="UTF-8"> <!--method='post'-->
		<div class="tablewrapper">
  <table class="responsive" summary="Profile of User" style="width:91%; ">
    <thead>
    </thead>
    <tbody>
      <tr>
        <td style="height: 50px"><h>Όνομα:</h></td>
        <td style="height: 50px"><p><?php echo $_SESSION['onoma'];?> </p></td>
       	<td style="height: 50px"><h>Διεύθυνση 1:</h></td>
        <td style="height: 50px"><p><?php echo $_SESSION['d1']; ?> </p></td>

      </tr>
      <tr>
        <td><h>Επώνυμο:</h></td>
        <td><p><?php echo $_SESSION['epitheto']; ?></p></td>
        <td><h>Διεύθυνση 2:</h></td>
        <td><p><?php if ($_SESSION['d2']!="") echo $_SESSION['d2']; else echo "-"; ?></p></td>

      </tr>
      <tr>
        <td><h>Email:</h></td>
        <td><p><?php echo $_SESSION['email']; ?></p></td>
        <td><h>Ταχυδρομικός κώδικας:</h></td>
        <td><p><?php echo $_SESSION['tk']; ?></p></td>

      </tr>
      <tr>
        <td><h>Ημερομηνία Γέννησης:</h></td>
        <td><p><?php echo $_SESSION['birth']; ?></p></td>
		<td><h>Χώρα:</h></td>
		<td><p><?php echo $_SESSION['xwra']; ?></p></td>


      </tr>
      <tr>
        <td><h>Φύλο:</h></td>
        <td> <p><?php if ($_SESSION['filo']!="null") echo $_SESSION['filo']; else echo "-"; ?></p></td>
        <td><h>Πόλη:</h></td>		
        <td><p><?php echo $_SESSION['poli'];?></p></td>

      </tr>
      <tr>
        <td><h>Αριθμός Κινητού Τηλεφώνου:</h></td>
        <td><p><?php if (($_SESSION['tel1'] != "")AND($_SESSION['tel1'] != " ")) echo $_SESSION['tel1']; else echo "-"; ?></p></td>
        <td></td>
		<td></td>
      </tr>
      <tr>
        <td><h>Αριθμός Σταθερού Τηλεφώνου:</h></td>
         <td><p><?php if (($_SESSION['tel2'] != "")AND($_SESSION['tel2'] != " ")) echo $_SESSION['tel2']; else echo "-";?></p></td>
        <td></td>
       <td></td>
     
      </tr>
     </tbody>
    </table>
    </div>
     <br><br>
    </form>

	<div class="active" style="margin-left:auto; width:75%; "> 
    <a href="changePassword.php"><button type="submit" class="grey" name="submit" value="Submit" style="float:none">Αλλαγη κωδικου προσβασης</button></a>
     <a href="edit_profile.php"><button type="submit" class="grey" name="submit" value="Submit" style="float:inherit">Επεξεργασια Στοιχειων</button></a>

	</div>
<!-- DC Table Styles II:1 End -->
	<br>
	<br>
	</div>	
	

	<div class="clear"><br><br></div>
	<div class="clear"></div>
	
  </div>
	</div>	  
	<!--</div>-->
	<!--</div>-->
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
	     	 </div>
		</div>

</body>
