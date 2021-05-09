 <?php
    include_once '../Model/album.php';
    include_once '../Controller/albumC.php';

    $error = "";

    // create user
    $album = null;

    // create an instance of the controller
    $albumC = new albumC();
    if (
        isset($_POST["titre"]) && 
        isset($_POST["prix"]) &&
        isset($_POST["image"])
    ) {
        if (
            !empty($_POST["titre"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["image"])
        ) 
            {
            $album = new album(
                $_POST['titre'],
                $_POST['prix'], 
                $_POST['image'],
              
            );
            $albumC->ajouteralbum($album);
            header('Location:showAlbums.php');
        }
        else
            $error = "Missing information";
    } 
    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="showAlbums.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
         <form action="" method="POST">
            <table border="1" align="center">
               <tr> <td> 
                <label>Title</label>
                 </td> </tr>
                 <tr>
                 <td> <input type="text" name="titre" id="titre" maxlength="50"> </td> </tr>
                 <tr > <td> <label> Price </label></td> </tr>
                 <tr> <td> <input type="number" name="prix" id="prix" maxlength="11"> </td> </tr>
                 <tr><td> <label> Image </label></td> </tr>
                  <tr> <td> <input type="file" name="image" id="image" maxlength="250" > </td>
                </tr>
                <tr> <td> <input type="submit" name="submit" value="submit"></td></tr>
            </table>
        </form>

    </body>
    </html>