<?php 
	$to = ($_GET['adress']);
	$subject = "Commande sur site Ecom daily shop";
	$txt = "votre commande a ete validé";
	mail($tp, $subject, $txt);
	$bdd = new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
    $reponse = $bdd->prepare("DELETE FROM commande WHERE adressClient = ?");
    $reponse->execute(array($_GET['adress'])) ;
	header('Location:http://localhost/projet%20php/view/template/indexAdmin.php?commande=valide');
 ?>