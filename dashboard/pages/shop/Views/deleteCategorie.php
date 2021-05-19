
    <?php
   
    require_once '../Controller/categorieC.php';
    require_once '../Model/shop.php'; 
    $categorieC = new CategorieC() ;
    	if (isset($_POST["id"])){
		$categorieC->deleteCategorie($_POST["id"]);
		header('Location:addCategorie.php');
	}
?>