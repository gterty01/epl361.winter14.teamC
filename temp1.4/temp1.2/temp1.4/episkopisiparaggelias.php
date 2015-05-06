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
/*if((!(isset($_POST['arithmosproiontwn']))) && (!(isset($_SESSION['arithmosproiontwn'])))  ) {
header("Location: index.html");
}*/
if (isset($_POST['arithmosproiontwn'])){
if (($_POST['arithmosproiontwn']==0)){
header("Location: index.html");
}
}
if (isset($_SESSION['arithmosproiontwn'])){
if (($_SESSION['arithmosproiontwn']==0)){
header("Location: index.html");
}
}

if(isset($_POST['diagrapsou'])){
$servername = "localhost";
$username = "cyfoodmuseum";
$password = "9m8ESxZD";
$dbname = "cyfoodmuseum";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$xristis = $_SESSION['login_user'];

		$proion=$_POST['diagrapsou'];
		$querys ="DELETE FROM `USERACTIONFORCART` WHERE `UserCode`='$xristis' AND `CodeOfProduct` = '$proion' ";
		$result=$conn->query($querys);
		header("Location: kalathiProionta.php");
		
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
</style>

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
$servername = "localhost";
$username = "cyfoodmuseum";
$password = "9m8ESxZD";
$dbname = "cyfoodmuseum";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection faild";
}
parse_url(file_get_contents("php://input"), $_POST);
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
} else {
    //printf("Current character set: %s\n", $conn->character_set_name());
}//die;
$xristis=$_SESSION['login_user'];
if(!(isset($_POST['diagrapsou']))){
if(isset($_POST['arithmosproiontwn'])){
$_SESSION['arithmosproiontwn']=$_POST['arithmosproiontwn'];
}
$num=0;
$antikeimena=$_SESSION['arithmosproiontwn'];	
	echo "<form method='post' action='paraggelia.php' name='formaproiontwn'>";
if((isset($_POST['arithmosproiontwn']))){
	while ($num<$antikeimena){
	$proionOnoma=$_POST["onoma$num"];
	$kodikosproion=$_POST["kodikos$num"];
	$price=$_POST["timi$num"];
	$varos=$_POST["varos$num"];
	$posotita=$_POST["posotita$num"];
	$_SESSION["onoma$num"]=$proionOnoma;
	$_SESSION["kodikos$num"]=$kodikosproion;
	$_SESSION["timi$num"]=$price;
	$_SESSION["varos$num"]=$varos;
	$_SESSION["posotita$num"]=$posotita;
			$poso=$posotita*$price;
	$_SESSION["poso$num"]=$poso;
		/*	echo "<input type='hidden' name='onoma$num' id='onoma$num' value=$proionOnoma>";
			echo "<input type='hidden' name='kodikos$num' id='kodikos$num' value=$kodikosproion>";
			echo "<input type='hidden' name='timi$num' id='timi$num' value=$price>";
			echo "<input type='hidden' name='varos$num' id='varos$num' value=$varos>";
			echo "<input type='hidden' name='posotita$num' id='posotita$num' value=$posotita>";
			echo "<input type='hidden' name='arithmosproiontwn' id='arithmosproiontwn' value=$antikeimena>";
			echo "<input type='hidden' name='poso$num' id='poso$num' value=$poso>";*/
	
		$num=$num+1;
	}
}
$querys ="SELECT * FROM `USERS_FM` WHERE `Email`='$xristis' ";
$result=$conn->query($querys);
$address;
$postalcode;
$city;
$country;
while($row = $result->fetch_assoc()) {
	$address=$row['Address1'];
	$postalcode=$row['PostalCode'];
	$city=$row['City'];
	$country=$row['Country'];
	$name=$row['Name'];
	$surn=$row['Surname'];
	$_SESSION['addressSent']=$address;
	$_SESSION['postalSent']=$postalcode;
	$_SESSION['citySent']=$city;
	$_SESSION['countrySent']=$country;
	$_SESSION['nameSent']=$name;
	$_SESSION['surnSent']=$surn;
}

	if(isset($_POST['diefthinsiApostolis'])){
	$address=$_POST['address'];
	$postalcode=$_POST['postalCode'];
	$city=$_POST['Poli'];
	$_SESSION['addressSent']=$address;
	$_SESSION['postalSent']=$postalcode;
	$_SESSION['citySent']=$city;


	}

$address2=$_SESSION['addressSent'];
$postal2=$_SESSION['postalSent'];
$city2=$_SESSION['citySent'];
$country2=$_SESSION['countrySent'];
$name2=$_SESSION['nameSent'];
$surn2=$_SESSION['surnSent'];

echo "<div class='wrap'>";
		echo "<h4 class='title'>διευθυνση αποστολης</h4>";
    	echo 	"<div class='clear'></div>";
    	echo    	"<p class='m_text2'>$address2</p>";
		echo		"<p class='m_text2'>$postal2, $city2, $country2 </p>";
		echo		"<p class='m_text2'>$name2 $surn2</p>";
		echo	"<br>";
		echo "<input type='hidden' name='addressSent' id='addressSent' value='$address2'>";
		echo "<input type='hidden' name='postalSent' id='postalSent' value=$postal2>";
		echo "<input type='hidden' name='citySent' id='citySent' value=$city2>";
		echo "<input type='hidden' name='country' id='country' value=$country2>";
		echo "<input type='hidden' name='name' id='name' value=$name2>";
		echo "<input type='hidden' name='surn' id='surn' value=$surn2>";
	
		//echo 	"<button type='submit' class='grey' name='submitdiefthinsi' value='Επεξεργασια Διευθυνσης'>Επεξεργασια Διευθυνσης</button>";
		//echo	"<input type='submit' class='grey' name='submitdiefthinsi' value='Επεξεργασια Διευθυνσης'>";
		//echo 	"<input type='submit' class='grey' name='submitsinexeia' value='Συνεχεια' style='margin-left:50px; '>";
		echo 	"<button type='submit' class='grey' name='submitsinexeia' style='margin-left:50px; ' value='Συνεχεια'>Συνεχεια</button>";

	echo "</div>";
	echo "</form>";
	echo "<form method='post' action='allagidiefthinsis.php' name='formaallagwn'>";
	echo 	"<button type='submit' class='grey' name='submitdiefthinsi' value='Επεξεργασια Διευθυνσης'>Επεξεργασια Διευθυνσης</button>";
	echo "</form>";

}
?>
     <div class="clear"><br><br></div>
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

</body>
</html>