<?php
require_once 'modele.php';

function liste_stagiaires(){
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}

function supprimer_stagiaire($id){

    delete_stagiaire_by_id($id);
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
   
}
// fonction qui génère une vue de la modification d'un stagiaire
function vue_modifier_stagiaire($id){
    $_GET["id"] = $id;
    require "templates/modifier_stagiaire.php";

}

// fonction pour modifier un tuple
function modifier_stagiaire($id, $login_membre, $nom_membre){
    update_stagiaire_by_id($id, $login_membre, $nom_membre);
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}

// fonction qui génrère une vue de l'ajout d'un stagiaire
function vue_ajouter_stagiaire(){
    require "templates/ajouter_stagiaire.php";
}

// fonction pour ajouter un tuple
function ajouter_stagiaire($nom_membre, $login_membre){
    insert_stagiaire($nom_membre, $login_membre);
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}


// Affiche une erreur dans une vue erreur.php 
// qui centralise toutes les levées d'Exceptions 
function erreur($msgErreur) {
    require 'templates/erreur.php';
}
?>



