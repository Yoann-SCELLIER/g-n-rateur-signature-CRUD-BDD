<?php
// Redirection des fichiers
require_once __DIR__ . '/config/cbd.php'; // Connexion base de donnée
require_once __DIR__ . '/components/header.php'; // Header
require_once __DIR__ . '/function/signature.fn.php'; // Fonction pour les signatures
require_once __DIR__ . '/view/formulaire_signature.php'; // Formulaire de la signature
require_once __DIR__ . '/view/view_signature.php'; // La vue de la signature sur la page index
?>

<!-- Signature refaite au plus proche de la maquette -->
<div>
    <hr>
    <br>
    <h1 class="utilisateur">Exemple de signature :</h1>
    <p class="poste">Ci-dessous, vous trouverez un exemple de signature que le formulaire vous proposera. <br>
        Il vous suffit de saisir vos informations pour la valider en appuyant sur le bouton "Générer".</p>
</div>
<table>
    <tr>
        <td>
            <!-- Affichage logo -->
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
            <span class="utilisateur">Christelle Pommier Fischer</span><br>
            <div class="poste">
                Commissaire aux comptes<br>
                Expert comptable - Associée
            </div>
            <span class="coordonnee">06 65 25 76 06 | c.pommier@enumiere.com<span><br>
                    www.enumiere.com</span>
                <!-- Fin information -->
        </td>
    </tr>
</table>
<!-- Fin de la signature de la maquette -->

<?php
require_once __DIR__ . '/components/footer.php'; // Footer
?>