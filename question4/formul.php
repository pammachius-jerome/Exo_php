<?php
session_start();
$nomUtilisateur = $_GET['nom'];
$ageUtilisateur = $_GET['age'];
$situationUtilisateur = $_GET['situation'];
$interetUtilisateur = $_GET['interet'];
$tableauInteret;
for ($j = 0; $j < 3; $j++) {
    if (isset($interetUtilisateur[$j])) {
        $tableauInteret[$j] = 1;
    } else {
        $tableauInteret[$j] = 0;
    };
};
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">

    <title>Une petite réponse</title>
</head>

<body>
    <h1>
        Mercie à vous,
        <?php
        echo $nomUtilisateur;
        ?>
    </h1>
    <p>
        Vous avez donc le bel âge de <?php echo $ageUtilisateur ?> ans, vous êtes <?php echo $situationUtilisateur ?> et vous vous intéressez à <?php
                                                                                                                                                for ($i = 0; $i < 3; $i++) {
                                                                                                                                                    if (isset($interetUtilisateur[$i])) {

                                                                                                                                                        if ($i == 2) {
                                                                                                                                                            echo $interetUtilisateur[2];
                                                                                                                                                        } else {
                                                                                                                                                            echo $interetUtilisateur[$i] . ", ";
                                                                                                                                                        };
                                                                                                                                                    };
                                                                                                                                                };
                                                                                                                                                ?> .
    </p>
    <p>
        Je m'empresse d'envoyer la requête:
        <br id="requete">
        <?php
        echo "insert into maTable values('" . $nomUtilisateur . "', '" . $ageUtilisateur . "', '" . $situationUtilisateur . "', " . $tableauInteret[0] . ", " . $tableauInteret[1] . ", " . $tableauInteret[2] . ")";
        ?>
        <br>
        à notre base de données.
    </p>

</body>

</html>