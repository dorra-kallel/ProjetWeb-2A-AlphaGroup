<?php
    include 'config.php';
    require_once 'model/shop.php';
    class ArticleC {
        
        
    public function afficherArticle()
    {  $sql= " SELECT * FROM article " ; 
   $db = config ::getConnexion();
   try{
     $response = $db->query($sql);
     $products_array = array();
     while($row = $response->fetchAll()) {
        foreach($row as $key) {
          
           $shop = new Shop($key["nom"], $key["prix"], $key["image"], $key["id_categorie"]);
            $shop->setIdArticle($key["idArticle"]);
            $products_array[] = $shop;
      
        }
     }
     return $products_array ;
    } catch (Exception $e) {
       die ('erreur : '.$e->getMessage());
    }
 
  }
        
      /*  public function getArticleById($idArticle) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM article WHERE id = :id'
                );
                $query->execute([
                    'id' => $idArticle
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        } 
*/
        public function getArticleById($id)
        {  $sql= 'SELECT * FROM article WHERE idArticle ='.$id ; 
       $db = config ::getConnexion();
       try{
         $response = $db->query($sql);
         return $response->fetch();
        
        } catch (Exception $e) {
           die ('erreur : '.$e->getMessage());
        }
     
      }
       

        public function getArticlesByCateg($idCat)
        {  $sql= " SELECT * FROM article WHERE id_categorie = $idCat" ; 
       $db = config ::getConnexion();
       try{
         $response = $db->query($sql);
         $products_array = array();
         while($row = $response->fetchAll()) {
            foreach($row as $key) {
                //($nom, $prix, $image, $catg)
                $shop = new Shop($key["nom"], $key["prix"], $key["image"], $key["id_categorie"]);
                $shop->setIdArticle($key["idArticle"]);
                $products_array[] = $shop;
            }
         }
         return $products_array ;
        } catch (Exception $e) {
           die ('erreur : '.$e->getMessage());
        }
     
      }

      public function getMostRecentArticles()
      {  $sql= " SELECT * FROM article ORDER BY idArticle DESC limit 3" ; 
     $db = config ::getConnexion();
     try{
       $response = $db->query($sql);
       $products_array = array();
       while($row = $response->fetchAll()) {
          foreach($row as $key) {
              //($nom, $prix, $image, $catg)
              $shop = new Shop($key["nom"], $key["prix"], $key["image"], $key["id_categorie"]);
              $shop->setIdArticle($key["idArticle"]);
              $products_array[] = $shop;
          }
       }
       return $products_array ;
      } catch (Exception $e) {
         die ('erreur : '.$e->getMessage());
      }
   
    }
        
    function rechercher($input,$colonne) {
    if($colonne == "all") 
    {        $sql = "SELECT * from article WHERE ( nom LIKE \"%$input%\") OR ( prix LIKE \"%$input%\") ";
    } else {
   $sql = "SELECT * from article WHERE ( $colonne LIKE \"%$input%\")  "; }
   $db = config::getConnexion();
   try {
        $response=$db->query($sql); 
        $products_array = array();
    while($row = $response->fetchAll()) {
        foreach($row as $key) {
            //($nom, $prix, $image, $catg)
            $shop = new Shop($key["nom"], $key["prix"], $key["image"], $key["id_categorie"]);
            $shop->setIdArticle($key["idArticle"]);
            $products_array[] = $shop;
        }
     }
     return $products_array ;
    }
   catch (PDOException $e) {
       $e->getMessage();
   }


}
    }
