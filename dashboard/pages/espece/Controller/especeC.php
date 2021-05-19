<?PHP
	include "../config.php";
	 require_once '../Model/espece.php';

class especeC
{
 public function afficherespece()
    {  $sql= " SELECT espece.id,espece.nom_famille,espece.nature,espece.nourriture, COUNT(espece.nom_famille) as f FROM album LEFT JOIN espece ON (album.famille=espece.nom_famille) GROUP BY ( album.famille) " ; 
      $db = config ::getConnexion();
      try{
        $listeespece = $db->query($sql);
        return $listeespece ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function ajouterespece($espece)
    {
        $sql="insert into espece (nom_famille,nature,nourriture)
        values (:nom_famille,:nature,:nourriture)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'nom_famille'=>$espece->getnom_famille(),
                'nature'=>$espece->getnature(),
                'nourriture'=>$espece->getnourriture(),
                
            ]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerespece($id)
    {
			$sql="DELETE FROM espece WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

    function modifierespece($espece, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE espece SET 
                    nom_famille = :nom_famille, 
                    nature = :nature,
                    nourriture = :nourriture
                    
                WHERE id = :id'
            );
            
            $query->bindValue(':nom_famille',$espece->getnom_famille());
            $query->bindValue(':nature',$espece->getnature());

            $query->bindValue(':nourriture',$espece->getnourriture());
           
            $query->bindValue(':id',$id);
            $query->execute();
            echo "<script>alert(\"Modification appliqué\")</script>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererespece($id){
        $sql="SELECT * from espece where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $espece=$query->fetch();
            return $espece;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



}
?>