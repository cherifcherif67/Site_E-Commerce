<?php 
$db =new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
$reponse=$db->prepare('DELETE FROM categorie WHERE id= ?');
$reponse->execute(array($_GET['id']));
header('Location: http://localhost/projet%20php/view/template/gestionCategorie.php');