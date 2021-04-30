
    <?php
   
    require_once '../Controller/shopC.php';
    require_once '../Model/shop.php'; 
    $articleC = new articleC() ;
    	if (isset($_POST["idArticle"])){
		$articleC->deleteArticle($_POST["idArticle"]);
		header('Location:addArticle.php');
	}
?>