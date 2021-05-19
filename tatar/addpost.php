<?php
  include_once 'Model/forum.php';
  include_once 'Controller/forumC.php';

    $error = "";
    $alert_ptitre ="le titre seulement en caractere";
    

    $verif_titre=0;
    
    $verif_description=0;

    // create user
    $forum = null;

    // create an instance of the controller
    $forumC = new forumC();
    if (
        isset($_POST["titre"]) && 
        isset($_POST["description"]) &&
        isset($_POST["image"])&&
        
        isset($_POST["comu"])&&
        isset($_POST["ad"])

        



    ) {
        if (
            !empty($_POST["titre"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["image"]) &&
            
            !empty($_POST["comu"])&&
            !empty($_POST["ad"])


        )
            {
              
              if( preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['titre'] )==1   )
              { 



            


        
            
            $forum = new forum(
            
                $_POST['titre'],
                $_POST['description'], 
                $_POST['image'],
                
                $_POST['comu'],
                $_POST['ad'],

                



              
            );
            $forumC->ajouterforum($forum);
            header('Location:forumm.php');
        }
        else 
        {
          if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['titre'] )==0){$verif_titre=1;}
          


        }
      
      }

      
        else
        ?>
        <script type="text/javascript">
        alert("Missing information");
      </script>
      
      <?php 
    } 




    $listeforums2=$forumC->afficherforums2(); 



  




    


  $bdd=new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '',);
	$listeforums = $bdd->query('SELECT * FROM forum ORDER BY idforum');
	if (isset ($_GET['s']) AND !empty($_GET['s'])){
      $recherche =	htmlspecialchars($_GET['s']);
	  $listeforums = $bdd->query('SELECT * FROM forum WHERE titre LIKE "%' .$recherche .'%" '  ); 
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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>About</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="contact.css" media="screen">
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
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="login.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-white u-header" id="sec-0074"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Acceuil.php" class="u-image u-logo u-image-1" data-image-width="896" data-image-height="759">
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
    <div style="text-align: right; padding-right: 10px">
    <a href="logout.php" >Déconnexion</a>
    </div>
    
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="acceuil.php" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Front/shop-grid" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="animaux.php" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="forumm.php" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="event.php" style="padding: 10px 26px;">events</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="acceuil.php" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 26px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.php" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="E-Shop" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="animaux.php" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum.php" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="events" style="padding: 10px 26px;">events</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        
        
      </div></header> 

      


      <section class="u-align-center u-clearfix u-section-1" id="sec-0fc7">
             
        
                <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                  <h4 class="u-text u-text-1">Ajouter post</h4>
                  <div class="u-form u-form-1">
                  <div id="error">
            <?php echo $error; ?>
        </div>
                  <form class="forms-sample" action="" method="POST" >
                    <div class="u-form-group u-form-number">
                      <label for="name-3b9a" style="margin: bottom 40px;">titre</label><br>
                      <input type="text" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" name="titre" id="titre"  placeholder="NOM">
                      <?php
                      if($verif_titre==1){
                      echo $alert_ptitre;
                      $verif_titre=0;
                      }

                      ?>
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" name="description" id="description" maxlength="250">
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="exampleInputEmail1">added by </label>
                      <input type="text" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" name="ad" id="ad" value="<?php echo $_SESSION['username']; ?>" readonly>
                    </div>
                    <div class="u-form-group u-form-number">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" name="image" id="image" >
                    </div>

                    


                    
                    
                    <div class="u-form-group u-form-number">
                      <label for="exampleInputPassword">communauté</label>
                      
                      <div>
                          <?PHP
				                      foreach($listeforums2 as $forum){
			                    ?>
                        <input type="radio" id="comu" name="comu" value="<?PHP echo $forum['nom_com']; ?>" checked>
                        <label for="comu"><?PHP echo $forum['nom_com']; ?></label>
                      </div>                    


                          <?PHP
                             	}
                          ?>
                    </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>


                    <div>
                    
                   

                  </form>
                </div>
              </div>
            </div>




    
    
    
  </body>
</html>