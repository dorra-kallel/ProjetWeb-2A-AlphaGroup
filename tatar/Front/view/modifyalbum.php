<?php
	include "../Controller/albumC.php";
	include_once '../Model/album.php';

	$albumC = new albumC();
	$error = "";
	
	if (
		isset($_POST["titre"]) && 
        isset($_POST["description"]) &&
        isset($_POST["image"]) 
	){
		if (
            !empty($_POST["titre"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["image"]) 
        ) {
            $album = new album(
                $_POST['titre'],
                $_POST['description'], 
                $_POST['image']
        
			);
			
            $albumC->modifierAlbum($album, $_GET['idalbum']);
            header('refresh:5;url=showAlbums.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier album</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="showAlbums.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['idalbum'])){
				$album = $albumC->recupererAlbum($_GET['idalbum']);
            
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						Fiche Personnelle
					</td>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $album['idalbum']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="titre">titre:
						</label>
					</td>
					<td>
						<input type="text" name="titre" id="titre" maxlength="20" value = "<?php echo $album['titre']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td><input type="text" name="description" id="description" min="20" max="5000" value = "<?php echo $album['description']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="image">image:
                        </label>
                    </td>
                    <td>
                        <input type="file" name="image" id="image" value = "<?php echo $album['image']; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>