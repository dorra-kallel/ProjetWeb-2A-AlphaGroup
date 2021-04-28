 <?php
   
    include '../Controller/especeC.php';
    $especeC = new especeC() ;
    	if (isset($_POST["id"])){
		$especeC->supprimerespece($_POST["id"]);
		header('Location:addespece.php');
	}
?>