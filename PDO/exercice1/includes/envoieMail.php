<?php
@session_start();

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// On charge la librairie de PHPMailer
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$eMail = new PHPMailer(true);

try {
    //configuration
    $eMail->SMTPDebug = SMTP::DEBUG_SERVER; //pour avoir des informations de debug
    // on config le SMTP
    $eMail->isSMTP();
    $eMail->Host = "localhost";
    $eMail->Port = 1025; //port utiliser avec MailHog
    // CharSet
    $eMail->CharSet = "utf-8";
    //destinataire
    $eMail->addAddress("testMail@site.fr");
    // Expéditeur
    $eMail->setFrom($_SESSION["mail"]);
    // Contenu
    $eMail->Subject = "formulaire de contact automatique de ".$_SESSION["nom"]." ".$_SESSION["prenom"];
    $eMail->Body = $_SESSION["message"];

    // On envoie
    $eMail->send();
    // A mettre en commentaire pour vérifier avec MailHog l'envoie
    header ('location:http://localhost/dev_projet/Exo/PDO/exercice1//includes/envoi.php');

} catch (Exception) {
    echo "Message non envoyé. Erreur: {$eMail->ErrorInfo}";
}
?>