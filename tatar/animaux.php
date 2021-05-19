<?PHP
include "../template_1/Controller/albumC.php";



if(isset($_GET['page']) && !empty($_GET['page'])){
  $currentPage = (int) strip_tags($_GET['page']);
}else{
  $currentPage = 1;
}
// On se connecte à là base de données
//require_once('connect.php');

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS nb_animaux FROM `album`;';
$db = config::getConnexion();
// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_animaux'];

// On détermine le nombre d'articles par page
$parPage = 9;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM `album` ORDER BY `idalbum` DESC LIMIT :premier, :parpage;';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();
 
// On récupère les valeurs dans un tableau associatif
$listealbums = $query->fetchAll(PDO::FETCH_ASSOC);




	$albumC=new albumC();
 //$listealbums=$albumC->afficherAlbums(); 


	$listealbums1=$albumC->afficherAlbums1(); 

if ((isset($_POST["recherche"]))&& (isset($_POST["colonne"]))){
  if (!empty(isset($_POST["recherche"]))){
   $n=$_POST["colonne"];
    $listealbums=$albumC->rechercher($_POST["recherche"],$n);
  } 
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
    <title>animaux</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="animaux.css" media="screen">
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
    <meta property="og:title" content="animaux">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Acceuil.php" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Front/shop-grid" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="animaux.php" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="forumm.php" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="event.php" style="padding: 10px 26px;">events</a>




    
</li></ul>
Bienvenue <?php echo $_SESSION['username']; ?>!

          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acceuil.html" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 26px;">Contact</a>
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
        <a href="logout.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">  logout  </a>
</a>
      </div></header>

      <form method="POST" action="">
        <select name="colonne" class=" flex-c-m text-center size-905 bor4 pointer hov-btn3"  style="width: 180px;">
        <option value="all" >Tous</option>
          <option value="titre">titre</option>
          <option value="description">description</option>
          <option value="famille">famille</option>
        </select>
          <input type="text" name="recherche" placeholder="Rechercher" class=" m-b-10 flex-c-m text-center size-105 bor4 pointer hov-btn3  m-tb-4 "> 
          <input type="submit" name="chercher" value="Valider" class="m-t-0 flex-c-m text-center size-105 bor4 pointer hov-btn3  m-tb-4" style="width: 180px;">

       </form>
       <a href="addanimal.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">ajouter un animal</a>

      <section class="u-align-center u-clearfix u-section-1" id="sec-f2a9">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-1">Animals </h3><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class="u-expanded-width u-products u-products-1">
          <div class="u-repeater u-repeater-1"><!--product_item-->

         

          <?php
          foreach($listealbums as $album){
			?>
            
           
           
           
            <div class="u-align u-container-style u-products-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-sm u-container-layout-11"><!--product_image-->
                <img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-6" src="images/<?php echo $album['image'];?>"><!--/product_image-->
              
                <div class="u-align-center u-container-style u-grey-10 u-group u-group-6">
                  <div class="u-container-layout u-valign-top u-container-layout-12">
                    <h6 class="u-text u-text-12"><?PHP echo $album['titre']; ?></h6>
                  </div>
                </div><!--product_content-->
                <a class="btn btn-outline-info" href="fpdf/pdf.php?idalbum=<?PHP echo $album['idalbum']; ?>" name="imprimer" > pdf </a>
                <div class="u-product-control u-product-desc u-text u-text-13" > <!--product_content_content--> <span >Description :</span><textarea name="description" id="description"  readonly disabled><?PHP echo $album['description']; ?></textarea> </div><!--/product_content-->
              </div>
            </div><!--/product_item-->
            <?php 
          }
          ?>

          
          </div>
        </div><!--/products-->
      </div>
    </section>

    <nav>
                    <ul class="pagination ">
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>" sty>
                                <a href="animaux.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>
    

    
    <section class="u-align-center u-clearfix u-palette-5-base u-section-2" id="sec-e206">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Shelter</h3><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-products u-products-1">
          <div class="u-repeater u-repeater-1"><!--product_item-->
         
          <div class="u-align-center-lg u-align-center-sm u-align-center-xl u-align-center-xs u-container-style u-products-item u-repeater-item">
          <?PHP
				foreach($listealbums1 as $album){
			?>
              <div class="u-container-layout u-similar-container u-container-layout-1"><!--product_image-->

              
      <img class="u-image u-image-default u-product-control u-image-1"  src="images/<?php echo $album['image'];?>" width="200px" height="200px">

                <div class="u-container-style u-group u-palette-5-light-2 u-group-1">
                  <div class="u-container-layout u-container-layout-2"><!--product_title-->
                    <h4 class="u-align-center u-product-control u-text u-text-2">
                      <a class="u-product-title-link" href="#"><!--product_title_content--><?PHP echo $album['titre']; ?><!--/product_title_content--></a>
                      
                    </h4><!--/product_title-->
                   <a href="form.php?idalbum=<?php echo $album['idalbum']?>" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-1-base u-radius-2 u-btn-1">Form</a>
                    <a href="https://nicepage.com/c/tiles-html-templates" class="u-border-2 u-border-palette-3-dark-1 u-btn u-button-style u-hover-palette-1-base u-text-palette-3-dark-2 u-white u-btn-2">Show more&nbsp;<span class="u-icon u-text-palette-1-dark-2"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M441.156,322.876l-48.666-47.386c-3.319-3.243-8.619-3.234-11.93,0.017l-81.894,80.299V8.533 c0-4.71-3.823-8.533-8.533-8.533h-68.267c-4.71,0-8.533,3.823-8.533,8.533v347.273l-81.894-80.299    c-3.311-3.243-8.602-3.251-11.921-0.017l-48.666,47.386c-1.655,1.604-2.586,3.806-2.586,6.11c0,2.304,0.939,4.506,2.586,6.11 l179.2,174.481c1.655,1.613,3.806,2.423,5.948,2.423c2.15,0,4.292-0.811,5.956-2.423l179.2-174.481 c1.647-1.604,2.577-3.806,2.577-6.11C443.733,326.682,442.803,324.48,441.156,322.876z"></path></svg><img></span>
                    </a>
                  </div>
                </div><!--product_content-->
                <div class="u-align-center-md u-align-center-sm u-align-center-xs u-product-control u-product-desc u-text u-text-3"><!--product_content_content-->Sample small text. Lorem ipsum dolor sit amet.<!--/product_content_content--></div><!--/product_content-->
              </div>
              
            </div><!--/product_item--><!--product_item-->
            <?php
        }
               ?>
              </div>
            </div><!--/product_item-->
          </div>
        </div><!--/products-->
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