<?php
require_once dirname(__DIR__) . '\config\cbd.php'; // Connexion a la base de donnée
require_once dirname(__DIR__) . '\components\header.php'; // Header
require_once dirname(__DIR__) . '\function\signature.fn.php'; // Fonction pour les signatures

// Récupération de la vue des signatures
$users = viewUser($bdd);
// Récupération de l'ID pour la modification de la signature ciblé
$id = $_GET['id'];

foreach ($users as $user) {
    if ($user['id'] == $id) {

?>

<!-- Formulaire pour la modification de la signature, avec en placeholder les informations déjà près défini -->
<form class="formBorder" action="/generateur_signature/controller/update_signature.php?id=<?= $_GET['id'] ?>" method="post">
    <div class="marg">
        <label class="utilisateur" for="prenom">Prenom :</label>
        <input class="" type="text" placeholder="<?php echo $user["prenom"] ?>" name="prenom" id="prenom">
        <label class="utilisateur" for="nom">Nom :</label>
        <input class="" size="22" type="text" placeholder="<?php echo $user["nom"] ?>" name="nom" id="nom">
    </div>
    <br>
    <div class="marg">
        <label class="utilisateur" for="poste1">Poste 1 :</label>
        <input class="" size="57" type="text" placeholder="<?php echo $user["poste1"] ?>" name="poste1" id="poste1">
    </div>
    <br>
    <div class="marg">
        <label class="utilisateur" for="poste2">Poste 2 :</label>
        <input class="" size="57" type="text" placeholder="<?php echo $user["poste2"] ?>" name="poste2" id="poste2">
    </div>
    <br>
    <div class="marg">
        <label class="utilisateur" for="numero">Numéro :</label>
        <input class="" type="text" placeholder="<?php echo $user["numero"] ?>" name="numero" id="numero">
        <label class="utilisateur" for="mail">Email :</label>
        <input class="" type="text" placeholder="<?php echo $user["mail"] ?>" name="mail" id="mail">
    </div>
    <!-- Fin du formulaire des modifications -->
    <br>
    <div class="buttonGenerer">
        <!-- Bouton pour enregistrer les modifications ou retourer à l'accueil -->
        <button class="buttonGenerer" type="submit">Enregistrer les modifications</button>
        <button class="buttonGenerer" href="/generateur_signature/index.html.php">Accueil</button>
        <!-- Fin des Boutons enregistrer et accueil -->
    </div>
</form>

<!-- Vue de la signature ciblé à modifier -->
        <table>
            <tr>
                <td>
                    <!-- Affichage du logo -->
                    <img src="/generateur_signature/assets/img/Énumière-logotype.svg" alt="Logo Énumière" class="img">
                    <!-- Fin logo -->
                </td>
                <td>
                    <!-- Séparation entre logo et contenu -->
                    <span class="vertical-line"></span>
                    <!-- Fin séparation -->
                </td>
                <td>
                    <!-- Information utilisateur -->
                    <span class="utilisateur"><?php echo $user["prenom"] ?> <?php echo $user["nom"] ?></span><br>
                    <div class="poste">
                        <?php echo $user["poste1"] ?><br>
                        <?php echo $user["poste2"] ?>
                    </div>
                    <span class="coordonnee"><?php echo $user["numero"] ?> | <?php echo $user["mail"] ?><br>
                    www.enumiere.com</span>
                        <!-- Fin information -->
                </td>
            </tr>
        </table>
<!-- FIn de la vue de la signature ciblé -->

<?php
    }
}

require_once dirname(__DIR__) . '\components\footer.php'; // Footer

?>