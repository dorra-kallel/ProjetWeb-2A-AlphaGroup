<?PHP
include "../controller/adoptC.php";

	$adoptionC=new adoptionC();
	$listeadopt=$adoptionC->afficheradoption(); 

?>
 
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Albums </title>
    </head>
    <body>
		<button><a href="addadopt.php">Ajouter un Album</a></button>
		<hr> <table>
			
			<?PHP
				foreach($listeadopt as $adoption){
			?>
							<tr>
					 <td><?PHP echo $adoption['id_adopt']; ?></td>
					<td><?PHP echo $adoption['id_animal']; ?></td>
				
					<td><?PHP echo $adoption['id_user']; ?></td>
					<td><?PHP echo $adoption['nom_user']; ?></td>

			      </tr>
					<td>
						<form method="POST" action="deleteadopt.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $adoption['id_adopt']; ?> name="id_adopt">
						</form>
					</td>
					
				</tr>

				
			<?PHP
				}
			?>
		</table>


	</body>
	</html> 



	