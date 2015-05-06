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
<title>Ολοκλήρωση Παραγγελίας</title>
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
<script>
function checkCard(){
var frm = document.forms["register"];

 
var cardL = frm.cardnumber.value.length;
	var fr3 = parseInt(cardL,10);
	var sigkrisiString = parseInt("16",10);
	if (fr3<sigkrisiString){
		alert('Καταχωρήστε ένα έγκυρο Αριθμό Κάρτας');
		return false;
	}

	if (isNaN(frm.cardnumber.value)){
    	alert("Καταχωρήστε ένα έγκυρο Αριθμό Κάρτας. Χρησιμοποιήστε μόνο αριθμούς");
    	return false;
  	}

var ccvL = frm.ccv.value.length;
	var fr4 = parseInt(ccvL,10);
	var sigkrisi = parseInt("3",10);
	if (fr4<sigkrisi){
		alert('Καταχωρήστε ένα έγκυρο CCV');
		return false;
	}
	if (isNaN(frm.ccv.value)){
    	alert("Καταχωρήστε ένα έγκυρο CCV. Χρησιμοποιήστε μόνο αριθμούς");
    	return false;
  	}
  	
  	var cardown = frm.cardowner.value.length;
	var fr5 = parseInt(cardown ,10);
	var sigkrisiName = parseInt("0",10);
	if (fr4==sigkrisiName){
		alert('Καταχωρήστε το ονοματεπώνυμο του Κατόχου της Κάρτας');
		return false;
	}
	var monthL = frm.minas.value;
	if (monthL =="00"){
		alert('Καταχωρήστε το Mήνα Ημερομηνίας Λήξης της κάρτας');
		return false;
	}
	var etos = frm.year.value;
	var etosL = frm.year.value.length;
	var fr7 = parseInt(etosL,10);
	var sigkrisiYear = parseInt("4",10);

	if (fr7<sigkrisiYear){
		alert('Καταχωρήστε το Έτος Ημερομηνίας Λήξης της κάρτας');
		return false;
	}
	if (isNaN(frm.year.value)){
    	alert("Καταχωρήστε το Έτος Ημερομηνίας Λήξης της κάρτας. Χρησιμοποιήστε μόνο αριθμούς");
    	return false;
  	}

	


	



}
</script>

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
     <br>

     </div>
	</div>
		<br>
			<h4 class="title" style="margin-left:50px;">ολοκληρωση παραγγελιασ</h4>

    <div class="wrap">
		<h4 class="title">Διευθυνση αποστολησ</h4>
		<div class="clear"></div>
				<p class="m_text2"><?php echo $_SESSION['addressSent']?></p>
				<p class="m_text2"><?php echo $_SESSION['postalSent']." ". $_SESSION['citySent']; ?></p>
				<p class="m_text2"><?php echo $_SESSION['countrySent']; ?></p>
				<p class="m_text2"><?php echo $_SESSION['nameSent']; ?> <?php echo $_SESSION['surnSent']; ?></p>
				<br>
    	  
    	  <div class="clear"></div>
			<br>
    	    <h4 class="title">Προϊοντα</h4>
    	    <div class="clear"></div>
    		<form id='register' onsubmit="return checkCard();" method="POST" action="plirwmi.php" accept-charset="UTF-8"> 
    		<table>
    		<thead>
		      <tr>
		        <th class="txt-lt" style="width: 50%; height: 19px">Όνομα</th>
		        <th class="txt-lt" style="width: 20%; height: 19px">Ποσότητα</th>
		        <th class="txt-lt" style="width: 20%; height: 19px">Ποσό</th>
		      </tr>
		    </thead>
    	    <tbody>
    	    	<?php
    	    		$antikeimena=$_SESSION['arithmosproiontwn'];
    	    	//	echo $antikeimena;
    	    		$address=$_SESSION['addressSent'];
					$postalcode=$_SESSION['postalSent'];
					$city=$_SESSION['citySent'];
					$country=$_SESSION['countrySent'];
					$name=$_SESSION['nameSent'];
					$surn=$_SESSION['surnSent'];
		
    	    		$num=0; 
    	    		$sinolo=0;
    	    		while($num<$antikeimena){
    	    		$proionOnoma=$_SESSION["onoma$num"];
					$kodikosproion=$_SESSION["kodikos$num"];
					$price=$_SESSION["timi$num"];
					$varos=$_SESSION["varos$num"];
					$posotita=$_SESSION["posotita$num"];
					$poso=$_SESSION["poso$num"];	
					echo "<tr>";
    	    		echo "<td><p class='m_text2'>$proionOnoma</p></td>";
    	    		echo "<td><p class='m_text2'>$posotita</p></td>";
    	    		echo "<td><p class='m_text2'>$poso</p></td>";
					echo "</tr>";
					
					/*echo "<input type='hidden' name='onoma$num' id='onoma$num' value=$proionOnoma>";
					echo "<input type='hidden' name='kodikos$num' id='kodikos$num' value=$kodikosproion>";
					echo "<input type='hidden' name='timi$num' id='timi$num' value=$price>";
					echo "<input type='hidden' name='varos$num' id='varos$num' value=$varos>";
					echo "<input type='hidden' name='posotita$num' id='posotita$num' value=$posotita>";
					echo "<input type='hidden' name='arithmosproiontwn' id='arithmosproiontwn' value=$antikeimena>";
					echo "<input type='hidden' name='poso$num' id='poso$num' value=$poso>";*/
		
    	    		$sinolo=$sinolo+$poso;
    	    	
    	    		$num=$num+1;
    	    		}	
    	    	$_SESSION['sinoloplirwmis']=$sinolo;
    	    	if(isset($_POST['submitKarta'])){
    	    		$_SESSION['troposplirwmis']=$_POST['payment'];
    	    	}
    	    	/*echo "<input type='hidden' name='addressSent' id='addressSent' value='$address'>";
				echo "<input type='hidden' name='postalSent' id='postalSent' value=$postalcode>";
				echo "<input type='hidden' name='citySent' id='citySent' value=$city>";
				echo "<input type='hidden' name='country' id='country' value=$country>";
				echo "<input type='hidden' name='name' id='name' value=$name>";
				echo "<input type='hidden' name='surn' id='surn' value=$surn>";
				echo "<input type='hidden' name='sinoloplirwmis' id='sinoloplirwmis' value=$sinolo>";*/

    	    	?>
    	    	 <tr>
    	    	  <td><br></td>

    	    	 </tr>
      	    	<tr>
				 <th class="txt-lt" style="width: 266px; height: 19px">Σύνολο</th>
				 <td><h1 class="remove" style="width: 266px; height: 19px">€<?php echo $sinolo?></h1></td>
								
    	    	</tr>
    	    	
    	       </tbody>		
			</table>
			<div class='clear'></div>
			<br>
    	    <h4 class='title'>Στοιχεια ΚαρταΣ</h4>
    	    <div class='clear'></div>
    	    <div class="plirofories">
			<p class='auto-style5'>Aριθμός Κάρτας</p>			   
			<div><input type='text' name='cardnumber' class='code3' id ='address' autocomplete="off" maxlength='16' value=''></div>
			<br>
			<p class='auto-style5'>CCV - Τριψήφιος Αριθμός στο πίσω μέρος της κάρτας</p>			   
			<div><input type='text' name='ccv' id ='ccv' maxlength='3' class='code' value='' autocomplete="off" ></div>
			<br>
			<p class='auto-style5'>Κάτοχος Κάρτας</p>			   
			<div><input type='text' name='cardowner' id ='cardowner' value='' class="code4"></div>
			<br>
			<p class='auto-style5'>Ημερομηνία Λήξης της Κάρτας</p>
			<div><select id='minas' name='minas' class="code1" >
			 <option value="00"></option>         
			 <option value="1">01</option>         
		     <option value="2">02</option>  
		     <option value="3">03</option>
             <option value="4">04</option>         
	         <option value="5">05</option>  
		     <option value="6">06</option>
 			 <option value="7">07</option>         
		     <option value="8">08</option>  
		     <option value="9">09</option>
 			 <option value="10">10</option>         
		     <option value="11">11</option>  
		     <option value="12">12</option>
			</select> - <input type='text' id='year' name='year' value='' maxlength='4' class='code'>
		    <p class='code'>Mήνας&nbsp;&nbsp;&nbsp;&nbsp; +&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Έτος</p></div>
		    </div>  
			<br>
    	    <div class="clear"></div>
			<br>   
			 <button type="submit" class="grey" name="submit" value="Submit">Ολοκληρωση Παραγγελιας</button>
 			</form>
			</div>   
			 
		 
		
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