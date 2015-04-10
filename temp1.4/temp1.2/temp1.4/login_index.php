
<?php 
	session_start(); 
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
<head>
<title>E-shop Cyprus Food Museum  | Αρχική</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
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
.auto-style1 {
	color: #FFFFFF;
}
.auto-style2 {
	margin-top: 0px;
}
.auto-style3 {
	margin-top: 37;
}
.auto-style4 {
	margin-left: 0;
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
					<li class="active"><a href="profile_database.php"><?php echo $_SESSION['login_user']; ?></a></li> |
					<li><a href="checkout.html">Λίστα Αγορών</a></li> |
					<li><a href="checkout.html">Πραγματοποίηση Αγοράς</a></li> |
					<li><a href="index.html">Αποσύνδεση</a></li>
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
			<li><a class="active-icon c2" href="kalathiProionta.php"> </a>
				<ul class="sub-icon1 list">
					<li><h3>Αδειο Καλαθι</h3><a href=""></a></li>
					<li><p>Δεν υπάρχουν προϊόντα στο καλάθι σου<a href=""></a></p></li>
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="kalathiProionta.php">ΚΑΛΑΘΙ(0)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     <div class="clear"></div>
     <br>

     </div>
	</div>
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="images/koupes.jpg" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">CY-FOOD MUSEUM</h4>
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <h4 class="description">Κυπριακά και Νόστιμα</h4>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/diosmos.jpg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">CY-FOOD MUSEUM</h4>
                        <h4 class="description">Πάντα με αγνά υλικά</h4>
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
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/vazanaki.jpg" alt="" width="270" height="250"/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Γλυκό Κουταλιού - Βαζανάκι</p>
							<div class="price1">
							  <span class="actual">€7,00</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>
			   <div class="col_1_of_3 span_1_of_3">
			   	 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src=images/krasatalouk.jpg alt="" width="270" height="250"/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Λουκάνικα Κρασάτα</p>
							<div class="price1">
							  <span class="actual">€6,00</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				  <div class="inner_content clearfix">
					<div class="product_image">
						<img src=images/beikon.jpg alt="" width="270" height="250"/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Μπέικον</p>
							<div class="price1">
							  <span class="reducedfrom">€8,00</span>
							  <span class="actual">€5,50</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>	
			<div class="top-box">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix" style="left: 0px; top: 0px">
					<div class="product_image">
						<img src="images/amigdalo.jpg" alt="" width="270" height="250"/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Γλυκό Κουταλιού - Αμύγδαλο</p>
							<div class="price1">
							  <span class="actual">€12.00</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/Vissino.jpg" alt="" width="270" height="250"/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Γλυκό Κουταλιού - Βύσσινο</p>
							<div class="price1">
							  <span class="actual">€10.00</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/tsai_glikanissos.jpg" alt=""width="270" height="250"/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Τσάι Γλυκάνισο</p>
							<div class="price1">
							  <span class="actual">€3,50</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>
				<div class="clear"></div>
			</div>	
			<div class="top-box1">
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				  <a href="single.html">
                   </a>
				</div>
				<div class="clear"></div>
			</div>	
		  <h2 class="head">Προσφορες</h2>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/kumantaria.jpg" alt="" width="270" height="250"/>
					</div>
					<div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Κυπριακό Κρασί - Κουμανταρία</p>
							<div class="price1">
							  <span class="reducedfrom">€30,00</span>
							  <span class="actual">€25,00</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/xaloumi.jpg" alt="" width="270" height="250"/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Χαλλούμι</p>
							<div class="price1">
							<span class="reducedfrom">€6,00</span>
							  <span class="actual">€4,50</span>
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/pergamonto.jpg" alt="" width="270" height="250"/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Γλυκό Κουταλιού - Περγαμόντο</p>
							<div class="price1">
							  <span class="reducedfrom">€9,00</span>
							  <span class="actual">€6,50</span>
							
							</div>
						</div>
						<div> <a href="checkout.html" class="cart-right"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>	
		  </div>
			<div class="rsidebar span_1_of_left">
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
              <div class="btn"><a href="single.html">Δες Συνταγές!</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Επισκεφθεiτε το Blog μας!<br></h2>
			    <p class="m_text">Επισκεφτείτε το την ιστοσελίδα μας και διαβάστε τα πάντα για την Κυπριακή Παράδοση και Κουζίνα</p>
			    <div class="subscribe">
					  <a href="http://foodmuseum.cs.ucy.ac.cy/" target="_blank"><input type="submit" value="Cy - FoodMuseum Blog"> </a></div>
					
	  			</div>
			</div>
	    </div>
	   <div class="clear"></div>
	</div>
	</div>
	<!--</div>-->
   <div class="footer">
		<div class="footer-middle">
			<div class="wrap">   
		   <div class="section group example">
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
				 <div class="col_1_of_f_2 span_1_of_f_2">
				 <div class="clear"></div>
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
				<div class="clear"></div>

		    </div>
		   </div>
		   </div>
		   <div class="clear"></div>
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
					<li class="active"><a href="about.html">Ποιοι Είμαστε</a></li> |
					<li><a href="terms.html">Όροι & Προϋποθέσεις</a></li> |
					<li><a href="contact.html">Επικοινωνήστε μαζί μας</a></li> 
				 </ul>
			    </div>
			    <div class="clear"></div>
			    </div>
		      </div>
	     	
	     	 </div>
		    </div>
		  </div>
		</div>

</body>
</html>