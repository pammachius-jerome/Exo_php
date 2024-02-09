<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Premier formulaire</title>
</head>

<body>
    <fieldset>
        <form action="<?php echo $_SERVER["SCRIPT_NAME"] ?>" method="POST">
            <legend>
                Veuillez renseigner les champs
            </legend>
            <label for="mail">Votre Email : </label>
            <input type="email" name="mail" id="mail" require>
            <label for="motDePasse">Votre mot de passe : </label>
            <input type="password" name="motDePasse" id="motDePasse" require><br>
            <input type="submit" value="envoyer">
    </fieldset>
    </form>
<?php
if (!empty($_POST['motDePasse']) && !empty($_POST['mail'])) {

    $_SESSION["mail"] = $_POST["mail"];
    $_SESSION["motDePasse"] = $_POST["motDePasse"];
    // print_r($_SESSION["mail"]);
    // var_dump($_SESSION["motDePasse"]);
    if (($_SESSION["mail"] === "jean_valjean@academie.net" OR $_SESSION["mail"] === "steve_ostin@lesseries.org" OR $_SESSION["mail"] === "david_banner@marvel.com") && ($_SESSION["motDePasse"] === "hugo" OR $_SESSION["motDePasse"] === "hulk" OR $_SESSION["motDePasse"] === "3md"))
    echo "Formulaire soumis avec succès !";
}else {
    echo "Saisie obligatoire";
};
?>
</body>

</html>