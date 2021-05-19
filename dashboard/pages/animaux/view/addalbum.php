 <?php
    include_once '../Model/album.php';
    include_once '../Controller/albumC.php';
  

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
        isset($_POST["famille"])&&
        isset($_POST["addby"])



    ) {
        if (
            !empty($_POST["titre"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["image"]) &&
            !empty($_POST["etat"])&&
            !empty($_POST["famille"])&&
            !empty($_POST["addby"])

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
                $_POST['addby'],



              
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







  




    
    $albumC=new albumC();
    $listealbums2=$albumC->afficherAlbums2(); 


  $bdd=new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '',);
	$listealbums = $bdd->query('SELECT * FROM album ORDER BY idalbum');
	if (isset ($_GET['s']) AND !empty($_GET['s'])){
      $recherche =	htmlspecialchars($_GET['s']);
	  $listealbums = $bdd->query('SELECT * FROM album WHERE titre LIKE "%' .$recherche .'%" '  ); 
	}


  

    ?>

    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../images/favicon.png" />



  <!-- Required meta tags -->
  
  
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  
</head>
    <body>

    <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../../index.html"><img src="../../../images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../../index.html"><img src="../../../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../../index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">gestion user</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../../pages/user/index.php">user</a></li>
                
              </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Gestion events</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../event/view/addcamp.php">CRUD event</a></li>

              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../event/view/addregister.php">CRUD register</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">gestion animaux</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../../pages/animaux/view/addalbum.php">animaux</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../pages/animaux/view/addespece.php">espece</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">gestion e-shop</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../../pages/shop/views/addarticle.php">e-shop</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">gestion blog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../../pages/communaute/view/addcom.php"> communaute </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">website</span>
            </a>
          </li>
        </ul>
      </nav>
<!-- partial -->

      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
     
<!-- partial -->




        
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-11 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table des animaux</h4>
                  <p class="card-description">
                    Table pour <code>.Admin</code>
                  </p>
                  <div class="table-responsive">

        <hr> <table class="table" >
			
			<?PHP
				foreach($listealbums as $album){
			?>
             <thead>
                        <tr>
                          <th>id</th>
                          <th>nom.</th>
                          <th>description</th>
                          <th>image</th>
                          <th>etat</th>
                          <th>famille</th>
                          <th>addby</th>



                        </tr>
                      </thead>
                      <tbody>

							<tr>
					 <td><?PHP echo $album['idalbum']; ?></td>
					<td><?PHP echo $album['titre']; ?></td>
				
					<td ><?PHP echo $album['description']; ?></td>
					
					<td><img src="../images/<?php echo $album['image'];?>" width="200px" height="200px"> </td>
          <td><?PHP echo $album['etat']; ?></td>
          <td><?PHP echo $album['famille']; ?></td>
          <td><?PHP echo $album['addby']; ?></td>



			      
					<td>
						<form method="POST" action="deletealbum.php">
						<input type="submit" name="supprimer" value="supprimer">


						<input type="hidden" value=<?PHP echo $album['idalbum']; ?> name="idalbum">
						</form>
					</td>
          <td>
						<a class="btn btn-success" href="modifyalbum.php?idalbum=<?PHP echo $album['idalbum']; ?>"> Modifier </a>
					</td>
				</tr>

				
			<?PHP
				}
			?>
      <form method="GET">
                      
                      <input    type="search" name="s" placeholder="rechercher une espece">
                       <input class="btn btn-light" type="submit" name="envoyer" > 
                     
                    </form>

                   <section >
                     <?PHP
                    if($listealbums->rowCount()>0)
                     {  while($album =$listealbums ->fetch()) {
                     ?>

                           <?PHP
                            }}else {
                                     ?>
                          <p>aucune espece trouvé </p>
                               <?PHP
                                         }
                                    ?>
                   </section>
             </tbody>

		</table>
                </div>
                  </div>
                    </div>
                      </div>
                       </div>
        </div>












   















        







        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter animal</h4>
                  <p class="card-description">
                    Formulaire pour ajouter un animal
                  </p>
                  <div id="error">
            <?php echo $error; ?>
        </div>
                  <form class="forms-sample" action="" method="POST" >
                    <div class="form-group">
                      <label for="exampleInputUsername1">NOM</label>
                      <input type="text" class="form-control" name="titre" id="titre" maxlength="50" placeholder="NOM">
                      <?php
                      if($verif_titre==1){
                      echo $alert_ptitre;
                      $verif_titre=0;
                      }

                      ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" name="description" id="description" maxlength="250">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">$addby</label>
                      <input type="text" class="form-control" name="addby" id="addby" value="admin " readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file" class="form-control" name="image" id="image" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword">etat</label>
                      
                      <div>
                     
  <input type="radio" id="etat" name="etat" value="2"
         >
  <label for="etat" value="2">non adoptable</label>
  <br>
  <input type="radio" id="etat" name="etat" value="1"
         >
  <label for="etat" value="1"> adoptable</label>
</div>                    



</div>

                    
                    
                    <div class="form-group">
                      <label for="exampleInputPassword">famille</label>
                      
                      <div>
                      <?PHP
				foreach($listealbums2 as $album){
			?>
  <input type="radio" id="famille" name="famille" value="<?PHP echo $album['nom_famille']; ?>"
         checked>
  <label for="famille"><?PHP echo $album['nom_famille']; ?></label>
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
















        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../js/off-canvas.js"></script>
  <script src="../../../js/hoverable-collapse.js"></script>
  <script src="../../../js/template.js"></script>
  <script src="../../../js/settings.js"></script>
  <script src="../../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
   <script src="../../../js/file-upload.js"></script>
  <script src="../../../js/typeahead.js"></script>
  <script src="../../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>






        




    





    </body>
    </html>