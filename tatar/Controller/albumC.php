<?PHP
	include "config.php";
	 require_once 'Model/album.php';


class albumC
{
 public function afficherAlbums()
    {  $sql= " SELECT * FROM album where etat not like 1, " ; 
      $db = config ::getConnexion();
      try{
        $listealbums = $db->query($sql);
        return $listealbums ;


      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }
     public function afficherAlbums1()
     {  $sql= " SELECT * FROM album where etat like 1" ; 
       $db = config ::getConnexion();
       try{
         $listealbums = $db->query($sql);
         return $listealbums ;
 
 
       } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
     
      }
     public function afficherAlbums2()
     {  
        $sql="SELECT espece.nom_famille 
        FROM espece 
            ";
                   $db = config ::getConnexion();
       try{
         $listealbums = $db->query($sql);
         return $listealbums ;
 
 
       } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
     
      }
    /* public function afficherAlbumsjointure()
     {  $sql= " SELECT titre,nature FROM album a inner join espece e where a.nom_famille=e.famille" ; 
       $db = config ::getConnexion();
       try{
         $listealbums = $db->query($sql);
         return $listealbums ;
 
 
       } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
     
      }*/
     public function ajouteralbum($album)
    {
        $sql="insert into album (titre,description,image,etat,famille,addby)
        values (:titre,:description,:image,:etat,:famille,:addby)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'titre'=>$album->gettitre(),
                'description'=>$album->getdescription(),
                'image'=>$album->getimage(), 
                'etat'=>$album->getetat(),
                'famille'=>$album->getfamille(),
                'addby'=>$album->getaddby(),


                
            ]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimeralbum($idalbum)
    {
			$sql="DELETE FROM album WHERE idalbum= :idalbum";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idalbum',$idalbum);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

   

    function modifierAlbum($album, $idalbum){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE album SET 
                    titre = :titre, 
                    description = :description,
                    image = :image,
                    etat = :etat,
                    famille = :famille,
                    addby = :addby


                    
                WHERE idalbum = :idalbum'
            );
            
            $query->bindValue(':titre',$album->gettitre());
            $query->bindValue(':description',$album->getdescription());

            $query->bindValue(':image',$album->getimage());
            $query->bindValue(':etat',$album->getetat());
            $query->bindValue(':famille',$album->getfamille());
            $query->bindValue(':addby',$album->getaddby());




           
            $query->bindValue(':idalbum',$idalbum);
            $query->execute();
            echo "<script>alert(\"Modification appliqu??\")</script>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererAlbum($idalbum){
        $sql="SELECT * from album where idalbum=$idalbum";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $album=$query->fetch();
            return $album;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



}
?>