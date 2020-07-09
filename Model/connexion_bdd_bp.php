<?php
//Connexion à la base de donnée avec l'objet PDO
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=banque_peuple', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
?>