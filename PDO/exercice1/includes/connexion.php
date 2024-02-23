<?php
// constante d'environnement
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "exercice1");

// DSN de connection
$dsn = "mysql:dbname=".DBNAME."; host=".DBHOST;

// On se connecte à la base de donnée
try{
    // on instancie le PDO
    $db = new PDO($dsn, DBUSER, DBPASS);
    // on s'assure d'envoyer les donnée en utf8
    $db->exec("SET NAMES utf8");

    echo "on est connecté";

    // questionner la base
    // $sql = "SELECT * FROM contacts";
    // $requete = $db->query($sql);
    // $user = $requete->fetchAll();
    // echo "<pre>";
    // var_dump($user[0][4]);
    // echo "</pre>";

    // ajouter un enregistrement (tuple)
    // $sql = "INSERT INTO contacts(`nom`, `prenom`, `mail`, `message`) VALUES ('Durant', 'Paul', 'paul@mail.fr', 'message de paul')";
    // $requete = $db->query($sql);


    
    // modifier un utlisateur
    // $sql = "UPDATE contacts SET message = 'messge de paul bis' WHERE id_contact = 2";
    // préparationd la requete
    // $requete = $db->prepare($sql);

    // $requete->bindValue(1, )



}catch(PDOException $e){
    die("Erreur : ".$e->getMessage());
}

?>