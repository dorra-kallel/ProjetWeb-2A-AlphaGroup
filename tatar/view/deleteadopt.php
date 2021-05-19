 <?php
   
    include '../Controller/adoptC.php';
    $adoptionC = new adoptionC() ;
    	if (isset($_POST["id_adopt"])){
		$adoptionC->supprimeradoption($_POST["id_adopt"]);
		header('Location:showadopt.php');
	}
?>