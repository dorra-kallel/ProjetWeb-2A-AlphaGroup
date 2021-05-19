 <?php
   
    include '../Controller/campC.php';
    $campC = new campC() ;
    	if (isset($_POST["idalbum"])){
		$campC->supprimerevent($_POST["idalbum"]);
		header('Location:addcamp.php');
	}
?>