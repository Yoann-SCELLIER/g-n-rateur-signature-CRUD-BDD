<?php

// CONNEXION BDD V1
//nous nous connectons à la base de données
// try {

//     // On se connecte à MySQL
//     $bdd = new PDO('mysql:host=localhost;dbname=generateur_signature', 'yoann', 'Simplon2023!'); // Utilisateur et mot de passe à modifier !
// } catch (Exception $e) {

//     // En cas d'erreur, on affiche un message et on arrête tout
//     die('Erreur : ' . $e->getMessage());
// }

// CONNEXION BDD V2
try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=generateur_signature', 'yoann', 'Simplon2023!');
    
    // Définir le mode d'erreur PDO sur exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message générique
    die('Erreur de connexion à la base de données.');
}