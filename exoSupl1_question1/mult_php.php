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

// Afficher le contenu du tableau

for ($i = 0; $i < 10; $i++) {

    // Parcourir les colonnes du tableau
    for ($j = 0; $j < 10; $j++) {

        // Afficher la valeur de la cellule
        echo $tableMultiplication[$i][$j] . " | ";
    }

    // Saut de ligne
    echo nl2br("\n");
}
?>
