<?PHP
	include "config.php";
	 require_once 'model/album.php';

class albumC
{
 public function afficherAlbums()
    {  $sql= " SELECT * FROM album where etat not like 1" ; 
      $db = config ::getConnexion();
      try{
        $listealbums = $db->query($sql);
        return $listealbums ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }
     public function afficherAlbums1()
    {  $sql= " SELECT * FROM album where etat=1 " ; 
      $db = config ::getConnexion();
      try{
        $listealbums = $db->query($sql);
        return $listealbums ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function ajouteralbum($album)
    {
        $sql="insert into album (titre,description,image)
        values (:titre,:description,:image)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'titre'=>$album->gettitre(),
                'description'=>$album->getdescription(),
                'image'=>$album->getimage(),
                
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
                WHERE idalbum = :idalbum'
            );
            $query->execute([
                'titre' => $album->gettitre(),
                'description' => $album->getdescription(),
                'image' => $album->getimage(),
                'idalbum' => $idalbum
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
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

    function rechercher($input,$colonne) {
        if($colonne == "all") 
        {        $sql = "SELECT * from album WHERE  (etat= 2)   ";
       } else {
   $sql = "SELECT * from album WHERE (etat = 2) and ( $colonne LIKE \"%$input%\") "; }
   $db = config::getConnexion();
   try { $album=$db->query($sql); 
    

       return $album;
   }
   catch (PDOException $e) {
       $e->getMessage();
   }


}

}
?>