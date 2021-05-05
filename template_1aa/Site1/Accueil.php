<?PHP
     include '..\Controller\albumC.php';
    include_once '..\Site1\model\registre.php';
    include_once '..\Site1\controler\registreC.php';

    $error = "";
    $registreC=new registreC();
    $albumC=new campC();
	$listealbums=$albumC->afficherevent(); 


    
	 

    // create user
    $register = null;

    // create an instance of the controller
    $registreC = new registreC();
    if (
        isset($_POST["cin"]) && 
        isset($_POST["bdate"]) &&
        isset($_POST["email"])&&
        isset($_POST["name"])&&
        isset($_POST["sexe"])&&
        isset($_POST["type"])&&
        isset($_POST["num"])




    ) {
        if (
            !empty($_POST["cin"]) && 
            !empty($_POST["bdate"]) && 
            !empty($_POST["email"])&&
            !empty($_POST["name"])&&

            !empty($_POST["sexe"])&&

            !empty($_POST["type"])&&

            !empty($_POST["num"])

        ) 
            {
            $register = new register (
                $_POST['cin'],
                $_POST['bdate'], 
                $_POST['email'],
                $_POST['name'],
                $_POST['sexe'],
                $_POST['type'],
                $_POST['num'],

              
            );
            $registreC->ajouterevent($register);
            header('Location:Accueil.php');
        }
        else
            $error = "Missing information";
    } 
   
  $registreC = new registreC ();


$bdd=new PDO('mysql:host=localhost;dbname=event', 'root', '',);
 $listeevent = $bdd->query('SELECT * FROM register ORDER BY id');
  


	

  ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Best places to hike and fishing in the world., Hello, my name is Mark.Nice to see you!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body u-overlap u-overlap-transparent"><header class="u-clearfix u-header u-header" id="sec-afed"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5c50"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-5c50" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Page-1.html" style="padding: 10px 20px;">Page 1</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Page-2.html" style="padding: 10px 20px;">Page 2</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Accueil.html" style="padding: 10px 20px;">Accueil</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html">Page 1</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="carousel_6731" data-image-width="960" data-image-height="1280">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-playfair-display u-text u-text-body-alt-color u-text-1">.&nbsp;In nature, nothing is perfect and everything is perfect. Trees can be contorted, bent in weird ways, and they’re still beautiful.</h2>
      </div>
    </section>
    <section class="u-align-left-md u-align-left-sm u-align-left-xs u-clearfix u-image u-shading u-section-2" id="carousel_075e" data-image-width="1600" data-image-height="1067">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <p class="u-text u-text-1">&nbsp;lonley planet events, specializing in organizing tours to all destinations. We are happy to make your holidays unforgettable and amazing! Our agents are experts in finding you the most comfortable and interesting place for you to have breathtaking holidays.Select the country you’d like to visit and provide our agents with estimated time – they’ll find and offer the most suitable tours and hotels.<br>
          <br><b>During our work we organized countless journeys for our clients. We started as a small tour bureau, and soon we expanded our offers list. Today we have valuable experience travelling and we can advise the most stunning resorts, cities and countries to visit!</b>
        </p>
      </div>
    </section>
    <section class="u-clearfix u-image u-section-3" id="carousel_ca8c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="35%">
              <col width="65%">
            </colgroup>
            <?php
            foreach($listealbums as $album){
			      ?>  
             
            <tbody class="u-align-left u-table-alt-grey-5 u-table-body u-text-body-alt-color u-table-body-1">
              <tr style="height: 128px;">
                <td class="u-custom-font u-first-column u-font-playfair-display u-table-cell u-text-body-alt-color u-table-cell-1">Rando Pass<br><?PHP echo $album['prixrondo']; ?>TND
                </td>
                <td class="u-table-cell">Discover 2021 hiking itineraries in Tunisia and abroad. Itineraries can be made on foot, mountain bike, road, ski, snowshoeing, horseback riding or boat/canoe/kayak. Each hiking itinerary is accompanied by a precise description, a map at 1:25000 (IGN for Tunisia) and often photos.Check out the list of the latest hikes added below (a bit tedious though if you want to find a hike at your vacation spot!) or use our hiking search engine (much more convenient!) to find tours that suit you based on their duration, their difficulty and the location of their starting point.<br>
                </td>
              </tr>
              <tr style="height: 128px;">
                <td class="u-custom-font u-first-column u-font-playfair-display u-palette-5-light-1 u-table-cell u-text-body-color u-table-cell-3">Camp pass<br><?PHP echo $album['prixcamp']; ?>TND
                </td>
                <td class="u-table-cell">camping is a tourist activity that consists of staying in the same place in a tent, a caravan or even in a motorhome. She uses a caravan, a video car or a campervan. Tourist accommodation during holidays or leisure, it has become in recent years a recourse to families in precarious living conditions.</td>
              </tr>
              <tr style="height: 129px;">
                <td class="u-custom-font u-first-column u-font-playfair-display u-table-cell u-text-body-alt-color u-table-cell-5">Team pass<br><?PHP echo $album['prixgrp']; ?>TND
                </td>
                <td class="u-table-cell">3 persons camp pass&nbsp;</td>
              </tr>
            </tbody>
            <?php 
          }
          ?>
          </table>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-section-4" id="carousel_de8e">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-1">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h4 class="u-custom-font u-font-playfair-display u-text u-text-1">DREAM VILLE</h4>
                <p class="u-text u-text-2">We want to stay positive and hopeful towards an unforgettable jurney<br>
                </p>
                <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">join our event</h4>
                  <p class="card-description">
                    register now 
                  </p>
                  <div id="error">
            <?php echo $error; ?>
        </div>
                  <form class="forms-sample" action="" method="POST" >
                    <div class="form-group">
                      <label for="exampleInputUsername1">cin</label>
                      <input type="text" class="form-control" name="cin" id="cin" maxlength="50" >
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">bdate</label>
                      <input type="date" class="form-control" name="bdate" id="bdate" maxlength="250">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">name</label>
                      <input type="text" class="form-control" name="name" id="name" maxlength="250">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">sexe</label>
                      <input type="text" class="form-control" name="sexe" id="sexe" maxlength="250">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">type</label>
                      <input type="text" class="form-control" name="type" id="type" maxlength="250" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">num</label>
                      <input type="text" class="form-control" name="num" id="num" maxlength="250">
                     
                    
                    </div>


                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">email</label>
                      <input type="text" class="form-control" name="email" id="email" maxlength="250" >
                    
                    </div>
                    <input type="hidden" value=<?PHP echo $register['id']; ?> name="id">
						
                   
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>

                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-5" id="carousel_3763">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <p class="u-custom-font u-font-playfair-display u-text u-text-1">"The mind will always remember exactly what happened. but the heart will always remember the feeling."</p>
                <p class="u-text u-text-2">BRIGITTE NICOLE</p>
                <a href="Accueil.html#carousel_075e" data-page-id="34733919" class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-none u-radius-30 u-btn-1">read more</a>
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-1">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-6" id="carousel_4514" data-image-width="1280" data-image-height="720">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-playfair-display u-text u-text-body-color u-text-1">Hello world.<br><b>Nice to see you!</b>
        </h2>
        <p class="u-text u-text-2">Join lonley planet II on a fabulous journey in Tunisia&nbsp;</p>
        <a href="Contact.html" data-page-id="2520907131" class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-none u-radius-30 u-btn-1">read more</a>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-image u-section-7" id="carousel_abda" data-image-width="1600" data-image-height="1014">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <p class="u-text u-text-1">About user generated content in real-time will have multiple touchpoints for offshoring.&nbsp;Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain
                clicks-and-mortar solutions without functional solutions.</p>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4567"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4567" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5647"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-5647" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ec8a"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ec8a" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5b26"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-5b26" class="u-svg-content"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-google u-social-icon u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d6b7"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-d6b7" class="u-svg-content"><path d="M62.2,81.6c-8.6,11.2-24.6,14.4-37.6,10C10.9,87,0.8,73.2,1,58.5c-0.8-18,15.2-34.6,33.1-34.9 c9.2-0.8,18.2,2.7,25,8.6c-2.9,3.1-5.7,6.2-8.9,9.2c-6.2-3.8-13.5-6.5-20.6-4C18.1,40.7,11,54.2,15.4,65.6 c3.5,11.8,17.8,18.3,29.2,13.2c5.8-2.1,9.7-7.4,11.3-13.2c-6.6-0.1-13.2,0-20.1-0.3c0-3.9,0-7.9,0-11.9c11.2,0,22.2,0,33.3,0 C69.9,63.4,68.3,73.9,62.2,81.6z M110.9,63.7c-3.4,0-6.6,0-10,0c0,3.4,0,6.6,0,10c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10 c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10c3.4,0,6.6,0,10,0c0-3.4,0-6.6,0.1-10c3.4,0,6.6,0,10,0c0,3.4,0,6.6,0,10c3.4,0,6.6,0,10,0 C110.9,56.9,110.9,60.3,110.9,63.7z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-pinterest u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b2b1"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-b2b1" class="u-svg-content"><path d="M61.9,79.8c-5.5-0.3-7.8-3.1-12-5.8c-2.3,12.4-5.4,24.3-13.8,30.5c-2.6-18.7,3.8-32.8,6.9-47.7 c-5.1-8.7,0.7-26.2,11.5-21.9c13.5,5.4-11.6,32.3,5.1,35.7c17.6,3.5,24.7-30.5,13.8-41.4c-15.7-16.1-45.7-0.5-42,22.3 c0.9,5.6,6.7,7.2,2.3,15c-10.1-2.2-13-10.2-12.7-20.7c0.6-17.3,15.5-29.3,30.5-31.1c19-2.2,36.8,6.9,39.2,24.7 C93.4,59.5,82.3,81.3,61.9,79.8z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-dribbble u-social-icon u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7337"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-7337" class="u-svg-content"><path d="M56.1,11.1c-24.8,0-45,20.2-45,45s20.2,45,45,45s45-20.2,45-45C101.1,31.3,80.9,11.1,56.1,11.1z M56.1,18.1 c9.6,0,18.3,3.7,25.1,9.5c-1.2,1.5-6.8,8.7-19.7,13.5C55.6,30.2,49,21.2,47.5,19C50.3,18.4,53.2,18.1,56.1,18.1z M39.9,21.7 c1.3,1.9,7.8,11,13.9,21.7c-16.4,4.3-31,4.7-34.3,4.5h-0.3C21.5,36.3,29.3,26.8,39.9,21.7z M18.2,56.1c0-0.2,0-0.6,0-0.9 c0.2,0,0.6,0,1,0c4.6,0,21.1-0.3,37.9-5.5c1,2,2,4.1,2.9,6c-0.3,0.1-0.9,0.2-1.3,0.3c-19,6.3-29.6,22.7-31.1,25.1 C21.8,74.6,18.2,65.8,18.2,56.1z M56.1,94.4c-8.7,0-16.8-3-23.2-8c1.2-2.1,8.9-16.4,29.8-23.6l0,0l0,0c5.3,13.6,7.5,25,8.1,28.7 C66.3,93.3,61.3,94.4,56.1,94.4z M77.7,87.5c-0.5-2.9-2.7-13.6-7.3-26.7c2.7-0.3,5.2-0.6,7.7-0.6c8,0,14.3,1.6,15.7,2.1 C91.9,72.7,86,81.8,77.7,87.5z M76.5,53.7c-2.8,0-5.8,0.1-8.7,0.5c-0.2-0.5-0.5-1.2-0.8-1.7c-0.8-1.7-1.5-3.5-2.4-5.3 c13.2-5.5,19.7-13,21-15c5.2,6.4,8.4,14.5,8.5,23.3C92.4,55.1,85.2,53.7,76.5,53.7z"></path></svg></span>
          </a>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6201"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-design" target="_blank">
        <span>Website Design</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Website Builder</span>
      </a>. 
    </section>
  </body>
</html>