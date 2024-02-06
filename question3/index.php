<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Question 3</title>
</head>
<body>
    <h1>Bienvenue sur notre site Web</h1>
    <form action="/php/loginctr.php" method="post">
        <label for="nom">Entrez votre nom </label>
        <input type="text" name="nom" id="nom"> <br>
        <label for="motDePasse">Entrez votre mot de passe </label>
        <input type="text" name="motDePasse" id="motDePasse">
        <input type="submit">
        <input type="reset">
    </form>
</body>
</html>