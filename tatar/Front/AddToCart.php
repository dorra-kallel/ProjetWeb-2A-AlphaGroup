<?php

include "Controller/ArticleC.php";
if(isset($_GET["id"])) {

    session_start();
    if(empty($_SESSION['panier'])) {
    
    $_SESSION['panier'] = array($_GET["id"] => 1);
    
    header('Location: shop-grid.php');

} else {
    
    $array = $_SESSION['panier'];
   if(array_key_exists($_GET["id"], $array))
    $array[$_GET["id"]] ++;
    else 
    $array[$_GET["id"]] = 1;

    $_SESSION['panier'] = $array;
    

    header('Location: shop-grid.php');
}
}
?>