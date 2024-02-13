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
    $acces = [
        ["email" => "jean_valjean@academie.net", "mdp" => "hugo"], [
            "email" => "steve_ostin@lesseries.org",
            "mdp" => "3md"
        ], ["email" => "david_banner@marvel.com", "mdp" => "hulk"]
    ];

    function verification($mail, $motDePasse, $acces)
    {
        foreach ($acces as $utilisateur) {
            if ($utilisateur["email"] === $mail && $utilisateur["mdp"] === $motDePasse) {
                return true;
            };
        };
        return false;
    };

    $cookiTest = "test de cooki";
    setcookie("testCookie", $cookiTest, time() + 3600);
    if (!empty($_POST['motDePasse']) && !empty($_POST['mail'])) {
        $mail = $_POST["mail"];
        $motDePasse = $_POST["motDePasse"];
        if (verification($mail, $motDePasse, $acces)) {
            header("location:form2.php");
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Saisie obligatoire";
    };

    ?>
</body>

</html>