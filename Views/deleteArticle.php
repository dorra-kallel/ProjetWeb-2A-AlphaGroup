
    <?php
   
    require_once '../Controller/shopC.php';
    require_once '../Model/shop.php'; 
    $shopC = new shopC() ;
    	if (isset($_POST["id"])){
		$shopC->deleteArticle($_POST["id"]);
		header('Location:addArticle.php');
	}
?>