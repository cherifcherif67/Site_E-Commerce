<?php 
session_start();
if (isset($_GET['Article'])){
$_SESSION['panier'][]=$_GET['Article'];}
if (isset($_GET['supprimer'])){
unset($_SESSION['panier'][array_search($_GET['supprimer'])]);
array_splice($_SESSION['panier'], array_search($_GET['supprimer']), 1);
}
header("Location: ../view/template/index.php");