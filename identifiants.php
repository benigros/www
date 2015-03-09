<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=projetweb', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
