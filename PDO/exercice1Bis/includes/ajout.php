<?php
//  ajouter un enregistrement (tuple)

require_once '../includes/Contact.php';

$sql = "INSERT INTO contacts(`nom`, `prenom`, `mail`, `message`) VALUES (`nom`=?, `prenom`=?, `mail`=?, `message`=?)";
//on prépare la requête
$requete = $db->prepare($sql);

// on injecte les valeur
$requete->bindValue(1, $nom, PDO::PARAM_STR);
$requete->bindValue(2, $prenom, PDO::PARAM_STR);
$requete->bindValue(3, $mail, PDO::PARAM_STR);
$requete->bindValue(4, $message, PDO::PARAM_STR);

// on execute la requête
$requete->execute();
