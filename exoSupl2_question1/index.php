<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Question 1</title>
</head>

<body>
    <fieldset>
        <form action="<?php echo $_SERVER["SCRIPT_NAME"] ?>" method="GET">

            <legend>
                Veuillez entrez la date
            </legend>
            <input type="text" name="jour" id="jour">
            <input type="submit" value="envoyer">
        </form>

    </fieldset>
    <br>
    <?php
    function verifier($d)
    {
        $regex = '^(\d{1,2})/(\d{1,2})/(\d{4})$^';
        $_SESSION["date"] = $_GET['jour'];
        $dateDuJour = date("d/m/Y");
        if (preg_match($regex, $_SESSION["date"])) {
            echo "La date entrer est le : " . $_SESSION["date"];
            if ($_SESSION["date"] == $dateDuJour) {
                echo "<br> Il s'agit bien de la date d'aujourd'hui.";
            }else {
                echo "<br> Il ne s'agit pas de la date d'aujourd'hui.";
            };
        } else {
            echo "La date n'est pas au format jj/mm/aaaa.";
        };
    };
    if (isset($_GET['jour'])) {
        $jour = $_GET['jour'];
        verifier($jour);
    }
    ?>
</body>

</html>