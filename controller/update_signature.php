<?php
require_once dirname(__DIR__) . '\config\cbd.php'; // Connexion à la base de donnée
require_once dirname(__DIR__) . '\function\signature.fn.php'; // Fonction pour les signatures

// on appel la fonction de modification des signatures qui ce situe dans le dossier function signature.fn.php
updateUser($bdd);

header('Location: /generateur_signature/index.html.php'); // Redirection sur la page d'accueil