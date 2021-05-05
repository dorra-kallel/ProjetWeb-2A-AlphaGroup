<?php 
  require_once '../Controller/categorieC.php';
  require_once '../Model/categorie.php';

  $categorieC =  new categorieC();

 

  if (isset($_POST['nom']) && isset($_POST['image']) && isset($_POST['id'])) {
      $categorie = new Categorie($_POST['nom'], $_POST['image']);

      if($_POST['image'] == '')
      $categorieC->updateCategorieWithoutImage($categorie, (int)$_POST['id']);
      else {
       $image = $_POST['image'];
        $filePath = "C:/Users/dorra/Downloads/".$image;
        $destinationFilePath = "C:/wamp64/www/ProjetWeb-2A-AlphaGroup/Front/images/Categories/".$image;
        if(!copy($filePath, $destinationFilePath) ) {  
            echo "File can't be moved!";  
           
        }  
        else {  
            echo "File has been moved!";  
         
        } 
      $categorieC->updateCategorie($categorie, (int)$_POST['id']);
      }

      header('Location:addCategorie.php');
  } else {
    echo '<script>alert("Something is missing!")</script>';
  }
?>