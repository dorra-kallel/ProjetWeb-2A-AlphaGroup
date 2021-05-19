<?php
  include "Controller/adoptC.php";
  include "controller/albumC.php";


    $error = "";


    $albumC = new albumC();
	

	if (
        isset($_POST["titre"]) && 
        isset($_POST["description"]) &&
        isset($_POST["image"])
        


        
    ){
		if (
            !empty($_POST["titre"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["image"])


            

        ) {
            $album = new album(
                $_POST['titre'],
                $_POST['description'], 
                $_POST['image']


               

            );
            
            $albumC->modifierAlbum($album, $_GET['idalbum']);
           // header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}










    // create user
    $adoption = null;

    // create an instance of the controller
    $adoptionC = new adoptionC();
    if (
        isset($_POST["id_animal"]) && 
        isset($_POST["id_user"]) &&
        isset($_POST["nom_user"])
    ) {
        if (
            !empty($_POST["id_animal"]) && 
            !empty($_POST["id_user"]) && 
            !empty($_POST["nom_user"])
        ) 
            {
            $adoption = new adoption(
                $_POST['id_animal'],
                $_POST['id_user'], 
                $_POST['nom_user'], 
              
            );
            $adoptionC->ajouteradoption($adoption);
            header('Location:adoptionaffich.php');
        }
        else
            $error = "Missing information";
    } 
    ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.12.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/templatemo_logo.png"
}</script>
    <meta property="og:title" content="Contact">
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
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 26px;">About</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="E-Shop" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="animaux.html" style="padding: 10px 26px;">animaux</a>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="E-Shop" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="animaux.html" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum.html" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="events" style="padding: 10px 26px;">events</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="login" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">login</a>
        <a href="signin" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">sign in</a>
      </div></header>


    <section class="u-align-center u-clearfix u-section-1" id="sec-0fc7">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-1">Adoption  Form</h2>
        <div class="u-form u-form-1">

        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['idalbum'])){
				$album = $albumC->recupererAlbum($_GET['idalbum']);
				
		?>
          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-number">
              <label for="name-3b9a" class="u-form-control-hidden u-label">Name</label>
              <input type="number" placeholder="identifiant de l'animal" id="id_animal" name="id_animal" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  value="<?php echo $album['idalbum'] ?>" readonly>
            </div>
            <div class="u-form-group u-form-number">
              <label  class="u-form-control-hi     dden u-label">id_user</label>
              <input type="number" placeholder="identifiant de l'utilisateur" id="id_user" name="id_user" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-3b9a" class="u-form-control-hidden u-label">Message</label>
              <textarea placeholder="Nom de l'utilisateur" rows="4" cols="50" id="nom_user" name="nom_user" value="aaaaa" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" ></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
            <form method="POST" action="deletalbum.php">
            <input  type="submit"  class="u-btn u-btn-submit u-button-style" value="submit" >

						<input type="hidden" value=<?PHP echo $album['idalbum']; ?> name="idalbum">
						</form>
              <inbut type="button"  value="sudqsdqsdqbmit" >
            </div>
            
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
          <?php  

      }
?>
          
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9598"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Exemssssdsdssple de texte. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
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