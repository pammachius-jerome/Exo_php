<?php
// création des tableaux
$tableauNombre = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$tableMultiplication = array();

// Parcourir les lignes
for ($i = 0; $i < 10; $i++) {

    // Créer un tableau vide pour la ligne actuelle
    $tableMultiplication[$i] = array();

    // Parcourir les colonnes
    for ($j = 0; $j < 10; $j++) {

        // Calculer la valeur de la cellule
        $valeur = $tableauNombre[$i] *  $tableauNombre[$j];

        // Ajouter la valeur à la ligne actuelle
        $tableMultiplication[$i][$j] = $valeur;
    }
}

// création de la variable de stockage pour l'echo
$affichageTableau = "";

for ($i = 0; $i < 10; $i++) {

    // Parcourir les colonnes du tableau
    for ($j = 0; $j < 10; $j++) {

        // Afficher la valeur de la cellule
        $affichageTableau .= $tableMultiplication[$i][$j] . " | ";
    }

    // Saut de ligne
    $affichageTableau .= nl2br("\n");
};

// Afficher le contenu du tableau
echo $affichageTableau;
?>
