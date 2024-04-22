<?php

// AJOUT DE SIGNATURE
function addUser($bdd) {

    // on récupère les infos saisies dans le formulaire "formulaire_signature.php".
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $poste1 = $_POST["poste1"];
    $poste2 = $_POST['poste2'];
    $numero = $_POST["numero"];
    $mail = $_POST['mail'];

    $informations = [
        $prenom,
        $nom,
        $poste1,
        $poste2,
        $numero,
        $mail,
    ];

    $sql = "INSERT INTO users (`prenom`, `nom`, `poste1`, `poste2`, `numero`, `mail`) VALUES (?,?,?,?,?,?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute($informations);
}

// SUPPRIMER SIGNATURE
function deleteUser($bdd) {

    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id` = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
}

// MODIFICATION SIGNATURE
function updateUser($bdd) {

    // Vérifier si l'ID est défini
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Vérifier chaque champ et initialiser les variables
        $prenom = isset($_POST["prenom"]) && !empty($_POST["prenom"]) ? $_POST["prenom"] : null;
        $nom = isset($_POST["nom"]) && !empty($_POST["nom"]) ? $_POST["nom"] : null;
        $poste1 = isset($_POST['poste1']) && !empty($_POST['poste1']) ? $_POST['poste1'] : null;
        $poste2 = isset($_POST['poste2']) && !empty($_POST['poste2']) ? $_POST['poste2'] : null;
        $numero = isset($_POST['numero']) && !empty($_POST['numero']) ? $_POST['numero'] : null;
        $mail = isset($_POST['mail']) && !empty($_POST['mail']) ? $_POST['mail'] : null;

        // Construire la requête SQL en fonction des champs reçus
        $sql = "UPDATE `users` SET ";
        $updateFields = array();
        if ($prenom !== null) {
            $updateFields[] = "`prenom` = :prenom";
        }
        if ($nom !== null) {
            $updateFields[] = "`nom` = :nom";
        }
        if ($poste1 !== null) {
            $updateFields[] = "`poste1` = :poste1";
        }
        if ($poste2 !== null) {
            $updateFields[] = "`poste2` = :poste2";
        }
        if ($numero !== null) {
            $updateFields[] = "`numero` = :numero";
        }
        if ($mail !== null) {
            $updateFields[] = "`mail` = :mail";
        }
        // Vérifier si au moins un champ est modifié
        if (!empty($updateFields)) {
            $sql .= implode(", ", $updateFields);
            $sql .= " WHERE `id` = :id";

            // Préparer et exécuter la requête
            $stmt = $bdd->prepare($sql);
            if ($prenom !== null) {
                $stmt->bindValue(':prenom', $prenom);
            }
            if ($nom !== null) {
                $stmt->bindValue(':nom', $nom);
            }
            if ($poste1 !== null) {
                $stmt->bindValue(':poste1', $poste1);
            }
            if ($poste2 !== null) {
                $stmt->bindValue(':poste2', $poste2);
            }
            if ($numero !== null) {
                $stmt->bindValue(':numero', $numero);
            }
            if ($mail !== null) {
                $stmt->bindValue(':mail', $mail);
            }

            $stmt->bindValue(':id', $id);
            $stmt->execute();

            // Afficher un message de succès ou de confirmation de mise à jour
            echo "Signature mis à jour avec succès.";
        } else {
            // Afficher un message si aucun champ n'est modifié
            echo "Aucune donnée à mettre à jour.";
        }
    } else {
        // Afficher un message d'erreur si l'ID n'est pas défini
        echo "ID de la signature non fourni.";
    }
}

// VUE DE LA SIGNATURE
function viewUser($bdd) {

    // On récupère tout le contenu de la table users
    $sqlQuery = 'SELECT * FROM users';
    $recipesStatement1 = $bdd->prepare($sqlQuery);
    $recipesStatement1->execute();
    $user = $recipesStatement1->fetchAll();
    return $user;
}
