<?php 
$db =new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
$reponse=$db->prepare("INSERT INTO produit (reference,désignation,qte,prix,photo,disponible,promotion,description,categorie) VALUES (?,?,?,?,?,?,?,?,?)");
if($_POST['qte']>0){$dispo=1;}else{$dispo=0;}
$reponse->execute(array($_POST['reference'],$_POST['désignation'],$_POST['qte'],$_POST['prix'],$_POST['photo'],$dispo,$_POST['promotion'],$_POST['description'],$_POST['categorie']));
header("Location:http://localhost/projet%20php/view/template/ListDesProduits.php");
