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
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet">

<title>Προσθήκη Προϊόντων</title>
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
				 .auto-style1 {
					 color: gray;
				 }
				 .auto-style2 {
					 margin-left: 0px;
				 }
				 .auto-style5 {
					color: #FF0000;
				 }
				 .auto-style6 {
					color: #009900;
				 }

				 </style>
    
    <script src="addProduct_check.js"></script>
				 
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
					<li class="active"><a href="#">Σύνδεση ως διαχειριστής</a></li> |
					<li><a href="index.html">Αποσύνδεση</a></li> |
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
	            <ul class="megamenu skyblue" style="left: -41px; top: 50px">
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
     </div>
	</div>
  <!-- start slider -->
    <div id="fwslider">
            </div>
    <!--/slider -->
<div class="main">
	  
<div class="login">
       <div class="wrap" style="width: 77%">
	    <ul class="breadcrumb breadcrumb__t">Προσθήκη Νέου Προϊόντος /<a class="home" href="removeProduct.php">Διαγράφη Προϊόντος</a>/<a class="home" href="editProduct_selectCategory.php">Επεξεργασία Προϊόντος </a></ul>
	    
	     <div class="clear"></div>

	    <p class="auto-style5"><?php echo $_SESSION['error_add']; $_SESSION['error_add'] = " "; ?></p>
	    <p class="auto-style6"><?php echo $_SESSION['ok_add']; $_SESSION['ok_add'] = " " ; ?></p>
		   <div class="content-top">
			   <form id='addProduct' onsubmit="return CheckProduct()" method="post" action="addProduct.php" >
					<div class="to">
                     	<input name="name" type="text" class="text" value="Όνομα Προϊόντος" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Όνομα Προϊόντος';}" style="width: 37%">
					 	<input name="price" type="text" class="text" value="Τιμή" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Τιμή';}" style="margin-left: 10px; width: 14%;">
						<input name="quantity" type="text" class="text" value="Ποσότητα" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ποσότητα';}" style="margin-left: 10px; width: 13%;">
						<input name="weight" type="text" class="text" value="Βάρος σε Kg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Βάρος σε kg';}" style="margin-left: 10px; width: 15%;">
					</div>
					 
					<div class="to">
					<p><select name="category" style="width: 329px; height: 37px">
					<option value="">Διάλεξε την κατηγορία του προϊόντος</option>
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
						echo "Connected successfully";
										
						$querys = "SELECT * FROM `CATEGORY`";
						$result = $conn->query($querys);
						$options = ""; 	
						if($result->num_rows > 0){
						 	while($row = $result->fetch_assoc()) {
								$codeCategory = $row["CodeCat"];
								$category = $row["NameCat"];
								print '<option value="' . $codeCategory . '">';
								print $category;
								print '</option>';
							}							
						}
					?>
				</select>;

					<select name="supplier" style="width: 329px; height: 37px">
					<option value="">Διάλεξε τον προμηθευτή του προϊόντος</option>
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
						$querys = "SELECT * FROM `SUPPLIER`";
						$result = $conn->query($querys);
						$options = ""; 	
						if($result->num_rows > 0){
						 	while($row = $result->fetch_assoc()) {
								$codeSupplier = $row["SupplierNumber"];
								$supplier = $row["CompanyName"];
								echo '<option value="' . $codeSupplier . '">';
								echo $supplier ;
								echo '</option>';
							}
						}
					?>
					</select>
					</div>
				
					<div class="clear"></div>

					<div class="text">
	                   <textarea name="description" value="Περιγραφή Προϊόντος" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Περιγραφή Προϊόντος:';}" style="height: 97px; width: 94%;">Περιγραφή Προϊόντος:</textarea>
	                </div>
	                
	                <div>
	             <p class="auto-style1">Φωτογραφία Προϊόντος</p>
	             <br>
	                <form enctype="multipart/form-data" action="insert.php" method="post" name="changer">
						<input name="MAX_FILE_SIZE" value="2,048KB" type="hidden">
						<input name="image" accept="image/png" type="file">
					</form>
	                <!--<p class="auto-style1">Φωτογραφία Προϊόντος</p>
					   <img  alt=""  width="74" height="84"id="blah" src="images/karydaki.jpg" alt="your image" />
					   <input type='file' onchange="readURL(this);" />
	                </div> -->
	                <div class="clear"></div>
					<br>

	                <div class="submit">
	               		<input type="submit" value="Καταχώρηση">
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
                  </div>

</body>
</html>