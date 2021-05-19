
<?php
    include_once 'Model/album.php';
    include_once 'Controller/albumC.php';
  

    $error = "";
    $alert_ptitre ="le titre seulement en caractere";
    $alert_etat ="l'etat est 1 ou 2";

    $verif_titre=0;
    $verif_etat=0;
    $verif_description=0;

    // create user
    $album = null;

    // create an instance of the controller
    $albumC = new albumC();
    if (
        isset($_POST["titre"]) && 
        isset($_POST["description"]) &&
        isset($_POST["image"])&&
        isset($_POST["etat"])&&
        isset($_POST["famille"])



    ) {
        if (
            !empty($_POST["titre"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["image"]) &&
            !empty($_POST["etat"])&&
            !empty($_POST["famille"])

        )
            {
              
              if( preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['titre'] )==1 && preg_match (" /^[1,2]{1}$/ ", $_POST['etat'] )==1  )
              { 



            


        
            
            $album = new album(
            
                $_POST['titre'],
                $_POST['description'], 
                $_POST['image'],
                $_POST['etat'],
                $_POST['famille'],



              
            );
            $albumC->ajouteralbum($album);
            header('Location:addalbum.php');
        }
        else 
        {
          if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['titre'] )==0){$verif_titre=1;}
          if(preg_match ( " /^[1,2]{1}$/ " , $_POST['etat'] )==0){$verif_etat=1;}


        }
      
      }

      
        else
            $error = "Missing information";
    } 




    $listealbums2=$albumC->afficherAlbums2(); 



  




    


  $bdd=new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '',);
	$listealbums = $bdd->query('SELECT * FROM album ORDER BY idalbum');
	if (isset ($_GET['s']) AND !empty($_GET['s'])){
      $recherche =	htmlspecialchars($_GET['s']);
	  $listealbums = $bdd->query('SELECT * FROM album WHERE titre LIKE "%' .$recherche .'%" '  ); 
	}


  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); }

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
		
		
          <form action="" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-number">
              <label for="name-3b9a" class="u-form-control u-label">Titre</label>
              <input type="texte" placeholder="titre" id="titre" name="titre" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  value="<?php echo $album['idalbum'] ?>" >
            </div>
            <div class="u-form-group u-form-message">
              <label  class="u-form-control u-label">description</label>
              <input type="texte" placeholder="description" id="description" name="description" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
            </div>
            <div class="u-form-group u-form-file">
              <label for="message-3b9a" class="u-form-control u-label">Message</label>
              <input type="file"  id="image" name="image" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
            </div>



            <div class="u-form-group u-form-file">
                    <label  class="u-form-control u-label">etat</label>
                <div>
                     
                    
                    <input type="radio" id="etat" name="etat" value="1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" checked>
                    <label for="etat" value="1" class="u-form-control u-label"> adoptable</label>
                </div>

            </div>

            <div class="u-form-group u-form-file">
            <label class="u-form-control u-label">famille</label>
                      
                        <div>
                                <?PHP
				                    foreach($listealbums2 as $album){
			                    ?>
                            <input type="radio" id="famille" name="famille" value="<?PHP echo $album['nom_famille']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" checked>
                            <label for="famille"><?PHP echo $album['nom_famille']; ?></label>
                        </div>                    


                        <?PHP
				            }
			            ?>
            
            
                        </div>                 



                        <button type="submit" name="submit" > submit</button>
            </form>
            
          
          
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