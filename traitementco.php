<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<?php session_start();
include("identifiants.php");
?>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<p> votre adresse et votre mot de passe sont :
<?php


$marequete = "INSERT  INTO logs VALUES ( '".$_POST['adresse']."','".$_POST['mdp']."')  ";


?>
<p>Si tu veux changer tes iden, <a href="Connexion.php">clique ici</a> pour revenir à la page connexion.</p>
</body>
</html>