<?PHP
	include "../config.php";
	 require_once '../Model/forum.php';

class forumC
{
 public function afficherforums()
    {  $sql= " SELECT * FROM forum" ; 
      $db = config ::getConnexion();
      try{
        $listeforums = $db->query($sql);
        return $listeforums ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function afficherforums2()
    {  $sql= " SELECT comm.nom_com FROM comm" ; 
      $db = config ::getConnexion();
      try{
        $listeforums = $db->query($sql);
        return $listeforums ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }
     public function TrierParDate()
     {  $sql= " SELECT * FROM forum order by idforum desc" ; 
       $db = config ::getConnexion();
       try{
         $listeforums = $db->query($sql);
         return $listeforums ;
 
       } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
     
      }
     public function ajouterforum($forum)
    {
        $sql="insert into forum (titre,description,image,comu)
        values (:titre,:description,:image,:comu)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'titre'=>$forum->gettitre(),
                'description'=>$forum->getdescription(),
                'image'=>$forum->getimage(),
                'comu'=>$forum->getcomu(),

                
            ]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerforum($idforum)
    {
			$sql="DELETE FROM forum WHERE idforum= :idforum";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idforum',$idforum);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

   

    function modifierforum($forum, $idforum){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE forum SET 
                    titre = :titre, 
                    description = :description,
                    image = :image,
                    comu = :comu


                    
                WHERE idforum = :idforum'
            );
            
            $query->bindValue(':titre',$forum->gettitre());
            $query->bindValue(':description',$forum->getdescription());

            $query->bindValue(':image',$forum->getimage());
            $query->bindValue(':comu',$forum->getcomu());

           
            $query->bindValue(':idforum',$idforum);
            $query->execute();
            ?>
            <script></script>
            <script>alert("oui") </script>
            <?PHP
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererforum($idforum){
        $sql="SELECT * from forum where idforum=$idforum";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $forum=$query->fetch();
            return $forum;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function rechercher($input,$colonne) {
        if($colonne == "all") 
        {        $sql = "SELECT * from forum WHERE ( titre LIKE \"%$input%\") OR ( idforum LIKE \"%$input%\") OR ( description LIKE \"%$input%\") OR ( comu LIKE \"%$input%\")  ";
       } else {
    $sql = "SELECT * from forum WHERE ( $colonne LIKE \"%$input%\")  "; }
    $db = config::getConnexion();
    try { $listeforums=$db->query($sql); 
    
    
       return $listeforums;
    }
    catch (PDOException $e) {
       $e->getMessage();
    }
    
    
    }
}
?>