<?php
$title = "Ajout d'un stagiaire";
ob_start();
?>
<h1>Ajout d'un stagiaire</h1>
<form action="index.php" method="GET">
    <div>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom_membre">
    </div>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="login_membre">
    </div>
    <div>
        <input type="hidden" name="action" value="ajouter">
        <input type="submit" value="Envoyer">
        <input type="reset" value="Annuler">
    </div>
</form>