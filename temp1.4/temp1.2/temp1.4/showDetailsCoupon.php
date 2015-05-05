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
<title>Προβολή Λεπτομερειών Κουπονιού</title>
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
 th{
	color: black;
}
.button1{
	float:left;
	margin-top: 6%;
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
     <?php
     	
     	$servername = "localhost";
		$username = "cyfoodmuseum";
		$password = "9m8ESxZD";
		$dbname = "cyfoodmuseum";
		
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
	
		$code = $_GET['coupon'];

    	$kouponia = "SELECT * FROM `COUPON` WHERE Code = '$code'";
		$result = $conn->query($kouponia);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
		
				$title = $row["Title"];
				$name = $row["RestaurantName"];
				$address = $row["RestaurantAddress"];
				$til = $row["RestaurantTil"];
				$image = $row['Image'];
				$description = $row['Description'];
		
				$_SESSION['code'] = $code;
				$_SESSION['title'] = $title;
				$_SESSION['name'] = $name;
				$_SESSION['address'] = $address;
				$_SESSION['til'] = $til;
				$_SESSION['image'] = $image;
				$_SESSION['description'] = $description;
			}
		}
     
     
     
     
     ?>
<div class="wrap">
	<h4 class="title">Λεπτομερειες Κουπονιου</h4>
    	    <div class="clear"></div>
    		<div class="content-top">
			   <form id='addCoupon' enctype="multipart/form-data" onsubmit="return CheckCoupon()" method="post" action="addCoupon_database.php" accept-charset="utf8" >
					
					<p class="m_text2" style="display:inline; width: 34%;color:#008000" >Όνομα Εστιατορίου:</p>
					<p class="m_text2" style="display:inline;  margin-left:340px; width: 34%;color:#008000" >Διεύθυνση Εστιατορίου:</p>
					<br>
					
					<div class="to">
						<input name="name" type="text" class="text" value="<?php echo $_SESSION['name']; ?>" readonly style="width: 37%">
						<input name="address" type="text" class="text" value="<?php echo $_SESSION['address']; ?>" readonly style="margin-left: 10px; width: 49%;">
					</div>
					
					<div class="clear"></div>
						<p class="m_text2" style=" display:inline;width: 34%;color:#008000" >Τηλέφωνο Εστιατορίου:</p>
						<p class="m_text2" style="display:inline;  margin-left:190px; width: 34%;color:#008000" >Τίτλος Κουπονιού:</p>

					<div class="to">
						<input name="til" type="text" class="auto-style7" value="<?php echo $_SESSION['til']; ?>" readonly style="width: 27%;">
						<input name="title" type="text" class="text" value="<?php echo $_SESSION['title']; ?>" readonly style="margin-left: 10px; width: 42%;">					
					</div>		
					<div class="clear"></div>

					<div class="text">
						<p class="m_text2" style=" display:inline;width: 76%; color:#008000"> Περιγραφή Κουπονιού (πχ προσφορά, όρους χρήσης, μεχρι ποια ημερομηνία ισχύει, κτλ)</p>
	                   <textarea name="description" value="Περιγραφή Κουπονιού" readonly style="height: 97px; width: 94%;" cols="20" rows="1"><?php echo $_SESSION['description']; ?></textarea>
	                </div>
            	  <div class="clear"></div>
	  	           <div>
		             <?php 
		                if ($_SESSION['image'] != "") {
			            	echo '<p class="m_text2" style=" display:inline;width: 76%; color:#008000">Φωτογραφία Κουπονιού</p>';
			               	echo '<br>';
			               	echo '<br>';			               	
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $_SESSION['image'] ).'" width="100" height="100"/>';
		                }
		             ?>
	               </div> 
               </form>
            </div>
<br>	  
<div class="clear"></div>
    <a href="deleteCoupon_select.php"><button type="submit" class="grey" name="submit" value="Submit" style="float:none">Πισω - Προβολη Κουπονιων</button></a>

    <a href="deleteCoupon_database.php"><button type="submit" class="grey" name="submit" value="Submit" style="float:inherit">Διαγραφη Κουπονιου</button></a>

<br>

<div class="clear"></div>
<br>
<br>

<div class="footer-bottom1">

	<p class="pull-left">Copyright Β© 2014 Cyprus Food Museum  All rights reserved.</p>
	 <p class="pull-right">Designed by <span><a target="_blank" href="http://foodmuseum.cs.ucy.ac.cy/web/guest/home">Cyprus Food Museum</a></span></p>
	</div>
</div>

</body>
</html>