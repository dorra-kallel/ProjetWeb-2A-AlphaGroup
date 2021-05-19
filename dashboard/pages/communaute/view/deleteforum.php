<?php
   
    include '../Controller/forumC.php';
    $forumC = new forumC() ;
    	if (isset($_POST["idforum"])){
		$forumC->supprimerforum($_POST["idforum"]);
		header('Location:addforum.php');
	}
?>