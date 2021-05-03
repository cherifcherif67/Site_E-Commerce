<?php 
	session_start();
    include ("../models/Client.php");
    include ("../models/Commande.php");
	$bdd = new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
    $reponse = $bdd->prepare("INSERT INTO client VALUES (?,?,?)");
    $reponse->execute(array($_POST['name'],$_POST['mdp'],$_POST['address']));
    $cl=new client ;
    $commande=new Commande ;
    $cl->setPseudo($_POST['name']);
    //$_SESSION['panier']=array();
    $_SESSION['login']='validee';
    $_SESSION['client']=$_POST['name'] ;
    $_SESSION['adress']=$_POST['address'];
    header('Location: ../view/template/index.php');

 ?>