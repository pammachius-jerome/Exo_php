<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/sommaire.css">
    <title>Question 3</title>
</head>

<body>
    <h1>Bienvenue sur notre site Web</h1>
    <form action="php/loginctr.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="nom">Entrez votre nom </label>
                    </td>
                    <td>
                        <input type="text" name="nom" id="nom"> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="motDePasse">Entrez votre mot de passe </label>
                    </td>
                    <td>
                        <input type="password" name="motDePasse" id="motDePasse">
                    </td>
                </tr>
                <tr>
                    <td id="soumettre">
                        <input type="submit" value="envoyer">
                    </td>
                    <td>
                        <input type="reset" value="recommencer">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
    session_start();

    
    $_SESSION["idSession"]  = session_id ();
    // echo $_SESSION["idSession"];
    ?>
</body>

</html>