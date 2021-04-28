 <?php
   
    include '../Controller/albumC.php';
    $albumC = new albumC() ;
    	if (isset($_POST["idalbum"])){
		$albumC->supprimeralbum($_POST["idalbum"]);
		header('Location:addalbum.php');
	}
?>