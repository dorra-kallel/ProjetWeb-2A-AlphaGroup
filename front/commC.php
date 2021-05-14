<?PHP
	include "../config.php";
	 require_once '../Controller/commC.php';

class commC
{
 public function afficherComs()
    {  $sql= " SELECT * FROM comm" ; 
      $db = config ::getConnexion();
      try{
        $listecom = $db->query($sql);
        return $listecom ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function ajoutercom($listecom)
    {
        $sql="insert into comm (nom_com)
        values (:nom_com)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'nom_com'=>$listecom->getnom(),

                
            ]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerComs($id_com)
    {
			$sql="DELETE FROM comm WHERE id_com= :id_com";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_com',$id_com);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

   

    function modifierComs($listecom, $id_com){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE comm SET 
                    nom_com = :nom_com
                    
                WHERE id_com = :id_com'
            );
            
            $query->bindValue(':nom_com',$listecom->getnom());
 
           
            $query->bindValue(':id_com',$id_com);
            $query->execute();
            echo "<script>alert(\"Modification appliqué\")</script>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererCom($id_com){
        $sql="SELECT * from comm where id_com=$id_com";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $listecom=$query->fetch();
            return $listecom;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



}
?>