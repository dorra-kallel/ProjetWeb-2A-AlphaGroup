<?PHP
include "Controller/ArticleC.php";
include "Controller/categorieC.php";

	$articleC=new ArticleC();
	if(isset($_GET["id_categorie"])) {
		$listearticle=Array();
		$listearticle = $articleC->getArticlesByCateg($_GET["id_categorie"]);
	} else {
	$listearticle= Array();
	$listearticle=$articleC->afficherArticle(); 
	}
	$recentARticles= $articleC->getMostRecentArticles();

	$categC = new CategorieC();
	$listCatg = $categC->afficherCategorie();
	
	

?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wpthemesgrid.com/themes/eshop/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 19:05:07 GMT -->

<head>
	<!-- Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Look Deep Into The Nature, Getting back to nature, This place is special..., Nature, You Might Also Like, Our Mission, Wildlife, Africa is home to many of the world's most famous fauna, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
	    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/templatemo_logo.png"
}</script>

<meta property="og:title" content="Acceuil">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <title>Acceuil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Acceuil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.12.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
		rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Jquery Ui -->
	<link rel="stylesheet" href="css/jquery-ui.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- Color CSS -->
	<link rel="stylesheet" href="css/color/color1.css">
	<!--<link rel="stylesheet" href="css/color/color2.css">-->
	<!--<link rel="stylesheet" href="css/color/color3.css">-->
	<!--<link rel="stylesheet" href="css/color/color4.css">-->
	<!--<link rel="stylesheet" href="css/color/color5.css">-->
	<!--<link rel="stylesheet" href="css/color/color6.css">-->
	<!--<link rel="stylesheet" href="css/color/color7.css">-->
	<!--<link rel="stylesheet" href="css/color/color8.css">-->
	<!--<link rel="stylesheet" href="css/color/color9.css">-->
	<!--<link rel="stylesheet" href="css/color/color10.css">-->
	<!--<link rel="stylesheet" href="css/color/color11.css">-->
	<!--<link rel="stylesheet" href="css/color/color12.css">-->

	<link rel="stylesheet" href="#" id="colors">

</head>

<body class="js">

	<!-- Start Header -->
	<body data-home-page="Acceuil.html" data-home-page-title="Acceuil" class="u-body"><header class="u-clearfix u-header u-white u-header" id="sec-0074"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="896" data-image-height="759">
          <img src="images/templatemo_logo.png" class="u-logo-image u-logo-image-1" data-image-width="150.3624">
        </a>
		<div style="display:inline; flex-direction:rows;">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-color u-custom-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
			</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Acceuil.html" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 26px;">About</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="shop-grid.php" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="animaux.php" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="forum.html" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="events" style="padding: 10px 26px;">events</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acceuil.html" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 10px 26px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="shop-grid.php" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="animaux.php" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum.html" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="events" style="padding: 10px 26px;">events</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
		<div>
        <a href="login" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">login</a>
        <a href="signin" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">sign in</a>
</div>
</div>
      </div></header>
  
	<!-- End Header -->

	<!-- /End Color Plate -->
	<!--/ End Header -->

	<section class="u-clearfix u-block-aac2-21" custom-posts-hash="[]" data-style="blank" data-section-properties="{&quot;margin&quot;:&quot;none&quot;,&quot;stretch&quot;:true}" id="carousel_cac3" data-source="fix" data-id="aac2" style="">
        <div class="u-clearfix u-sheet u-block-aac2-2" data-height-lg="719" data-height-md="610" data-height-sm="490" data-height-xs="392" style="min-height: 719px">
            <img class="u-image u-block-aac2-24" src="images/pexels-photo-56733.jpeg" style="width: 570px; height: 620px; margin-top: 60px; margin-right: 0; margin-bottom: 0; margin-left: auto" data-block="9" data-block-type="Image">
            
            
        <div class="u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-group u-block-aac2-30" style="width: 570px; min-height: 620px; margin-top: -620px; margin-right: auto; margin-bottom: 60px; margin-left: 0" data-block="10" data-block-type="Group"><div class="u-container-layout u-block-aac2-31" style="padding-top: 30px; padding-bottom: 30px; padding-left: 30px; padding-right: 30px" data-container-layout-dom="1"><h1 class="u-align-left u-heading-font u-text u-title u-block-aac2-5" style="font-size: 6rem; font-weight: 700; margin-top: 21px; margin-right: 0; margin-bottom: 0; margin-left: 17px" data-block="11" data-block-type="Text">Pets&nbsp;Shop<br>Supplies&nbsp;</h1><p class="u-text u-block-aac2-6" style="font-weight: 600; font-size: 1rem; font-style: normal; margin-top: 21px; margin-right: 20px; margin-bottom: 0; margin-left: 0" data-block="12" data-block-type="Text">To be the most trusted and convenient online destination</p><div class="u-border-3 u-border-palette-5-base u-line u-line-horizontal u-block-aac2-25" style="width: 111px; height: 3px; transform-origin: left center; margin-top: 30px; margin-right: auto; margin-bottom: 0; margin-left: 0" data-block="13"></div><div class="u-social-icons u-spacing-10 u-block-aac2-26" style="white-space: nowrap; height: 32px; min-height: 16px; width: 116px; min-width: 68px; margin-top: 20px; margin-right: auto; margin-bottom: 0; margin-left: 0" data-block="14"><a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-block-aac2-27" style="height: 100%"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bcd7"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-bcd7"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span></a><a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-block-aac2-28" style="height: 100%"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efde"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-efde"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span></a><a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-block-aac2-29" style="height: 100%"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c59d"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-c59d"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span></a></div><div class="u-expanded-width u-form u-block-aac2-7" style="height: 51px; margin-top: 30px; margin-right: -60px; margin-bottom: 0; margin-left: 0" data-block="15">
                <form action="#" method="POST" class="u-block-aac2-8 u-clearfix u-form-horizontal u-form-spacing-0 u-inner-form" source="custom">
                    <!-- hidden inputs for siteId and pageId -->
                    
                    
                    
                    <!-- always visible -->
                    <div class="u-form-email u-form-group u-block-aac2-22 ui-draggable ui-draggable-handle" style="" data-block="16" data-block-type="FormField">
                        <label for="email-cfd3" class="u-form-control-hidden u-label u-block-aac2-11" style="">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-cfd3" name="email" class="u-border-2 u-border-palette-5-base u-input u-input-rectangle u-white u-block-aac2-12" required="" style="">
                    </div>
                    
                    
                    
                    
                    <div class="u-form-group u-form-submit u-block-aac2-23" style="" data-block="17">
                        <a href="#" class="u-border-2 u-border-palette-5-base u-btn u-btn-rectangle u-btn-submit u-button-style u-palette-5-base u-radius-0 u-block-aac2-20" style="background-image: none; text-transform: uppercase; letter-spacing: 2px; border-style: solid" data-block="18">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success">
                        Thank you! Your message has been sent.
                    </div>
                    <div class="u-form-send-error u-form-send-message">
                        Unable to send your message. Please fix errors then try again.
                    </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div></div></div></div>
        
        
        
        
        
    <style data-mode="XL">@media (max-width: 0px) { .u-block-aac2-2 {min-height: 719px}
.u-block-aac2-24 {width: 570px; height: 620px; margin-top: 60px; margin-right: 0; margin-bottom: 0; margin-left: auto}
.u-block-aac2-30 {width: 570px; min-height: 620px; margin-top: -620px; margin-right: auto; margin-bottom: 60px; margin-left: 0}
.u-block-aac2-31 {padding-top: 30px; padding-bottom: 30px; padding-left: 30px; padding-right: 30px}
.u-block-aac2-5 {font-size: 6rem; font-weight: 700; margin-top: 21px; margin-right: 0; margin-bottom: 0; margin-left: 17px}
.u-block-aac2-6 {font-weight: 600; font-size: 1rem; font-style: normal; margin-top: 21px; margin-right: 20px; margin-bottom: 0; margin-left: 0}
.u-block-aac2-25 {width: 111px; height: 3px; transform-origin: left center; margin-top: 30px; margin-right: auto; margin-bottom: 0; margin-left: 0}
.u-block-aac2-26 {white-space: nowrap; height: 32px; min-height: 16px; width: 116px; min-width: 68px; margin-top: 20px; margin-right: auto; margin-bottom: 0; margin-left: 0}
.u-block-aac2-27 {height: 100%}
.u-block-aac2-28 {height: 100%}
.u-block-aac2-29 {height: 100%}
.u-block-aac2-7 {height: 51px; margin-top: 30px; margin-right: -60px; margin-bottom: 0; margin-left: 0}
.u-block-aac2-20 {background-image: none; text-transform: uppercase; letter-spacing: 2px; border-style: solid} }</style><style data-mode="LG" data-visited="true">@media (max-width: 0px) { .u-block-aac2-2 {min-height: 610px}
.u-block-aac2-24 {width: 470px; height: 511px; margin-top: 60px; margin-right: 0; margin-bottom: 0; margin-left: auto}
.u-block-aac2-30 {width: 470px; min-height: 511px; margin-top: -511px; margin-right: auto; margin-bottom: 60px; margin-left: 0}
.u-block-aac2-31 {padding-top: 30px; padding-bottom: 30px; padding-left: 30px; padding-right: 30px}
.u-block-aac2-5 {font-weight: 700; margin-top: 21px; margin-right: 0; margin-bottom: 0; margin-left: 17px; font-size: 4.5rem}
.u-block-aac2-6 {font-weight: 600; font-size: 1rem; font-style: normal; margin-top: 21px; margin-right: 20px; margin-bottom: 0; margin-left: 0}
.u-block-aac2-25 {width: 111px; height: 3px; transform-origin: left center; margin-top: 30px; margin-right: auto; margin-bottom: 0; margin-left: 0}
.u-block-aac2-26 {white-space: nowrap; height: 32px; min-height: 16px; width: 116px; min-width: 68px; margin-top: 20px; margin-right: auto; margin-bottom: 0; margin-left: 0px}
.u-block-aac2-27 {height: 100%}
.u-block-aac2-28 {height: 100%}
.u-block-aac2-29 {height: 100%}
.u-block-aac2-7 {height: 51px; margin-top: 30px; margin-bottom: 0}
.u-block-aac2-20 {background-image: none; text-transform: uppercase; letter-spacing: 2px; border-style: solid} }</style><style data-mode="MD" data-visited="true">@media (max-width: 0px) { .u-block-aac2-2 {min-height: 936px}
.u-block-aac2-24 {width: 360px; height: 391px; margin-top: 60px; margin-left: auto; margin-right: auto; margin-bottom: 0}
.u-block-aac2-30 {width: 470px; min-height: 405px; margin-top: 20px; margin-left: auto; margin-right: auto; margin-bottom: 14px}
.u-block-aac2-31 {padding-top: 30px; padding-bottom: 30px; padding-left: 30px; padding-right: 30px}
.u-block-aac2-5 {font-size: 4.5rem; font-weight: 700; margin-top: 21px; margin-bottom: 0; margin-left: 17px; margin-right: 0}
.u-block-aac2-6 {font-weight: 600; font-size: 1rem; font-style: normal; margin-top: 21px; margin-left: 10px; margin-right: 10px; margin-bottom: 0}
.u-block-aac2-25 {width: 111px; height: 3px; transform-origin: left center; margin-top: 30px; margin-left: auto; margin-right: auto; margin-bottom: 0}
.u-block-aac2-26 {white-space: nowrap; height: 32px; min-height: 16px; width: 116px; min-width: 68px; margin-top: 20px; margin-left: auto; margin-right: auto; margin-bottom: 0}
.u-block-aac2-27 {height: 100%}
.u-block-aac2-28 {height: 100%}
.u-block-aac2-29 {height: 100%}
.u-block-aac2-7 {height: 51px; margin-top: 30px; margin-bottom: 0}
.u-block-aac2-20 {background-image: none; text-transform: uppercase; letter-spacing: 2px; border-style: solid} }</style><style data-mode="SM" data-visited="true">@media (max-width: 0px) { .u-block-aac2-2 {min-height: 492px}
.u-block-aac2-24 {width: 360px; height: 391px; margin-top: 60px; margin-right: auto; margin-left: auto; margin-bottom: 0}
.u-block-aac2-30 {width: 470px; min-height: 405px; margin-top: 20px; margin-left: auto; margin-right: auto; margin-bottom: 60px}
.u-block-aac2-31 {padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px}
.u-block-aac2-5 {font-size: 3.75rem; font-weight: 700; margin-top: 21px; margin-right: 0; margin-bottom: 0; margin-left: 17px}
.u-block-aac2-6 {font-weight: 600; font-size: 1rem; margin-top: 21px; margin-right: 10px; margin-bottom: 0; margin-left: 10px; font-style: normal}
.u-block-aac2-25 {width: 111px; height: 3px; transform-origin: left center; margin-top: 30px; margin-right: auto; margin-bottom: 0; margin-left: auto}
.u-block-aac2-26 {white-space: nowrap; height: 32px; min-height: 16px; width: 116px; min-width: 68px; margin-top: 20px; margin-right: auto; margin-bottom: 0; margin-left: auto}
.u-block-aac2-27 {height: 100%}
.u-block-aac2-28 {height: 100%}
.u-block-aac2-29 {height: 100%}
.u-block-aac2-7 {height: 51px; margin-top: 30px; margin-bottom: 0}
.u-block-aac2-20 {background-image: none; text-transform: uppercase; letter-spacing: 2px; border-style: solid} }</style><style data-mode="XS" data-visited="true">@media (max-width: 0px) { .u-block-aac2-2 {min-height: 383px}
.u-block-aac2-24 {width: 340px; height: 369px; margin-top: 60px; margin-right: auto; margin-left: auto; margin-bottom: 0}
.u-block-aac2-30 {width: 340px; min-height: 405px; margin-top: 20px; margin-left: auto; margin-right: auto; margin-bottom: 60px}
.u-block-aac2-31 {padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px}
.u-block-aac2-5 {font-size: 3rem; font-weight: 700; margin-top: 21px; margin-right: 0; margin-bottom: 0; margin-left: 0px}
.u-block-aac2-6 {font-weight: 600; font-size: 1rem; margin-top: 21px; margin-right: 0px; margin-bottom: 0; margin-left: 0; font-style: normal}
.u-block-aac2-25 {width: 111px; height: 3px; transform-origin: left center; margin-top: 30px; margin-right: auto; margin-bottom: 0; margin-left: auto}
.u-block-aac2-26 {white-space: nowrap; height: 32px; min-height: 16px; width: 116px; min-width: 68px; margin-top: 20px; margin-right: auto; margin-bottom: 0; margin-left: auto}
.u-block-aac2-27 {height: 100%}
.u-block-aac2-28 {height: 100%}
.u-block-aac2-29 {height: 100%}
.u-block-aac2-7 {height: 51px; margin-top: 30px; margin-bottom: 0}
.u-block-aac2-22 {width: 100%}
.u-block-aac2-23 {width: 100%}
.u-block-aac2-20 {background-image: none; text-transform: uppercase; letter-spacing: 2px; border-style: solid} }</style></section>

<?php if(!empty($listCatg)) { ?>
<section class="u-clearfix u-section-2" id="carousel_c996">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 style="margin-left:auto; margin-right:auto;"><strong>Our Categories</strong></h2>
          </div>
        </div>
		<div class="container">
			<div class="row">
			<!-- Section 1 -->
			<?php foreach($listCatg as $categorie) { ?>
			<div class="col px-lg-5  text-center">
				<div>
				<img style="width:150px; height:150px; border-radius:50%;" class="default-img" src="images/categories/<?php echo $categorie->getImage(); ?>"/>
				<h2><strong><?php echo $categorie->getNom(); ?></strong><h2>
				</div>
			</div>
			<!-- End Section 1 -->
			<?php } ?>
		</div>
        </div>
		</div>
      </div>
    </section>
	<?php } ?>
	
	<!-- Product Style -->
	<section class="product-area shop-sidebar shop section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<div class="shop-sidebar">
						<!-- Single Widget -->
						<div class="single-widget category">
							<h3 class="title">Categories</h3>
							<ul class="categor-list">
								<?php foreach($listCatg as $categorie) { ?>
								<li><a href="shop-grid.php?id_categorie=<?php echo $categorie->getId(); ?>"><?php echo $categorie->getNom(); ?></a></li>
								<?php } ?>
							</ul>
						</div>
						<!--/ End Single Widget -->
						<!-- Shop By Price -->
						<div class="single-widget range">
							<h3 class="title">Shop by Price</h3>
							<div class="price-filter">
								<div class="price-filter-inner">
									<div id="slider-range"></div>
									<div class="price_slider_amount">
										<div class="label-input">
											<span>Range:</span><input type="text" id="amount" name="price"
												placeholder="Add Your Price" />
										</div>
									</div>
								</div>
							</div>
							<ul class="check-box-list">
								<li>
									<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20
										- $50<span class="count">(3)</span></label>
								</li>
								<li>
									<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50
										- $100<span class="count">(5)</span></label>
								</li>
								<li>
									<label class="checkbox-inline" for="3"><input name="news" id="3"
											type="checkbox">$100 - $250<span class="count">(8)</span></label>
								</li>
							</ul>
						</div>
						<!--/ End Shop By Price -->
						<!-- Single Widget -->
						<div class="single-widget recent-post">
							<h3 class="title">Recent Articles</h3>
							<!-- Single Post -->
							<?php if(!empty($recentARticles)) {
								foreach($recentARticles as $recent ){
								?>
							<div class="single-post first">
								<div class="image">
									<img src="images/products/<?php echo $recent->getImage(); ?>" alt="#">
								</div>
								<div class="content">
									<h5><a href="#"><?php echo $recent->getNom(); ?></a></h5>
									<p class="price"><?php echo $recent->getPrix(); ?></p>
									<ul class="reviews">
										<li class="yellow"><i class="ti-star"></i></li>
										<li class="yellow"><i class="ti-star"></i></li>
										<li class="yellow"><i class="ti-star"></i></li>
										<li><i class="ti-star"></i></li>
										<li><i class="ti-star"></i></li>
									</ul>
								</div>
							</div>
							<?php } }?>
							<!-- End Single Post -->
						
						
						</div>
						<!--/ End Single Widget -->
						<!-- Single Widget -->
						<div class="single-widget category">
							<h3 class="title">Manufacturers</h3>
							<ul class="categor-list">
								<li><a href="#">Forever</a></li>
								<li><a href="#">giordano</a></li>
								<li><a href="#">abercrombie</a></li>
								<li><a href="#">ecko united</a></li>
								<li><a href="#">zara</a></li>
							</ul>
						</div>
						<!--/ End Single Widget -->
					</div>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<div class="row">
						<div class="col-12">
							<!-- Shop Top -->
							<div class="shop-top">
								<div class="shop-shorter">
									<div class="single-shorter">
										<label>Show :</label>
										<select>
											<option selected="selected">09</option>
											<option>15</option>
											<option>25</option>
											<option>30</option>
										</select>
									</div>
									<div class="single-shorter">
										<label>Sort By :</label>
										<select>
											<option selected="selected">Name</option>
											<option>Price</option>
											<option>Size</option>
										</select>
									</div>
								</div>
								<ul class="view-mode">
									<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
									<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
								</ul>
							</div>
							<!--/ End Shop Top -->
						</div>
					</div>
					<div>
					<input type="text" placeholder="Search ..">
					</div>
					<?php if(!empty($listearticle)) { ?>
					<!-- Start block row -->
					<div class="row">
					<?php foreach($listearticle as $product) { ?>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="<?php echo "images/products/".$product->getImage(); ?>" alt="#">
										<img class="hover-img" src="<?php echo "images/products/".$product->getImage(); ?>" alt="#">
									</a> 
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View"
												href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
													Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
													Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html"><?php echo $product->getNom(); ?></a></h3>
									<div class="product-price">
										<span><?php echo $product->getPrix()."TND" ; ?></span>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } else { ?>
						<div class="col-xs-1 text-center">
							<h5 style="color: #d3d3d3; padding-top:5vh;">No product found.</h3>
					</div>
					<?php } ?>
					<!-- End block row-->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Product Style 1  -->

    
	<!-- End Shop Newsletter -->



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
							aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<!-- Product Slider -->
							<div class="product-gallery">
								<div class="quickview-slider-active">
									<div class="single-slider">
										<img src="images/modal1.png" alt="#">
									</div>
									<div class="single-slider">
										<img src="images/modal2.png" alt="#">
									</div>
									<div class="single-slider">
										<img src="images/modal3.png" alt="#">
									</div>
									<div class="single-slider">
										<img src="images/modal4.png" alt="#">
									</div>
								</div>
							</div>
							<!-- End Product slider -->
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="quickview-content">
								<h2>Flared Shift Dress</h2>
								<div class="quickview-ratting-review">
									<div class="quickview-ratting-wrap">
										<div class="quickview-ratting">
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="#"> (1 customer review)</a>
									</div>
									<div class="quickview-stock">
										<span><i class="fa fa-check-circle-o"></i> in stock</span>
									</div>
								</div>
								<h3>$29.00</h3>
								<div class="quickview-peragraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum
										ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui
										nemo ipsum numquam.</p>
								</div>
								<div class="size">
									<div class="row">
										<div class="col-lg-6 col-12">
											<h5 class="title">Size</h5>
											<select>
												<option selected="selected">s</option>
												<option>m</option>
												<option>l</option>
												<option>xl</option>
											</select>
										</div>
										<div class="col-lg-6 col-12">
											<h5 class="title">Color</h5>
											<select>
												<option selected="selected">orange</option>
												<option>purple</option>
												<option>black</option>
												<option>pink</option>
											</select>
										</div>
									</div>
								</div>
								<div class="quantity">
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled"
												data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number" data-min="1"
											data-max="1000" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus"
												data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>
								<div class="add-to-cart">
									<a href="#" class="btn">Add to cart</a>
									<a href="#" class="btn min"><i class="ti-heart"></i></a>
									<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
								</div>
								<div class="default-social">
									<h4 class="share-now">Share:</h4>
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal end -->



	<!-- Jquery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
	  
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9598"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Exemple de texte. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
</body>

<!-- Mirrored from wpthemesgrid.com/themes/eshop/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 19:05:12 GMT -->

</html>