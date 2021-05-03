<?php 
$db =new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
$reponse=$db->prepare("INSERT INTO categorie (nom,description) VALUES (?,?)");
$reponse->execute(array($_POST['nom'],$_POST['description']));
header("Location:http://localhost/projet%20php/view/template/gestionCategorie.php");