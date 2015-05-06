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
<title>Προσθήκη Κουπονιού</title>
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
					 color: white;
				 }

				 .auto-style3 {
					color: red ;
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
				 .auto-style6 {
					color: #009900;
				 }

				 .auto-style7 {
					 margin-left: 0px;
				 }

				 </style>
    
    <script src="addProduct_check.js"></script>
 <script>

function CheckCoupon(){

 	var frm = document.forms["addCoupon"];

 	if (frm.name.value == "Όνομα Εστιατορίου"){
		alert ('Καταχωρήστε το όνομα του εστιατορίου!');
	  	return false;
	}
	
 	if (frm.address.value == "Διεύθυνση Εστιατορίου"){
		alert ('Καταχωρήστε τη διεύθυνση του εστιατορίου!');
	  	return false;
	}

 	if (frm.til.value == "Τηλέφωνο Εστιατορίου"){
		alert ('Καταχωρήστε το τηλέφωνο του εστιατορίου!');
	  	return false;
	}
 	if (frm.title.value == "Τίτλος Κουπονιού"){
		alert ('Καταχωρήστε το τίτλο του κουπονιού!');
	  	return false;
	}

	if (frm.description.value == "Περιγραφή Κουπονιού:" ){
	  	alert ('Καταχωρήστε την περιγραφή του κουπονιού!');
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
	</div>  <!-- start slider -->
    <div id="fwslider">
            </div>
    <!--/slider -->
<div class="main">
	  
<div class="login">
       <div class="wrap" style="width: 77%">
	    	    <ul class="breadcrumb breadcrumb__t">Προσθήκη Νέου Κουπονιού /<a class="home" href="deleteCoupon_select.php">Διαγράφη Κουπονιού</a></ul>

	     <div class="clear"></div>

	    <p class="auto-style3"><?php echo $_SESSION['error_addCoupon']; $_SESSION['error_addCoupon'] = " "; ?></p>
	    <p class="auto-style6"><?php echo $_SESSION['ok_addCoupon']; $_SESSION['ok_addCoupon'] = " " ; ?></p>
	   
	   	<div class="clear"></div>

		   <div class="content-top">
			   <form id='addCoupon' enctype="multipart/form-data" onsubmit="return CheckCoupon()" method="post" action="addCoupon_database.php" accept-charset="utf8" >
					<div class="to">
						<input name="name" type="text" class="text" value="Όνομα Εστιατορίου" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Όνομα Εστιατορίου';}" style="width: 37%">
					 	<input name="address" type="text" class="text" value="Διεύθυνση Εστιατορίου" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Διεύθυνση Εστιατορίου';}" style="margin-left: 10px; width: 49%;">
						<input name="til" type="text" class="auto-style7" value="Τηλέφωνο Εστιατορίου" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Τηλέφωνο Εστιατορίου';}" style="width: 27%;">
						<input name="title" type="text" class="text" value="Τίτλος Κουπονιού" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Τίτλος Κουπονιού';}" style="margin-left: 10px; width: 42%;">					</div>
				
					<div class="clear"></div>

					<div class="text">
						<p class="m_text2" style=" display:inline;width: 76%; color:#008000"> Περιγραφή Κουπονιού (πχ προσφορά, όρους χρήσης, μεχρι ποια ημερομηνία ισχύει, κτλ)</p>	                  
						 <textarea name="description" value="Περιγραφή Κουπονιού" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Περιγραφή Κουπονιού:';}" style="height: 97px; width: 94%;">Περιγραφή Κουπονιού:</textarea>
	                </div>
	                
	                <div>
	             <p class="auto-style1">Φωτογραφία Κουπονιού</p>
	             <br>
				    <input type="file" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)">
				    <br>
				   <br>
				    <img  id="output" width="100" height="100">
						<script>
						  var loadFile = function(event) {
						    var output = document.getElementById('output');
						    output.src = URL.createObjectURL(event.target.files[0]);
						  };
						</script>   
		                <div class="clear"></div>
					<br>

	                <div class="submit">
	               		<input type="submit" value="Καταχώρηση">
	                </div>
	               </div> 

               </form>
            </div>
    </div>
    </div>
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
		  <img src="images/3.png" width="58"><span class="auto-style2">Καλέστε 
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