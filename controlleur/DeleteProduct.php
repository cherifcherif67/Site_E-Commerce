<?php 
$db =new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
$reponse=$db->prepare('DELETE FROM produit WHERE reference= ?');
$reponse->execute(array($_GET['id']));
header('Location: http://localhost/projet%20php/view/template/ListDesProduits.php');