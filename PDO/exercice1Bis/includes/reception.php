<?php
// reçoie les donnée du formulaire et les traites

// session_start();
require_once 'Contact.php';
// $utilisateur->setNom($nom);

// 
$utilisateur = new Contact($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["message"]);

// echo $utilisateur-> getNom();

$utilisateur->controle();
// echo getMessage();


?>