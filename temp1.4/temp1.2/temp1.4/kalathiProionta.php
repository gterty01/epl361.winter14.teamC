<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Καλάθι</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="dreamcodes/tables2/css/tsc_tables2.css" />
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<title>jQuery UI Spinner - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<script type="text/javascript">
function copyelements() {
var table = document.getElementById('proiontakalathiou');
var r = table.rows[table.rows.length-1];
var inputs = r.getElementsByTagName("input");
var result = new Array(inputs.length);

alert(table.rows[table.rows.length-1].cells[0].children[0].value);
/*for (var i=0; i<inputs.length; i++){
        result[i] = inputs[i].value; // not innerHTML or something
        var cell = result[i].innerHTML;
    alert(cell);
    }*/
}
</script>
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
	color:white;
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
		margin-left:auto;
		margin-right:auto;
	}
	
	td, th {
		height:30px;
		transition:all .3s;
		text-align:center;
		width:auto;
		vertical-align:middle;
	}
	
	th {
		background:#B1B6AF;
		font-weight:700;
		color : white;
	}
	
	td {
		background:#FAFAFA;
	}
	
	tr:hover td{
		background:#EEEEEE;
		color:black;
	}
.searchSubmit{
background: url(images/delete.png) center no-repeat;
width:24px;
height:24px;
font-size: 0; line-height: 0;
}
</style>
</head>
<body>
<?php 
	session_start(); 
?>
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
?>
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
parse_url(file_get_contents("php://input"), $_POST);
//print_r($_POST); 

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
} else {
    //printf("Current character set: %s\n", $conn->character_set_name());
}//die;
$xristis=$_SESSION['login_user'];
$querys ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' ";
$result=$conn->query($querys);
if($result->num_rows == 0){
	header("Location: checkout.php");
	die;

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
				<li><a class="color7" href="sintages.php" target="_blank">Συνταγες</a></li>

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

	<div class="wrap">
	<form method="post" action="episkopisiparaggelias.php" name="formadiagrafis">
	<div class="tablewrapper">
  <table class="responsive" summary="Cart of User" style="width:91%; align=center" id="proiontakalathiou">
    <thead>
      <tr style="vertical-align:middle">
        <th scope="col" style="width:14%">Προϊόν</th>
        <th scope="col" style="width:16%">Φωτογραφία</th>
        <th scope="col" style="width:14%">Προμηθευτής</th>
        <th scope="col" style="width:14%">Τιμή</th>
        <th scope="col" style="width:14%">Ποσότητα</th>
        <th scope="col" style="width:14%">Βάρος</th>
        <th scope="col" style="width:14%">Διαγραφή</th>
      </tr>
    </thead>
    <tbody>
    <?php
  	$counter=0;
  	$twoD = array(array());
	if($result->num_rows > 0)
	{
    $numofproducts=0;
	 while($row = $result->fetch_assoc()) {
	 $proion = $row['CodeOfProduct'];
		$stoixeiaProiontos="SELECT * FROM `PRODUCT` WHERE `Code` = '$proion' ";
		$apotelesmata=$conn->query($stoixeiaProiontos);
		if($apotelesmata->num_rows == 0){
			echo "nothing";
		}
		$row2 = $apotelesmata->fetch_assoc();
		$proionOnoma=$row2['Name'];
		$kodikosproion=$row2['Code'];
		$price=$row2['Price'];
		$varos=$row2['Weight'];
		$diathesimotita=$row2['Availability'];
		$promitheftis=$row2['CodeOfSupplier'];
		$takeSup="SELECT * FROM `SUPPLIER` WHERE `SupplierNumber` = '$promitheftis'";
		$querySup=$conn->query($takeSup);
		$rowSup=$querySup->fetch_assoc();
		$NamePromithefti=$rowSup['CompanyName'];
		if ($diathesimotita>0){
		echo "<tr>";
		echo "<td>$proionOnoma</td>";
		echo '<td><img  src="data:image/jpeg;base64,'.base64_encode( $row2['image'] ).'" width="100" height="100"/></td>';
		echo "<td>$NamePromithefti</td>";
		echo "<td>€$price</td>";
		echo "<td><input id='posotita$counter' type='number' min='1' max='$diathesimotita' value='1' name='posotita$counter' onblur='document.formatameiou.posotita$counter.value = this.value;' ></td>";
		echo "<td>$varos kg</td>";
		echo "<td><input type='submit' class='searchSubmit' id='diagrapsou$counter' name='diagrapsou' value=$kodikosproion></td>";
		echo "</tr>";
      /*  $twoD[$numofproducts][0] = $proionOnoma;
        $twoD[$numofproducts][1] = $price;
        $twoD[$numofproducts][2] = $varos;
		$metavliti = $twoD[$numofproducts][0];
		$tempmet= "$metavliti";
        $metavliti1 = $twoD[$numofproducts][1];
		$tempmet1= "$metavliti1";
		$metavliti2 = $twoD[$numofproducts][2];
		$tempmet2= "$metavliti2";*/
		echo "<input type='hidden' name='onoma$counter' id='onoma$counter' value=$proionOnoma>";
		echo "<input type='hidden' name='kodikos$counter' id='kodikos$counter' value=$kodikosproion>";
		echo "<input type='hidden' name='timi$counter' id='timi$counter' value=$price>";
		echo "<input type='hidden' name='varos$counter' id='varos$counter' value=$varos>";
		$counter=$counter+1;
		}
        //$numofproducts++;
	}
	echo "<input type='hidden' name='arithmosproiontwn' id='arithmosproiontwn' value=$counter>";
	} else{
		echo "nothing";
		
	}
   ?>
     </tbody>
   </table>
   </div>
   <br><br>
   <div class='active' style='margin-left:auto; margin-right:auto; width:75%;'>
   
   
	<button type='submit'  class='grey' name='submittameiou' id='submittameiou' style='float:right' >Προχωρήστε στο Ταμείο</button>
     
   </div>
    </form>
<!--	<div class='active' style='margin-left:auto; margin-right:auto; width:75%;'>
	<form method='post' action='tameio.php' name="formatameiou" onsubmit="takeposotites()" >
<?PHP
	$metritis=0;
	echo $counter;
		while ($metritis<$counter){
		echo $metritis;
		echo $twoD[$metritis][0];
		echo $twoD[$metritis][1];
		echo $twoD[$metritis][2];

		$metavliti = $twoD[$metritis][0];
		$tempmet= "$metavliti";
		
		$metavliti1 = $twoD[$metritis][1];
		$tempmet1= "$metavliti1";
		$metavliti2 = $twoD[$metritis][2];
		$tempmet2= "$metavliti2";


		echo "<input type='hidden' name='onoma$metritis' value='$tempmet'>";
		echo "<input type='hidden' name='timi$metritis' value='$tempmet1'>";
		echo "<input type='hidden' name='varos$metritis' value='$tempmet2'>";
		echo "<input type='hidden' name='posotita$metritis' onblur='document.formadiagrafis.proiontakalathiou.posotita$metritis.value = this.value;'  >";
		echo $metritis;
		$metritis=$metritis+1;
		echo $metritis;
		}


			
	?>
    <button type="submit"  class="grey" name="submit" style="float:right" >Προχωρήστε στο Ταμείο</button>
	</form>
	</div>-->

<!-- DC Table Styles II:1 End -->
	<br>
	<br>
	</div>	
	

	<div class="clear"><br><br></div>
	<div class="clear"></div>
	
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
