    <?php
    // Récupérer les signatures des utilisateurs
    $users = viewUser($bdd);

    if ($users) {
        foreach ($users as $user) {

            // affichage des signatures. 
    ?>
            <span id="tocopy">

                <table>
                    <tr>
                        <td style="padding: 15px; font-family: Arial;">
                            <!-- Affichage du logo -->
                            <a href="http://www.enumiere.com" target="_blank"><img src="https://i.goopics.net/c3xabf.jpg" style="width: 150px; width: 9rem; text-decoration-line: none; text-decoration:none; background-color: white;"  alt="Logo Agence"></a>
                            <!-- Fin logo -->
                        </td>
                        <td style="padding: 15px; font-family: Arial;">
                            <!-- Séparation entre logo et contenu -->
                            <span style="border-left: 1px solid #e85d1c; display: inline-block; height: 115px;"></span>
                            <!-- Fin séparation -->
                        </td>
                        <td style="padding: 15px; font-family: Arial;">
                            <!-- Information utilisateur -->
                            <span style="color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;"><?php echo $user["prenom"] ?> <?php echo $user["nom"] ?></span><br>
                            <div style="color: #065f60; font-family: Arial; font-weight: normal; margin: 8px 0px 8px 0px;">
                                <?php echo $user["poste1"] ?><br>
                                <?php echo $user["poste2"] ?>
                            </div>
                            <span style="color: #e85d1c; font-family: Arial; font-style: italic;">
                                <a href="tel:<?php echo $user["numero"] ?>" style="text-decoration-line: none; text-decoration:none; color: #e85d1c;"><?php echo $user["numero"] ?></a> | <a href="mailto:<?php echo $user["mail"] ?>" style="text-decoration-line: none; text-decoration:none; color: #e85d1c;"><?php echo $user["mail"] ?><span></a><br>
                                <a href="http://www.enumiere.com" target="_blank" style="text-decoration-line: none; text-decoration:none; color: #e85d1c;">www.enumiere.com</a>
                            </span>
                            <!-- Fin information -->
                        </td>
                    </tr>
                </table>

                <!-- <table>
                    <tr>
                        <td> -->
                <!-- Affichage du logo -->
                <!-- <a href="http://www.enumiere.com" target="_blank"><img src="https://www.hebergeur-image.fr/uploads/20240422/91b7d2d8453fce18f3349f57f2bc6c2225e94869.webp" width="150px" alt="Logo Agence" class="imgView"></a> -->
                <!-- Fin logo -->
                <!-- </td> -->
                <!-- <td> -->
                <!-- Séparation entre logo et contenu -->
                <!-- <span class="vertical-line"></span> -->
                <!-- Fin séparation -->
                <!-- </td>
                        <td> -->
                <!-- Information utilisateur -->
                <!-- <span class="utilisateur"><?php
                                                // echo $user["prenom"] 
                                                ?> <?php
                                // echo $user["nom"] 
                                ?></span><br> -->
                <!-- <div class="poste"> -->
                <?php
                // echo $user["poste1"] 
                ?><br>
                <?php 
                // echo $user["poste2"] 
                ?>
                <!-- </div> -->
                <!-- <span class="coordonnee"> -->
                <!-- <a href="tel:<?php
                                    // echo $user["numero"] 
                                    ?>"><?php
                                    // echo $user["numero"] 
                                    ?></a> | <a href="mailto:<?php
                                                            // echo $user["mail"] 
                                                            ?>"><?php
                                    // echo $user["mail"] 
                                    ?><span></a><br> -->
                <!-- <a href="http://www.enumiere.com" target="_blank">www.enumiere.com</a> -->
                <!-- </span> -->
                <!-- Fin information -->
                <!-- </td> -->
                <!-- </tr> -->
                <!-- </table> -->
            </span>

            <div class="">
                <!-- Bouton pour modifier ou supprimer -->
                <input type="button" value="Copier" class="js-copy" data-target="#tocopy">
                <!-- <button value="Copier" class="js-copy" data-target="#tocopy">Copier</button> -->
                <a href="/generateur_signature/view/modif_signature.php?id=<?php echo $user['id'] ?>" class="buttonModifEtSupp">Modifier</a>
                <a href="/generateur_signature/controller/delete_signature.php?id=<?php echo $user['id'] ?>" class="buttonModifEtSupp">Supprimer</a>
                <!-- Fin bouton modifier ou supprimer -->
            </div>
    <?php
        }
    }
    ?>