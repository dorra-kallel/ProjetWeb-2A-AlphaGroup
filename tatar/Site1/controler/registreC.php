<?PHP
	include 'config2.php';
    


     class registerC
     {
      public function afficherevent()
         {  $sql= " SELECT * FROM register" ; 
           $db = config2 ::getConnexion();
           try{
             $listeevent = $db->query($sql);
             return $listeevent ;
     
     
           } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
         
          }
         
          public function ajouterevent($register)
         {
             $sql="insert into register (cin,bdate,email,name,sexe,num)
             values (:cin,:bdate,:email,:name,:sexe,:num)";
             $db=config2::getConnexion();
     
             try
             {
                 $query=$db->prepare($sql);
                 $query->execute([
                     'cin'=>$register->getcin(),
                     'bdate'=>$register->getbdate(),
                     'email'=>$register->getemail(),
                     'name'=>$register->getname(), 
                     'sexe'=>$register->getsexe(),
                   
                     'num'=>$register->getnum(),
                   
                    
     
     
                     
                 ]);
             }
             catch(Exception $e)
             {
                 die('Erreur: '.$e->getMessage());
             }
         }
         function supprimerevent($id)
         {
                 $sql="DELETE FROM register WHERE id= :id";
                 $db = config2::getConnexion();
                 $req=$db->prepare($sql);
                 $req->bindValue(':id',$id);
                 try{
                     $req->execute();
                 }
                 catch (Exception $e){
                     die('Erreur: '.$e->getMessage());
                 }
         }
     
        
     
         function modifierevent($register, $id){
             try {
                 $db = config2::getConnexion();
                 $query = $db->prepare(
                     'UPDATE register SET 
                         cin = :cin, 
                         bdate = :bdate,
                         email = :email,
                         date = :date,
                         name = :name,
                         sexe = :sexe,
                       
                         num = :num 
                        
     
                         
                         
     
     
                         
                     WHERE id = :id'
                 );
                 
                 $query->bindValue(':cin',$register->getcin());
                 $query->bindValue(':bdate',$register->getbdate());
                 $query->bindValue(':email',$register->getemail());
                 $query->bindValue(':name',$register->getname());
                 $query->bindValue(':sexe',$register->getsexe());
              
                 $query->bindValue(':num',$register->getnum());
                 
     
     
     
                
                 $query->bindValue(':id',$id);
                 $query->execute();
                 echo "<script>alert(\"Modification appliqué\")</script>";
             } catch (PDOException $e) {
                 $e->getMessage();
             }
         }
     
     
         function recupererevent($id){
             $sql="SELECT * from register where id=$id";
             $db = config2::getConnexion();
             try{
                 $query=$db->prepare($sql);
                 $query->execute();
     
                 $register=$query->fetch();
                 return $register;
             }
             catch (Exception $e){
                 die('Erreur: '.$e->getMessage());
             }
         }
     
     
     
     }
?>