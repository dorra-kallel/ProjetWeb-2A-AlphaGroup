 <?php
   
    include '../Controller/albumC.php';
    $campC = new campC() ;
    	if (isset($_POST["idalbum"])){
		$campC->supprimerevent($_POST["idalbum"]);
		header('Location:addalbum.php');
	}
?>