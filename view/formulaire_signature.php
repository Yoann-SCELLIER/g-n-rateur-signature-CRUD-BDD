<!-- Formulaire pour une nouvelle signature -->
<form class="formBorder" action="/generateur_signature/controller/ajout_signature.php" enctype="multipart/form-data" method="post">
    <div class="">
        <input type="hidden" name="imgAgence" value="/generateur_signature/assets/img/Énumière-logotype.svg">


        <div class="marg">
            <label class="utilisateur" for="prenom">Prenom :</label>
            <input class="" type="text" name="prenom" id="prenom">
            <label class="utilisateur" for="nom">Nom :</label>
            <input class="" size="22" type="text" name="nom" id="nom">
        </div>
        <br>
        <div class="marg">
            <label class="utilisateur" for="poste1">Poste 1 :</label>
            <input class="" size="57" type="text" name="poste1" id="poste1">
        </div>
        <br>
        <div class="marg">
            <label class="utilisateur" for="poste2">Poste 2 :</label>
            <input class="" size="57" type="text" name="poste2" id="poste2">
        </div>
        <br>
        <div class="marg">
            <label class="utilisateur" for="numero">Numéro :</label>
            <input class="" type="text" name="numero" id="numero">
            <label class="utilisateur" for="mail">Email :</label>
            <input class="" type="text" name="mail" id="mail">
        </div>
        <br>
        <div class="buttonGenerer">
            <!-- Bouton pour générer la nouvelle signature -->
            <button class="buttonGenerer" type="submit">Générer la signature</button>
            <!-- Fin du Bouton -->
        </div>
    </div>
</form>
<!-- Fin du formulaire pour les nouvelles signatures -->