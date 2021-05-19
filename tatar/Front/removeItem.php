<?php


session_start();
if(isset($_GET["id"]) && $_GET["all"]==2) {
$array = $_SESSION['panier'];

unset($array[$_GET["id"]]);

$_SESSION['panier'] = $array;

header('Location: shop-grid.php');
} 

if(isset($_GET["id"]) && $_GET["all"]==1) {

    $array = $_SESSION['panier'];
    
    $array[$_GET["id"]] --;
    if($array[$_GET["id"]] <= 0)
    unset($array[$_GET["id"]]);
    $_SESSION['panier'] = $array;
    
    header('Location: shop-grid.php');
    } 
?>