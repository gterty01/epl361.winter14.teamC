<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<?php
$xristis;
if(isset($_SESSION['login_admin'])){
	$xristis = $_SESSION['login_admin'];
}
else{
	$xristis = "Σύνδεση";
	header("Location: login.html");
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Προβολή Παραγγελιών που δεν ολοκληρώθηκαν</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="dreamcodes/tables2/css/tsc_tables2.css" />

<script type="text/javascript" src="js/jquery1.min.js"></script>

<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>

<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
	<style type="text/css">
	 .auto-style4 {
		margin-left: 0;
	}
	.auto-style5 {
		float: none;
		margin-left: 0;
		margin-top: 6px;
		display:table-row;
	}
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
		color: #666699;

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
	.oloklirwsiSubmit{
		background: url('images/oloklirwthike.jpg') center no-repeat;
		width:24px;
		height:24px;
		font-size: 0; line-height: 0;
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
					<li class="active"><?php echo $_SESSION['login_admin']; ?></li> |
					<li><a href="checkout.html">Λίστα Αγορών</a></li> |
					<li><a href="checkout.html">Πραγματοποίηση Αγοράς</a></li> |
					<li><a href="index.html">Αποσύνδεση</a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>	<div class="header-bottom">
	    <div class="wrap" style="width: 98%">
			<div class="header-bottom-left">
				<div class="logo" >
					<a href="login_index.php">
					<img src="images/trofima.jpg"></a>
				</div>
				<div class="auto-style5" style="height:100px" >
	            <ul class="megamenu skyblue" >
			<li class="active grid"><a href="login_index.php">ΑΡΧΙΚΗ</a></li>
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
            <ul class="megamenu skyblue" >
			<li><a class="color4" href="#">ΡΥΘΜΙΣΕΙΣ</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Ρυμίσεις Προϊόντων</h4>
								<ul>
									<li><a href="addProduct_dropdown.php">Προσθήκη Προϊόντος</a></li>
									<li><a href="removeProduct.php">Διαγραφή Προϊόντος</a></li>
									<li><a href="editProduct_selectCategory.php">Επεξεργασία Προϊόντος</a></li>
								</ul>	
							</div>							
					  </div>
						<div class="col1">
							<div class="h_nav">
								<h4>Ρυμίσεις Μελών</h4>
								<ul>
									<li><a href="404.html">Προσθήκη Μέλους</a></li>
									<li><a href="404.html">Διαγραφή Μέλους</a></li>
									<li><a href="404.html">Επεξεργασία Μέλους</a></li>
								</ul>	
							</div>							
						</div>
						</div>
						<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Ρυμίσεις Κατηγοριών</h4>
								<ul>
									<li><a href="404.html">Προσθήκη Κατηγορίας</a></li>
									<li><a href="404.html">Διαγραφή Κατηγορίας</a></li>
									<li><a href="404.html">Επεξεργασία Κατηγορίας</a></li>
								</ul>	
							</div>							
					  </div>
						<div class="col1">
							<div class="h_nav">
								<h4>Ρυμίσεις Παραγγελιών</h4>
								<ul>
									<li><a href="404.html">Προσθήκη Παραγγελίας</a></li>
									<li><a href="404.html">Διαγραφή Παραγγελίας</a></li>
									<li><a href="404.html">Επεξεργασία Παραγγελίας</a></li>
								</ul>	
						</div>
					  </div>
					  </div>
					  <div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Διάφορα</h4>
								<ul>
									<li><a href="404.html">Ρυθμίσεις Προμηθευτών</a></li>
									<li><a href="404.html">Ρυθμίσεις Φορτωτών</a></li>
								</ul>	
							</div>							
						</div>
					</div>
					</div>
				</li>	
			</ul>			
			</div>
		</div>
	   <div class="header-bottom-right" style="width: 34%">
         <div class="search">	  
				<input type="text" name="s" class="auto-style4" value="Αναζήτηση" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Αναζήτηση';}" style="width: 159px">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
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
     <div class="clear"></div>
     <br>
     </div>
<div class="wrap">
	<form method="post" action="manageOrdersNotCompleted_database.php" name="formadiagrafis">
		<h4 class="title"> Παραγγελιες που εκκρεμουν</h4>'

  <table class="tsc_tables2_1" summary="Cart of User" style="width:75%; align:center;" id="proiontakalathiou">
    <thead>
      <tr style="vertical-align:middle">
        <th scope="col">Email Χρήστη</th>
        <th scope="col">Διεύθυνση Αποστολής</th>
        <th scope="col">Συνολική Τιμή</th>
        <th scope="col">Συνολικό Βάρος</th>
        <th scope="col">Ημερομηνία Δημιουργίας</th> 
        <th scope="col">Ολοκληρώθηκε </th>
        <th scope="col">Ακύρωση </th>
      </tr>
    </thead>
    <tbody>
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
			echo "Connection faild";
		}
						
		if (!$conn->set_charset("utf8")) {
    		printf("Error loading character set utf8: %s\n", $conn->error);
    		die;
		}		
		$not = 0;										
    	$stoixeiaParaggeliwn = "SELECT * FROM `ORDERS` WHERE Completed = '$not' AND Canceled = '$not' ";
		$result = $conn->query($stoixeiaParaggeliwn);
		$options = ""; 	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$code = $row["Code"];
				$email = $row["userEmail"];
				$address = $row["AddressSent"];
				$city = $row["citySent"];
				$country = $row["countrySent"];
				$pc = $row["postalSent"];
				$date = $row["DateCreated"];
				$price = $row["Price"];
				$weight = $row["Weight"];
		
				echo "<tr>";
				echo "<td>$email  </td>";
				echo "<td>$address, $city, $country, $pc<br><br></td>";
				echo "<td>$price   </td>";
				echo "<td>$weight  </td>";
				echo "<td>$date </td>";
				echo "<td><input type='submit' class='oloklirwsiSubmit' id='oloklirwthike' name='oloklirwsi' value=$code></td>";
				echo "<td><input type='submit' class='searchSubmit' id='diagrapsou$counter' name='akirwthike' value=$code></td>";
				echo "</tr>";
				
				}
		}

   ?>
     </tbody>
   </table>
   <br><br>
   
   </form>
   

   <!--/slider -->
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
						    <li><a href="about.html">Ποιοι Είμαστε</a></li>
				           <!-- <li><a href="terms.html">Όροι Χρήσης</a></li>-->
				            <li><a href="delivery.html">Τρόποι Πληρωμής και Παραγγελιών</a></li>
			
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