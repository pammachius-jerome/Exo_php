<?php
require_once 'controller.php';

try {

    if (!isset($_GET["action"])) {
        liste_stagiaires();
    } else if (isset($_GET["action"])) {
        // action pour supprimer un tuple
        if ($_GET["action"] == "suppr") {

            if (isset($_GET["id"])) {
                supprimer_stagiaire($_GET["id"]);
            } else {
                throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé (suppr)</span>");
            }
        }
        // action pour la vue de modification d'un tuple (enregistrement)
        if ($_GET["action"] === "vue_modifier") {
            if (isset($_GET["id"])) {
                // echo " entré dans if de vue stagiaire";
                vue_modifier_stagiaire($_GET["id"]);
            } else {
                throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé (vue)</span>");
            }
        }
        // action pour modifier le tuple
        if ($_GET["action"] === "modification") {
            if (isset($_GET["id"]) and isset($_GET["login_membre"]) and isset($_GET["nom_membre"])) {
                // echo " entré dans if de modifier stagiaire";
                modifier_stagiaire($_GET["id"], $_GET["login_membre"], $_GET["nom_membre"]);
            } else {
                throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé (modifier)</span>");
            }
        }
        // action pour la vue d'ajout d'un stagiaire
        if ($_GET["action"] === "vue_ajouter"){
            // echo " entré dans if de vue jouter ";
            vue_ajouter_stagiaire();
        }
        // action pour ajouter un stagiaire
        if ($_GET["action"] === "ajouter" and isset($_GET["login_membre"]) and isset($_GET["nom_membre"])){
                // echo " entré dans if de ajouter stagiaire ";
                ajouter_stagiaire($_GET["nom_membre"], $_GET["login_membre"]);
           
        }
    } else {

        throw new Exception("<h1>Page non trouvée !!!</h1>");
    }
} catch (Exception $e) {

    $msgErreur = $e->getMessage();
    echo erreur($msgErreur);
}
