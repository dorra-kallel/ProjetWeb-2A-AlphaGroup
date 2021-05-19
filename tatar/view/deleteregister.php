 <?php
   
    include '../Controller/registerC.php';
    $registerC= new registerC() ;
    	if (isset($_POST["id"])){
		$registerC->supprimerevent($_POST["id"]);
		header('Location:addregister.php');
	}
?>