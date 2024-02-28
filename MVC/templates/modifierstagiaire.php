<?php
$title = "Modification d'un stagiaire";
ob_start();
?>
<h1>Modification d'un stagiaire</h1>
<form  method="GET">
    <fieldset>
        <legend>Modification d'un stagiaire </legend>
                <div>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="login_membre" id="prenom">
                </div>
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom_membre" id="nom">
                </div>
                <div>
                    <input type="submit" value="Envoyer">
                    <input type="reset" value="Annuler">
                </div>
    </fieldset>
</form>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>