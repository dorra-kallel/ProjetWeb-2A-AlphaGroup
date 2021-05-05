<?php
    require_once '../Controller/shopC.php';
    require_once '../Model/shop.php';

    $shopC =  new shopC();

    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['image'])) {
        $shop = new shop($_POST['nom'], (float)$_POST['prix'], $_POST['image']);
        
        $shopC->addArticle($shop);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CineJamil</title>
	<link rel="stylesheet" href="../assets/css/style.css">
    <style>

    </style>
</head>

<body>
	<?php include_once 'header.php'; ?>
    <a href = "searchArticle.php" class="btn btn-primary shop-item-button">recherche</a>
    <?php
        if (isset($_GET['id'])) {
            $result = $shopC->getArticleById($_GET['id']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Modifier Article</h2>
        <a href = "showAlbums.php" class="btn btn-primary shop-item-button">Tous les articles</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nom" value = "<?= $result['nom'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>prix</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" value = "<?= $result['prix'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "image" value = "<?= $result['image'] ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div>
	</section>

    <?php
        }
    }
        else {
            header('Location:showArticle.php');
        }
    
    ?>
	<?php include_once 'footer.php'; ?>

	<script src="../assets/js/script.js"></script>
</body>

</html>