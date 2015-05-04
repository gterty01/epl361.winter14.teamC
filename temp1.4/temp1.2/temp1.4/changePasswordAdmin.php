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
<title>Αλλαγή Κωδικού Πρόσβασης</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>


<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
<style type="text/css">
.auto-style1 {
	width: 90%;
	-moz-transition: all .2s linear;
	-webkit-transition: all .2s linear;
	-o-transition: all .2s linear;
	-ms-transition: all .2s linear;
	margin: 0 auto;
}
.auto-style2 {
	color: #FFFFFF;
}
.auto-style3 {
	color: red ;
}
.auto-style4 {
	font-size: medium;
}
.auto-style5 {
	color: #009900;
}
.auto-style6 {
	float: none;
	margin-left: 0;
	margin-top: 6px;
	display:table-row;
}
p.code1{
	color:#008000;
}

</style>

<script>

function checkNewPassword(){

	var frm = document.forms["ChangePassword"];
	var pass1 = frm.passwdNew.value.length;
	var fr1 = parseInt(pass1, 10);
	var pass2 = frm.passwdOld.value.length;
	var fr2 = parseInt(pass2, 10);
	
	var sigkrisi = parseInt("6",10);
	var sigkrisi2 = parseInt("1",10);

	if (fr2 < sigkrisi2){
		alert('Δεν καταχώρησατε τον προγηγούμενο κωδικό πρόσβασης σας');
	  	return false;
	}

	if (fr1 < sigkrisi){
		alert('Καταχωρήστε τον νέο κωδικό σας, με τουλάχιστον 6 χαρακτήρες');
	  	return false;
	}

  	if(frm.passwdNew.value != frm.passwdRepeat.value){
    	alert('Ο κωδικός που δώσατε δεν είναι ίδιος με την Επιβεβαίωσή του. Δώστε ίδιο κωδικό και στα δύο πεδία.');
    	return false;
  	}

}
</script>
</head>
<body> 
   <div class="header-top">
	   <div class="wrap" style="width: 91%"> 
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
					<li class="active"><a href=""><?php echo $_SESSION['login_admin']; ?></a></li> |
					<li><a href="checkout.html">Λίστα Αγορών</a></li> |
					<li><a href="checkout.html">Πραγματοποίηση Αγοράς</a></li> |
					<li><a href="logout.php">Αποσύνδεση</a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap" style="width: 98%">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="login_index.php">
					<img src="images/trofima.jpg"></a>
				</div>
				<div class="auto-style6" style="height:100px" >
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
            <form id='anazitisi' method="POST" action="searchServer.php" accept-charset="UTF-8"> <!--method='post'-->
  
				<input type="text" name="search" id="search" class="auto-style4" value="Αναζήτηση" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Αναζήτηση';}" style="width: 159px">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				
				<div id="response"> </div>
				</form>
		 </div>
	  <div class="tag-list">
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
	
	<p class="auto-style3"  style="margin-left:2%;"><?php echo $_SESSION['error_changePassword']; $_SESSION['error_changePassword'] = " "; ?></p>
	<p class="auto-style5" style="margin-left:2%;"><?php echo $_SESSION['ok_changePassword']; $_SESSION['ok_changePassword'] = " "; ?></p>


          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Αλλαγη Κωδικου Προσβασης διαχειριστη</h4>
    	    
    		   <form id='ChangePassword' onsubmit="return checkNewPassword();" method="POST" action="changePassword_database.php" accept-charset="UTF-8"> <!--method='post'-->
    									
    			 <div class="col_1_of_2 span_1_of_2" style="width: 40%;">
				 	<p class="m_text2">Προηγούμενος Κωδικός Πρόσβασης</p>
		    	 	<div><input type="password" id="passwdOld" name ="passwdOld" value=""></div>
		          	<p class="m_text2">Νέος Κωδικός Πρόσβασης</p>
					<div><input type="password" id="passwdNew" name="passwdNew" value=""></div>
					<p class="m_text2">Επανάληψη Νέου Κωδικού Πρόσβασης</p>
					<div><input type="password" id="passwdRepeat" name="passwdRepeat" value=""></div>					
		    	 </div>
		    	 <div>
		         <br>
		    <div class="clear"></div>
		         <br>
		      		<button type="submit" class="grey" name="submit" value="Submit" style="float:none">Αποθηκευση νεου κωδικου προσβασης</button></div>
		    <div class="clear"></div>
		    </form>						
		    
		    
    	</div>
    </div>
   <div class="footer">
		<div class="footer-middle">
			<div class="wrap">		   
		   <div class="auto-style3">
		   	   <br>
			 <div class="col_1_of_f_1 span_1_of_f_1" style="width: 98%">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2" style="width: 41%; margin-left: 0; height: 150px">
				    <h2>ΠΛΗΡΟΦΟΡΙΕςΠΛΗΡΟΦΟΡΙΕς</h2>
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
		  <div class="clear">
			  <img src="images/3.png" width="58" class="auto-style2"><span class="auto-style1"><span class="auto-style2">Καλέστε 
					μας στο: 99 05 98 20</span><a href="https://www.facebook.com/pages/Cyprus-Food-Virtual-Museum/104034939677867?fref=ts" target="_blank"><img src="images/find_us_facebook_logo.gif" class="auto-style2" height="57" width="143"></a><div class="wrap" style="width: 90%; height: 24px">
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

   </body>
   
</html>
