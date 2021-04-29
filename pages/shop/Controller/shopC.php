<?php
    require_once '../config.php';
    class shopC {
        
        public function afficherArticle() {
            try {
                global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM shop'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getArticleById($idArticle) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM shop WHERE id = :id'
                );
                $query->execute([
                    'id' => $idArticle
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getidArticleByNom($nom) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
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
        public function addArticle($shop) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO shop (nom, prix, image) 
                VALUES (:nom, :prix, :image)'
                );
                $query->execute([
                    'nom' => $shop->getNom(),
                    'prix' => $shop->getPrix(),
                    'image' => $shop->getImage()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateArticle($shopi, $idArticle) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE shop SET nom = :nom, prix = :prix, image = :image WHERE id = :id'
                );
                $query->execute([
                    'nom' => $shop->getNom(),
                    'prix' => $shop->getPrix(),
                    'image' => $shop->getImage(),
                    'id' => $idArticle
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteArticle($idArticle) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM shop WHERE id = :id'
                );
                $query->execute([
                    'id' => $idArticle
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherArticle($nom) {            
            $sql = "SELECT * from shop where nom=:nom"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nom' => $shop->getNom(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function modifierArticle($shop, $idArticle){
            try {
                $db = getConnexion();
                $query = $db->prepare(
                    'UPDATE shop SET 
                        nom = :nom, 
                        prix = :prix,
                        image = :image
                        
                    WHERE id = :id'
                );
                
                $query->bindValue(':nom',$shop->getNom());
                $query->bindValue(':prix',$shop->getPrix());
    
                $query->bindValue(':image',$shop->getImage());
               
                $query->bindValue(':id',$idArticle);
                $query->execute();
                echo "<script>alert(\"Modification appliqué\")</script>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    
    
        function recupererArticle($idArticle){
            $sql="SELECT * from shop where id=$idArticle";
            $db = getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $shop=$query->fetch();
                return $shop;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
    }
