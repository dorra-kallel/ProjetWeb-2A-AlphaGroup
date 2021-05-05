<?php
   
    include '../Controller/commC.php';
    $commC = new commC() ;
    	if (isset($_POST["id_com"])){
		$commC->supprimerComs($_POST["id_com"]);
		header('Location:addcom.php');
	}
?>