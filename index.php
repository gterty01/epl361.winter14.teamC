<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
	session_start(); 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>E-shop Cyprus Food Museum  | Αρχική</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'/>
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
<script type="text/javascript">
	function doesExist(){

	alert('Το προϊόν που επιλέξατε υπάρχει ήδη στο καλάθι σας!');
	return false;
	}
</script>

 <script type='text/javascript'>
function validateInsertion(){
				alert('Προστέθηκε στο καλάθι σας!');
				return true;		
			}
	</script>

<style type="text/css">
.auto-style1 {
	color: #FFFFFF;
}
.auto-style2 {
	margin-top: 0px;
}
.auto-style4 {
	margin-left: 0;
}
</style>
</head>
<body style="color: #FFFFFF;" <?php if(isset($_SESSION['alarm'])){ echo "onload='validateInsertion();' "; unset($_SESSION['alarm']); } ?> >
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
				echo "<li><a class='active-icon c2' href='checkout.php'> </a>";
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
				mysqli_close($conn);
				echo "<ul class='last'><li><a href='kalathiProionta.php'>ΚΑΛΑΘΙ($queryCart->num_rows)</a></li></ul>";		
				}else{
				mysqli_close($conn);
				echo "<ul class='last'><li><a href='checkout.php'>ΚΑΛΑΘΙ(0)</a></li></ul>";						
				}		   
		}else{
			echo "<ul class='last'><li><a href=''>ΚΑΛΑΘΙ</a></li></ul>";						

		}
		mysqli_close($conn);	    
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
				<li><a class="color7" href="sintages.php">Συνταγες</a></li>
			</ul>
			<?php
			if (isset($_SESSION['login_admin'])){
			echo "<ul class='megamenu skyblue' >";
echo		"<li><a class='color4' href='#'>ΡΥΘΜΙΣΕΙΣ</a>";
echo				"<div class='megapanel'>";
echo					"<div class='row'>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυθμίσεις Προϊόντων</h4>";
echo								"<ul>";
echo									"<li><a href='addProduct_dropdown.php'>Προσθήκη Προϊόντος</a></li>";
echo									"<li><a href='removeProduct.php'>Διαγραφή Προϊόντος</a></li>";
echo									"<li><a href='editProduct_selectCategory.php'>Επεξεργασία Προϊόντος</a></li>";
echo								"</ul>";	
echo							"</div>";							
echo					  "</div>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυθμίσεις Μελών</h4>";
echo								"<ul>";
echo									"<li><a href='manageUsers.php'>Προβολή και Διαγραφή Μέλους</a></li>";
echo								"</ul>";	
echo							"</div>";							
echo						"</div>";
echo						"</div>";
echo						"<div class='row'>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυθμίσεις Κατηγοριών</h4>";
echo								"<ul>";
echo									"<li><a href='addCategory.php'>Προσθήκη Κατηγορίας</a></li>";
echo									"<li><a href='removeCategory.php'>Διαγραφή Κατηγορίας</a></li>";
echo									"<li><a href='editCategory_selectCategory.php'>Επεξεργασία Κατηγορίας</a></li>";
echo								"</ul>";
echo							"</div>";							
echo					  "</div>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυθμίσεις Παραγγελιών</h4>";
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
echo								"<h4>Ρυθμίσεις Προμηθευτών</h4>";
echo								"<ul>";
echo									"<li><a href='addSupplier.php'>Προσθήκη Προμηθευτή</a></li>";
echo									"<li><a href='removeSupplier.php'>Διαγραφή Προμηθευτή</a></li>";
echo									"<li><a href='editSupplier_selectSupplier.php'>Επεξεργασία Προμηθευτή</a></li>";
echo								"</ul>";	
echo							"</div>";							
echo						"</div>";
echo						"<div class='col1'>";
echo							"<div class='h_nav'>";
echo								"<h4>Ρυθμίσεις Κουπονιών</h4>";
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
echo								"<h4>Ρυθμίσεις Προσφορών</h4>";
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
	<?php
		$sl="SELECT * FROM `SLIDE`";
		$slide=$conn->query($sl);
		$slideFirst=$slide->fetch_assoc();
		$slideSecond=$slide->fetch_assoc();

	
	
	?>
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <!--<img src="images/koupes.jpg" alt=""/>-->
                 <?php   
               echo '<img  src="data:image/jpeg;base64,'.base64_encode( $slideFirst['SlideImage'] ).'" alt="" />';
               ?>

                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <!--<h4 class="title">CY-FOOD MUSEUM</h4>-->
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <h4 class="description"><?php echo $slideFirst['SlideTitle']; ?></h4>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
 				<?php   
               echo '<img  src="data:image/jpeg;base64,'.base64_encode( $slideSecond['SlideImage'] ).'" alt="" />';
               ?>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!--<h4 class="title">CY-FOOD MUSEUM</h4>-->
                        <h4 class="description"><?php echo $slideSecond['SlideTitle']; ?></h4>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Προτεινομενα Προϊοντα</h2>
			<div class="top-box">
			
			<?php
				$contain=0;
				if(isset($_SESSION['login_user'])){
					$xristis=$_SESSION['login_user'];
					$previewd="SELECT * FROM `VIEWPRODUCT` WHERE `UserCode`='$xristis';";
					$queryViewd=$conn->query($previewd);
					if ($queryViewd->num_rows > 0){
						$contain=1;
						
						$maxdate="SELECT MAX(Date_view) as maxdate  FROM `VIEWPRODUCT` WHERE`UserCode`='$xristis'; ";
						$querymax=$conn->query($maxdate);
						$rowMax=$querymax->fetch_assoc();
						$dateMax=$rowMax['maxdate'];
						
						$selectProduct="SELECT `CodeOfProduct` FROM `VIEWPRODUCT` WHERE`UserCode`='$xristis' AND `Date_view`='$dateMax' ; ";
						$queryselectProduct=$conn->query($selectProduct);
						$rowselectProduct=$queryselectProduct->fetch_assoc();

						
						
						
						
						$codeProsfato=$rowselectProduct['CodeOfProduct'];
						
						
						
						
						
						
						$cat="SELECT * FROM `PRODUCT` WHERE `Code`='$codeProsfato';";
						$querykatigoria=$conn->query($cat);
						$rowKat=$querykatigoria->fetch_assoc();
						$katigoria=$rowKat['CodeOfCategory'];
						
						$ipopsifia="SELECT * FROM `PRODUCT` WHERE `CodeOfCategory`='$katigoria' AND `Availability` >0;";
						$quIpopsifia=$conn->query($ipopsifia);
						$range=$quIpopsifia->num_rows;
						
						$var=rand(1,$range);
						$counter=0;
						while ($counter!=$var){
							$rowIpo=$quIpopsifia->fetch_assoc();
							$counter=$counter+1;
						}
						$prwto=$rowIpo['Code'];
						 echo "<div class='col_1_of_3 span_1_of_3'>" ;
						 $productCode=$rowIpo['Code'];
						//echo '<a href="view_exp.php?compna='.urlencode($compname).'">'.$compname.'</a>';
						 echo 	  	 '<a href="single.php?item='.urlencode($productCode).'">';
						 // echo 	  	 "<a href='single.html'>";
						
						 echo 			 "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
						 echo 		 					"<div class='product_image'>";
						 
						// echo "<img src='Image/".$row['image']."' alt='' width='270' height='250' />";
						 echo '<img  src="data:image/jpeg;base64,'.base64_encode( $rowIpo['image'] ).'" width="270" height="250"/>';
						 echo 				"</div>";
					     echo         "<div class='price'>";
						 echo 		   "<div class='cart-left'>";
						 echo 					"<p class='title'>";
						 echo $rowIpo['Name'] ;
						 echo "</p>";
						 echo 							"<div class='price1'>";
						 echo 							  "<span class='actual'>";
						 echo $rowIpo['Price'];
						 echo "</span>";
						 echo 							"</div>";
					 	echo 						"</div>";
					 	$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
						$resultCheck=$conn->query($querysCheck);
						if($resultCheck->num_rows == 0){
						//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
					  		
			
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiArxiki.php'  accept-charset='UTF-8'>"; 
						//echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
						}
					  	else{
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
					  	}
					 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
						echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
						echo					"</form>";
						echo 						"<div class='clear'></div>";
						echo 					 "</div>"	;			
						echo                    "</div>";
						echo                    "</a>";
						//echo "</form>";
						echo 				"</div>";
					
						
						$maxtimes="SELECT MAX(SumTimes) as maxtime  FROM `VIEWPRODUCT` WHERE`UserCode`='$xristis'; ";
						$querytimes=$conn->query($maxtimes);
						$rowTimes=$querytimes->fetch_assoc();
						$times = $rowTimes['maxtime'];
						
						$findprod = "SELECT `CodeOfProduct` FROM `VIEWPRODUCT` WHERE`UserCode`='$xristis' AND `SumTimes`='$times'; ";
						$queryprod=$conn->query($findprod);
						$rowProd=$queryprod->fetch_assoc();
						$codeTimes=$rowProd['CodeOfProduct'];
						$cat2="SELECT * FROM `PRODUCT` WHERE `Code`='$codeTimes';";
						$querykatigoria2=$conn->query($cat2);
						$rowKat2=$querykatigoria2->fetch_assoc();
						$katigoria2=$rowKat2['CodeOfCategory'];
						$ipopsifia2="SELECT * FROM `PRODUCT` WHERE `CodeOfCategory`='$katigoria2' and `Code`<>'$prwto' AND `Availability` >0;";
						$quIpopsifia2=$conn->query($ipopsifia2);						
						$range2=$quIpopsifia2->num_rows;
						$var2=rand(1,$range2);
						$counter=0;
						while ($counter!=$var2){
							$rowIpo2=$quIpopsifia2->fetch_assoc();
							$counter=$counter+1;
						}
						$deftero=$rowIpo2['Code'];
						
						echo "<div class='col_1_of_3 span_1_of_3'>" ;
						 $productCode=$rowIpo2['Code'];
						//echo '<a href="view_exp.php?compna='.urlencode($compname).'">'.$compname.'</a>';
						 echo 	  	 '<a href="single.php?item='.urlencode($productCode).'">';
						 // echo 	  	 "<a href='single.html'>";
						
						 echo 			 "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
						 echo 		 					"<div class='product_image'>";
						 
						// echo "<img src='Image/".$row['image']."' alt='' width='270' height='250' />";
						 echo '<img  src="data:image/jpeg;base64,'.base64_encode( $rowIpo2['image'] ).'" width="270" height="250"/>';
						 echo 				"</div>";
					     echo         "<div class='price'>";
						 echo 		   "<div class='cart-left'>";
						 echo 					"<p class='title'>";
						 echo $rowIpo2['Name'] ;
						 echo "</p>";
						 echo 							"<div class='price1'>";
						 echo 							  "<span class='actual'>";
						 echo $rowIpo2['Price'];
 						echo "</span>";
						 echo 							"</div>";
					 	echo 						"</div>";
					 	$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
						$resultCheck=$conn->query($querysCheck);
						if($resultCheck->num_rows == 0){
						//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
					  		
			
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiArxiki.php'  accept-charset='UTF-8'>"; 
						//echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
						}
					  	else{
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
					  	}
					 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
						echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
						echo					"</form>";
						echo 						"<div class='clear'></div>";
						echo 					 "</div>"	;			
						echo                    "</div>";
						echo                    "</a>";
						//echo "</form>";
						echo 				"</div>";

						
						
						
						
						
						$tixi="SELECT * FROM `PRODUCT` WHERE `Code`<>'$prwto' AND `Code`<>'$deftero' AND `Availability` >0 ;";
						$quIpopsifia3=$conn->query($tixi);
						$range3=$quIpopsifia3->num_rows;
						$var3=rand(1,$range3);
						//echo $var3;
						$counter=0;
						while ($counter!=$var3){
							$rowIpo3=$quIpopsifia3->fetch_assoc();
							$counter=$counter+1;
						}
						$trito=$rowIpo3['Code'];

						echo "<div class='col_1_of_3 span_1_of_3'>" ;
						 $productCode=$rowIpo3['Code'];
						//echo '<a href="view_exp.php?compna='.urlencode($compname).'">'.$compname.'</a>';
						 echo 	  	 '<a href="single.php?item='.urlencode($productCode).'">';
						 // echo 	  	 "<a href='single.html'>";
						
						 echo 			 "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
						 echo 		 					"<div class='product_image'>";
						 
						// echo "<img src='Image/".$row['image']."' alt='' width='270' height='250' />";
						 echo '<img  src="data:image/jpeg;base64,'.base64_encode( $rowIpo3['image'] ).'" width="270" height="250"/>';
						 echo 				"</div>";
					     echo         "<div class='price'>";
						 echo 		   "<div class='cart-left'>";
						 echo 					"<p class='title'>";
						 echo $rowIpo3['Name'] ;
						 echo "</p>";
						 echo 							"<div class='price1'>";
						 echo 							  "<span class='actual'>";
						 echo $rowIpo3['Price'];
 						echo "</span>";
						 echo 							"</div>";
					 	echo 						"</div>";
					 	$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
						$resultCheck=$conn->query($querysCheck);
						if($resultCheck->num_rows == 0){
						//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
					  		
			
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiArxiki.php'  accept-charset='UTF-8'>"; 
						//echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
						}
					  	else{
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
					  	}
					 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
						echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
						echo					"</form>";
						echo 						"<div class='clear'></div>";
						echo 					 "</div>"	;			
						echo                    "</div>";
						echo                    "</a>";
						//echo "</form>";
						echo 				"</div>";
			
					}
					

				}
				if ($contain==0){
					$cat="SELECT * FROM `PRODUCT` WHERE
					 `Availability` > 0";
					$queryRand=$conn->query($cat);
					//$rowKat=$queryRand->fetch_assoc();
					$range1=$queryRand->num_rows;
					
					$var1=rand(1,$range1);
					$counter=0;
					$rowIpo1;
					while ($counter!=$var1){
						$rowIpo1=$queryRand->fetch_assoc();
						$counter=$counter+1;
					}
						$prwto=$rowIpo1['Code'];
					echo "<div class='col_1_of_3 span_1_of_3'>" ;
						 $productCode=$rowIpo1['Code'];
						//echo '<a href="view_exp.php?compna='.urlencode($compname).'">'.$compname.'</a>';
						 echo 	  	 '<a href="single.php?item='.urlencode($productCode).'">';
						 // echo 	  	 "<a href='single.html'>";
						
						 echo 			 "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
						 echo 		 					"<div class='product_image'>";
						 
	// echo "<img src='Image/".$row['image']."' alt='' width='270' height='250' />";
						 echo '<img  src="data:image/jpeg;base64,'.base64_encode( $rowIpo1['image'] ).'" width="270" height="250"/>';
						 echo 				"</div>";
					     echo         "<div class='price'>";
						 echo 		   "<div class='cart-left'>";
						 echo 					"<p class='title'>";
						 echo $rowIpo1['Name'] ;
						 echo "</p>";
						 echo 							"<div class='price1'>";
						 echo 							  "<span class='actual'>";
						 echo $rowIpo1['Price'];
 						echo "</span>";
						 echo 							"</div>";
					 	echo 						"</div>";
						$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
						$resultCheck=$conn->query($querysCheck);
						if($resultCheck->num_rows == 0){
						//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
					  		
			
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiArxiki.php'  accept-charset='UTF-8'>"; 
						//echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
						}
					  	else{
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
					  	}
					 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
						echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
						echo					"</form>";
						echo 						"<div class='clear'></div>";
						echo 					 "</div>"	;			
						echo                    "</div>";
						echo                    "</a>";
						echo 				"</div>";

					$cat2="SELECT * FROM `PRODUCT` WHERE `Code`<>'$prwto'AND `Availability` >0 ;";
					$queryRand2=$conn->query($cat2);
					//$rowKat=$queryRand->fetch_assoc();
					$range2=$queryRand2->num_rows;
					$var2=rand(1,$range2);
					$counter=0;
					while ($counter!=$var2){
						$rowIpo2=$queryRand2->fetch_assoc();
						$counter=$counter+1;
					}
						$deftero=$rowIpo2['Code'];

					echo "<div class='col_1_of_3 span_1_of_3'>" ;
						 $productCode=$rowIpo2['Code'];
						//echo '<a href="view_exp.php?compna='.urlencode($compname).'">'.$compname.'</a>';
						 echo 	  	 '<a href="single.php?item='.urlencode($productCode).'">';
						 // echo 	  	 "<a href='single.html'>";
						
						 echo 			 "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
						 echo 		 					"<div class='product_image'>";
						 
	// echo "<img src='Image/".$row['image']."' alt='' width='270' height='250' />";
						 echo '<img  src="data:image/jpeg;base64,'.base64_encode( $rowIpo2['image'] ).'" width="270" height="250"/>';
						 echo 				"</div>";
					     echo         "<div class='price'>";
						 echo 		   "<div class='cart-left'>";
						 echo 					"<p class='title'>";
						 echo $rowIpo2['Name'] ;
						 echo "</p>";
						 echo 							"<div class='price1'>";
						 echo 							  "<span class='actual'>";
						 echo $rowIpo2['Price'];
 						echo "</span>";
						 echo 							"</div>";
					 	echo 						"</div>";
						$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
						$resultCheck=$conn->query($querysCheck);
						if($resultCheck->num_rows == 0){
						//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
					  		
			
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiArxiki.php'  accept-charset='UTF-8'>"; 
						//echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
						}
					  	else{
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
					  	}
					 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
						echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
						echo					"</form>";
						echo 						"<div class='clear'></div>";
						echo 					 "</div>"	;			
						echo                    "</div>";
						echo                    "</a>";
						echo 				"</div>";
						
						
					//$katigoria=$rowKat['CodeOfCategory'];
					$cat3="SELECT * FROM `PRODUCT` WHERE `Code`<>'$prwto' AND `Code`<>'$deftero' AND `Availability` >0 ;";
					$queryRand3=$conn->query($cat3);
					//$rowKat=$queryRand->fetch_assoc();
					$range3=$queryRand3->num_rows;
					$var3=rand(1,$range3);
					$counter=0;
					while ($counter!=$var3){
						$rowIpo3=$queryRand3->fetch_assoc();
						$counter=$counter+1;
					}
						$trito=$rowIpo3['Code'];

					echo "<div class='col_1_of_3 span_1_of_3'>" ;
						 $productCode=$rowIpo3['Code'];
						//echo '<a href="view_exp.php?compna='.urlencode($compname).'">'.$compname.'</a>';
						 echo 	  	 '<a href="single.php?item='.urlencode($productCode).'">';
						 // echo 	  	 "<a href='single.html'>";
						
						 echo 			 "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
						 echo 		 					"<div class='product_image'>";
						 
	// echo "<img src='Image/".$row['image']."' alt='' width='270' height='250' />";
						 echo '<img  src="data:image/jpeg;base64,'.base64_encode( $rowIpo3['image'] ).'" width="270" height="250"/>';
						 echo 				"</div>";
					     echo         "<div class='price'>";
						 echo 		   "<div class='cart-left'>";
						 echo 					"<p class='title'>";
						 echo $rowIpo3['Name'] ;
						 echo "</p>";
						 echo 							"<div class='price1'>";
						 echo 							  "<span class='actual'>";
						 echo $rowIpo3['Price'];
 						echo "</span>";
						 echo 							"</div>";
					 	echo 						"</div>";
						$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
						$resultCheck=$conn->query($querysCheck);
						if($resultCheck->num_rows == 0){
						//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
					  		
			
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiArxiki.php'  accept-charset='UTF-8'>"; 
						//echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
						}
					  	else{
					  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
					  	}
					 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
						echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
						echo					"</form>";
						echo 						"<div class='clear'></div>";
						echo 					 "</div>"	;			
						echo                    "</div>";
						echo                    "</a>";
						echo 				"</div>";

				
				}
				
			?>
			
				
				<!--</div>-->
				<div class="clear"></div>
			</div>	
			<!--<div class="cont span_3_of_3">-->
			<div class="top-box1">
				<div class="clear"></div>
			</div>	
		  <h2 class="head">Προσφορες</h2>
		  <div class="top-box1">
		  
<?php
	$sales="SELECT * FROM `OFFER`";
	$offers=$conn->query($sales);
	$tipwse=0;
	if ($offers->num_rows > 0){
		while($row = $offers->fetch_assoc()){
			if ($tipwse<3){
			$productCode=$row['CodeOfProduct'];
			$oldvalue=$row['OldValue'];
			$newvalue=$row['NewPrice'];
			$takePro="SELECT * FROM `PRODUCT` WHERE `Code`='$productCode'";
			$prs=$conn->query($takePro);
			$prNow=$prs->fetch_assoc();
			$namepr=$prNow['Name'];
			
			
			if($prNow['Availability']>0){
			echo "<div class='col_1_of_3 span_1_of_3'>";
			echo  '<a href="single.php?item='.urlencode($productCode).'">';

			echo  "<div class='inner_content clearfix' style='left: 0px; top: 0px'>";
			echo		"<div class='product_image'>";
			echo '<img  src="data:image/jpeg;base64,'.base64_encode( $prNow['image'] ).'" width="270" height="250"/>';
			echo "</div>";
			echo	"<div class='sale-box1'><span class='on_sale title_shop'>Sale</span></div>";	
            echo       "<div class='price'>";
			echo		   "<div class='cart-left'>";
			echo				"<p class='title'>";
			echo $prNow['Name'];	
			echo "</p>";
			echo				"<div classs='price1'>";
			echo				  "<span class='reducedfrom'>€";
			echo $oldvalue;
			echo "</span>";
			echo				  "<span class='actual'>€";
			echo $newvalue;
			echo "</span>";
			echo	"</div>";
			echo	"</div>";
			$querysCheck ="SELECT * FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$productCode' ";
			$resultCheck=$conn->query($querysCheck);
			if($resultCheck->num_rows == 0){
			//echo  "<iframe name='votar' style='display:none;' sandbox='allow-iframes allow-same-origin allow-scripts allow-modals' ></iframe>";
					  		
	
		  	echo   "<form id='prosthiki' name='prosthiki' method='POST' action='prosthikiArxiki.php'  accept-charset='UTF-8'>"; 
				//echo   "<input type='HIDDEN' id='timianazitisi' value='$timi' name='timianazitisi'>";
			}
		  	else{
		  	echo   "<form id='prosthiki' name='prosthiki' method='POST' onsubmit='return doesExist();' accept-charset='UTF-8'>";  	
		  	}
		 	echo "<input type='HIDDEN' name='idproiontos' value='".urlencode($productCode)."' name='idproiontos'>";
			echo					"<input type='submit' class='cart-right' name='kalathi' value='' >";
			echo					"</form>";
			echo "<div class='clear'></div>";


			echo	"</div>";				
            echo     "</div>";
            echo      "</a>";
			echo	"</div>";
			$tipwse=$tipwse+1;
			
			}
			}
		}
	}
mysqli_close($conn);
?>		  
						<div class="clear"></div>
			</div>	
		  </div>

			<div class="rsidebar span_1_of_left" >
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
                <img src="images/koypepia.jpg"  alt="" width="230" height="300"/>
               	<img src="images/karaoloi.jpg"  alt="" width="230" height="300"/>
                <img src="images/koukia.jpg"  alt="" width="230" height="300"/>
              </div>
             </div>
              <div class="btn"><a href="sintages.php">Δες Συνταγές!</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Επισκεφθεiτε το Blog μας!<br></h2>
			    <p class="m_text">Επισκεφτείτε την ιστοσελίδα μας και διαβάστε τα πάντα για την Κυπριακή Παράδοση και Κουζίνα</p>
			    <div class="subscribe">
					  <a href="http://foodmuseum.cs.ucy.ac.cy/" target="_blank"><input type="submit" value="Cy - FoodMuseum Blog"> </a></div>
					
	  			</div>
			</div>
	    </div>
	   <div class="clear"></div>
	</div>
	</div>	  
	<!--</div>-->
	<!--</div>-->
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