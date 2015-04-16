<?php
	session_start(); 
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


if(!(isset($_POST['arithmosproiontwn']))){
header("Location: index.html");


}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Παραγγελία</title>
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

	if(isset($_POST['submitdiefthinsi'])){
		$num=0;
		$antikeimena=$_POST['arithmosproiontwn'];
		echo "<div class='register_account'>";
	    echo "<div class='wrap'>";
		echo "<h4 class='title'>Διευθυνση Αποστολης</h4>";
		echo "<div class='clear'></div>";
		echo "<form id='diefthinsiapostolis' onsubmit='return checkDiefthinsi();' method='POST' action='episkopisiparaggelias.php' accept-charset='UTF-8'>"; 
		while ($num<$antikeimena){
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
		}

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
		
		
	}	
	else{
	
	echo "<h4 class='title' style='margin-left:50px;'>ολοκληρωση παραγγελιασ</h4>";
	echo 	"<br>";

    echo "<div class='wrap'>";
			 
    	echo "<h4 class='title'>Στοιχεια Καρτας</h4>";
    	echo "<div class='clear'></div>";
		echo "<form id='paraggelia_troposPlirwmis' onsubmit='return checkTropoPlirwmis();' method='POST' action='oloklirwsiParaggelias.php' accept-charset='UTF-8'>";
		echo "<p class='m_text2'><input class='m_text2' type='radio' id ='pistwtiki_karta' name='payment' value='pistwtiki_karta'>Πιστωτική Κάρτα</p>";
		echo "<p class='m_text2'><input class='m_text2' type='radio' id ='PayPal' name='payment' value='PayPal'>PayPal</p>";
		echo 	"<br>";
		$num=0;
			$antikeimena=$_POST['arithmosproiontwn'];
			$address=$_POST['addressSent'];
			$postalcode=$_POST['postalSent'];
			$city=$_POST['citySent'];
			$country=$_POST['country'];
			$name=$_POST['name'];
			$surn=$_POST['surn'];

			while ($num<$antikeimena){
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
		}
		echo "<input type='hidden' name='addressSent' id='addressSent' value='$address'>";
		echo "<input type='hidden' name='postalSent' id='postalSent' value=$postalcode>";
		echo "<input type='hidden' name='citySent' id='citySent' value=$city>";
		echo "<input type='hidden' name='country' id='country' value=$country>";
		echo "<input type='hidden' name='name' id='name' value=$name>";
		echo "<input type='hidden' name='surn' id='surn' value=$surn>";

		echo 	"<button type='submit' class='grey' name='submit' value='Submit'>Υποβολη</button>";

    	echo "</form>";

	
	echo "</div>";
	
	
	}
	?>
				        	
		




<div class="clear"><br><br></div>
<div class="clear"></div>
<div class="footer">
		<div class="footer-middle">
			<div class="wrap">
			 <!-- <div class="section group">
			  	<div class="f_10">
					<div class="col_1_of_4 span_1_of_4">
						<h3>Facebook</h3>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
							<div class="fb-like-box" data-href="http://www.facebook.com/w3layouts" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h3>From Twitter</h3>
						<div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
				</div>
				<div class="f_10">
					<div class="col_1_of_4 span_1_of_4">
					    <h3>Information</h3>
						<ul class="f-list1">
						    <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
				             <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
			         	</ul>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h3>Contact us</h3>
						<div class="company_address">
					                <p>500 Lorem Ipsum Dolor Sit,</p>
							   		<p>22-56-2-9 Sit Amet, Lorem,</p>
							   		<p>USA</p>
					   		<p>Phone:(00) 222 666 444</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]leoshop.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
					</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		  </div>-->
		   
		   
		   
		   
		   
		   <div class="auto-style3">
		   	   <br>
			 <div class="col_1_of_f_1 span_1_of_f_1" style="width: 98%">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2" style="width: 41%; margin-left: 0; height: 150px">
				    <h2>ΠΛΗΡΟΦΟΡΙΕς</h2>
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