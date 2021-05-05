<?php
    require_once '../Controller/shopC.php';

    $shopC =  new shopC();

	$shoping = $shopC->afficherArticle();

	if (isset($_GET['id'])) {
		$shopC->deleteArticle($_GET['id']);
		header('Location:showArticle.php');
	}

?>
