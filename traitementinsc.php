<html>
<head>
<?php session_start();
include("identifiants.php");
?>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php



$marequete = "INSERT  INTO Logs VALUES ( '".$_POST['adresse']."','".$_POST['mdp']."','".$_POST['Nom']."','".$_POST['Prenom']."')  ";
echo $marequete."yugtuyruier";
$result=mysql_query($marequete);
echo $result;
header('location : Accueil.php");
mysql_close($link);

?>
< <a href="Inscription.php">clique ici</a> pour revenir à la page inscription.</p>
</body>
</html>
