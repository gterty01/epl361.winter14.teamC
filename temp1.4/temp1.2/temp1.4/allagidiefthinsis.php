<?php
	session_start(); 
header('Cache-Control: max-age=900');
?>

<?php
$xristis;
if(isset($_SESSION['login_user']))
{
$xristis = $_SESSION['login_user'];
}
else
{
$xristis = "Σύνδεση";
header("Location: login.html");
}


/*if(!(isset($_SESSION['arithmosproiontwn']))){
header("Location: index.html");
}*/

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Παραγγελία - Αλλαγή Διεύθυνσης</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
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

.auto-style4 {
	font-size: medium;
}
.auto-style5 {
	font-size: small;
}

</style>

<script>
function checkDiefthinsi(){
  var frm = document.forms["diefthinsiapostolis"];
  	var dieL = frm.address.value.length;
	var fr3 = parseInt(dieL,10);
	var sigkrisiString = parseInt("0",10);
	
	if (fr3==sigkrisiString){
		alert('Καταχωρήστε τη Διεύθυνση Αποστολής');
		return false;
	}
	
	if (isNaN(frm.postalCode.value)){
    	alert("Καταχωρήστε έναν έγκυρο ταχυδρομικό κώδικα. Χρησιμοποιήστε μόνο αριθμούς");
    	return false;
  	}
  	var poL = frm.postalCode.value.length;
	var frp = parseInt(poL,10);
	if (frp==sigkrisiString){
		alert('Καταχωρήστε τον Ταχυδρομικό Κώδικα της Διεύθυνσης Αποστολής');
		return false;
	}
	
	var poliLe = frm.Poli.value.length;
	var poliL = parseInt(poliLe,10);
	
	if (poliL==sigkrisiString){
		alert('Καταχωρήστε την Πόλη Αποστολής');
		return false;
	}



}
</script>
<script>
function checkTropoPlirwmis(){
if(document.getElementById('pistwtiki_karta').checked) {
return true;

}
if(document.getElementById('PayPal').checked){
return true;
}

  alert('Δεν διαλέξατε τρόπο πληρωμής!');
  return false;

}

</script>

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
					<li class="active"><a href="login.html">Λογαριασμός</a></li> |
					<li><a href="checkout.html">Λίστα Αγορών</a></li> |
					<li><a href="checkout.html">Πραγματοποίηση Αγοράς</a></li> |
					<li><a href="login.html">Σύνδεση</a></li> |
					<li><a href="register.html">Εγγραφή</a></li>
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
	            <ul class="megamenu skyblue" style="left: -4.1%; top: 5%">
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
	parse_url(file_get_contents("php://input"), $_POST);

		/*$num=0;
		$antikeimena=$_POST['arithmosproiontwn'];*/
		echo "<div class='register_account'>";
	    echo "<div class='wrap'>";
		echo "<h4 class='title'>Διευθυνση Αποστολης</h4>";
		echo "<div class='clear'></div>";
		echo "<form id='diefthinsiapostolis' onsubmit='return checkDiefthinsi();' method='POST' action='episkopisiparaggelias.php' accept-charset='UTF-8'>"; 
		/*while ($num<$antikeimena){
			$proionOnoma=$_POST["onoma$num"];
			$kodikosproion=$_POST["kodikos$num"];
			$price=$_POST["timi$num"];
			$varos=$_POST["varos$num"];
			$posotita=$_POST["posotita$num"];
			$poso=$posotita*$price;
			echo "<input type='hidden' name='onoma$num' id='onoma$num' value=$proionOnoma>";
			echo "<input type='hidden' name='kodikos$num' id='kodikos$num' value=$kodikosproion>";
			echo "<input type='hidden' name='timi$num' id='timi$num' value=$price>";
			echo "<input type='hidden' name='varos$num' id='varos$num' value=$varos>";
			echo "<input type='hidden' name='posotita$num' id='posotita$num' value=$posotita>";
			echo "<input type='hidden' name='arithmosproiontwn' id='arithmosproiontwn' value=$antikeimena>";
			echo "<input type='hidden' name='poso$num' id='poso$num' value=$poso>";

			$num=$num+1;
		}*/

 			echo "<div class='col_1_of_2 span_1_of_2'>";	

			echo "<p class='auto-style5'>Διεύθυνση</p>";				   
			echo "<div><input type='text' name='address' id ='address' value=''></div>";
			echo "<p class='auto-style5'>Ταχυδρομικός Κώδικας</p>";				   
			echo "<div><input type='text' name='postalCode' id ='postalCode' value=''></div>";
			echo "<p class='auto-style5'>Πόλη</p>";				   
			echo "<div><input type='text' name='Poli' id ='Poli' value=''></div>";
			echo "<br>";
			echo 	"<button type='submit' class='grey' name='diefthinsiApostolis' value='Υποβολη'>Υποβολη</button>";

			//echo 	"<input type='submit' class='grey' name='diefthinsiApostolis' value='Υποβολη'>";
			echo "</div>";

		echo "</form>";
		echo "</div>";	
		echo "</div>";
		
	?>
				        	
		




<div class="clear"><br><br></div>
<div class="clear"></div>
  
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
						    <li><a href="about.html">Ποιοι Είμαστε</a></li>
				           <!-- <li><a href="terms.html">Όροι Χρήσης</a></li>-->
				            <li><a href="delivery.html">Τρόποι Πληρωμής και Παραγγελιών</a></li>
			
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
				            <li>Copyright: CyFoodMuseum Team, CS-ucy</li>
				 </ul>
			    </div>
			    <div class="clear"></div>
			    </div>
		      </div>
	     	
	     	 </div>
		</body>
</html>