<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Viga Applications</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript"> 
function gostergizle()
{
$("div#container").show(100); 
}
function sendmessage(){ 
var veriler = $('#contact_form').serialize(); 
$.ajax({ 
type: "POST", 
url: "inc/send.php", 
data: veriler, 
success:function(cevap){ 
$("#send").html(""+cevap); 
$("div#container").hide(100); 
} 
})}; 
function formReset(id) {
$('#'+id).each(function(){
this.reset();
});
}
function kontrolet(){
var name=$('#name').val();
name=jQuery.trim(name);
var email=$('#email').val();
email=jQuery.trim(email);
var mess=$('#text').val();
mess=jQuery.trim(mess);
var tel=$('#phone').val();
tel=jQuery.trim(tel);
var guvenlikKodu=$('#guvenlikKodu').val();
guvenlikKodu=jQuery.trim(guvenlikKodu);        
if(name==''){
alert("Please check your name");
} 	
else if(email==''){
alert("Please check your E-Mail");
}

  else if(mess==''){
alert("Please check your Message");
}

 else if (guvenlikKodu==''){
alert("Security code is empty!");
}
else { sendmessage() } 
}
</script>
<!-- InstanceEndEditable -->
<meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Viga operations have been organized into three independent business-specific clusters.Products & Solutions – Lighting, Switchgear, Cables and Wires, Modular Switches. Energy – Solar / Audit and consultancy / Water - Generation, Treatment and Distribution Management. Mining">
  <meta name="keywords" content="Lighting, Switchgear, Cables and Wires, Modular Switches, Energy – Solar / Audit and consultancy / Water - Generation, Treatment and Distribution Management, Mining">
  <meta name="robots" content="all">
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700%7COpen+Sans:400,400i,700%7CNoto+Serif:400i' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/colors/blue.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->
</head>

<body class="relative raleway grid-1440">


  <!-- Sidenav -->
   <!-- end sidenav -->

  <main class="main-wrapper">

    <header class="nav-type-3">

      <!-- Top Bar -->
      <div class="top-bar hidden-xs">
        <div class="container">
          <div class="row">
            <div class="top-bar-links">
              <ul class="col-sm-7">
                <li class="top-bar-phone">
                  <i class="fa fa-phone"></i><a href="tel:+91 996 252 9110">+91 996 252 9110</a>
                </li>
                <li class="top-bar-email">
                  <i class="fa fa-envelope"></i><a href="mailto:info@viga-applications.com">info@viga-applications.com</a>
                </li>                
              </ul>

              <div class="col-sm-5 social-icons nobase text-right">
                
                <a href="https://in.linkedin.com/company/viga-applications" target="_blank"><i class="fa fa-linkedin"></i></a>
               
              </div>

            </div>
          </div>
        </div>
      </div> <!-- end top bar -->

      <!-- Fullscreen search --
      <div class="search-wrap">
        <div class="search-inner">
          <div class="search-cell">
            <form method="get">
              <div class="search-field-holder">
                <input type="search" class="form-control main-search-input" placeholder="Search for">
                <i class="ui-close search-close" id="search-close"></i>
              </div>            
            </form>
          </div>
        </div>        
      </div> <!-- end fullscreen search -->
    
      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="index.html">
                      <img class="logo-dark" src="img/viga_applications_logo.png" alt="logo">
                    </a>
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> <!-- end navbar-header -->

              <div class="nav-wrap right">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown active">
                      <a href="index.html">Home</a>
                     
                    </li>

                    <li class="dropdown">
                      <a href="#">About us</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="overview.html">Overview</a></li>
                        <li><a href="mission.html">Mission</a></li>
                        <li><a href="management_team.html">Management Team</a></li>
                        <li><a href="qhse_policy.html">QHSE Policy</a></li>
                         <li><a href="career.html">Working with us</a></li>
                        
                      </ul>
                    </li>

                    
                    <li class="dropdown">
                      <a href="#">Operations</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="products_solutions.html">Products & Solutions</a></li>
                        <li><a href="energy.html">Energy</a></li>
                        <li><a href="mining.html">Mining</a></li>
                        
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="contact_us.php">Contact</a>
                     
                      
                    </li>

                    
                    <!-- Nav right -->
                    

                    

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->         
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>

    <div class="content-wrapper oh"><!-- InstanceBeginEditable name="body" -->
	
      <!-- Page Title -->
      <section class="page-title text-center" style="background-image: url(img/contact_us_title_bg.jpg);">
        <div class="container relative clearfix">
          <div class="title-holder">
            <div class="title-text">
              <h1 class="uppercase">Contact</h1>
            </div>
          </div>
        </div>
      </section> <!-- end page title -->

      <!-- Contact -->
      <section class="section-wrap">
        <div class="container">
          <div class="row">

            <div class="col-md-4 mb-40">
              <h5 class="uppercase">Information</h5>

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Map-Pin4"></i>
                </div>
                <p>No.2, First Floor<br>
                15/8, 4th Cross Street, CIT Colony<br>
                Mylapore, Chennai 600004, India.</p>
              </div> <!-- end address -->

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Phone-InTalk"></i>
                </div>
                <span><a href="tel:+9199625 29110">+9199625 29110</a></span>
              </div> <!-- end phone number -->

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-At-Symbol"></i>
                </div>
                <a href="mailto:info@viga-applications.com">info@viga-applications.com</a>
              </div> <!-- end email -->

            </div>

            <div class="col-md-8">
              <form class="form" id="contact_form" name="contact_form" method="post" action="javascript:void(0);">
		<div class="row">
                  <div class="col-md-6 contact-name">
			<input type="text" name="name" id="name" placeholder="Your Name*"  required/>
			
		</div>
		<div class="col-md-6 contact-email">
			<input type="email" name="email" id="email" placeholder="mail@example.com*" required />
			
		</div></div>
			
    
		<div class="text">
			<textarea id="text" name="text"  rows="6" id="text"placeholder="Your Message*"  required/></textarea>
		</div>
        
        <input type="text" name="guvenlikKodu" id="guvenlikKodu" placeholder="Please enter the below Captcha*"  required />
    <label for="guvenlikKodu"></label>
 <img src="inc/captcha.php" />
	
		<div class="submit">
			<input type="submit"  class="btn btn-lg btn-color btn-submit" onclick="kontrolet()" value="Send" />
			<input type="reset"  class="btn btn-lg btn-color btn-submit" value="Reset" />
		</div>
	</form>
	
	</div>
		
	<div  style="margin-top: 80px" id="send"></div>
            </div> <!-- end col -->

          </div>
        </div>
    </section> <!-- end contact -->

      <!-- Google Map --> 
      <div class="resp-container">
      <iframe class="resp-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9164859754637!2d80.2576463148227!3d13.040987690810354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x713286c940ea8fd0!2sViga+Applications!5e0!3m2!1sen!2sin!4v1526649037755" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	<!-- 1/2 column -->
    <section class="section-wrap bg-light pb-100 pb-mdm-40">
        <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h4>Chennai Branch Office </h4>
                  <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Map-Pin4"></i>
                </div>
                <p>3rd Floor, JK Flats<br>
                24, Aranganathan Subway Salai<br>
                Kaveri Nagar, Saidapet, Chennai 600015</p>
              </div> <!-- end address -->

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Phone-InTalk"></i>
                </div>
                <span><a href="tel:+91 996 252 9110">+91 996 252 9110</a></span>
              </div> <!-- end phone number -->
                </div> <!-- end col -->

                <div class="col-sm-6">
                  <h4>Bangalore Branch Office</h4>
                  <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Map-Pin4"></i>
                </div>
                <p>No.89, Daady South Boarg<br>
                1st Main, 4th Cross, Kammasandra Main Road<br>
                Hebbagodi, Bengaluru 560100</p>
              </div> <!-- end address -->

              <div class="contact-item">
                <div class="contact-icon">
                  <i class="icon-Phone-InTalk"></i>
                </div>
                 <span><a href="tel:+91 974 302 1777">+91 974 302 1777</a></span>
              </div> <!-- end phone number -->
                </div>
                </div>
                </section> <!-- end col -->

              </div> 
              <!-- end row -->
	<!-- InstanceEndEditable -->
      

      <!-- Footer Type-4 -->
      <footer class="footer footer-type-4 bg-dark">
        <div class="container">
          <div class="footer-widgets pb-mdm-20">
            <div class="row">

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget footer-logo">
                  <img src="img/viga_logo_dark.jpg" alt="">
                </div>
              </div> <!-- end about us -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget footer-about-us">
                  <h5 class="widget-title">About Us</h5>
                  <p class="mb-0">Viga Applications is led by visionary entrepreneurs with more than 30 years of experience in business management of engineering solutions for a wide spectrum of industries in areas such as Energy (Solar/Water/Audit and Consultancy), Mining, Supply of Products and Solutions to a wide range of clientele.</p>
                </div>
              </div> <!-- end about us -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget footer-get-in-touch">
                  <h5 class="widget-title">Our Coordinates</h5>
                  <p>Phone: <a href="tel:+91 996 252 9110">+91 996 252 9110</a></p>
                  <p>Email: <a href="mailto:info@viga-applications.com">info@viga-applications.com</a></p>
                  
                  <div class="footer-socials">
                    <div class="social-icons nobase">
                      <a href="https://in.linkedin.com/company/viga-applications" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>                  
                </div>
              </div> <!-- end stay in touch -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget footer-get-in-touch">
                  <h5 class="widget-title">Regd. Office</h5>
                  <address class="footer-address mb-0">No.2, First Floor<br>15/8, 4th Cross Street, CIT Colony<br>Mylapore, Chennai 600004, India.</address>
                </div>
              </div> <!-- end address -->

            </div>
          </div>    
        </div> <!-- end container -->

        <div class="bottom-footer">
          <div class="container">
            
            <div class="row">
                <ul class="bottom-footer-links text-center sm-text-center">
                  <li><a href="index.html">Home</a></li>
                  <li>
                    <a href="overview.html">Overview</a>
                  </li>
                  <li>
                    <a href="mission.html">Mission</a>
                  </li>
                  <li>
                    <a href="management_team.html">Management Team</a>
                  </li>
                  <li>
                    <a href="qhse_policy.html">QHSE Policy</a>
                  </li>
                  
                  <li>
                    <a href="career.html">Working with us</a>
                  </li>
                  <li><a href="products_solutions.html">Products & Solutions</a></li>
                  <li>
                    <a href="energy.html">Energy</a>
                  </li>
                  <li>
                    <a href="mining.html">Mining</a>
                  </li>
                  
                  <li><a href="contact_us.php">Contact</a></li>
                </ul>
              </div>
              
          </div>
        </div> <!-- end bottom footer -->
        
        <div style="background-color:#333; padding:10px;">
          <div class="container">
            
           
              
              <div class="row">

              <div class="col-sm-6 copyright sm-text-center text-left">
                <span>
                  &copy; 2018 Viga Applications 
                </span>
              </div>

              <div class="col-sm-6 text-right">
                <span style="line-height:22px; font-size:13px">
                  Designed by <a href="http://vishaladesigns.com">Vishala Designs</a>
                </span>
              </div>

            </div>

              

              

           
          </div>
        </div>
         
      </footer> <!-- end footer -->


      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div> 

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="js/rev-slider.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>


  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    
</body>
<!-- InstanceEnd --></html>