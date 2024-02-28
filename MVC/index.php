<?php
require_once 'controller.php';

try{
    
    if (!isset($_GET["action"])) {
        
        liste_stagiaires();

    }else if(isset($_GET["action"])){
        // action pour modifier le tuple
        if($_GET["action"]=="modifier"){
            if(isset($_GET["id"])){
                modifier_stagiaire($_GET["id"]);
            }
        }else {
            throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé</span>");

        }
        // action pour la vue de modification d'un tuple (enregistrement)
        if($_GET["action"]=="vue_modifier"){
            if(isset($_GET["id"])){
                vue_modifier_stagiaire($_GET["id"]);
            }else {
                throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé</span>");
                
            }
        }
        // action pour supprimer un tuple
        if($_GET["action"]=="suppr"){
           
            if(isset($_GET["id"])){
                supprimer_stagiaire($_GET["id"]);
            }else{
                throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé</span>");
            }
        }

    } else {

        throw new Exception("<h1>Page non trouvée !!!</h1>");
    }

}catch(Exception $e){

    $msgErreur = $e->getMessage();
    echo erreur($msgErreur);
}
?>
