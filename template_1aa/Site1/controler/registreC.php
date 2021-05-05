<?PHP
	include '..\Site1\config.php';
	 require_once '..\Site1\model\registre.php';


class registreC
{
    
     public function ajouterevent($register)
    {
        $sql="insert into register (cin,bdate,email,name,sexe,type,num)
        values (:cin,:dbate,:email,:name,:sexe,:type,:num)";
        $db=configu::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'cin'=>$register->getcin(),
                'bdate'=>$register->getbdate(),
                'email'=>$register->getemail(),
                'name'=>$register->getname(),
                'sexe'=>$register->getsexe(), 
                'type'=>$register->gettype(),
                'num'=>$register->getnum(),


                
            ]);
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    


   

}
?>