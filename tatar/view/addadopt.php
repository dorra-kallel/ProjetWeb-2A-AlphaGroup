 <?php
    include_once '../Model/adopt.php';
    include_once '../Controller/adoptC.php';

    $error = "";

    // create user
    $adoption = null;

    // create an instance of the controller
    $adoptionC = new adoptionC();
    if (
        isset($_POST["id_animal"]) && 
        isset($_POST["id_user"]) &&
        isset($_POST["nom_user"])
    ) {
        if (
            !empty($_POST["id_animal"]) && 
            !empty($_POST["id_user"]) && 
            !empty($_POST["nom_user"])
        ) 
            {
            $adoption = new adoption(
                $_POST['id_animal'],
                $_POST['id_user'], 
                $_POST['nom_user'], 
              
            );
            $adoptionC->ajouteradoption($adoption);
            header('Location:showadopt.php');
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
        <button><a href="showadopt.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
         <form action="" method="POST">
            <table border="1" align="center">
               <tr> <td> 
                <label>id_animal</label>
                 </td> </tr>
                 <tr>
                 <td> <input type="number" name="id_animal" id="id_animal" maxlength="50"> </td> </tr>
                 <tr > <td> <label> id_user </label></td> </tr>
                 <tr> <td> <input type="number" name="id_user" id="id_user" maxlength="250"> </td> </tr>
                 <tr><td> <label> nom_user </label></td> </tr>
                  <tr> <td> <input type="text" name="nom_user" id="nom_user" maxlength="250" > </td>
                </tr>
                <tr> <td> <input type="submit" name="submit" value="submit"></td></tr>
            </table>
        </form>

    </body>
    </html>