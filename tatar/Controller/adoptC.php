<?PHP
	include "config1.php";
	 require_once 'model/adopt.php';

class adoptionC
{
 public function afficheradoption()
    {  $sql= " SELECT * FROM adoption" ; 
      $db = config1 ::getConnexion();
      try{
        $listeadoption = $db->query($sql);
        return $listeadoption ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function ajouteradoption($adoption)
    {
        $sql="insert into adoption (id_animal,id_user,nom_user)
        values (:id_animal,:id_user,:nom_user)";
        $db=config1::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'id_animal'=>$adoption->getid_animal(),
                'id_user'=>$adoption->getid_user(),
                'nom_user'=>$adoption->getnom_user(),
                
            ]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimeradoption($id_adopt)
    {
			$sql="DELETE FROM adoption WHERE id_adopt= :id_adopt";
			$db = config1::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_adopt',$id_adopt);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

    function modifieradoption($adoption, $id_adopt){
        try {
            $db = config1::getConnexion();
            $query = $db->prepare(
                'UPDATE adoption SET 
                    id_animal = :id_animal, 
                    id_user = :id_user,
                    nom_user = :nom_user,
                WHERE id_adopt = :id_adopt'
            );
            $query->execute([
                'id_animal' => $adoption->getid_animal(),
                'id_user' => $adoption->getid_user(),
                'nom_user' => $adoption->getnom_user(),
                'id_adopt' => $id_adopt
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupereradoption($id_adopt){
        $sql="SELECT * from adoption where id_adopt=$id_adopt";
        $db = config1::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $adoption=$query->fetch();
            return $adoption;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



}
?>