<!-- première question -->

<?php
$a = "variable1";
$b = "variable2";

echo "Etat initial <br>" . "contenue de a : " . $a . " et contenue de b : " . $b . "<br>";

// échange des valeurs

list($a, $b) = array($b, $a);

// vérification

echo "Etat finale <br>" . "contenue de a : " . $a . " et contenue de b : " . $b . "<br><br>";
?>

<!-- deuxième et troisième question-->

<?php
$pays = ["France", "Allemagne", "Italie"];
echo var_dump($pays) . "<br>";
?>

<!-- quatrième question -->

<?php
for ($i = 0; $i < count($pays); $i++) {
    echo $pays[$i] . " ";
};
echo "<br>";
?>

<!-- cinquième question -->

<?php
foreach ($pays as $x) {
    echo $x . " ";
};
echo "<br>";
?>

<!-- sixième question -->

<!-- avec do while on peux pas incrémenter l'index que l'on pointe -->

<!-- septième question -->
 <?php
$pays = ["France", "Allemagne", "Italie"];
$pays_avec_capitales = [];

// Fonction pour obtenir la capitale d'un pays
function get_capitale($pays) {
    switch ($pays) {
        case "France":
            return "Paris";
        case "Allemagne":
            return "Berlin";
        case "Italie":
            return "Rome";
        default:
            return "";
    }
}

// Parcourir le tableau des pays
foreach ($pays as $pays_nom) {
    $capitale = get_capitale($pays_nom);
    array_push($pays_avec_capitales, [
        $pays_nom => $capitale
        
    ]);
}
$pays = $pays_avec_capitales;
print_r($pays);
?>

<!-- neuvième question -->

<?php
echo "<br>" . count($pays) ."<br>";
?>
<!-- réponse: 3 -->

<!-- dixième question -->

<?php

function enumerer($t) {
    global $pays;
for($i =  0; $i < count($pays); $i++) {
    echo var_dump($t[$i]) . "<br>";
};
};
enumerer($pays);
?>

<!-- onzième question -->

<?php
function ajouter($t) {
    global $pays;
    array_push($pays, $t);
    print_r($pays);
};
$londre = ["Londre" => "Royaume unis"];
ajouter($londre);
?>

<!-- douzième question -->

<?php
echo "<br>";
var_dump($pays);
?>

<!-- l'indexation a pris en compte la nouvel entrer -->