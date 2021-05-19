<?php
    require_once '../config.php';
    class CategorieC {
        
        public function afficherCategorie() {
            try {
                global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM categories'
                );
                $query->execute();
                return $query->fetchAll();
                
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
   
        public function getArticleById($idCategorie) {
            try {
                global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM categories WHERE id = :id'
                );
                $query->execute([
                    'id' => $idCategorie
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addCategorie($catg) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO categories (nom, image) 
                VALUES (:nom, :image)'
                );
                $query->execute([
                    'nom' => $catg->getNom(),
                    'image' => $catg->getImage()
                ]);
            } catch (PDOException $e) {
               var_dump($e->getMessage());
               die();
            }
        }

        public function updateCategorie($catg, $idCategorie) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE categories SET nom = :nom, image = :image WHERE id = :id'
                );
                $query->execute([
                    'nom' => $catg->getNom(),
                    'image' => $catg->getImage(),
                    'id' => $idCategorie
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        
        public function updateCategorieWithoutImage($categ, $idCategorie) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE categories SET nom = :nom WHERE id = :id'
                );
                $query->execute([
                    'nom' => $categ->getNom(),
                    'id' => $idCategorie
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }       


        public function deleteCategorie($idCategorie) {
            try {global $pdo ;
                $pdo = new PDO('mysql:host=localhost;dbname=atelierphp', 'root', '');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM categories WHERE id = :id'
                );
                $query->execute([
                    'id' => $idCategorie
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherCategorie($nom) {            
            $sql = "SELECT * from categories where nom=:nom"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nom' => $nom,
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
    }
