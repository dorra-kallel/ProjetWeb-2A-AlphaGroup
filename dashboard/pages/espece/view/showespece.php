<?PHP
include "../controller/especeC.php";

	$especeC=new especeC();
	$listeespece=$especeC->afficherespece(); 

?>
 
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Albums </title>
    </head>
    <body>
		<button><a href="addespece.php">Ajouter un Album</a></button>
		<hr> <table>
			
			<?PHP
				foreach($listeespece as $espece){
			?>
							<tr>
					 <td><?PHP echo $espece['id']; ?></td>
					<td><?PHP echo $espece['nom_famille']; ?></td>
				
					<td><?PHP echo $espece['nature']; ?></td>
					<td><?PHP echo $espece['nourriture']; ?></td>

			      </tr>
					<td>
						<form method="POST" action="deleteespece.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $espece['id']; ?> name="id">
						</form>
					</td>
					
				</tr>

				
			<?PHP
				}
			?>
		</table>


	</body>
	</html> 



	