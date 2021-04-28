<?PHP
include "../controller/albumC.php";

	$albumC=new albumC();
	$listealbums=$albumC->afficherAlbums(); 

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Albums </title>
    </head>
    <body>
		<button><a href="addalbum.php">Ajouter un Album</a></button>
		<hr> <table>
			
			<?PHP
				foreach($listealbums as $album){
			?>
							<tr>
					 <td><?PHP echo $album['idalbum']; ?></td>
					<td><?PHP echo $album['titre']; ?></td>
				
					<td><?PHP echo $album['description']; ?></td>
					
					<td><img src="../images/<?php echo $album['image'];?>" width="200px" height="200px"> </td>
			      </tr>
					<td>
						<form method="POST" action="deletealbum.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $album['idalbum']; ?> name="idalbum">
						</form>
					</td>
					<td>
						<a href="modifyalbum.php?id=<?PHP echo $album['idalbum']; ?>"> Modifier </a>
					</td>
				</tr>

				
			<?PHP
				}
			?>
		</table>


	</body>
	</html> 



	