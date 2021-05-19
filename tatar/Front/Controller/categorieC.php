<?php
    require_once 'config.php';
    require_once 'model/categorie.php';

    class CategorieC {
        
        
    public function afficherCategorie()
    {  $sql= " SELECT * FROM categories " ; 
   $db = config ::getConnexion();
   try{
     $response = $db->query($sql);
     $catg_array = array();
     while($row = $response->fetchAll()) {
        foreach($row as $key) {
            $categorie = new Categorie($key["nom"], $key["image"]);
            $categorie->setId($key["id"]);
            $catg_array[] = $categorie;
        }
     }
     return $catg_array ;
    } catch (Exception $e) {
       die ('erreur : '.$e->getMessage());
    }
 
  }
        



        public function getidArticleByNom($nom) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname= atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM shop WHERE nom = :nom'
                );
                $query->execute([
                    'nom' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
    }
