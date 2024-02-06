<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Question 2</title>
</head>

<body>
    <p>
        <?php
        // l'utilisation d'une fonction n'est pas vraiment utile ici
        function dateJour()
        {
            $dateActuel = getdate();
            // création des tableaux pour le français
            $semaine = array(
                " Dimanche ", " Lundi ", " Mardi ", " Mercredi ", " Jeudi ",
                " vendredi ", " samedi "
            );
            $mois = array(
                1 => " janvier ", " février ", " mars ", " avril ", " mai ", " juin ",
                " juillet ", " août ", " septembre ", " octobre ", " novembre ", " décembre "
            );
            // Avec getdate()
            echo "En ce  ", $semaine[$dateActuel['wday']], $dateActuel['mday'], $mois[$dateActuel['mon']], $dateActuel['year'];
        };

        echo "<h1>", dateJour(), ", sur le serveur ", $_SERVER['SERVER_NAME'], ", il est " . date("h"), "h " . date("i"), "mn. <br /></h1>";

        // on affiche les données du serveur
        echo "<h1>Variable HTTP serveur</h1>";
        echo "<table> <thead> <tr><th>Variable</th><th>Valeur</th></tr></thead>";
        foreach ($_SERVER as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        echo "</table>";

        // autre méthode 15 000 fois plus simple ;(
        echo phpinfo(32);
        
        ?>
    </p>
</body>

</html>