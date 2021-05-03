<?php 
	session_start();
	include ("../models/Client.php");
	include ("../models/Commande.php");
	$bdd = new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM client WHERE adress=?');
    $reponse->execute(array($_POST['adress']));
    while ($donnees=$reponse->fetch()) {
    	if ($donnees['motDePasse']==$_POST['mdp']){
    		$client=new Client ;
    		$client->setPseudo($donnees['name']);
            //$_SESSION['panier']=array();
            $_SESSION['adress']=$_POST['adress'];
    		$ok=true;
    		$_SESSION['client']=$donnees['name'];
            $_SESSION['login']='validee';
            echo $_SESSION['client'] ;
    		header('Location: ../view/template/index.php');
    	}
    }	if (!$ok){     	
    	header('Location: ../view/template/account.php');
    }
 ?>