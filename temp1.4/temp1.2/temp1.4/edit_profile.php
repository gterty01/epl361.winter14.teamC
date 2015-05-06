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
	header("Location: login.php");
}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Επεξεργασία Προφίλ Χρήστη</title>
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
	color:white;
}
.auto-style2 {
	color: #FFFFFF;
}

.auto-style4 {
	font-size: medium;
}
p.code1{
	color:#008000;
}

</style>
<script src="edit_profile_check.js" ></script>

</head>
<body> 
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
				echo "<li><a class='active-icon c2' href='checkout.html'> </a>";
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
				echo "<ul class='last'><li><a href='checkout.html'>ΚΑΛΑΘΙ(0)</a></li></ul>";						
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
				<li><a class="color7" href="prosfores.php" target="_blank">Συνταγες</a></li>

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
          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Επεξεργασια Στοιχειων του Λογαριασμου σας</h4>
    	    
    		   <form id='EditProfile' onsubmit="return CheckProfile();" method="POST" action="edit_profile_database.php" accept-charset="UTF-8"> <!--method='post'-->
    									
    			 <div class="col_1_of_2 span_1_of_2">
    			 	<p class="code1">Όνομα</p>
		   			<div><input type="text" id ="name" name ="name" value="<?php echo $_SESSION['onoma']; ?>"></div>
				 	<p class="code1">Επίθετο</p>
		  		   	<div><input type="text" id ="surname" name="surname" value="<?php echo $_SESSION['epitheto']; ?>" ></div>
		          	<p class="code1">Ημερομηνία Γέννησης</p>
					<div><input type="text" id="birth" name="birth" value="<?php echo $_SESSION['birth']; ?>"></div>
		          	<p class="code1">Φύλο</p>
					<div><select id="filo" name="filo" onchange="change_country(this.value)" class="frm-field required">
		            <option value="<?php if ($_SESSION['filo']!="null") echo $_SESSION['filo']; else echo "Φύλο" ?>"><?php if ($_SESSION['filo']!="null") echo $_SESSION['filo']; else echo "Φύλο" ?></option>         
		            <option value="Αρρεν">Αρρεν</option>  
		            <option value="Θηλυ">Θηλυ</option>
		            </select>
		          	<p class="code1">Αριθμός Κινητού Τηλεφώνου</p>
		            <div>
						<input type="text" id="tel1" name="tel1" value="<?php echo $_SESSION['tel1']; ?>" class="number" style="width: 87%">
		          	<p class="code1">Αριθμός Σταθερού Τηλεφώνου</p>
		           <input type="text" id="tel2" name="tel2" value="<?php echo $_SESSION['tel2']; ?>" class="number" style="width: 88%">
					</div>
					</div>

		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">
		    	  	<p class="code1">Διεύθυνση 1</p>
		    		<div><input type="text" id="address1" name="address1" value="<?php echo $_SESSION['d1']; ?>"></div>
		          	<p class="code1">Διεύθυνση 2</p>
		    		<div><input type="text" id="address2" name="address2" value="<?php if ($_SESSION['d2']!="null") echo $_SESSION['d2']; ?>" ></div>
		           	<p class="code1">Ταχυδρομικός Κώδικας</p>
		    		<div><input type="text" id="postalCode" name="postalCode" value="<?php echo $_SESSION['tk']; ?>"></div>
		          	<p class="code1">Χώρα</p>
		    		<div><select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
		           		             <option value="<?php echo $_SESSION['xwra']; ?>"><?php echo $_SESSION['xwra']; ?></option>
									<option value="Åland Islands">Åland Islands</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua And Barbuda">Antigua And Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet ">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape ">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Congo, Democractic Republic">Congo, Democractic Republic</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
									<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
									<option value="Cuba">Cuba</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="East Timor">East Timor</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvado">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji Islands">Fiji Islands</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="France, Metropolitan">France, Metropolitan</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia, The</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong S.A.R.">Hong Kong S.A.R.</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea">Korea</option>
									<option value="Korea, North">Korea, North</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Laos">Laos</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macau S.A.R.">Macau S.A.R.</option>
									<option value="Macedonia">Macedonia</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall ">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia">Micronesia</option>
									<option value="Moldova">Moldova</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="Netherlands Antilles">Netherlands Antilles</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
									<option value="Panama">Panama</option>
									<option value="Papua new Guinea">Papua new Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn Island">Pitcairn Island</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Helena">Saint Helena</option>
									<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
											            
		         </select></div>	
		          <p class="code1">Πόλη</p>  
		          <div><input type="text" id="city" name="city" value="<?php echo $_SESSION['poli']; ?>"></div>
		           <div>
		          </div>

		          </div>
		         <div>
		         <br>
		    <div class="clear"></div>
		         <br>
		      		<button type="submit" class="grey" name="submit" value="Submit" style="float:right">Αποθηκευση στοιχειων</button></div>
		    <div class="clear"></div>
		    </form>						
		    
		    
    	</div>
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
	     	 </div>
		</div>

</body>

</html>