<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Accès à la zone sécuriser</title>
</head>

<body>
    <h1>
        <?php


        if ($_SESSION["nomUtilisateur"] != "Benoit") {
            echo "ERREUR login : Vous n'avez pas de droit d'accès à ce site! ";
        } else {
            echo "Au menu du jour pour vous, Benoit...";
        };

        ?>
    </h1>
    <br>
    <ul>
        <li>
            <a href="../index.php">Sommaire</a>
        </li>
        <li>
            Et aussi...
        </li>
        <li>
            Et encore...
        </li>
        <li>
            Et pour finir...
        </li>
    </ul>
</body>

</html>