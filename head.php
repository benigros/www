<?php	
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/mycss.css" />
        <title></title>
    </head>
    <body>
             <div id="start">
	
	<?php
	if(isset($_SESSION['id']))
	{?>
<a href="http://localhost/Connexion.php">Déconnexion</a>
	<?php
	}
	else{
		?>
		
       <a href="http://localhost/Connexion.php">Connexion</a></li>
   <a href="http://localhost/inscription.php">Inscription</a>
	<?php
	}
	?>
</div>
        <br/>
             
           <header id='header'>
       <nav id="nav">
  <a href="http://localhost/Accueil.php">Accueil</a>
   <a href="http://localhost/Creerevent.php">Créer un évènement</a>
   <a href="http://localhost/RechercheEvent.php">Rechercher un évènement</a>
 <a href="http://localhost/RechercheGroupe.php">Rechercher un groupe</a>

</nav>
           </header>
		   
</html>
