<?php

// CONNEXION BDD V1
// nous nous connectons à la base de données
try {

    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=generateur_signature', 'yoann', 'Simplon2023!'); // Utilisateur et mot de passe à modifier !
} catch (Exception $e) {

    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}