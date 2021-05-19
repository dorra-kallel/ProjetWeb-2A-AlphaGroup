<?PHP
include "Controller/forumC.php";
if(isset($_GET['page']) && !empty($_GET['page'])){
  $currentPage = (int) strip_tags($_GET['page']);
}else{
  $currentPage = 1;
}
// On se connecte à là base de données
//require_once('connect.php');

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS nb_animaux FROM `forum`;';
$db = config::getConnexion();
// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_animaux'];

// On détermine le nombre d'articles par page
$parPage =2 ;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM `forum` ORDER BY `idforum` DESC LIMIT :premier, :parpage;';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();
 
// On récupère les valeurs dans un tableau associatif
$listeforums = $query->fetchAll(PDO::FETCH_ASSOC);


	$forumC=new forumC(); 
	//$listeforums=$forumC->afficherforums(); 
 

  $listeforums2=$forumC->afficherforums2();
 
 // Initialiser la session
 session_start();
 // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
 if(!isset($_SESSION["username"])){
   header("Location: login.php");
   exit(); 
 }

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
  <meta charset="utf-8">
<style media="all">

.wrapper {
  width: 50%;
  margin: 0 auto;
  background: #e7e7e7;
}

.content {
  width: 60%;
  float: left;
}
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Post 1 Headline, Post 2 Headline, Post 3 Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>forum</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="forum.css" media="screen">
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
    <meta property="og:title" content="forum">
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
          <div class="sucess">
                      <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
                      <div style="text-align: right; padding-right: 10px">
    
    </div>
              </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Acceuil.php" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="Front/shop-grid.php" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="animaux.php" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="forum.php" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-active-white u-button-style u-hover-white u-nav-link u-palette-4-base u-text-active-palette-1-base u-text-hover-palette-2-base" href="event.php" style="padding: 10px 26px;">events</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acceuil.html" style="padding: 10px 26px;">Acceuil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 26px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Front/shop-grid" style="padding: 10px 26px;">E-Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="animaux.php" style="padding: 10px 26px;">animaux</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="forumm.php" style="padding: 10px 26px;">forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="events" style="padding: 10px 26px;">events</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
       
        <a href="login" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">login</a>
        <a href="logout.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">  logout  </a>


      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_1def">
      <div class="u-clearfix u-sheet u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-blog-1">
        <table>
			<tbody>
      
      <div class="forumCategoriesList"><h4><span>Principales catégories du forum</span></div></h4>
      <?PHP
				foreach($listeforums2 as $forum){
			?>
   <a href="parcom.php?id_com=<?PHP echo $forum['nom_com']; ?>"> <?PHP echo $forum['nom_com']; ?> </a>
      </table></li>
      
      
      <?PHP
        }
        ?>
                <a href="addpost.php"  class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">+</a>
      <?PHP
				foreach($listeforums as $forum){
			?>
<strong><?PHP echo $forum['comu']; ?> <hr></strong>
 
<div class="u-container-layout u-similar-container u-valign-bottom-xs u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                <a class="u-post-header-link" ><!--blog_post_image-->
                  <img src="images/<?php echo $forum['image'];?>" alt="" class="u-blog-control u-image u-image-default u-image-1" data-image-width="1280" data-image-height="853"><!--/blog_post_image-->
                </a><!--blog_post_header-->
                <h2 class="u-blog-control u-text u-text-1">
                  <a class="u-post-header-link"><!--blog_post_header_content--><?PHP echo $forum['titre']; ?><!--/blog_post_header_content--></a>
                </h2><!--/blog_post_header--><!--blog_post_content-->
                <div class="u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content-->communauté : <?PHP echo $forum['comu']; ?><!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_metadata-->
                <div class="u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content--><?PHP echo $forum['description']; ?><!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_metadata-->
                <div class="u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content--> added by <?PHP echo $forum['ad']; ?><!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_metadata-->

                <div class="u-blog-control u-metadata u-metadata-1"><!--blog_post_metadata_date-->
                  <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content--> <?php echo $forum['date_post'];  ?><!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date-->
                </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                
              </div>
				
			<?PHP

				}
			?>


      </tbody>
		</table>
        </div><!--/blog-->
      </div>
    </section>

    <nav>
                    <ul class="pagination ">
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>" sty>
                                <a href="forumm.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>
    
    
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
      <a class="u-link" href="https://nicepage.com/static-site-generator" target="_blank">
        <span>Static Site Generator</span>
      </a>. 
    </section>
  </body>
</html>