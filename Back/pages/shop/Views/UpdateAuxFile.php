<?php 
  require_once '../Controller/shopC.php';
  require_once '../Model/shop.php';

  $articleC =  new articleC();

 

  if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['image']) && isset($_POST['id'])) {
      $article = new article($_POST['nom'], (int)$_POST['prix'], $_POST['image']);

      if($_POST['image'] == '')
      $articleC->updateArticleWithoutImage($article, (int)$_POST['id']);
      else {
       $image = $_POST['image'];
        $filePath = "C:/Users/dorra/Downloads/".$image;
        $destinationFilePath = "C:/wamp64/www/ProjetWeb-2A-AlphaGroup/Front/images/products/".$image;
        if(!copy($filePath, $destinationFilePath) ) {  
            echo "File can't be moved!";  
           
        }  
        else {  
            echo "File has been moved!";  
         
        } 
      $articleC->updateArticle($article, (int)$_POST['id']);
      }

      header('Location:addArticle.php');
  } else {
    echo '<script>alert("Something is missing!")</script>';
  }
?>