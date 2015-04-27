<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Προσθήκη Προσφοράς</title>
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
				 .auto-style3 {
					color: black ;
				}
				.auto-style4 {
					color: red ;
				}
				.auto-style5 {
					float: none;
					margin-left: 0;
					margin-top: 6px;
					display:table-row;
				}
				.auto-style6 {
					color: green ;
				}

				 .auto-style7 {
					 margin-top: 3px;
				 }
				 </style>
    
    <script src="addSupplier_check.js"></script>
    
	<script>
	function check(){
		if(document.getElementById('parousa').checked) {
			return true;
	
		}
		if(document.getElementById('palia').checked){
			return true;
		}
		
		  alert('Δεν διαλέξατε ποιά τιμή θα θέλατε να έχει το προϊόν σας μετά την διαγραφή της προσφοράς!');
		  return false;
	
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
     <div class="clear"></div>
     <div class="clear"></div>
     <br>

     </div>
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
	parse_url(file_get_contents("php://input"), $_POST);	
	
	if (!$conn->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $conn->error);
    	die;
	}

	session_start();
	
	$Code= $_POST['Product_offer'];	
	$querys = "SELECT * FROM `PRODUCT` where Code = '$Code' ";
	$result=$conn->query($querys);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$_SESSION['newPrice'] = $row["Price"];
			$_SESSION['Name'] = $row["Name"];
			$_SESSION['Code'] = $row["Code"];
		}
	}
	
	$querys = "SELECT * FROM `OFFER` where CodeOfProduct = '$Code' ";
	$result=$conn->query($querys);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$_SESSION['oldPrice'] = $row["OldValue"];
		}
	}
	
	?>

  <!-- start slider -->
    <div id="fwslider">
            </div>
    <!--/slider -->
<div class="main">
	  
<div class="login">
       <div class="wrap" style="width: 77%">
		<ul class="breadcrumb breadcrumb__t"><a class="home" href="addOffer_selectProduct.php">Προσθήκη Νέας Προσφοράς </a>/Αφαίρεση Προσφοράς - Επαναφορά Αρχικής Τιμής</ul>
	    
	     <div class="clear"></div>

	    <p class="auto-style4"><?php echo $_SESSION['error_removeOffer']; $_SESSION['error_removeOffer'] = " "; ?></p>

	   <div class="clear"></div>
		<br>
		<br>
	    
		   <div class="content-top">
			   <form id='addOffer2' enctype="multipart/form-data" onsubmit="return check()" method="post" action="removeOffer_database.php" accept-charset="utf8" >
					
					<h1 class="remove" style="display:inline">Όνομα Προϊόντος για Αφαίρεση Προσφοράς: </h1> <p class="m_text2" style="display:inline"><?php echo $_SESSION['Name']; ?> </p> 
					<br>
					<br>
					<br>

					<div class="to">
						<p class="auto-style3" style="display:inline"> Παλιά Τιμή:</p>
 						<p class="auto-style3" style="display:inline; margin-left: 150px;"> Νέα Τιμή:</p>                    	
						<br>
                     	<input name="palia_timi" type="text" class="text" value="<?php echo $_SESSION['oldPrice']; ?>" readonly style="margin-left: 10px; width: 18%;">
                     	<input name="nea_timi" type="text" class="text" value="<?php echo $_SESSION['newPrice']; ?>" readonly style="margin-left: 10px; width: 21%;">
					</div>
					<br>			
					<div class="clear"></div>
					<h1 class="remove">Διαλέξτε ποιά τιμή θα θέλατε να έχει το προϊόν σας μετά την διαγραφή της προσφοράς: </h1>
					<p class="m_text2">
						<input type="radio" id="parousa" name="iperkatigoria" value="parousatimi">Διατήρηση παρούσας τιμής
						<br>
						<br>
						<input type="radio" id="palia" name="iperkatigoria" value="paliatimi">Επαναφορά παλιάς τιμής
					</p>
				<div class="clear"></div>

					<br>
	    	  <div class="submit" >
     		 	<input type="submit" value="Διαγραφή προσφοράς" style="width: 236px; height: 48px" class="auto-style7">
             </div>

               </form>
            </div>
    </div>
    </div>
			<div class="clear"></div>
<div class="footer-bottom1">

                             <p class="pull-left">Copyright Β© 2014 Cyprus Food Museum  All rights reserved.</p>
                              <p class="pull-right">Designed by <span><a target="_blank" href="http://foodmuseum.cs.ucy.ac.cy/web/guest/home">Cyprus Food Museum</a></span></p>
                          </div>
                      </div>

</body>
</html>