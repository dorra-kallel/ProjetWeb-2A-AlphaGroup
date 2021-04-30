<?php
    require_once '../config.php';
    class articleC {
        
        public function afficherArticle() {
            try {
                global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=eshop', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM article'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getArticleById($idArticle) {
            try {
                global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=eshop', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM article WHERE idArticle = :idArticle'
                );
                $query->execute([
                    'idArticle' => $idArticle
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getidArticleByNom($nom) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=eshop', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM article WHERE nom = :nom'
                );
                $query->execute([
                    'nom' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addArticle($article) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=eshop', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO article (nom, prix, image) 
                VALUES (:nom, :prix, :image)'
                );
                $query->execute([
                    'nom' => $article->getNom(),
                    'prix' => $article->getPrix(),
                    'image' => $article->getImage()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateArticle($article, $idArticle) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=eshop', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE article SET nom = :nom, prix = :prix, image = :image WHERE idArticle = :idArticle'
                );
                $query->execute([
                    'nom' => $article->getNom(),
                    'prix' => $article->getPrix(),
                    'image' => $article->getImage(),
                    'idArticle' => $idArticle
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteArticle($idArticle) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=eshop', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM article WHERE idArticle = :idArticle'
                );
                $query->execute([
                    'idArticle' => $idArticle
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherArticle($nom) {            
            $sql = "SELECT * from article where nom=:nom"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nom' => $article->getNom(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function modifierArticle($article, $idArticle){
            try {
                $db = getConnexion();
                $query = $db->prepare(
                    'UPDATE article SET 
                        nom = :nom, 
                        prix = :prix,
                        image = :image
                        
                    WHERE idArticle = :idArticle'
                );
                
                $query->bindValue(':nom',$article->getNom());
                $query->bindValue(':prix',$article->getPrix());
    
                $query->bindValue(':image',$article->getImage());
               
                $query->bindValue(':idArticle',$idArticle);
                $query->execute();
                echo "<script>alert(\"Modification appliqué\")</script>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    
    
        function recupererArticle($idArticle){
            $sql="SELECT * from article where idArticle=$idArticle";
            $db = getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $article=$query->fetch();
                return $article;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
    }
