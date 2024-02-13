<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>formulaire 2</title>
</head>
<body>

<h1>Bienvenue sur la page form2</h1> <br>
   <?php
        if (!empty($_COOKIE["testCookie"])){
            echo "testCookie est bien là ! ";
        } else {
            echo "il y a eu une erreur, pas de cookie !!!";
        }
   ?>
</body>
</html>