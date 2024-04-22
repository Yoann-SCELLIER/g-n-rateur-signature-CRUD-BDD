<?php
require_once dirname(__DIR__) . '\config\cbd.php'; // Connexion à la base de donnée
require_once dirname(__DIR__) . '\function\signature.fn.php'; // Function pour les signatures

// on appel la fonction de ajout des signatures qui ce situe dans le dossier function signature.fn.php
addUser($bdd);

header('Location: /generateur_signature/index.html.php'); 
