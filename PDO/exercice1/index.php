<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Contact</title>
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="includes/Contact.php" method="POST">
        <div>
            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail" require>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="60" rows="10" required></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyez">
            <input type="reset" value="Annulez">
        </div>
    </form>
    <?php
    // On charge la librairie de PHPMailer
    require_once 'includes/PHPMailer/Exception.php';
    require_once 'includes/PHPMailer/PHPMailer.php';
    require_once 'includes/PHPMailer/SMTP.php';
    
    require_once 'includes/connexion.php';
    require_once 'includes/Contact.php';
    
    ?>
</body>

</html>