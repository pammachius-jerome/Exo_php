<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Question 4</title>
</head>

<body>
    <h1>Un petit formulaire (pour commencer)</h1>
    <form action="formul.php" method="get">
        <table>
            <caption>Mercie de renseigner les informations suivantes : </caption>
            <tr>
                <td>
                    <label for="nom">Votre nom : </label>
                </td>
                <td>
                    <input type="text" name="nom" id="nom">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="age">Votre âge : </label>
                </td>
                <td>
                    <input type="number" name="age" id="age">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="situation">Votre situation maritale : </label>
                </td>
                <td>

                    <input type="radio" name="situation" value="marie" required>Marié
                    <input type="radio" name="situation" value="veuf" required>Veuf(ve)
                    <input type="radio" name="situation" value="celibataire" required>Célibataire
                </td>
            </tr>
            <tr>
                <td>
                    <label for="interet[]">Vos centres d'intérêt : </label>
                </td>
                <td>
                    <input type="checkbox" name="interet[0]" value="internet">Internet
                    <input type="checkbox" name="interet[1]" value="informatique">Micro-informatique
                    <input type="checkbox" name="interet[2]" value="jeux">Jeux Vidéo
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="envoyer">
                </td>
                <td>
                    <input type="reset" value="recommencer">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>