<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<?php
if (!(isset($_SESSION['login_user']))){
header("Location: login.html");
die();


}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Προβολή Παραγγελιών</title>
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
	.tablewrapper{width: 95%; overflow-y: hidden; overflow-x: auto; 
 background-color:white;  height: auto; padding: 5px;}
	 .auto-style1 {
		color:white;
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
					<li class="active"><?php echo $_SESSION['login_user']; ?></li> |
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
<h4 class="title">Παραγγελιες που Εκκρεμουν</h4>
	<form method="post" action="manageOrdersNotCompleted_database.php" name="formadiagrafis">
			<div class="tablewrapper">
  <table class="responsive" summary="Cart of User" style="width:91%; align:center;" id="proiontakalathiou">
   <!-- <thead>
      <tr style="vertical-align:middle">
        <th scope="col">Διεύθυνση Αποστολής</th>
        <th scope="col">Συνολική Τιμή</th>
        <th scope="col">Συνολικό Βάρος</th>
        <th scope="col">Ημερομηνία Δημιουργίας</th> 
      </tr>
    </thead>
    <tbody> -->
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
		$email = $_SESSION['login_user'];		
		$no = 0;										
    	$stoixeiaParaggeliwn = "SELECT * FROM `ORDERS` WHERE userEmail = '$email' AND Completed = '$no'";
		$result = $conn->query($stoixeiaParaggeliwn);
		$options = ""; 	
		if($result->num_rows > 0){
		//echo '<h4 class="title">Παραγγελιες που Εκκρεμουν</h4>';
		echo '<br>';
  		echo '<tr style="vertical-align:middle">';
        echo '<th scope="col">Διεύθυνση Αποστολής</th>';
        echo '<th scope="col">Συνολική Τιμή</th>';
        echo '<th scope="col">Συνολικό Βάρος</th>';
        echo '<th scope="col">Ημερομηνία Δημιουργίας</th>'; 
      	echo '</tr>';
    	echo '</thead>';
    	echo '<tbody>';
			while($row = $result->fetch_assoc()) {
				$code = $row["Code"];
				$email = $row["userEmail"];
				$address = $row["AddressSent"];
				$city = $row["citySent"];
				$country = $row["countrySent"];
				$pc = $row["postalSent"];
				$dateSent = $row["DateSent"];
				$dateCreated = $row["DateCreated"];
				$price = $row["Price"];
				$weight = $row["Weight"];
				$complete = $row["Completed"];
				$cancel = $row["Canceled"];
	 			
				echo '<tr onclick="window.location.href= \'showProductsOfOrder.php?order='.urlencode($code).' \'">';
				echo "<td>$address, $city, $country, $pc<br><br></td>";
				echo "<td>$price   </td>";
				echo "<td>$weight  </td>";
				echo "<td>$dateCreated </td>";
				echo "</tr>";
					
			}
		}
	echo '</tbody>';

   ?>
   </table>
   </div>
        <br>
     <br>

      <div class="clear"></div>
      <h4 class="title">Παραγγελιες που Ολοκληρωθηκαν/Ακυρωθηκαν</h4>
		<div class="tablewrapper">
     <table class="responsive" summary="Cart of User" style="width:91%; align:center;" id="proiontakalathiou">
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
		$email = $_SESSION['login_user'];		
		$yes = 1;										
    	$stoixeiaParaggeliwn = "SELECT * FROM `ORDERS` WHERE userEmail = '$email' AND (Completed = '$yes' OR Canceled = '$yes')";
		$result = $conn->query($stoixeiaParaggeliwn);
		$options = ""; 	
		if($result->num_rows > 0){
		
		

		//echo '<h4 class="title">Παραγγελιες που Ολοκληρωθηκαν/Ακυρωθηκαν</h4>';
		echo '<br>';
  		echo '<tr style="vertical-align:middle">';
        echo '<th scope="col">Διεύθυνση Αποστολής</th>';
        echo '<th scope="col">Συνολική Τιμή</th>';
        echo '<th scope="col">Συνολικό Βάρος</th>';
        echo '<th scope="col">Ημερομηνία Δημιουργίας</th>'; 
        echo '<th scope="col">Κατάσταση</th>'; 

      	echo '</tr>';
    	echo '</thead>';
    	echo '<tbody>';
			while($row = $result->fetch_assoc()) {
				$code = $row["Code"];
				$email = $row["userEmail"];
				$address = $row["AddressSent"];
				$city = $row["citySent"];
				$country = $row["countrySent"];
				$pc = $row["postalSent"];
				$dateSent = $row["DateSent"];
				$dateCreated = $row["DateCreated"];
				$price = $row["Price"];
				$weight = $row["Weight"];
				$complete = $row["Completed"];
				$cancel = $row["Canceled"];
	 			
				echo '<tr onclick="window.location.href= \'showProductsOfOrder.php?order='.urlencode($code).' \'">';
				echo "<td>$address, $city, $country, $pc<br><br></td>";
				echo "<td>$price   </td>";
				echo "<td>$weight  </td>";
				echo "<td>$dateCreated </td>";
				if ($complete == 1){
						echo "<td>Ολοκληρώθηκε</td>";
				}else{
					if ($cancel == 1){
						echo "<td>Ακυρώθηκε</td>";
					}
				}
				echo "</tr>";
					
			}
		}
	echo '</tbody>';

   ?>
   </table>
   </div>

   <br><br>
   
   </form>
   

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

</body>
</html>