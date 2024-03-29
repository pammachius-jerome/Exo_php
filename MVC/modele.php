<?php
require("connect.php");

// Connexion à la BDD
function connect_db()
{
    $dsn = "mysql:dbname=" . BASE . ";host=" . SERVER;
    try {
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $connexion = new PDO($dsn, USER, PASSWD, $option);
    } catch (PDOException $e) {
        printf("Echec connexion : %s\n", $e->getMessage());
        exit();
    }
    return $connexion;
}

// Création de la liste des Stagiaires
function get_all_stagiaires()
{
    $connexion = connect_db();
    $stagiaires = array();
    $sql = "SELECT * from Membres";
    foreach ($connexion->query($sql) as $row) {
        $stagiaires[] = $row;
    }
    return $stagiaires;
}

// Suppression d'un stagiaire par id
function delete_stagiaire_by_id($id)
{
    $connexion = connect_db();
    $sql = "DELETE FROM membres WHERE id_membre = :id ";
    $reponse = $connexion->prepare($sql);
    $reponse->bindValue(":id", intval($_GET["id"]), PDO::PARAM_INT);
    $reponse->execute();
}

// modification d'un stagiaire par id
function update_stagiaire_by_id($id, $login_membre, $nom_membre)
{
    // echo " fonction update_stagiaire_by_id lancé ".$nom_membre;
    $connexion = connect_db();
    $sql = "UPDATE membres SET nom_membre = :nom_membre , login_membre = :login_membre WHERE membres.id_membre = :id ";
    // $sql = "UPDATE `membres` SET `nom_membre` = 'Pierre', `login_membre` = 'Paul' WHERE `membres`.`id_membre` = 12";
    $reponse = $connexion->prepare($sql);
    // echo $nom_membre ." ".$login_membre;
    $reponse->bindValue("nom_membre", $nom_membre, PDO::PARAM_STR);
    $reponse->bindValue("login_membre", $login_membre, PDO::PARAM_STR);
    $reponse->bindValue("id", intval($id), PDO::PARAM_INT);
    $reponse->execute();
}
//ajout d'un stagiaire
function insert_stagiaire($nom_membre, $login_membre)
{
    $connexion = connect_db();
    $sql = "INSERT INTO `membres` (`id_membre`, `nom_membre`, `login_membre`) VALUES ('', :nom_membre, :login_membre)";
    $reponse = $connexion->prepare($sql);
    $reponse->bindValue("nom_membre", $nom_membre, PDO::PARAM_STR);
    $reponse->bindValue("login_membre", $login_membre, PDO::PARAM_STR);
    $reponse->execute();
}
