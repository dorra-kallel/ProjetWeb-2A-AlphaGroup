<?PHP
include 'albumC.php';


	$albumC=new campC();
	$listealbums=$albumC->afficherevent(); 


  

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sample Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>event</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="event.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.12.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/templatemo_logo.png"
}</script>
    <meta property="og:title" content="event">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-white u-header" id="sec-0074"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="896" data-image-height="759">
          <img src="images/templatemo_logo.png" class="u-logo-image u-logo-image-1" data-image-width="150.3624">
        </a>
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
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="E-Shop" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="animaux.html" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="forum.html" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="event.php" style="padding: 10px 26px;">events</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acceuil.html" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="E-Shop" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="animaux.html" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum.html" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="event.php" style="padding: 10px 26px;">events</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="login" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">login</a>
        <a href="signin" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">sign in</a>
      </div></header>
    <section class="u-clearfix u-grey-90 u-section-1" id="sec-f342">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-20 u-size-60-md">
                <div class="u-layout-col">
                <?php
          foreach($listealbums as $album){
			?>
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-valign-bottom-xs u-valign-top-md u-valign-top-sm u-container-layout-1">
                      <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-1" src="images/<?php echo $album['image3'];?>" data-image-width="1280" data-image-height="853">
                    </div>
                  </div>
                  <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-2 " >
                    
                  <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-2" src="images/<?php echo $album['image2'];?>" data-image-width="1280" data-image-height="853">
                  </div>
                </div>
              </div>
              <div class="u-size-23-lg u-size-23-sm u-size-23-xl u-size-23-xs u-size-38-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <img class="u-expanded-width u-image u-image-3"  src="images/<?php echo $album['image'];?>" data-image-width="150" data-image-height="100">
                      <p class="u-text u-text-1"><?PHP echo $album['discription']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-17-lg u-size-17-sm u-size-17-xl u-size-17-xs u-size-22-md">
                <div class="u-layout-col">
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-4">
                    <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-4">
                      <div class="u-container-style u-group u-white u-group-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-5">
                          <h3 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-2"><b><?PHP echo $album['titre']; ?></b>
                          </h3>
                          <p class="u-text u-text-3"><?PHP echo $album['discription']; ?></p>
                        </div>
                      </div>
                      <a href="Site1/Accueil.php" data-page-id="31012998" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">register,camp,rondo</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
          }
          ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
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
</html>