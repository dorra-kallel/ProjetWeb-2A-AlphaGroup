
    <?php
   
    require_once '../Controller/categorieC.php'; 
    $cateogC = new categorieC() ;
    	if (isset($_POST["id"])){
		$cateogC->deleteCategorie($_POST["id"]);
		header('Location:addCategorie.php');
	}
?>