<?php session_start();
if (isset($_SESSION['client'])){
$bdd = new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');

foreach ($_SESSION['panier'] as $article) {
	$reponse = $bdd->prepare("INSERT INTO commande (adressClient,article) VALUES (?,?)");
	 $reponse->execute(array($_SESSION['adress'],$article));
}
$_SESSION['panier']=array();
header('Location:http://localhost/projet%20php/view/template/checkout.php?commande=valider');}
else{
	header('Location:http://localhost/projet%20php/view/template/checkout.php?commande=invalide');
}

    
   