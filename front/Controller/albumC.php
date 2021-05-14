<?PHP
	include "../config.php";
	 require_once '../Model/album.php';

class albumC
{
 public function afficherAlbums()
    {  $sql= " SELECT * FROM album" ; 
      $db = config ::getConnexion();
      try{
        $listealbums = $db->query($sql);
        return $listealbums ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function afficherAlbums2()
    {  $sql= " SELECT comm.nom_com FROM comm" ; 
      $db = config ::getConnexion();
      try{
        $listealbums = $db->query($sql);
        return $listealbums ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function ajouteralbum($album)
    {
        $sql="insert into album (titre,description,image,comu)
        values (:titre,:description,:image,:comu)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'titre'=>$album->gettitre(),
                'description'=>$album->getdescription(),
                'image'=>$album->getimage(),
                'comu'=>$album->getcomu(),

                
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
                    comu = :comu


                    
                WHERE idalbum = :idalbum'
            );
            
            $query->bindValue(':titre',$album->gettitre());
            $query->bindValue(':description',$album->getdescription());

            $query->bindValue(':image',$album->getimage());
            $query->bindValue(':comu',$album->getcomu());

           
            $query->bindValue(':idalbum',$idalbum);
            $query->execute();
            ?>
            <script></script>
            <script>alert("oui") </script>
            <?PHP
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
        {        $sql = "SELECT * from album WHERE ( titre LIKE \"%$input%\") OR ( idalbum LIKE \"%$input%\") OR ( description LIKE \"%$input%\") OR ( comu LIKE \"%$input%\")  ";
       } else {
    $sql = "SELECT * from album WHERE ( $colonne LIKE \"%$input%\")  "; }
    $db = config::getConnexion();
    try { $listealbums=$db->query($sql); 
    
    
       return $listealbums;
    }
    catch (PDOException $e) {
       $e->getMessage();
    }
    
    
    }
}
?>