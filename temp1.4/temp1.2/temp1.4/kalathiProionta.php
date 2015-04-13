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
header("Location: login.html");
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
					<li class="active"><?php echo $_SESSION['login_user']?></li> |
					<li><a href="checkout.html">Λίστα Αγορών</a></li> |
					<li><a href="checkout.html">Πραγματοποίηση Αγοράς</a></li> |
					<li><a href="register.html">Εγγραφή</a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>


	 <div class="header-bottom">
	    <div class="wrap" style="width: 98%">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.html">
					<img src="images/trofima.jpg"></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue" style="left: -4.1%; top: 5%">
			<li class="active grid"><a href="index.html">ΑΡΧΙΚΗ</a></li>
			<li><a class="color4" href="#">ΤΡΟΦΙΜΑ</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Κατηγορίες Τροφίμων</h4>
								<ul>
									<li><a href="allantika.html">Αλλαντικά</a></li>
									<li><a href="glikakoutaliou.html">Γλυκά του Κουταλιού</a></li>
									<li><a href="votana.html">Βότανα</a></li>
									<li><a href="galaktokomika.html">Γαλακτοκομικά</a></li>
									<li><a href="rofimata.html">Κυπριακά Ροφήματα</a></li>

								</ul>	
							</div>							
						</div>
					  </div>
					</div>
				</li>				
				<li><a class="color7" href="skeui.html">ΣΚΕΥΗ</a></li>
				<li><a class="color6" href="#">ΥΛΙΚΑ</a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<h4>Υλικά</h4>
								<ul>
									<li><a href="zimaria.html">Ζυμάρι</a></li>
									<li><a href="xorta.html">Χόρτα</a></li>
									<li><a href="frouta.html">Φρούτα</a></li>
								</ul>	
							</div>							
						</div>
					</div>
				</li>
	
				<li><a class="color7" href="other.html">ΣΥΝΤΑΓΕΣ</a></li>
				<li><a class="color7" href="other.html">ΕΣΤΙΑΤΟΡΙΑ</a></li>
				<li><a class="color7" href="other.html">ΒΙΒΛΙΑ</a></li>
			</ul>
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
			<li><a class="active-icon c2" href="checkout.html"> </a>
				<ul class="sub-icon1 list">
					<li><h3>Αδειο Καλαθι</h3><a href=""></a></li>
					<li><p>Δεν υπάρχουν προϊόντα στο καλάθι σου<a href=""></a></p></li>
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="#">ΚΑΛΑΘΙ(0)</a></li></ul>
	  </div>
    </div>

     </div>
	</div>
         <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<!--ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol-->
			</div>
		</div>
	</section> 
	<div class="clear"><br><br><br></div>
	<div class="clear"></div>

	<div class="wrap">
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
		
	
	?>
	
	
	<form method="post" action="episkopisiparaggelias.php" name="formadiagrafis">
  <table class="tsc_tables2_1" summary="Cart of User" style="width:75%; align=center" id="proiontakalathiou">
    <thead>
      <tr style="vertical-align:middle">
        <th scope="col">Προϊόν</th>
        <th scope="col">Φωτογραφία</th>
        <th scope="col">Προμηθευτής</th>
        <th scope="col">Τιμή</th>
        <th scope="col">Ποσότητα</th>
        <th scope="col">Βάρος</th>
        <th scope="col">Διαγραφή</th>
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
		$promitheftis=$row2['CodeOfSupplier'];
		$takeSup="SELECT * FROM `SUPPLIER` WHERE `SupplierNumber` = '$promitheftis'";
		$querySup=$conn->query($takeSup);
		$rowSup=$querySup->fetch_assoc();
		$NamePromithefti=$rowSup['CompanyName'];
		echo "<tr>";
		echo "<td>$proionOnoma</td>";
		echo '<td><img  src="data:image/jpeg;base64,'.base64_encode( $row2['image'] ).'" width="100" height="100"/></td>';
		echo "<td>$NamePromithefti</td>";
		echo "<td>€$price</td>";
		echo "<td><input id='posotita$counter' type='number' min='1' value='1' name='posotita$counter' onblur='document.formatameiou.posotita$counter.value = this.value;' ></td>";
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
        //$numofproducts++;
	}
	echo "<input type='hidden' name='arithmosproiontwn' id='arithmosproiontwn' value=$counter>";
	
	} else{
		header("Location: checkout.html");
	}


   ?>
     </tbody>
   </table>
   <br><br>
   <div class='active' style='margin-left:auto; margin-right:auto; width:75%;'>
   <button type="submit"  class="grey" name="submittameiou" id="submittameiou" style="float:right" >Προχωρήστε στο Ταμείο</button>
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
			   
		   <div class="auto-style3">
		   	   <br>
			 <div class="col_1_of_f_1 span_1_of_f_1" style="width: 98%">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2" style="width: 41%; margin-left: 0; height: 150px">
				    <h2>ΠΛΗΡΟΦΟΡΙΕς</h2>
						<ul class="f-list1">
						    <li><a href="about.html">Ποιοι Είμαστε</a></li>
				            <li><a href="terms.html">Όροι Χρήσης</a></li>
				             <li><a href="delivery.html">Τρόποι Πληρωμής και Παραγγελιών</a></li>
				            <li><a href="copyright.html">Copyright</a></li>
				           			         	</ul>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2" style="height: 150px">
				   <h2>ΕΠΙΚΟΙΝΩΝΙΑ</h2>
						<div class="company_address">
					                <p>Εικονικό Μουσείο Κυπριακών Τροφίμων και Διατροφής</p>
							   		<p>Κύπρος</p>
							   		<p>Κινητό Τηλέφωνο: 99 05 98 20</p>
					   				<p>Fax: 22 77 06 76</p>
					 	 	<p style="height: 24px">Email: <span>cyfoodmuseum@gmail.com</span></p>
					   		
					   </div>
				</div>
		    </div>
		   </div>
		  <div class="clear"><img src="images/3.png" width="58"><span class="auto-style1">Καλέστε 
					μας στο: 99 05 98 20<a href="https://www.facebook.com/pages/Cyprus-Food-Virtual-Museum/104034939677867?fref=ts" target="_blank"><img src="images/find_us_facebook_logo.gif" class="auto-style2" height="57" width="143"></a><div class="wrap" style="width: 90%; height: 24px">
				<div class="f-list2">
				 <ul>
					<li class="active"><a href="about.html">Ποιοι Είμαστε</a></li> |
					<li><a href="terms.html">Όροι & Προϋποθέσεις</a></li> |
					<li><a href="contact.html">Επικοινωνήστε μαζί μας</a></li> 
				 </ul>
			    </div>
		      </div>
	     	 </span></div>
		    </div>
		  </div>
		</div>
	</div>


<!-- DC Table Styles II:1 Start -->
</body>

</html>
