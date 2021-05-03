<?php
$db =new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
$reponse=$db->prepare("SELECT * FROM produit WHERE désignation = ? " );
$reponse->execute(array($_GET['search']));
while($donnees=$reponse->fetch()){
	$ch="id=".$donnees['désignation'];
}
header("Location:http://localhost/projet%20php/view/template/index.php?".$ch);