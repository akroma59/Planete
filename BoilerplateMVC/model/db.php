<?php
try
{
   $db = new PDO('mysql:host=localhost;dbname=Planete;charset=utf8', 'phpmyadmin1', 'Azerty59');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

?>