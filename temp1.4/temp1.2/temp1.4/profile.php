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
<title>Προβολή προφίλ</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="dreamcodes/tables2/css/tsc_tables2.css" />
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<style type="text/css">
.auto-style1 {
	width: 90%;
	-moz-transition: all .2s linear;
	-webkit-transition: all .2s linear;
	-o-transition: all .2s linear;
	-ms-transition: all .2s linear;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 0;
}
.auto-style2 {
	color: #FFFFFF;
}

	table {
		color:#333;
		font-family:Helvetica,Arial,sans-serif;
		width:100%;
		border-spacing:1px;
		border-collapse:separate;
		padding:0 3px;
	}
	
	td, th {
		width: 200px;
		height: 50px;
		transition:all .3s;
		text-align:left;
		vertical-align:middle;
	}

	th {
		background:grey;
		font-weight:700;
		color : white;
	}
	
	td {
		background:#FAFAFA;
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
	</div>
          
	<div class="clear"><br><br><br></div>
	<div class="clear"></div>

	<div class="wrap">
	<h4 class="title">Τα Στοιχεια του λογαριασμου σας</h4>
	<form>
	
  <table class="tsc_tables2_1" summary="Profile of User" style="width:100%; align=center ">
    <thead>
    </thead>
    <tbody>
      <tr>
        <td>Όνομα:</td>
        <td><p class="m_text2"><?php echo $_SESSION['onoma'];?> </p></td>
       	<td>Διεύθυνση 1 :</td>
        <td><p class="m_text2"><?php echo $_SESSION['d1']; ?> </p></td>

      </tr>
      <tr>
        <td>Επώνυμο:</td>
        <td><p class="m_text2"><?php echo $_SESSION['epitheto']; ?></p></td>
        <td>Διεύθυνση 2 :</td>
        <td><p class="m_text2"><?php echo $_SESSION['d2']; ?></p></td>

      </tr>
      <tr>
        <td>Email:</td>
        <td><p class="m_text2"><?php echo $_SESSION['email']; ?></p></td>
        <td>Ταχυδρομικός κώδικας:</td>
        <td><p class="m_text2"><?php echo $_SESSION['tk']; ?></p></td>

      </tr>
      <tr>
        <td>Ημερομηνία Γέννησης:</td>
        <td><p class="m_text2"><?php echo $_SESSION['birth']; ?></p></td>
		<td>Χώρα:</td>
		<td><p class="m_text2"><?php echo $_SESSION['xwra']; ?></p></td>


      </tr>
      <tr>
        <td>Φύλο:</td>
        <td> <p class="m_text2"><?php echo $_SESSION['filo']; ?></p></td>
        <td>Πόλη:</td>		
        <td><p class="m_text2"><?php echo $_SESSION['poli'];?></p></td>

      </tr>
      <tr>
        <td>Αριθμός Κινητού Τηλεφώνου:</td>
        <td><p class="m_text2"><?php echo $_SESSION['tel1'];?></p></td>
        <td></td>
		<td></td>
      </tr>
      <tr>
        <td>Αριθμός Σταθερού Τηλεφώνου:</td>
         <td><p class="m_text2"><?php echo $_SESSION['tel2'];?></p></td>
        <td></td>
       <td></td>
     
      </tr>
     </tbody>
    </table>
    
     <br><br>

	<div class="active" style="margin-left:auto; margin-right:auto; width:75%; "> 
    <button type="submit" class="grey" name="submit" value="Submit" style="float:right">Επεξεργασια Στοιχειων</button>
	</div>
    </form>
<!-- DC Table Styles II:1 End -->
	<br>
	<br>
	</div>	
	

	<div class="clear"><br><br></div>
	<div class="clear"></div>
	
   <div class="footer">
		<div class="footer-middle">
			<div class="wrap">
			   
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
		  <div class="clear"><img src="images/3.png" width="58"><span class="auto-style1">Καλέστε 
					μας στο: 99 05 98 20<a href="https://www.facebook.com/pages/Cyprus-Food-Virtual-Museum/104034939677867?fref=ts" target="_blank"><img src="images/find_us_facebook_logo.gif" class="auto-style2" height="57" width="143"></a><div class="wrap" style="width: 90%; height: 24px">
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


<!-- DC Table Styles II:1 Start -->
</body>

</html>
