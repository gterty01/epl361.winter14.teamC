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
<title>Επεξεργασία Προμηθευτή - - Επιλογή Προμηθευτή</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
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
				 .auto-style7 {
					 color: #000000;
				 }
				 .auto-style6 {
					color: #009900;
				 }
				 .auto-style4 {
					margin-left: 0;
				}
				.auto-style5 {
					float: none;
					margin-left: 0;
					margin-top: 6px;
					display:table-row;
				}

				 </style>   
    
    <script src="selectedDropdown.js"></script>
    <script>
	function check() {
		var frm = document.forms["editSupplier"];

		if (frm.supplier.value == "" ){
	  		alert ('Διαλέξτε τον προμηθευτή που θέλετε να επεξεργαστείτε!');
	  		return false;
		}
	}    
    
    </script>
				 
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
	</div>
<div class="header-bottom">
	    <div class="wrap" style="width: 98%">
			<div class="header-bottom-left">
				<div class="logo" >
					<a href="admin_login.php">
					<img src="images/trofima.jpg"></a>
				</div>
				<div class="auto-style5" style="height:100px" >
	            <ul class="megamenu skyblue" >
			<li class="active grid"><a href="admin_login.php">ΑΡΧΙΚΗ</a></li>
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
     <div class="clear"></div>
     <div class="clear"></div>
     <br>

     </div>
	</div>	
<div class="login">
       <div class="wrap" style="width: 77%">
<ul class="breadcrumb breadcrumb__t"><a class="home" href="addSupplier.php"> Προσθήκη Νέου Προμηθευτή </a> /<a class="home" href="removeSupplier.php">Διαγράφη Προμηθευτή</a>/Επεξεργασία Προμηθευτή</ul>
	

<form id='editSupplier' onsubmit="return check();" method="post" accept-charset="utf8" action="editSupplier_showSupplier.php" >


<div>
<br>
<select name="supplier" style="width: 600px; height: 37px">
<option value="">Διαλέξτε τον προμηθευτή που θέλετε να επεξεργαστείτε</option>
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
		$querys = "SELECT * FROM `SUPPLIER`";
		$result = $conn->query($querys);
		//echo "$CodeCategory";
		if($result->num_rows > 0){
			echo '<br>';
			while($row = $result->fetch_assoc()) {
				$nameSupplier = $row["CompanyName"];
				$CodeSupplier = $row["SupplierNumber"];
				echo '<option value="' . $CodeSupplier . '">';
				echo $nameSupplier;
				echo '</option>';
		    
			}
		}
?>
</select>
</div>
<br>

	  <div class="submit" >
	  <input type="submit" value="Επεξεργασία"></div>

</form>
</div>	
     <div class="clear"></div>
<br>
<br>	
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
				            <li><a href="terms.html">Όροι Χρήσης</a></li>
				            <li><a href="delivery.html">Τρόποι Πληρωμής και Παραγγελιών</a></li>
				            <li><a href="copyright.html">Copyright</a></li>
			
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
					<li class="active"><a href="about.html">Ποιοι Είμαστε</a></li> |
					<li><a href="terms.html">Όροι & Προϋποθέσεις</a></li> |
					<li><a href="contact.html">Επικοινωνήστε μαζί μας</a></li> 
				 </ul>
			    </div>
			    <div class="clear"></div>
			    </div>
		      </div>
	     	
	     	 </div>

</div>

</body>

</html>
