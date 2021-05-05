<?PHP
	include "../config.php";
	 require_once '../Model/album.php';


class campC
{
 public function afficherevent()
    {  $sql= " SELECT * FROM camp" ; 
      $db = config ::getConnexion();
      try{
        $listeevent = $db->query($sql);
        return $listeevent ;


      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }
    
     public function ajouterevent($camp)
    {
        $sql="insert into camp (titre,discription,endroit,date,image,prix,age)
        values (:titre,:discription,:endroit,:date,:image,:prix,:age)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'titre'=>$camp->gettitre(),
                'discription'=>$camp->getdiscription(),
                'endroit'=>$camp->getendroit(),
                'date'=>$camp->getdate(),
                'image'=>$camp->getimage(), 
                'prix'=>$camp->getprix(),
                'age'=>$camp->getage(),


                
            ]);
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerevent($idalbum)
    {
			$sql="DELETE FROM camp WHERE idalbum= :idalbum";
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

   

    function modifierevent($camp, $idalbum){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE camp SET 
                    titre = :titre, 
                    discription = :discription,
                    endroit = :endroit,
                    date = :date,
                    image = :image,
                    prix = :prix,
                    age = :age
                    


                    
                WHERE idalbum = :idalbum'
            );
            
            $query->bindValue(':titre',$camp->gettitre());
            $query->bindValue(':discription',$camp->getdiscription());
            $query->bindValue(':endroit',$camp->getendroit());
            $query->bindValue(':date',$camp->getdate());
            $query->bindValue(':image',$camp->getimage());
            $query->bindValue(':prix',$camp->getprix());
            $query->bindValue(':age',$camp->getage());



           
            $query->bindValue(':idalbum',$idalbum);
            $query->execute();
            echo "<script>alert(\"Modification appliqué\")</script>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererevent($idalbum){
        $sql="SELECT * from camp where idalbum=$idalbum";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $camp=$query->fetch();
            return $camp;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



}
?>