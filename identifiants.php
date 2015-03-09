<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=ProjetWeb', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
