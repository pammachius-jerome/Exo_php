<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
    <?php
    function hello () {
        for ($taille = 3; $taille <= 8; $taille++) {
            echo "<font size= $taille >Hello World !</font><br />";
            
        };
    };
    hello();
    echo "<hr />";
    hello();
    ?>
    <p>... et la suite de la page Web...</p>
</body>
</html>