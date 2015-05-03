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
 th{
	color: black;
}
.button1{
	float:left;
	margin-top: 6%;
}

</style>
<script>
	function check() {
	
	var frm = document.forms["imerominiaApostolis"];

  	re=/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
  	if (!(re.test(frm.date.value))){	
  		alert ('Καταχωρήστε την Ημερομηνία Αποστολής στη μορφή YYYY-MM-DD');
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
    </div>
     <div class="clear"></div>
     <br>
     </div>
<div class="wrap">
	<h4 class="title">Προϊοντα</h4>
    	    <div class="clear"></div>
    		<table>
    		<thead>
		      <tr>
		        <th class="remove" style="width: 266px; height: 19px">Όνομα</th>
		        <th class="remove" style="width: 291px; height: 19px">Ποσότητα</th>
		        <th class="remove" style="width: 291px; height: 19px">Ποσό</th>
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
						
  				$code = $_SESSION["code_order"];
  				$stoixeiaParaggelias = "SELECT * FROM `SERIESOFORDERS` WHERE CodeOfOrder = '$code'";
				$result = $conn->query($stoixeiaParaggelias);	
				$sinoliko = 0;
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()) {
						$product = $row["CodeOfProduct"];
						$quantity = $row["Quantity"];
  						$stoixeiaProiontwn= "SELECT * FROM `PRODUCT` WHERE Code = '$product'";
  						$result1 = $conn->query($stoixeiaProiontwn);	
  						if($result1->num_rows > 0){
							while($row1 = $result1->fetch_assoc()) {
								$name = $row1["Name"];
								$price = $row1["Price"];
								$poso = $price * $quantity;
								echo "<tr>";
			    	    		echo "<td><p class='m_text2'>$name</p></td>";
			    	    		echo "<td><p class='m_text2'>$quantity</p></td>";
			    	    		echo "<td><p class='m_text2'>$poso</p></td>";
								echo "</tr>";
								$sinoliko = $sinoliko + $poso;
							}
						}
					}
				}
			?> 
    	    	 <tr>
    	    	  <td><br></td>
			 	</tr>
      	    	<tr>
				 <th class="txt-lt" style="width: 266px; height: 19px">Σύνολο</th>
				 <td><h1 class="remove" style="width: 266px; height: 19px">€<?php echo $sinoliko?></h1></td>
								
    	    	</tr>

    	    </tbody>
			</table>
<form id='imerominiaApostolis' method="post" onsubmit="return check()" action="manageEditOrder_database.php" name="imerominiaApostolis">			
	<h1 class="remove" style="height: 19px">Καθορίστε την ημερομηνία που αποστάλθηκε η παραγγελία: </h1>
	<br>
	<input id="date" type="text" name="date" size="18" style="width: 19%">	

<div class="button1">
<input type="submit" name="Submit" class="button" value="Υποβολή">
</div>
</form>
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